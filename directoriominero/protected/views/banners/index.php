<?php
/* @var $this BannersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banners',
);

$this->menu=array(
	array('label'=>'Crear Banner', 'url'=>array('create')),
	array('label'=>'Administrar Banners', 'url'=>array('admin')),
);
?>

<h1>Banners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
