<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use sheillendra\tropical\assets\TropicalExtAsset;

TropicalExtAsset::register($this);
?>
<?php $this->render('@app/views/layouts/_init') ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link id="favicon" rel="shortcut icon" href="<?php echo $this->params['favicon'] ?>" type="image/png">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div id="page" class="hfeed site">
            <?php echo $this->render('@app/views/layouts/_main-header') ?>
            <div id="content" class="site-content">
                <?php echo $content ?>
            </div>
            <?php echo $this->render('@app/views/layouts/_main-footer') ?>

        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->endPage();
