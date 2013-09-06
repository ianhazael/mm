<?php
/* @var $this MinerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mineras',
);

$this->menu=array(
	array('label'=>'Crear Mineras', 'url'=>array('create')),
	array('label'=>'Administrar Mineras', 'url'=>array('admin')),
);
?>

<h1>Mineras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
