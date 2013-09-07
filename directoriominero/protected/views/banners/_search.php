<?php
/* @var $this BannersController */
/* @var $model Banners */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamano'); ?>
		<?php echo $form->textField($model,'tamano',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'liga_banner'); ?>
		<?php echo $form->textField($model,'liga_banner',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_imagen'); ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$model->nombre_imagen,"nombre_imagen",array("width"=>200)); ?>  
		<?php //echo $form->textField($model,'nombre_imagen',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->