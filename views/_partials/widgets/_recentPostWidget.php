<?php

use yii\helpers\Html;
use common\models\BlogExt;

$recents = BlogExt::find()->all();
?>
<section class="widget recent-post-widget animatedParent">
    <h5 class="widget-title animated fadeInDownShort">Recent Blog Post</h5>
    <?php foreach ($recents as $recent): ?>
        <article class="post blog-post-widget clearfix animated fadeInUpShort">
            <figure class="blog-feature-img pull-right">
                <?php echo Html::img(['/images/blog/' . $recent->filename . '_66x66.jpg']) ?>
            </figure>
            <?php echo Html::tag('h6', Html::a($recent->title, ['/blog/view', 'slug' => $recent->slug]), ['class' => 'title']) ?>
            <time datetime="<?php echo date('Y-m-d H:i:s', $recent->created_at) ?>"  class="post-meta"><i class="fa fa-clock-o"></i> 
                <?php echo Yii::$app->formatter->asDate($recent->created_at) ?></time>
        </article>
    <?php endforeach; ?>
</section>