<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proveedores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Proveedores</h1>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'compania',
		'giro',
		'estado',
		'municipio',
		'localidad',
		/*
		'direccion',
		'correo',
		'telefono',
		'sitio_web',
		'logotipo',
		'descripcion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
