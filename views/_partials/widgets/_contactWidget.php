<section class="widget contact-widget clearfix animatedParent">
    <h5 class="widget-title animated fadeInDownShort">Contact us</h5>
    <address class="animated fadeInUpShort">
        <strong> Address:</strong> <?php echo Yii::$app->params['address'] ?>
    </address>
    <p class="phone-number animated fadeInUpShort"><strong>Phone:</strong><?php echo Yii::$app->params['infoPhone'] ?></p>
    <p class="email animated fadeInUpShort"><strong>Email:</strong> <?php echo Yii::$app->params['infoEmail'] ?></p>
    <ul class="social-nav text-center clearfix animated fadeInUpShort">
        <?php if (Yii::$app->params['facebook']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['facebook'] ?>">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php if (Yii::$app->params['instagram']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['instagram'] ?>">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php if (Yii::$app->params['youtube']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['youtube'] ?>">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php if (Yii::$app->params['twitter']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['twitter'] ?>">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php if (Yii::$app->params['google-plus']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['google-plus'] ?>">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php if (Yii::$app->params['linkedin']): ?>
            <li>
                <a href="<?php echo Yii::$app->params['linkedin'] ?>">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</section>