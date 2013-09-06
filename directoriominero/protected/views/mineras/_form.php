<?php
/* @var $this MinerasController */
/* @var $model Mineras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mineras-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'compania'); ?>
		<?php echo $form->textField($model,'compania',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php //echo $form->textField($model,'pais',array('size'=>60,'maxlength'=>128)); ?>
                <select id="Mineras_pais" name="Mineras[pais]">
                    <option>Afganistán</option>
                    <option>Albania</option>
                    <option>Alemania</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antártida</option>
                    <option>Antigua y Barbuda</option>
                    <option>Antillas Holandesas</option>
                    <option>Arabia Saudí</option>
                    <option>Argelia</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaiyán</option>
                    <option>Bahamas</option>
                    <option>Bahrein</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Bélgica</option>
                    <option>Belice</option>
                    <option>Benin</option>
                    <option>Bermudas</option>
                    <option>Bielorrusia</option>
                    <option>Birmania</option>
                    <option>Bolivia</option>
                    <option>Bosnia y Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brasil</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Bután</option>
                    <option>Cabo Verde</option>
                    <option>Camboya</option>
                    <option>Camerún</option>
                    <option>Canadá</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Chipre</option>
                    <option>Ciudad del Vaticano (Santa Sede)</option>
                    <option>Colombia</option>
                    <option>Comores</option>
                    <option>Congo</option>
                    <option>Congo, República Democrática del</option>
                    <option>Corea</option>
                    <option>Corea del Norte</option>
                    <option>Costa de Marfíl</option>
                    <option>Costa Rica</option>
                    <option>Croacia (Hrvatska)</option>
                    <option>Cuba</option>
                    <option>Dinamarca</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Ecuador</option>
                    <option>Egipto</option>
                    <option>El Salvador</option>
                    <option>Emiratos Árabes Unidos</option>
                    <option>Eritrea</option>
                    <option>Eslovenia</option>
                    <option 	
                    <option>Estados Unidos</option>
                    <option>Estonia</option>
                    <option>Etiopía</option>
                    <option>Fiji</option>
                    <option>Filipinas</option>
                    <option>Finlandia</option>
                    <option>Francia</option>
                    <option>Gabón</option>
                    <option>Gambia</option>
                    <option>Georgia</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Granada</option>
                    <option>Grecia</option>
                    <option>Groenlandia</option>
                    <option>Guadalupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guayana</option>
                    <option>Guayana Francesa</option>
                    <option>Guinea</option>
                    <option>Guinea Ecuatorial</option>
                    <option>Guinea-Bissau</option>
                    <option>Haití</option>
                    <option>Honduras</option>
                    <option>Hungría</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Irak</option>
                    <option>Irán</option>
                    <option>Irlanda</option>
                    <option>Isla Bouvet</option>
                    <option>Isla de Christmas</option>
                    <option>Islandia</option>
                    <option>Islas Caimán</option>
                    <option>Islas Cook</option>
                    <option>Islas de Cocos o Keeling</option>
                    <option>Islas Faroe</option>
                    <option>Islas Heard y McDonald</option>
                    <option>Islas Malvinas</option>
                    <option>Islas Marianas del Norte</option>
                    <option>Islas Marshall</option>
                    <option>Islas menores de Estados Unidos</option>
                    <option>Islas Palau</option>
                    <option>Islas Salomón</option>
                    <option>Islas Svalbard y Jan Mayen</option>
                    <option>Islas Tokelau</option>
                    <option>Islas Turks y Caicos</option>
                    <option>Islas Vírgenes (EE.UU.)</option>
                    <option>Islas Vírgenes (Reino Unido)</option>
                    <option>Islas Wallis y Futuna</option>
                    <option>Israel</option>
                    <option>Italia</option>
                    <option>Jamaica</option>
                    <option>Japón</option>
                    <option>Jordania</option>
                    <option>Kazajistán</option>
                    <option>Kenia</option>
                    <option>Kirguizistán</option>
                    <option>Kiribati</option>
                    <option>Kuwait</option>
                    <option>Laos</option>
                    <option>Lesotho</option>
                    <option>Letonia</option>
                    <option>Líbano</option>
                    <option>Liberia</option>
                    <option>Libia</option>
                    <option>Liechtenstein</option>
                    <option>Lituania</option>
                    <option>Luxemburgo</option>
                    <option>Macedonia, Ex-República Yugoslava de</option>
                    <option>Madagascar</option>
                    <option>Malasia</option>
                    <option>Malawi</option>
                    <option>Maldivas</option>
                    <option>Malí</option>
                    <option>Malta</option>
                    <option>Marruecos</option>
                    <option>Martinica</option>
                    <option>Mauricio</option>
                    <option>Mauritania</option>
                    <option>Mayotte</option>
                    <option SELECTED="SELECTED">México</option>
                    <option>Micronesia</option>
                    <option>Moldavia</option>
                    <option>Mónaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Nicaragua</option>
                    <option>Níger</option>
                    <option>Nigeria</option>
                    <option>Niue</option>
                    <option>Norfolk</option>
                    <option>Noruega</option>
                    <option>Nueva Caledonia</option>
                    <option>Nueva Zelanda</option>
                    <option>Omán</option>
                    <option>Países Bajos</option>
                    <option>Panamá</option>
                    <option>Papúa Nueva Guinea</option>
                    <option>Paquistán</option>
                    <option>Paraguay</option>
                    <option>Perú</option>
                    <option>Pitcairn</option>
                    <option>Polinesia Francesa</option>
                    <option>Polonia</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reino Unido</option>
                    <option>República Centroafricana</option>
                    <option>República Checa</option>
                    <option>República de Sudáfrica</option>
                    <option>República Dominicana</option>
                    <option>República Eslovaca</option>
                    <option>Reunión</option>
                    <option>Ruanda</option>
                    <option>Rumania</option>
                    <option>Rusia</option>
                    <option>Sahara Occidental</option>
                    <option>Saint Kitts y Nevis</option>
                    <option>Samoa</option>
                    <option>Samoa Americana</option>
                    <option>San Marino</option>
                    <option>San Vicente y Granadinas</option>
                    <option>Santa Helena</option>
                    <option>Santa Lucía</option>
                    <option>Santo Tomé y Príncipe</option>
                    <option>Senegal</option>
                    <option>Seychelles</option>
                    <option>Sierra Leona</option>
                    <option>Singapur</option>
                    <option>Siria</option>
                    <option>Somalia</option>
                    <option>Sri Lanka</option>
                    <option>St. Pierre y Miquelon</option>
                    <option>Suazilandia</option>
                    <option>Sudán</option>
                    <option>Suecia</option>
                    <option>Suiza</option>
                    <option>Surinam</option>
                    <option>Tailandia</option>
                    <option>Taiwán</option>
                    <option>Tanzania</option>
                    <option>Tayikistán</option>
                    <option>Territorios franceses del Sur</option>
                    <option>Timor Oriental</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad y Tobago</option>
                    <option>Túnez</option>
                    <option>Turkmenistán</option>
                    <option>Turquía</option>
                    <option>Tuvalu</option>
                    <option>Ucrania</option>
                    <option>Uganda</option>
                    <option>Uruguay</option>
                    <option>Uzbekistán</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Yemen</option>
                    <option>Yugoslavia</option>
                    <option>Zambia</option>
                    <option>Zimbabue</option> 
                </select>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php //echo $form->textField($model,'estado'); ?>
                <?php
                    $list = CHtml::listData(Estados::model()->findAll(array('order' => 'nombre')), 'id', 'nombre');
                    echo $form->dropDownList($model, 'estado', $list);
                ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php //echo $form->textField($model,'municipio'); ?>
                <?php
                    $list = CHtml::listData(Municipios::model()->findAll(array('order' => 'nombre')), 'id', 'nombre');
                    echo $form->dropDownList($model, 'municipio', $list);
                ?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php //echo $form->textField($model,'localidad'); ?>
                <?php
                    $list = CHtml::listData(Municipios::model()->findAll(array('order' => 'nombre')), 'id', 'nombre');
                    echo $form->dropDownList($model, 'municipio', $list);
                ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_postal'); ?>
		<?php echo $form->textField($model,'codigo_postal',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'codigo_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puesto'); ?>
		<?php echo $form->textField($model,'puesto',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'puesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_electronico'); ?>
		<?php echo $form->textField($model,'correo_electronico',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'correo_electronico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_trabajo'); ?>
		<?php echo $form->textField($model,'telefono_trabajo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sitio_web'); ?>
		<?php echo $form->textField($model,'sitio_web',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sitio_web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'logotipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Insertar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->