<?php
/* @var $this BannersController */
/* @var $data Banners */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamano')); ?>:</b>
	<?php echo CHtml::encode($data->tamano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('liga_banner')); ?>:</b>
	<?php echo CHtml::encode($data->liga_banner); ?>
	<br />

	<b> <?php //echo CHtml::encode($data->getAttributeLabel('nombre_imagen')); ?></b>
    	<?php if(!empty($data->nombre_imagen)) { ?>
        	<?php 
				$sizes = preg_split('/x/',$data->tamano);
				if(count($sizes)>0)
					$width = $sizes[0];
				else
					$width = 200;
				$imghtml = CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$data->nombre_imagen,"nombre_imagen",array("width"=>$width)); 
				echo CHtml::link($imghtml, array('view', 'id'=>$data->id))
			?>  
        <?php } else { ?>    
		<?php echo CHtml::encode($data->nombre_imagen); ?>
        <?php } ?>    
	<br />
    


</div>