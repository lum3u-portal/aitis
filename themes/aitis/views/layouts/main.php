<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="header">
            <div class="container">
                <div id="mainmenu">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'Beranda', 'url' => array('/site/index')),
                            array('label' => 'Tentang Aitis', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Event Report', 'url' => array('/site/contact')),
                            array('label' => 'Registrasi', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Kontak', 'url' => array('/site/contact')),
                        ),
                    ));
                    ?>
                </div><!-- mainmenu -->
                <div class="right flag">
                    <div>
                        <?php
                        $this->widget('ext.components.language.XLangMenu', array(
                            'encodeLabel' => false,
                            'hideActive' => true,
                            'items' => array(
                                'id' => CHtml::image(Yii::app()->theme->baseUrl . '/images/flag_03.png', ''),
                                'en' => CHtml::image(Yii::app()->theme->baseUrl . '/images/flag_05.png', ''),
                            ),
                        ));
                        ?>
                    </div>
                </div>
                <div class="right">
                    <?php echo CHtml::textField('cari', '', array('class' => 'search', 'placeholder' => 'Cari...')) ?>
                </div>
            </div>
        </div><!-- header -->
        <div id="page">
            <?php echo $content ?>
        </div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div><!-- footer -->
    </body>
</html>
