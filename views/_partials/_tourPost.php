<?php
/* @var $cornerIcon String  */
/* @var $price String  */
/* @var $priceOff String  */
/* @var $image String */
/* @var $imageAlt String */
/* @var $title String */
?>
<article class="tour-post">
    <?php echo $cornerIcon ?>
    <header class="tour-post-header clearfix">
        <span class="tour-price pull-left"><?php echo $price ?></span>
        <?php if (!empty($priceOff)): ?>
            <span class="tour-price-off pull-right"><?php echo $priceOff ?></span>
        <?php endif; ?>
        <?php if (!empty($days)): ?>
            <span class="tour-days pull-right"><i class="fa fa-clock-o"></i>&nbsp; <?php echo $days ?> days</span>
        <?php endif; ?>
    </header>
    <div class="tour-contents clearfix">
        <figure class="tour-feature-img">
            <img src="<?php echo $image ?>" alt="<?php echo $imageAlt ?>"/>
        </figure>
        <h5 class="entry-title p-name"><?php echo $title ?></h5>
        <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
    </div>
</article>