<?php
/* @var $this GirosController */
/* @var $model Giros */

$this->breadcrumbs=array(
	'Giroses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Giros', 'url'=>array('index')),
	array('label'=>'Crear Giros', 'url'=>array('create')),
	array('label'=>'View Giros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Giros', 'url'=>array('admin')),
);
?>

<h1>Update Giros <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>