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

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main02.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="header">
            <div class="container">
                <div class="logo"><?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/logo/logo_03.jpg', '') ?></div>
                <div id="mainmenu">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => Yii::t('app','Beranda'), 'url' => array('/site/index')),
                            array('label' => Yii::t('app','Tentang Aitis'), 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => Yii::t('app','Event Report'), 'url' => array('/site/contact')),
                            array('label' => Yii::t('app','Registrasi'), 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => Yii::t('app','Kontak'), 'url' => array('/site/contact')),
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
                    <?php echo CHtml::textField(Yii::t('app','cari'), '', array('class' => 'search', 'placeholder' => Yii::t('app','Cari...'))) ?>
                </div>
            </div>
        </div><!-- header -->
        <div id="page">
            <div class="container">
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
                <?php echo $content ?>

                <div class="sidebar right">
                    <h2><?php echo Yii::t('app','Forum Bisnis') ?> <span class="yellow">>></span></h2>
                    <ul class="forum-bisnis">
                        <li><?php echo CHtml::link(Yii::t('app','Indonesia Energy and Mining')) ?></li>
                        <li><?php echo CHtml::link(Yii::t('app','Indonesia Agri')) ?></li>
                        <li><?php echo CHtml::link(Yii::t('app','Indonesia Tourism')) ?></li>
                        <li><?php echo CHtml::link(Yii::t('app','Indonesia Infrastructure')) ?></li>
                    </ul>
                    <h2><?php echo Yii::t('app','Pameran') ?> <span class="yellow">>></span></h2>
                    <h2>Registrasi Online <span class="yellow">>></span></h2>
                    <div class="form">
                        <?php
                        $model = new ContactForm;
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'contact-form',
                            'enableClientValidation' => true,
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                        ));
                        ?>

                        <div class="row">
                            <?php echo $form->textField($model, 'name'); ?>
                            <?php echo $form->error($model, 'name'); ?>
                        </div>

                        <div class="row">
                            <?php echo $form->textField($model, 'email'); ?>
                            <?php echo $form->error($model, 'email'); ?>
                        </div>

                        <div class="row">
                            <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
                            <?php echo $form->error($model, 'subject'); ?>
                        </div>

                        <div class="row">
                            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
                            <?php echo $form->error($model, 'body'); ?>
                        </div>

                        <?php if (CCaptcha::checkRequirements()): ?>
                            <div class="row">
                                <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                </div>
                                <div class="hint">Please enter the letters as they are shown in the image above.
                                    <br/>Letters are not case-sensitive.</div>
                                <?php echo $form->error($model, 'verifyCode'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="row buttons">
                            <?php echo CHtml::submitButton(Yii::t('app','Submit')); ?>
                        </div>

                        <?php
                        $this->endWidget();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="client">
            <div class="container" style="text-align: center;">
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_01.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_02.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_03.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_04.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_05.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_06.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_07.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_08.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_09.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_10.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_11.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_12.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_13.png', '')) ?>
                <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/client/client_14.png', '')) ?>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                <div class="left">
                    © 2013 Aitis. All Rights Reserv ed. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>VISITORS : 234</span>
                </div>
                <div class="right">
                    Designed by <span>LUMBU</span>
                </div>
            </div>
        </div><!-- footer -->
    </body>

</html>
