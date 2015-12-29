<?php

namespace Grav\Plugin;

use Grav\Common\Data\Blueprints;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class Simple_FormPlugin
 * @package Grav\Plugin
 */
class Simple_FormPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized'  => ['onPluginsInitialized', 0],
            'onBlueprintCreated'    => ['onBlueprintCreated', 0]
        ];
    }

    /**
     *
     */
    public function onPluginsInitialized()
    {
        if (true === $this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigInitialized'   => ['onTwigInitialized', 0]
        ]);
    }

    /**
     *
     */
    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFunction(
            new \Twig_SimpleFunction('simple_form', [$this, 'twigFunctionSimpleForm'], ['is_safe' => ['html']])
        );
    }

    /**
     *
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * @param Event $event
     */
    public function onBlueprintCreated(Event $event)
    {
        static $inEvent = false;

        /** @var \Grav\Common\Data\Blueprint $blueprint */
        $blueprint = $event['blueprint'];

        if (false === $inEvent and $blueprint->get('form.fields.tabs')) {
            $inEvent = true;
            $blueprints = new Blueprints(__DIR__ . '/blueprints/');
            $extends = $blueprints->get('simple_form');
            $blueprint->extend($extends, true);
            $inEvent = false;
        }
    }

    /**
     * @param array $params
     * @return string|void
     */
    public function twigFunctionSimpleForm($params = [])
    {
        // Collect page object.
        $page = $this->grav['page'];

        $config = $this->mergeConfig($page, false, $params);

        if (false === $this->validate($config)) {
            return '';
        }

        $template_file = sprintf('/plugins/simple_form/%s.html.twig', $config->get('template_file'));
        $template_vars = [
            'token'         => $config->get('token'),
            'redirect_to'   => $this->grav['uri']->rootUrl(true) . $config->get('redirect_to') // Add the domain for cross-site redirect.
        ];

        return $this->grav['twig']->processTemplate($template_file, $template_vars);
    }

    /**
     * @param object $config
     * @return bool
     */
    private function validate($config)
    {
        $required_keys = [
            'token',
            'template_file',
            'redirect_to'
        ];

        foreach ($required_keys as $key) {
            if (null === $config->get($key)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return array
     */
    public static function getTemplatesList()
    {
        $template_files = [];

        $paths = [
            Grav::instance()['twig']->twig_vars['theme_dir'] . '/templates',
            __DIR__ . '/templates'
        ];

        // Fire event for change into other plugins the finder paths. @development
        Grav::instance()->fireEvent('onSimpleFormTemplatesPath', new Event([ 'paths' => $paths ]));

        foreach ($paths as $path) {
            $template_dir = rtrim(realpath($path), '/') . '/plugins/simple_form';
            if (true === is_dir($template_dir)) {
                $iterator = new \GlobIterator($template_dir . '/*.html.twig', \FilesystemIterator::KEY_AS_FILENAME);

                foreach ($iterator as $file) {
                    /** @var $file \SplFileinfo */
                    $file_key = str_replace('.html.twig', '', $file->getFilename());

                    $template_trans = Grav::instance()['language']->translate('PLUGIN_SIMPLE_FORM.TEMPLATES.' . strtoupper($file_key));

                    // Display trans if used instead of this use a file key name.
                    $template_files[ $file_key ] = ($template_trans == 'PLUGIN_SIMPLE_FORM.TEMPLATES.' . strtoupper($file_key)) ? $file_key : $template_trans;
                }
            }
        }

        return $template_files;
    }

    /**
     * @return array
     */
    public static function getPagesList()
    {
        $pages = Grav::instance()['pages'];

        $pages_list = $pages->getList($pages->root());

        $list = [];

        foreach ($pages_list as $route => $title) {
            /** @var Page $page */
            $page = $pages->dispatch($route, false);

            if (true === $page->routable()) {
                $list[ $route ] = str_replace(' -', '-', str_replace('&nbsp; &nbsp; ', '- ', $title));
            }
        }

        return $list;
    }
}
