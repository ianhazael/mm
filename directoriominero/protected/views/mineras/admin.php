<?php
/* @var $this MinerasController */
/* @var $model Mineras */

$this->breadcrumbs=array(
	'Minerases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Mineras', 'url'=>array('index')),
	array('label'=>'Crear Mineras', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mineras-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Mineras</h1>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mineras-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'compania',
		'pais',
		'estado',
		'municipio',
		'localidad',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
