<?php

namespace sheillendra\tropical\controllers;

use yii\web\Controller;
use sheillendra\tropical\models\Tour;
use sheillendra\tropical\models\Destination;
use sheillendra\tropical\models\Category;

/**
 * Default controller for the `tropical` module
 */
class WhereWeGoController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        
        return $this->render('index', [
            'tourItems' => Tour::findAll(),
            'destinations' => Destination::findAll(),
            'categories' => Category::findAll()
        ]);
    }

}
