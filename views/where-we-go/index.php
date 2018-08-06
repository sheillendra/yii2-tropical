<?php

use sheillendra\tropical\assets\TropicalAsset;

$asset = TropicalAsset::register($this);

$this->title = 'Where We Go';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('../_partials/_banner', ['title' => $this->title]); ?>

<section class="tour-page clearfix">
    <div class="container">

        <div class="row">
            <div class="col-md-9 col-sm-8">
                <header class="section-header clearfix">
                    <div class="sorting pull-left">
                        <select class="form-control" >
                            <option>Sort Destination By</option>
                            <?php foreach ($destinations as $destination): ?>
                                <option value="<?php echo $destination['slug'] ?>"><?php echo $destination['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="layout-control pull-right clearfix">
                        <a data-layout="4" href="#"><i class="fa fa-th"></i></a>
                        <a data-layout="12" href="#"><i class="fa fa-th-list"></i></a>
                    </div>
                </header>
                <div class="row">
                    <?php
                    foreach ($tourItems as $tour) {
                        echo '<div class="tour-item col-md-4 col-sm-6 animatedParent">';
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
            <div class="col-md-3 col-sm-4 animatedParent">
                <?php
                echo $this->render('@app/views/_partials/widgets/_advancedTourFilter', [
                    'destinations' => $destinations,
                    'categories' => $categories
                ])
                ?>
            </div>
        </div>
    </div>
</section>
