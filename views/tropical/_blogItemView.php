<?php
/* @var $model \common\models\BlogExt */
/* @var $key integer */
/* @var $index integer */
/* @var $widget \yii\widgets\ListView */
?>
<article class="blog-post animatedParent clearfix">
    <figure class="blog-feature-img text-center animated fadeInLeftShort">
        <a href="single.html"><img src="<?php echo $asset->baseUrl ?>/images/blog-img-1.jpg" alt="Image"/></a>
    </figure>
    <div class="entry-contents animated fadeInRightShort clearfix">
        <h4 class="entry-title"><a href="single.html">the standard blog post title</a></h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accdftu santium doloremque laudantium, totam rem aperiam, eaque ipsa que ae ab illo inventore veritatis et quasi architecto beatae vitae dictaserc sunt explicabo. Nemo enim ipsam voluptatem...</p>
        <div class="post-meta clearfix">
            <span class="date pull-left"><i class="fa fa-clock-o"></i>&nbsp; 08 Nov 2014  &nbsp; | &nbsp; &nbsp;</span>
            <span class="author pull-left"> <i class="fa fa-user"></i>&nbsp; By Tropical</span>
            <span class="comment-count pull-right">10 Comments</span>
        </div>
    </div>
    <a class="read-more animated rotateIn slow" href="single.html"><i class="fa fa-angle-right"></i></a>
</article>