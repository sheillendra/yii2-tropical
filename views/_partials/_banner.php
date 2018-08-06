<?php
/* @var $asset \yii\web\AssetBundle */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use sheillendra\tropical\assets\TropicalAsset;
use common\models\BannerExt;

$asset = TropicalAsset::register($this);

$banner = BannerExt::find()->random();
?>
<div id="tropical-banner" class=" text-center clearfix">
    <?php echo Html::img(['/images/banner/' . $banner->id . '_2100x325.jpg'], ['alt' => $banner->caption]) ?>
    <div class="container banner-contents clearfix">
        <h2 class="template-title p-name"><strong><?php echo $title ?></strong></h2>
    </div>
    <div class="breadcrumb-wrapper clearfix">
        <div class="container">
            <?php
            echo Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
        </div>
    </div>
    <span class="overlay"></span>
</div>