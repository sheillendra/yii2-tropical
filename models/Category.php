<?php

namespace sheillendra\tropical\models;

class Category extends \yii\base\BaseObject {

    public $slug;
    public $name;
    public $destination;
    public $totalTours;
    
    private static $categories = [
        'beach-holidays' => [
            'slug' => 'beach-holidays',
            'name' => 'Beach Holidays',
            'destination' => [],
            'totalTours' => '4'
        ],
        'city-breaks' => [
            'slug' => 'city-breaks',
            'name' => 'City Breaks',
            'destination' => [],
            'totalTours' => '3'
        ],
        'adventure-tour' => [
            'slug' => 'adventure-tour',
            'name' => 'Adventure Tour',
            'destination' => [],
            'totalTours' => '4'
        ],
        'resorts' => [
            'slug' => 'resorts',
            'name' => 'Resorts',
            'destination' => [],
            'totalTours' => '7'
        ],
        'tropical-island' => [
            'slug' => 'tropical-island',
            'name' => 'Tropical Island',
            'destination' => ['asian'],
            'totalTours' => '4'
        ],
        'boat-house' => [
            'slug' => 'boat-house',
            'name' => 'Boat House',
            'destination' => [],
            'totalTours' => '5'
        ],
        'Asian Adventure' => [
            'slug' => 'asian-adventure',
            'name' => 'Asian Adventure',
            'destination' => ['asian'],
            'totalTours' => '6'
        ],
    ];

    public static function findAll() {
        return static::$categories;
    }

}
