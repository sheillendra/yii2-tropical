<?php ?>
<section class="advance-tour-filter animated fadeInRightShort clearfix">
    <h5 class="widget-title">filter the result</h5>
    <div class="search widget clearfix">
        <form method="get"  class="search-form" action="#">
            <div>
                <input type="text" value="" name="s" class="search-text">
                <input type="submit" class="search-submit" value="">
                <i class="fa fa-search"></i>
            </div>
        </form>
    </div>
    <fieldset>
        <h5>destination</h5>
        <ul>
            <?php foreach ($destinations as $destination): ?>
                <li>
                    <input type="radio" id="<?php echo $destination['slug'] ?>" name="destination" />
                    <label for="<?php echo $destination['slug'] ?>"><span></span><?php echo $destination['name'] ?></label>
                </li>
            <?php endforeach; ?>
        </ul>
    </fieldset>
    <fieldset>
        <h5>Departure</h5>
        <div class="input-group input-append date date-picker" >
            <input type="text" class="form-control" name="date" value="Check in Date">
            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
        </div>
        <div class="input-group input-append date date-picker" >
            <input type="text" class="form-control" name="date" value="Check out Date">
            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
        </div>
    </fieldset>
    <fieldset>
        <h5>Category</h5>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li>
                    <input type="radio" id="<?php echo $category['slug'] ?>" name="category" />
                    <label for="<?php echo $category['slug'] ?>"><span></span><?php echo $category['name'] ?></label>
                </li>
            <?php endforeach; ?>
        </ul>
    </fieldset>
    <fieldset class="range-filter">
        <input type="text" id="amount" readonly>
        <div id="slider-range"></div>
    </fieldset>
    <input class="btn btn-red tour-filter-btn" name="search-tour" type="submit" value="Filter">
</section>