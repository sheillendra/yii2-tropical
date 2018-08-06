<?php

namespace sheillendra\tropical\controllers;

use yii\web\Controller;
use sheillendra\tropical\models\Tour;

/**
 * Default controller for the `tropical` module
 */
class ToursController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionResorts() {
        return $this->render('resorts', [
            'relatedTours' => Tour::relatedTours()
        ]);
    }
}
