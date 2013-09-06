<?php
/* @var $this MinerasController */
/* @var $model Mineras */

$this->breadcrumbs=array(
	'Minerases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Mineras', 'url'=>array('index')),
	array('label'=>'Crear Mineras', 'url'=>array('create')),
	array('label'=>'Update Mineras', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mineras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Mineras', 'url'=>array('admin')),
);
?>

<h1>View Mineras #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'compania',
		'pais',
		'estado',
		'municipio',
		'localidad',
		'direccion',
		'codigo_postal',
		'apellidos',
		'nombre',
		'puesto',
		'correo_electronico',
		'telefono_trabajo',
		'sitio_web',
		'logotipo',
		'descripcion',
	),
)); ?>
