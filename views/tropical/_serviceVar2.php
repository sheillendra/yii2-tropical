<?php
/* @var $category Array */

use yii\helpers\Html;
?>
<article class="service-var-2 animated flipInY clearfix">
    <div class="icon-wrap">
        <i class="dashicons dashicons-universal-access"></i>
    </div>
    <div class="contents-wrap">
        <h5 class="entry-title p-name"><?php echo $category['name'] ?></h5>
        <small><?php echo $category['totalTours'] ?> tours available </small>
    </div>
    <?php
    echo Html::a('<i class="fa fa-angle-right"></i>'
            , ['/category', 'slug' => $category['slug']]
            , ['class' => 'more'])
    ?>
</article>