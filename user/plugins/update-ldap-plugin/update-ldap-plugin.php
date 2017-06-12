<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class UpdateLDAPPluginPlugin
 * @package Grav\Plugin
 */
class UpdateLDAPPluginPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onPageContentRaw' => ['onFormProcessed', 0]
        ]);
    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event $e
     */

    public function onFormProcessed(Event $event)
    {
        $form = $event['form'];
        $action = $event['action'];
        $params = $event['params'];

        switch ($action) {
            case 'updateLdapPassword':
                $this->updateLdapPassword($form);
                break;
                //do what you want
        }
    }

    private function updateLdapPassword($form) {

       if($form['newpassword1'] == $form['newpassword2']) {

         $ldapserver = 'ipa2.opennms.com';

         $ldaprdn = $form['username'];
         $ldappass = $form['currentpassword'];

         $ldapconn = ldap_connect($ldapserver);

         if($ldapconn) {
           $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
           if($ldapbind) {
             $encoded_newPassword = "{SHA}" . base64_encode( pack( "H*", sha1( $form['newpassword1'] ) ) );
             $entry['userPassword'] = $encoded_newPassword;
             return ldap_modify($ldapconn, $userdn, $entry);
           }
           else {
             return false;
           }
        }
      }
      else {
        return false;
      }
        
    }
}
