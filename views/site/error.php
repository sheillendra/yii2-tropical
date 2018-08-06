<?php

/* @var $this \yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;

try {
    $this->params['breadcrumbs'][] = $exception->statusCode;
    echo $this->render('../_partials/_banner', ['title' => $exception->statusCode]);
    echo $this->render('error-' . $exception->statusCode);
} catch (\Exception $ex) {
    echo $this->render('@sheillendra/tropical/views/site/error-other', [$exception->statusCode]);
}