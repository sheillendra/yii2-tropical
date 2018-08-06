<?php

use yii\helpers\Html;

/* @var $model \common\models\BlogExt */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['/blog']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('@app/views/_partials/_banner', ['title' => $this->title]) ?>

<section class="blog-single clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <article class="blog-post">
                    <figure class="feature-img">
                        <?php echo Html::img(['/images/blog/' . $model->filename . '_870x580.jpg'], ['alt' => $model->title]) ?>
                    </figure>
                    <div class="entry-contents animatedParent clearfix">
                        <h4 class="entry-title animated fadeInUpShort"><?php echo $model->title ?></h4>
                        <?php echo $model->content ?>
                        <div class="post-meta animated flipInX clearfix">
                            <span class="date pull-left"><i class="fa fa-clock-o"></i>&nbsp; <?php echo Yii::$app->formatter->asDate($model->created_at) ?>  &nbsp; | &nbsp; &nbsp;</span>
                            <span class="author pull-left"> <i class="fa fa-user"></i>&nbsp; By <?php echo $model->createdBy->username ?></span>
                            <span class="comment-count pull-right"><?php echo Yii::t('app', '{count} comments', ['count' => $model->comment_count]) ?></span>
                        </div>
                    </div>
                    <div class="post-meta-single animatedParent clearfix">
                        <span class="tags pull-left animated fadeInLeftShort">
                            TAGS: &nbsp;&nbsp;
                            <?php echo $model->extractTags()?>
                        </span>
                        <span class="shares pull-right animated fadeInRightShort"><i class="fa fa-share-alt"></i> &nbsp; <?php echo $model->share?></span>
                    </div>
                </article>
                <?php
                echo $this->render('@app/views/_partials/widgets/_comment', [
                    'model' => $model])
                ?>
                <?php echo $this->render('@app/views/_partials/widgets/_contactForm') ?>
            </div>
            <div class="col-md-3 col-sm-4">
                <aside class="sidebar">
                    <?php echo $this->render('@app/views/_partials/widgets/_searchWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_recentPostWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_aboutWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_contactWidget') ?>
                </aside>
            </div>
        </div>
    </div>