<?php

use yii\helpers\Html;
?>
<div class="page-404 text-center animatedParent clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 animated fadeInLeftShort">
                <h1 class="error-code">4<span>0</span>4!</h1>
            </div>
            <div class="col-sm-6 animated fadeInRightShort">
                <section class="error-statement">
                    <h1>page not found</h1>
                    <p>The Page You Requested Could Not be Found. Try Refining Your Search,
                        or Use the Navigation Above to Locate The Post.</p>
                    <?php echo Html::a('return to home', ['/'], ['class' => 't-btn btn-red']) ?>
                </section>
            </div>
        </div>
    </div>
</div>