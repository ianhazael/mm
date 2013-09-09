<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Banners';
?>
<?php if(!isset($id)) $id=0;?>

<?php $this->widget('BannerLateral', array('title'=>'', 'id'=>$id));?>

