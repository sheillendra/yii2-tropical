<?php
/* @var $asset \yii\web\AssetBundle */

use yii\widgets\Breadcrumbs;
?>
<div id="tropical-banner" class=" text-center clearfix">
    <img src="<?php echo $asset->baseUrl ?>/images/banner.jpg" alt="banner"/>
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