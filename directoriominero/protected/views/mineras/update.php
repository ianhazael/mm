<?php
/* @var $this MinerasController */
/* @var $model Mineras */

$this->breadcrumbs=array(
	'Minerases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Mineras', 'url'=>array('index')),
	array('label'=>'Crear Mineras', 'url'=>array('create')),
	array('label'=>'View Mineras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Mineras', 'url'=>array('admin')),
);
?>

<h1>Actualizar Mineras <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>