<?php
/* @var $this MinerasController */
/* @var $model Mineras */

$this->breadcrumbs=array(
	'Minerases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Mineras', 'url'=>array('index')),
	array('label'=>'Administrar Mineras', 'url'=>array('admin')),
);
?>

<h1>Crear Mineras</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>