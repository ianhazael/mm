<?php
/* @var $this MinerasController */
/* @var $data Mineras */
$estado = Estados::model()->findByPk($data->estado)->nombre;
$municipio = Municipios::model()->findByPk($data->municipio)->nombre;
$localidad = Localidades::model()->findByPk($data->localidad)->nombre;
?>

<div class="view">
    <div class="logotipo">
        <?php if(!empty($data->logotipo)){ ?>
            <?php echo CHtml::link('<img src="'.$data->logotipo.'">', array('view', 'id' => $data->id)); ?>
        <?php } ?>
    </div>
    <div class="datos_view">
        <h2><?php echo CHtml::link(CHtml::encode($data->compania), array('view', 'id' => $data->id)); ?></h2>
        <br />

        <?php
        if (!empty($data->sitio_web)) {
            echo CHtml::link($data->sitio_web, 'http://' . $data->sitio_web);
        }
        ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
        <?php echo CHtml::encode($data->direccion); ?>; <?php echo CHtml::encode($localidad); ?>, <?php echo CHtml::encode($estado); ?>, <?php echo CHtml::encode($data->pais); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('codigo_postal')); ?>:</b>
        <?php echo CHtml::encode($data->codigo_postal); ?>
        <br />
    </div>
    <div style="clear: both"></div>
</div>