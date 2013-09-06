<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Proveedores', 'url'=>array('index')),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>

<h1>Crear Proveedores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>