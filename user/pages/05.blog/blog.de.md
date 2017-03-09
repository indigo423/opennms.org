---
title: Blog
blog_url: blog
menu: Blog
body_classes: header-image fullwidth blogstyling

sitemap:
    changefreq: weekly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Blog von der OpenNMS Community
    limit: 10

pagination: true
---

# Our Blog
