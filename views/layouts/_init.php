<?php

/* @var $this \yii\web\View */

use yii\helpers\Html;

$asset = new \sheillendra\tropical\assets\TropicalAsset();

$this->params['logo'] = Html::img($asset->baseUrl . '/images/logo.png');

$this->params['menu'] = [
    [
        'label' => 'Home',
        'url' => ['/tropical'],
        'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
        'items' => [
            [
                'label' => 'Home Two',
                'url' => ['/tropical/home-two'],
            ],
            [
                'label' => 'Home Three',
                'url' => ['/tropical/home-three'],
            ]
        ]
    ],
    [
        'label' => 'Where we go',
        'url' => ['/tropical/where-we-go'],
        'options' => ['class' => 'mega-menu-nav'],
        'submenuTemplate' => "\n<ul class=\"mega-menu clearfix\">\n{items}\n</ul>\n",
        'items' => [
            [
                'encode' => false,
                'label' => '<img class="pull-left menu-img" src="' . $asset->baseUrl . '/images/mega-menu-img.jpg" alt="Mega Menu Image"/>',
                'options' => ['class' => 'pull-left wrap clearfix'],
                'submenuTemplate' => "\n<ul class=\"mega-sub-menu\">\n{items}\n</ul>\n",
                'items' => [
                    ['label' => 'EUROPE'],
                    [
                        'label' => 'European Discovery',
                        'url' => ['/tropical/european-discovery']
                    ],
                    [
                        'label' => 'Beach Holidays',
                        'url' => ['/tropical/beach-holidays']
                    ],
                    [
                        'label' => 'European Highlights',
                        'url' => ['/tropical/european-highlights']
                    ],
                    ['label' => 'SEE MORE',
                        'url' => ['/tropical/all-tours-area']
                    ],
                ]
            ],
            [
                'encode' => false,
                'label' => '<img class="pull-left menu-img" src="' . $asset->baseUrl . '/images/mega-menu-img.jpg" alt="Mega Menu Image"/>',
                'options' => ['class' => 'pull-left wrap clearfix'],
                'submenuTemplate' => "\n<ul class=\"mega-sub-menu\">\n{items}\n</ul>\n",
                'items' => [
                    ['label' => 'ASIA'],
                    ['label' => 'Tropical Island',
                        'url' => ['/tropical/tropical-island']
                    ],
                    ['label' => 'Resorts',
                        'url' => ['/tropical/resorts']
                    ],
                    ['label' => 'Asian Adventure',
                        'url' => ['/tropical/asian-adventure']
                    ],
                    ['label' => 'SEE MORE',
                        'url' => ['/tropical/all-tours-area']
                    ],
                ]
            ],
            [
                'encode' => false,
                'label' => '<img class="pull-left menu-img" src="' . $asset->baseUrl . '/images/mega-menu-img.jpg" alt="Mega Menu Image"/>',
                'options' => ['class' => 'pull-left wrap clearfix'],
                'submenuTemplate' => "\n<ul class=\"mega-sub-menu\">\n{items}\n</ul>\n",
                'items' => [
                    ['label' => 'AFRICA'],
                    [
                        'label' => 'Western Africa',
                        'url' => ['/tropical/western-africa']
                    ],
                    [
                        'label' => 'South Africa',
                        'url' => ['/tropical/south-africa']
                    ],
                    [
                        'label' => 'Island Hopper East',
                        'url' => ['/tropical/island-hopper-east']
                    ],
                    [
                        'label' => 'SEE MORE',
                        'url' => ['/tropical/all-tours-area']
                    ],
                ]
            ],
        ]
    ],
    [
        'label' => 'Tours',
        'url' => '#',
        'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
        'items' => [
            [
                'label' => 'Beach holidays',
                'url' => ['/tropical/beach-holidays'],
            ],
            [
                'label' => 'City breaks',
                'url' => ['/tropical/city-breaks'],
            ],
            [
                'label' => 'Tropical Island',
                'url' => ['/tropical/tropical-island'],
            ],
            [
                'label' => 'Resorts',
                'url' => ['/tropical/resorts'],
            ],
            [
                'label' => 'Asian Adventure',
                'url' => ['/tropical/asian-adventure'],
            ]
        ]
    ],
    [
        'label' => 'Special Offers',
        'url' => ['/tropical/special-offers']
    ],
    [
        'label' => 'Pages',
        'url' => '#',
        'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
        'items' => [
            [
                'label' => 'Booking',
                'url' => ['/tropical/booking'],
            ],
            [
                'label' => 'Check Out',
                'url' => ['/tropical/check-out'],
            ],
            [
                'label' => 'Where we go Single',
                'url' => ['/tropical/where-we-go-single'],
            ],
            [
                'label' => 'shortcodes',
                'url' => ['/tropical/shortcodes'],
            ],
            [
                'label' => '404 page',
                'url' => ['/tropical/404'],
            ],
            [
                'label' => 'Second Level Menu',
                'url' => '#',
                'submenuTemplate' => "\n<ul class=\"inner-menu\">\n{items}\n</ul>\n",
                'items' => [
                    ['label' => 'Third Level Menu 1', 'url' => '#'],
                    ['label' => 'Third Level Menu 2', 'url' => '#'],
                    ['label' => 'Third Level Menu 3', 'url' => '#'],
                    ['label' => 'Third Level Menu 4', 'url' => '#'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Blog',
        'url' => ['/tropical/blog'],
        'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n",
        'items' => [
            [
                'label' => 'Single',
                'url' => ['/tropical/blog-single'],
            ],
        ]
    ],
    [
        'label' => 'Contact',
        'url' => ['/tropical/contact']
    ],
];
