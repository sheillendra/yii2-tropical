<?php

echo $this->render('@app/views/_partials/widgets/_textWidget', [
    'title' => 'about us',
    'text' => Yii::$app->params['about_' . Yii::$app->language]
]);
