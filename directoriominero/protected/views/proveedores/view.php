<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedores', 'url'=>array('create')),
	array('label'=>'Update Proveedores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>

<h1>View Proveedores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'compania',
		'giro',
		'estado',
		'municipio',
		'localidad',
		'direccion',
		'correo',
		'telefono',
		'sitio_web',
		'logotipo',
		'descripcion',
	),
)); ?>
