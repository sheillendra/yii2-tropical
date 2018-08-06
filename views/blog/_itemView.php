<?php

use yii\helpers\Html;

/* @var $model \common\models\BlogExt */
/* @var $key integer */
/* @var $index integer */
/* @var $widget \yii\widgets\ListView */
?>
<article class="blog-post animatedParent clearfix">
    <figure class="blog-feature-img text-center animated fadeInLeftShort">
        <?php
        echo Html::a(Html::img(['/images/blog/' . $model->filename .
                    '_950x750.jpg'], ['alt' => $model->title]))
        ?>
    </figure>
    <div class="entry-contents animated fadeInRightShort clearfix">
        <?php
        echo Html::tag('h4', Html::a($model->title, ['/blog/view',
                    'slug' => $model->slug]), ['class' => 'entry-title'])
        ?>
        <p><?php echo $model->quote ?>...</p>
        <div class="post-meta clearfix">
            <span class="date pull-left"><i class="fa fa-clock-o"></i>&nbsp; 
                <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
                &nbsp; | &nbsp; &nbsp;
            </span>
            <span class="author pull-left"> <i class="fa fa-user"></i>&nbsp; By 
                <?php echo $model->createdBy->username ?></span>
            <span class="comment-count pull-right">
                <?php
                echo Yii::t('app', '{count} Comments', [
                    'count' => $model->comment_count])
                ?>
            </span>
        </div>
    </div>
    <?php
    echo Html::a('<i class="fa fa-angle-right"></i>', [
        '/blog/view', 'slug' => $model->slug], [
        'class' => 'read-more animated rotateIn slow'])
    ?>
</article>