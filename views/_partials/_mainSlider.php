<div class="main-slider">
    <?php
    foreach ($banners as $banner):
        /* @var $banner \common\models\BannerExt */
        ?>
        <div class="item">
            <?php echo \yii\helpers\Html::img($banner->uploadHelper()->getUrl($banner::SIZE_TYPE[$banner->type][2]), ['alt' => 'one']) ?>
            <div class="slide-details clearfix">
                <h3 class="title">
                    <span><?php echo $banner->{'caption_1_' . Yii::$app->language} ?></span>
                    <?php 
                    $caption2 = $banner->{'caption_2_' . Yii::$app->language};
                    if($caption2):?>
                    <span><?php echo $caption2?></span>
                    <?php endif;?>
                </h3>
            </div>
        </div>
    <?php endforeach; ?>
</div>