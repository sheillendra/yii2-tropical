<?php
$asset = \sheillendra\tropical\assets\TropicalAsset::register($this);
?>
<footer id="colophon" class="site-footer animatedParent" role="contentinfo">
    <div class="footer-wrapper clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <section class="widget widget_pages animated flipInX slower clearfix">
                        <h5 class="widget-title">Navigation</h5>
                        <ul>
                            <li class="page_item page-item-17"><a href="#">Blog</a></li>
                            <li class="page_item page-item-19"><a href="#">Contact</a></li>
                            <li class="page_item page-item-7 current_page_item"><a href="#">Home</a></li>
                            <li class="page_item page-item-32"><a href="#">Home Two</a></li>
                            <li class="page_item page-item-12"><a href="#">Shortcodes</a></li>
                            <li class="page_item page-item-11"><a href="#">Special Offers</a></li>
                            <li class="page_item page-item-10"><a href="#">Tours</a></li>
                            <li class="page_item page-item-9"><a href="#">Where we go</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="widget widget_mc4wp_widget animated flipInX slower clearfix">
                        <h5 class="widget-title">stay in the tourism</h5>
                        <div id="mc4wp-form-1" class="form mc4wp-form clearfix">
                            <p>Receive monthly cool ideas, inspiring stories,
                                great reviews and offers.</p>
                            <form method="post" class="clearfix">
                                <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required="">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <!-- / MailChimp for WP Plugin -->
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="widget widget_recent_entries animated flipInX slower clearfix">
                        <h5 class="widget-title">Recent Trips</h5>
                        <ul>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                            <li> <a href="#">Hello world!</a> </li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="widget tour-gallery animated flipInX slower clearfix">
                        <h5 class="widget-title">Tour Gallery</h5>
                        <ul>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a></li>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a> </li>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a> </li>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a> </li>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a> </li>
                            <li> <a href="#"><img src="<?php echo $asset->baseUrl ?>/images/tour-gallery-img.jpg" alt="Tour"/></a> </li>
                        </ul>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="widget credit-cards-widget animated flipInX slower clearfix">
                        <h5 class="widget-title">supported credit cards</h5>
                        <img src="<?php echo $asset->baseUrl ?>/images/pyment-imgs.png" alt="Clients"/>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="widget contact-widget animated flipInX slower clearfix">
                        <h5 class="widget-title">supported office</h5>
                        <address>
                            <strong> Address:</strong> <?php echo Yii::$app->params['address'] ?>
                        </address>
                        <p class="phone-number"><strong>Phone:</strong> <?php echo Yii::$app->params['infoPhone'] ?></p>
                        <p class="email"><strong>Email:</strong> <?php echo Yii::$app->params['infoEmail'] ?></p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="site-info text-center animated pulse">
        <p>Copyright © <?php echo date('Y') ?> - Wisata Indonesia</p>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->