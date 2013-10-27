<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    Yii::t('app', 'Forum Bisnis'),
);
?>
<div class="content left">
    <h1><?php echo Yii::t('app', 'Forum Bisnis Aitis') ?></h1>
    <div class="forum-list">
        <a href="<?php echo $this->createUrl('') ?>">
            <div class="title" style="background: #d2232a;">INDONESIA ENERGY AND MINING BUSINESS OUTLOOK</div>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/forum_bisnis/forum-bisnis_10.jpg', 'forum-bisnis_10.jpg') ?>
        </a>
    </div>
    <div class="forum-list">
        <a href="<?php echo $this->createUrl('') ?>">
            <div class="title" style="background: #079744;">NDONESIA AGRI BUSINESS BUSINESS OUTLOOK</div>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/forum_bisnis/forum-bisnis_13.jpg', 'forum-bisnis_10.jpg') ?>
        </a>
    </div>
    <div class="forum-list">
        <a href="<?php echo $this->createUrl('') ?>">
            <div class="title" style="background: #00668d;">INDONESIA TOURISM BUSINESS OUTLOOK</div>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/forum_bisnis/forum-bisnis_15.jpg', 'forum-bisnis_10.jpg') ?>
        </a>
    </div>
    <div class="forum-list">
        <a href="<?php echo $this->createUrl('') ?>">
            <div class="title" style="background: #b56711;">INDONESIA INFRASTRUCTURE BUSINESS OUTLOOK</div>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/forum_bisnis/forum-bisnis_17.jpg', 'forum-bisnis_10.jpg') ?>
        </a>
    </div>
</div>

