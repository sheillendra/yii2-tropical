<?php

use sheillendra\tropical\assets\TropicalAsset;

$asset = TropicalAsset::register($this);

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('../_partials/_banner', ['title' => $this->title]); ?>


<section class="contact-template clearfix">
    <h6 class="hide">Title</h6>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <section class="contact-details animatedParent clearfix">
                    <h3 class="contact-title entry-title animated fadeInLeftShort">get in touch</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <address class="animated fadeInDownShort">
                                <h5 class="title"><i class="fa fa-map-marker"></i>address<span></span></h5>
                                <p>
                                    123 East West Corner Road, <br/>
                                    Melborne-606, Australia.
                                </p>
                            </address>
                            <div class="email-section animated fadeInUpShort">
                                <h5 class="title"><i class="fa fa-envelope"></i>Email address<span></span></h5>
                                <a class="email" href="#">info@example.com</a>
                            </div>
                            <div class="phone-section animated fadeInDownShort">
                                <h5 class="title"><i class="fa fa-mobile"></i>Phone Number <span></span></h5>
                                <span class="number">+61 0123 456 789</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="map-wrap animated fadeInRightShort clearfix">
                                <div id="location-map"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact-from animatedParent clearfix">
                    <h3 class="respond-title animated fadeInDownShort">send us your message</h3>
                    <form id="contact_form" action="contact_form_handler.php" method="post">
                        <fieldset class="animated fadeInLeftShort">
                            <p class="form-name">
                                <label for="name">name <span class="required">*</span></label>
                                <input id="name" name="name" type="text" value="" required="required">
                            </p>
                            <p class="form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input id="email" name="email" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" aria-required="true" required="required" aria-invalid="true">
                            </p>
                            <p class="form-url">
                                <label for="number">Phone Number <span class="required">*</span></label>
                                <input id="number" name="number" type="text" value="" required="required">
                            </p>
                        </fieldset>
                        <fieldset class="animated fadeInRightShort">
                            <p class="form-comment">
                                <label for="message">Comment</label>
                                <textarea id="message" name="message" cols="45" rows="5" ></textarea>
                            </p>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                            </p>
                            <img src="images/loader3.gif" id="contact-loader" alt="Loading...">
                        </fieldset>
                        <div id="error-container"></div>
                        <div id="response-container"></div>
                    </form>
                </section>
            </div>
            <div class="col-md-3 col-sm-4">
                <aside class="sidebar"><?php
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