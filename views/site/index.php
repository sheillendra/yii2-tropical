<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;
use sheillendra\tropical\assets\TropicalAsset;

$asset = TropicalAsset::register($this);

$this->title = 'Home';
?>
<div class="main-slider-wrap">
    <?php echo $this->render('@app/views/_partials/_mainSlider', ['banners' => $banners]) ?>
    <?php echo $this->render('@app/views/_partials/_advSearch') ?>
</div>

<section class="home-services section-separator animatedParent">
    <div class="container">
        <header class="section-header header-with-nav clearfix">
            <h3 class="title pull-left animated growIn slower">awesome tour features</h3>
            <a class="pull-right animated growIn slower" href="#">SEE ALL</a>
        </header>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <?php
                echo $this->render('@app/views/_partials/_serviceVar1', [
                    'image' => $asset->baseUrl . '/images/features-img.jpg',
                    'imageAlt' => 'image',
                    'desc' => 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium. dolore semque laudant.',
                    'centerIcon' => '<i class="fa fa-hospital-o"></i>',
                    'title' => 'Handpicked Hotels',
                    'btnLabel' => 'book rooms now'
                ])
                ?>
            </div>
            <div class="col-sm-4 col-xs-6">
                <?php
                echo $this->render('@app/views/_partials/_serviceVar1', [
                    'image' => $asset->baseUrl . '/images/features-img-2.jpg',
                    'imageAlt' => 'image',
                    'desc' => 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium. dolore semque laudant.',
                    'centerIcon' => '<i class="fa fa-shield"></i>',
                    'title' => 'Secure booking',
                    'btnLabel' => 'book Ticket Now'
                ])
                ?>
            </div>
            <div class="col-sm-4 col-xs-6">
                <?php
                echo $this->render('@app/views/_partials/_serviceVar1', [
                    'image' => $asset->baseUrl . '/images/features-img-3.jpg',
                    'imageAlt' => 'image',
                    'desc' => 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium. dolore semque laudant.',
                    'centerIcon' => '<i class="fa fa-money"></i>',
                    'title' => 'Best price guarantee',
                    'btnLabel' => 'Choose your offer'
                ])
                ?>
            </div>
        </div>
    </div>
</section>

<section class="home-tour animatedParent">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <header class="section-header header-with-nav first clearfix">
                    <h3 class="title pull-left animated growIn slower">Explore the World by type</h3>
                    <a class="pull-right animated growIn slower" href="#">SEE ALL</a>
                </header>
                <div class="row">
                    <?php
                    if (!empty($categories)) :
                        $i = 0;
                        foreach ($categories as $category):
                            ?>
                            <div class="col-md-6">
                                <?php
                                echo $this->render('@app/views/_partials/_serviceVar2', [
                                    'category' => $category
                                ])
                                ?>
                            </div>
                            <?php
                            if ($i === 3) {
                                break;
                            }
                            $i++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <header class="section-header header-with-nav second clearfix">
                    <h3 class="title pull-left animated growIn slower">choose Your destination</h3>
                    <a class="pull-right animated growIn slower" href="#">SEE ALL</a>
                </header>
                <div class="tour-by-destination animated flipInX slower clearfix">
                    <>
                    <div class="item">
                        <article class="destination-item clearfix">
                            <div class="map text-center">
                                <h6 class="title">mykonos</h6>
                                <img src="<?php echo $asset->baseUrl ?>/images/map-img.png" alt="map"/>
                            </div>
                            <div class="destination-detail">
                                <img src="<?php echo $asset->baseUrl ?>/images/destination-img-1.jpg" alt="Destination"/>
                                <ul class="arrow-list">
                                    <li><a href="#">All Destinations</a></li>
                                    <li><a href="#">Manly</a></li>
                                    <li><a href="#">Parramatta</a></li>
                                    <li><a href="#">Penrith</a></li>
                                </ul>
                                <div class="destination-content clearfix">
                                    <h5 class="title">Tropical Island</h5>
                                    <small> Cosmopolitan Atmosphere</small>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="destination-item clearfix">
                            <div class="map text-center">
                                <h6 class="title">mykonos</h6>
                                <img src="<?php echo $asset->baseUrl ?>/images/map-img.png" alt="map"/>
                            </div>
                            <div class="destination-detail">
                                <img src="<?php echo $asset->baseUrl ?>/images/destination-img.jpg" alt="Destination"/>
                                <ul class="arrow-list">
                                    <li><a href="#">Parramatta</a></li>
                                    <li><a href="#">Manly</a></li>
                                    <li><a href="#">Penrith</a></li>
                                    <li><a href="#">All Destinations</a></li>
                                </ul>
                                <div class="destination-content clearfix">
                                    <h5 class="title">Africain island</h5>
                                    <small> Cosmopolitan Atmosphere</small>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="destination-item clearfix">
                            <div class="map text-center">
                                <h6 class="title">mykonos</h6>
                                <img src="<?php echo $asset->baseUrl ?>/images/map-img.png" alt="map"/>
                            </div>
                            <div class="destination-detail">
                                <img src="<?php echo $asset->baseUrl ?>/images/destination-img-3.jpg" alt="Destination"/>
                                <ul class="arrow-list">
                                    <li><a href="#">Manly</a></li>
                                    <li><a href="#">All Destinations</a></li>
                                    <li><a href="#">Penrith</a></li>
                                    <li><a href="#">Parramatta</a></li>
                                </ul>
                                <div class="destination-content clearfix">
                                    <h5 class="title">mykonos island</h5>
                                    <small> Cosmopolitan Atmosphere</small>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="destination-item clearfix">
                            <div class="map text-center">
                                <h6 class="title">mykonos</h6>
                                <img src="<?php echo $asset->baseUrl ?>/images/map-img.png" alt="map"/>
                            </div>
                            <div class="destination-detail">
                                <img src="<?php echo $asset->baseUrl ?>/images/destination-img-4.jpg" alt="Destination"/>
                                <ul class="arrow-list">
                                    <li><a href="#">Parramatta</a></li>
                                    <li><a href="#">All Destinations</a></li>
                                    <li><a href="#">Manly</a></li>
                                    <li><a href="#">Penrith</a></li>
                                </ul>
                                <div class="destination-content clearfix">
                                    <h5 class="title">mykonos island</h5>
                                    <small> Cosmopolitan Atmosphere</small>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <?php
                echo $this->render('@app/views/_partials/_bookingTabs', [
                    'animated' => true
                ])
                ?>
            </div>
        </div>
    </div>
</section>
<section class="home-special-offers animatedParent clearfix">
    <div class="container">
        <header class="section-header header-with-nav clearfix">
            <h3 class="title pull-left animated growIn">Latest Offers Tours</h3>
            <a class="pull-right animated growIn" href="#">see more offers</a>
        </header>
        <div class="tour-carousel animated flipInX clearfix">
            <?php
            if (!empty($latestOfferTours)) :
                foreach ($latestOfferTours as $tour) {
                    echo $this->render('@app/views/_partials/_tourPost', [
                        'image' => $asset->baseUrl . $tour['imageUrl'],
                        'imageAlt' => $tour['title'],
                        'cornerIcon' => '<i class="circle-icon"></i>',
                        'price' => $tour['price'],
                        'priceOff' => $tour['priceOff'],
                        'title' => $tour['title']
                    ]);
                }
            endif;
            ?>
        </div>
    </div>
</section>
