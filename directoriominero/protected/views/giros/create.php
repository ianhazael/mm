<?php
/* @var $this GirosController */
/* @var $model Giros */

$this->breadcrumbs=array(
	'Giroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Giros', 'url'=>array('index')),
	array('label'=>'Administrar Giros', 'url'=>array('admin')),
);
?>

<h1>Crear Giros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>