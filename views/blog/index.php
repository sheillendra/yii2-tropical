<?php
/* @var $this \yii\web\View */
/* @var $blog \common\models\BlogExt */

use yii\widgets\ListView;

if (empty($tag)) {
    $this->title = 'Blog';
} else {
    $this->title = $tag;
    $this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['/blog']];
}
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('../_partials/_banner', ['title' => $this->title]); ?>

<section class="blog-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <?php
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_itemView',
//                    'layout' => "{items}\n{pager}",
//                    'pager' => [
//                        'options' => [
//                            'id' => 'pagination',
//                            'class' => 'pagination text-center animatedParent clearfix',
//                            'tag' => 'div',
//                        ],
//                        'linkContainerOptions' => [
//                            'tag' => false
//                        ],
//                        'linkOptions' => [
//                            'class' => 'animated rollIn'
//                        ]
//                    ]
                ])
                ?>
                <!--                <div id="pagination" class="text-center animatedParent clearfix">
                                    <a class="active animated rollIn" href="#">1</a>
                                    <a class="animated rollIn" href="#">2</a>
                                    <a class="animated rollIn" href="#"><i class="fa fa-angle-double-right"></i></a>
                                </div>-->
            </div>
            <div class="col-md-3 col-sm-4">
                <aside class="sidebar">
                    <?php echo $this->render('@app/views/_partials/widgets/_searchWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_recentPostWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_aboutWidget') ?>
                    <?php echo $this->render('@app/views/_partials/widgets/_contactWidget') ?>
                </aside>
            </div>
        </div>
    </div>
</section>
