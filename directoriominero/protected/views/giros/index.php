<?php
/* @var $this GirosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Giroses',
);

$this->menu=array(
	array('label'=>'Crear Giros', 'url'=>array('create')),
	array('label'=>'Administrar Giros', 'url'=>array('admin')),
);
?>

<h1>Giros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
