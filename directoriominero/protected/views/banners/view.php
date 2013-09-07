<?php
/* @var $this BannersController */
/* @var $model Banners */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listado de Banners', 'url'=>array('index')),
	array('label'=>'Crear Banner', 'url'=>array('create')),
	array('label'=>'Actualizar Banner', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Banner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Banners', 'url'=>array('admin')),
);
?>

<h1>View Banners #<?php echo $model->id; ?></h1>
<?php 
	$sizes = preg_split('/x/',$model->tamano);
	$width = $sizes[0];
	$heigth = $sizes[1];
	switch($model->tipo){
		case 1:
			$tipo = "Destacado";
			break;
		case 2:
			$tipo = "Normal";
			break;
		default:
			$tipo = "Normal";
			break;
		}
		
		$imghtml = CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$model->nombre_imagen,"nombre_imagen",array("width"=>$width, "height"=>$heigth ));			
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tamano',
		array(
			'label'=>$model->getAttributeLabel('tipo'),
			'value'=>$tipo
		),
		/*'tipo',*/
		'liga_banner',
		'nombre_imagen',
		array( 
			'label'=>'Banner',
			'type'=>'raw',
			'value'=>html_entity_decode(CHtml::link($imghtml, array('view', 'id'=>$model->id))),
		)
	),
)); ?>
