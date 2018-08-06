<div class="main-slider">
    <?php
    foreach ($banners as $banner):
        /* @var $banner \common\models\BannerExt */
        ?>
        <div class="item">
            <?php echo \yii\helpers\Html::img('images/banner/' . $banner->id . '_' . '2100x796.jpg', ['alt' => 'one']) ?>
            <div class="slide-details clearfix">
                <h3 class="title"><?php echo $banner->caption ?></h3>
            </div>
        </div>
    <?php endforeach; ?>
</div>