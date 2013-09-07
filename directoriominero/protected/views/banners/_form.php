<?php
/* @var $this BannersController */
/* @var $model Banners */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banners-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype' => 'multipart/form-data')
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tamano'); ?>
        
        <?php $list = array('300x250'=>"300x250", '300x80'=>"300x80");
              echo $form->dropDownList($model, 'tamano', $list); ?>
		<?php /*echo $form->textField($model,'tamano',array('size'=>9,'maxlength'=>9)); */?>
		<?php echo $form->error($model,'tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php $list = array('1'=>"Destacado", '2'=>"Normal");
      	echo $form->dropDownList($model, 'tipo', $list); ?>
		<?php //echo $form->textField($model,'tipo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'liga_banner'); ?>
		<?php echo $form->textField($model,'liga_banner',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'liga_banner'); ?>
	</div>

	<!--div class="row">
		<?php //echo $form->labelEx($model,'nombre_imagen'); ?>
		<?php //echo $form->textField($model,'nombre_imagen',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'nombre_imagen'); ?>
	</div-->
    
	<?php /*Subir imagen*/ ?>
    <div class="row">
        <?php echo $form->labelEx($model,'nombre_imagen'); ?>
        <?php echo CHtml::activeFileField($model, 'nombre_imagen'); ?>  
        <?php // by this we can upload image ?>
        <?php echo $form->error($model,'nombre_imagen'); ?>
    </div>
    <?php if($model->isNewRecord!='1'){ ?>
    <div class="row">
         <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$model->nombre_imagen,"nombre_imagen",array("width"=>200)); ?>  
         <?php // Image shown here if page is update page ?>
    </div>
    <?php } ?>
    
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->