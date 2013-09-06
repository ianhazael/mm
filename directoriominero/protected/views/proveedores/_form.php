<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> campos requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'compa&ntilde;ia'); ?>
		<?php echo $form->textField($model,'compania',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'giro'); ?>
                <?php
                $list = CHtml::listData(Giros::model()->findAll(array('order' => 'nombre_giro')), 'id', 'nombre_giro');
                echo $form->dropDownList($model, 'giro', $list);
                ?>
		<?php echo $form->error($model,'giro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php echo $form->textField($model,'municipio'); ?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad'); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sitio_web'); ?>
		<?php echo $form->textField($model,'sitio_web',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sitio_web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'logotipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Insertar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->