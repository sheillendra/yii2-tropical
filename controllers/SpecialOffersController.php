<?php

namespace sheillendra\tropical\controllers;

use yii\web\Controller;
use sheillendra\tropical\models\Tour;
use sheillendra\tropical\models\Destination;

/**
 * Default controller for the `tropical` module
 */
class SpecialOffersController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        
        return $this->render('index', [
            'tourItems' => Tour::findAll(),
            'destinations' => Destination::findAll()
        ]);
    }

}
