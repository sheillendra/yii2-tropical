<?php
/* @var $centerIcon String */
/* @var $image String */
/* @var $desc String */
/* @var $title String */
/* @var $btnLabel String */
?>
<article class="service-var-1 animated fadeInRightShort">
    <div class="wrapper text-center clearfix">
        <figure class="feature-img clearfix">
            <a class=" u-url u-photo" href="#"><img src="<?php echo $image ?>" alt="<?php echo $imageAlt ?>"/></a>
            <span class="overlay"></span>
            <p><?php echo $desc ?></p>
        </figure>
        <span class="icon-wrapper">
            <span class="icon">
                <?php echo $centerIcon ?>
            </span>
        </span>
    </div>
    <div class="contents clearfix">
        <h5 class="entry-title p-name"><?php echo $title ?></h5>
        <a href="#" class="t-btn btn-red"><?php echo $btnLabel ?></a>
    </div>
</article>