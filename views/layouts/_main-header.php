<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;
use yii\widgets\Menu;
?>
<header id="masthead" class="site-header" role="banner">
    <div class="site-header-head clearfix">
        <div class="container header-user h-card">
            <div class="header-user-name pull-left">
                <?php if (Yii::$app->user->isGuest): ?>
                    <span class="p-name"> <?php echo Yii::$app->params['welcomeText'] ?> </span>
                <?php else: ?>
                    <span class="p-name"> <?php echo Yii::$app->user->identity->username ?> </span>
                    <i class="fa fa-user"></i>
                <?php endif; ?>
            </div>
            <?php // echo $this->render('@app/views/_partials/_headerTourPackage', ['asset' => $asset]) ?>
            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="header-user-email pull-right">
                    <i class="fa fa-sign-out"></i>
                    <?php echo Html::a('Logout', ['/site/logout'], ['class' => 'u-url']) ?>
                </div>
            <?php endif; ?>

            <div class="header-user-tel pull-right">
                <i class="fa fa-mobile-phone fa-lg"></i>
                <span class="tel"><?php echo Yii::$app->params['infoPhone'] ?></span>
            </div>

            <div class="header-user-email pull-right">
                <i class="fa fa-envelope-o"></i>
                <?php
                echo Html::a(Yii::$app->params['infoEmail'], 'mailto:' .
                        Yii::$app->params['infoEmail'], ['class' => 'u-url'])
                ?>
            </div>
        </div>
    </div>
    <div class="site-branding">
        <div class="container">
            <h1 class="site-title pull-left">
                <?php echo Html::a($this->params['logo'], ['/']) ?>
            </h1>
            <div class="header-search pull-right clearfix">
                <i class="fa fa-search"></i>
                <div class="search clearfix">
                    <form method="get" class="search-form" action="#">
                        <div>
                            <input type="text" placeholder="Search" name="s" class="search-text" >
                            <input type="submit" class="search-submit" value="" >
                            <i class="fa fa-search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <nav class="main-nav pull-right" role="navigation">
                <div class="menu-primary-menu-container">
                    <?php
                    echo Menu::widget([
                        'options' => [
                            'class' => 'main-menu',
                            'id' => 'menu-primary-menu'
                        ],
                        'items' => $this->params['menu']
                    ]);
                    ?>
                </div>
            </nav>
        </div><!-- .container -->
    </div><!-- .site-branding -->
</header><!-- .site-header -->