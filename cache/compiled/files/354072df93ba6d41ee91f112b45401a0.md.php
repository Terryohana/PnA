<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/terry/Downloads/grav-skeleton-blog-site+admin-2.0 (1).0/user/pages/01.blog/blog.md',
    'modified' => 1675625729,
    'size' => 718,
    'data' => [
        'header' => [
            'title' => 'Home',
            'sitemap' => [
                'changefreq' => 'monthly'
            ],
            'body_classes' => 'header-dark header-transparent',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'hero_image' => 'mountain.jpg',
            'custom' => 'new thing',
            'blog_url' => '/blog',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 6,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'feed' => [
                'description' => 'Phone ',
                'limit' => 5,
                'title' => 'Phones'
            ],
            'pagination' => true,
            'metadata' => [
                'Phones' => ''
            ],
            'taxonomy' => [
                'category' => [
                    0 => 'blog',
                    1 => 'Phone',
                    2 => 'ebay'
                ]
            ],
            'dateformat' => 'd-m-Y H:i'
        ],
        'frontmatter' => 'title: Home
sitemap:
    changefreq: monthly
body_classes: \'header-dark header-transparent\'
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
hero_image: mountain.jpg
custom: \'new thing\'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items:
        - \'@self.children\'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
feed:
    description: \'Phone \'
    limit: 5
    title: Phones
pagination: true
metadata:
    Phones: \'\'
taxonomy:
    category:
        - blog
        - Phone
        - ebay
dateformat: \'d-m-Y H:i\'',
        'markdown' => '# My **Grav**tastic Blog
## the ramblings of a rambler
'
    ]
];
