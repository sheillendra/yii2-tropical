<?php
/* @var $this \yii\web\View */

use sheillendra\tropical\assets\TropicalAsset;

$asset = TropicalAsset::register($this);
$this->title = 'Resorts';
$this->params['breadcrumbs'][] = 'Resort';

echo $this->render('../_partials/_banner', ['title' => 'Resort']);
?>

<section class="tour-single clearfix">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 col-sm-8">
                <header class="entry-header animatedParent clearfix">
                    <h3 class="pull-left tour-single-title animated growIn slower">Resorts</h3>
                    <span class="tour-price-single t-btn btn-red pull-right animated growIn slower">&#36;399.00</span>
                </header>
                <article class="tour-post-single clearfix">
                    <div class="tour-single-slider animatedParent clearfix">
                        <div class="slier tour-single-slider-for animated fadeInUpShort">
                            <div class="item"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-2.jpg" alt="Tour Single"/></div>
                            <div class="item"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-1.jpg" alt="Tour Single"/></div>
                            <div class="item"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-3.jpg" alt="Tour Single"/></div>
                        </div>
                        <div class="slider tour-single-slider-nav animated fadeInUpShort">
                            <div class="item slick-active"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-2.jpg" alt="Tour Single"/></div>
                            <div class="item"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-1.jpg" alt="Tour Single"/></div>
                            <div class="item"><img src="<?php echo $asset->baseUrl ?>/images/where-we-go-single-img-3.jpg" alt="Tour Single"/></div>
                        </div>
                    </div>
                    <div class="tour-single-contents animatedParent clearfix">
                        <div class="tour-post-meta pull-right animated fadeInUpShort clearfix">
                            <span><i class="fa fa-map-marker"></i><strong>Destination : &nbsp;</strong>Asia</span>
                            <span><i class="fa fa-clock-o"></i><strong>Duration : &nbsp;</strong>2 days</span>
                            <span><i class="fa fa-tags"></i><strong>Price : &nbsp;</strong>&#36;399</span>
                        </div>
                        <p> Maecenas faucibus mollis interdum. Nulla vitae elit libero, a petra augue. Integer posua ereta ante venenatis dapibus posu vre velit aliquet. Aenean eu leo quam. Pellentesque ornadsgxare semetrt mo  lacinia quam venenatis vestibulum. Nulla vitae elit liberero, avelitu pharetra aug ue. Etiamums porta sem malesuada magna mollis euismod.</p>
                        <p> Maecenas faucibus mollis interdum. Nulla vitae elit libero, a petra augue. Integer posua ereta ante venenatis dapibus posu vre velit aliquet. Aenean eu leo quam. Pellentesque ornadsgxare semetrt mo  lacinia quam venenatis vestibulum. Nulla vitae elit liberero, avelitu pharetra aug ue. Etiamums porta sem malesuada magna mollis euismod.</p>
                        <footer class="tour-contents-footer clearfix">
                            <a class="t-btn btn-red pull-right" href="#" data-toggle="modal" data-target="#booking-popup">Booking Now</a>
                            <a class="t-btn btn-black-border pull-right" href="#" data-toggle="modal" data-target="#ask-q-popup">Ask Question</a>
                            <div class="modal fade" id="booking-popup" tabindex="-1" role="dialog" aria-labelledby="booking-popup" aria-hidden="true">
                                <div class="modal-dialog">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                    <?php
                                    echo $this->render('@app/views/_partials/_bookingTabs', [])
                                    ?>
                                </div>
                            </div>
                            <div class="modal fade" id="ask-q-popup" tabindex="-1" role="dialog" aria-labelledby="ask-q-popup" aria-hidden="true">
                                <div class="modal-dialog">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                    <div class="booking-criteria">
                                        <h4>Ask Question <i class="fa fa-question-circle"></i></h4>
                                        <ul>
                                            <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                            <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                            <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                        </ul>
                                    </div>
                                    <div class="question-form clearfix">
                                        <form action="#">
                                            <div class="field-separator clearfix">
                                                <label for="q-name">Name</label>
                                                <input type="text" class="form-control" id="q-name" name="qname">
                                            </div>
                                            <div class="field-separator clearfix">
                                                <label for="q-email">Email address</label>
                                                <input type="text" class="form-control" name="qemail" id="q-email">
                                            </div>
                                            <div class="field-separator clearfix">
                                                <label for="q-question">Question</label>
                                                <textarea name="question" id="q-question" cols="30" rows="3"></textarea>
                                            </div>
                                            <div class="clearfix">
                                                <input type="submit" value="SUBMIT" class="t-btn btn-red">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <div class="tour-single-schedule animatedParent clearfix">
                        <ul class="nav nav-tabs animated fadeInUpShort" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#1" id="1-tab" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">DAY-1</a>
                                <span></span>
                            </li>
                            <li role="presentation">
                                <a href="#2" role="tab" id="2-tab" data-toggle="tab" aria-controls="2">DAY-2</a>
                                <span></span>
                            </li>
                            <li role="presentation">
                                <a href="#3" role="tab" id="3-tab" data-toggle="tab" aria-controls="3">DAY-3</a>
                                <span></span>
                            </li>
                        </ul>
                        <div class="tab-content animated fadeInDownShort">
                            <div role="tabpanel" class="tab-pane fade clearfix in active" id="1" aria-labelledby="1-tab">
                                <img class="tab-img alignleft" src="<?php echo $asset->baseUrl ?>/images/tab-img.jpg" alt="one">
                                <div class="contents">
                                    <h5 class="p-title">Tropical paradise one</h5>
                                    <p>
                                        Maecenas faucibus mollis interdum. Nulla vitaeryr
                                        elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade clearfix" id="2" aria-labelledby="2-tab">
                                <img class="tab-img alignleft" src="<?php echo $asset->baseUrl ?>/images/tab-img.jpg" alt="one">
                                <div class="contents">
                                    <h5 class="p-title">Tropical paradise two</h5>
                                    <p>
                                        Maecenas faucibus mollis interdum. Nulla vitaeryr
                                        elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade clearfix" id="3" aria-labelledby="3-tab">
                                <img class="tab-img alignleft" src="<?php echo $asset->baseUrl ?>/images/tab-img.jpg" alt="one">
                                <div class="contents">
                                    <h5 class="p-title">Tropical paradise three</h5>
                                    <p>
                                        Maecenas faucibus mollis interdum. Nulla vitaeryr
                                        elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-single-rates animatedParent clearfix">
                        <div class="accommodation animated fadeInUpShort clearfix">
                            <ul class="clearfix">
                                <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                <li><strong>type</strong><span class="circle-icon"></span></li>
                                <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                <li><strong>June-dec</strong></li>
                            </ul>
                            <ul class="clearfix">
                                <li>Thai Island hopper Resort</li>
                                <li>Single</li>
                                <li>&#36;550</li>
                                <li>&#36;450</li>
                            </ul>
                            <ul class="clearfix">
                                <li>Summer lake Family Hotel</li>
                                <li>Double</li>
                                <li>&#36;449</li>
                                <li>&#36;399</li>
                            </ul>
                        </div>
                        <div class="accommodation animated fadeInDownShort clearfix">
                            <ul class="clearfix">
                                <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                <li><strong>type</strong><span class="circle-icon"></span></li>
                                <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                <li><strong>June-dec</strong></li>
                            </ul>
                            <ul class="clearfix">
                                <li>Thai Island hopper Resort</li>
                                <li>Single</li>
                                <li>&#36;550</li>
                                <li>&#36;450</li>
                            </ul>
                            <ul class="clearfix">
                                <li>Summer lake Family Hotel</li>
                                <li>Double</li>
                                <li>&#36;449</li>
                                <li>&#36;399</li>
                            </ul>
                        </div>
                        <div class="accommodation animated fadeInUpShort clearfix">
                            <ul class="clearfix">
                                <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                <li><strong>type</strong><span class="circle-icon"></span></li>
                                <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                <li><strong>June-dec</strong></li>
                            </ul>
                            <ul class="clearfix">
                                <li>Thai Island hopper Resort</li>
                                <li>Single</li>
                                <li>&#36;550</li>
                                <li>&#36;450</li>
                            </ul>
                            <ul class="clearfix">
                                <li>Summer lake Family Hotel</li>
                                <li>Double</li>
                                <li>&#36;449</li>
                                <li>&#36;399</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="related-tours clearfix">
                    <header class="header-with-nav animatedParent clearfix">
                        <h3 class="title pull-left animated growIn slower">Related Tours</h3>
                        <a class="pull-right animated growIn slower" href="#">SEE All Tours</a>
                    </header>
                    <div class="row">
                        <?php
                        foreach ($relatedTours as $tour) {
                            echo '<div class="col-md-4 col-xs-6 animatedParent">';
                            echo $this->render('@app/views/_partials/_tourPost', [
                                'image' => $asset->baseUrl . $tour['imageUrl'],
                                'imageAlt' => $tour['title'],
                                'cornerIcon' => '',
                                'price' => $tour['price'],
                                'days' => $tour['days'],
                                'title' => $tour['title']
                            ]);
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <aside class="sidebar">
                    <?php
                    echo $this->render('@app/views/_partials/widgets/_searchWidget', [
                        'asset' => $asset
                    ])
                    ?>

                    <?php
                    echo $this->render('@app/views/_partials/widgets/_recentPostWidget', [
                        'asset' => $asset
                    ])
                    ?>

                    <?php
                    echo $this->render('@app/views/_partials/widgets/_textWidget', [
                        'title' => 'About Us',
                        'text' => 'voluptatem accusantium doloremque laudantium, totam rem aperiam eaqu ipsa quae ab illo inventore veritatis et quasi archit ecto beatae vitae dicta sunt explicabo.'
                    ])
                    ?>

                    <?php
                    echo $this->render('@app/views/_partials/widgets/_contactWidget')
                    ?>

                </aside>
            </div>
        </div>
    </div>
</section>