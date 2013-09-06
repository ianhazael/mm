<?php
/* @var $this GirosController */
/* @var $model Giros */

$this->breadcrumbs=array(
	'Giroses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Giros', 'url'=>array('index')),
	array('label'=>'Crear Giros', 'url'=>array('create')),
	array('label'=>'Update Giros', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Giros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Giros', 'url'=>array('admin')),
);
?>

<h1>View Giros #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_giro',
	),
)); ?>
