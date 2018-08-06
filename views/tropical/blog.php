<?php
/* @var $this \yii\web\View */
/* @var $blog \common\models\BlogExt */

use yii\widgets\ListView;
use sheillendra\tropical\assets\TropicalAsset;

$asset = TropicalAsset::register($this);
?>
<?php
echo $this->render('_banner', [
    'title' => $this->title,
    'asset' => $asset
]);
?>
<section class="blog-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
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
                <div id="pagination" class="text-center animatedParent clearfix">
                    <a class="active animated rollIn" href="#">1</a>
                    <a class="animated rollIn" href="#">2</a>
                    <a class="animated rollIn" href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <aside class="sidebar">
                    <section class="search-widget animatedParent">
                        <h5 class="hidden animated fadeInDownShort">Title</h5>
                        <div class="search animated fadeInUpShort clearfix">
                            <form method="get" class="search-form" action="#">
                                <div>
                                    <input type="text" placeholder="Search Category" name="s" class="search-text">
                                    <input type="submit" class="search-submit" value="">
                                    <i class="fa fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </section>
                    <?php echo $this->render('@app/views/_partials/widgets/_recentPostWidget', ['asset' => $asset]) ?>
                    <?php
                    echo $this->render('@app/views/_partials/widgets/_textWidget', [
                        'title' => 'about us',
                        'text' => 'voluptatem accusantium doloremque laudantium, totam rem aperiam eaqu ipsa quae ab illo inventore veritatis et quasi archit ecto beatae vitae dicta sunt explicabo.'
                    ])
                    ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_contactWidget', ['asset' => $asset]) ?>
                </aside>
            </div>
        </div>
    </div>
</section>
