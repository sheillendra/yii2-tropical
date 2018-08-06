<?php

namespace sheillendra\tropical\models;

class Zone extends \yii\base\BaseObject {

    public $slug;
    public $name;
    public $image;
    public $imageMap;
    private static $destination = [
        'africa' => [
            'slug' => 'africa',
            'title' => 'Africa',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
        'australia' => [
            'slug' => 'australia',
            'name' => 'Australia',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
        'asia' => [
            'slug' => 'asia',
            'name' => 'Asia',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
        'europe' => [
            'slug' => 'europe',
            'name' => 'Europe',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
        'north_america' => [
            'slug' => 'north_america',
            'name' => 'North America',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
        'south_america' => [
            'slug' => 'south_america',
            'name' => 'South America',
            'image' => 'destination-img-1.jpg',
            'imageMap' => 'map-img.png',
        ],
    ];

    public static function findAll() {
        $asset = new \sheillendra\tropical\assets\TropicalAsset();
        $asset->baseUrl;
        $rows = static::$destination;
        foreach($rows as &$row){
            $row['image'] = $asset->baseUrl +'/images/'+ $row['image'];
            $row['imageMap'] = $asset->baseUrl +'/images/'+ $row['imageMap'];
        }
        return $rows;
    }

}
