<?php

namespace sheillendra\tropical\models;

class Tour extends \yii\base\BaseObject {

    public $id;
    public $title;
    public $image;
    public $price;
    public $priceOff;
    private static $tours = [
        '100' => [
            'id' => '100',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
            'destination' => 'asian',
            'category' => 'tropical-island'
        ],
        '101' => [
            'id' => '101',
            'title' => 'Summer Frenzy lake',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$499.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '102' => [
            'id' => '102',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '103' => [
            'id' => '103',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '104' => [
            'id' => '104',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '105' => [
            'id' => '105',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '106' => [
            'id' => '106',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '107' => [
            'id' => '107',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '108' => [
            'id' => '108',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '109' => [
            'id' => '109',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '110' => [
            'id' => '110',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '111' => [
            'id' => '111',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '112' => [
            'id' => '112',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '113' => [
            'id' => '113',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ],
        '114' => [
            'id' => '114',
            'title' => 'Thai island hopper east',
            'imageUrl' => '/images/tour-carousel-img-4.jpg',
            'price' => '$299.00',
            'priceOff' => '30% OFF',
            'days' => 3,
        ]
    ];

    public static function findAll() {
        return static::$tours;
    }

    public static function relatedTours() {
        return [static::$tours['100'], static::$tours['101'], static::$tours['102']];
    }

}
