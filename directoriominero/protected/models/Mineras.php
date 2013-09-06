<?php

/**
 * This is the model class for table "mineras".
 *
 * The followings are the available columns in table 'mineras':
 * @property integer $id
 * @property string $compania
 * @property string $pais
 * @property integer $estado
 * @property integer $municipio
 * @property integer $localidad
 * @property string $direccion
 * @property string $codigo_postal
 * @property string $apellidos
 * @property string $nombre
 * @property string $puesto
 * @property string $correo_electronico
 * @property string $telefono_trabajo
 * @property string $sitio_web
 * @property string $logotipo
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Estados $estado0
 * @property Localidades $localidad0
 * @property Municipios $municipio0
 */
class Mineras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mineras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('compania', 'required'),
			array('estado, municipio, localidad', 'numerical', 'integerOnly'=>true),
			array('compania, pais, apellidos, nombre, puesto, correo_electronico, logotipo', 'length', 'max'=>128),
			array('codigo_postal', 'length', 'max'=>5),
			array('telefono_trabajo', 'length', 'max'=>15),
			array('sitio_web', 'length', 'max'=>45),
			array('direccion, descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, compania, pais, estado, municipio, localidad, direccion, codigo_postal, apellidos, nombre, puesto, correo_electronico, telefono_trabajo, sitio_web, logotipo, descripcion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'estado0' => array(self::BELONGS_TO, 'Estados', 'estado'),
			'localidad0' => array(self::BELONGS_TO, 'Localidades', 'localidad'),
			'municipio0' => array(self::BELONGS_TO, 'Municipios', 'municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'compania' => 'Compañia',
			'pais' => 'Pais',
			'estado' => 'Estado',
			'municipio' => 'Municipio',
			'localidad' => 'Localidad',
			'direccion' => 'Direccion',
			'codigo_postal' => 'Codigo Postal',
			'apellidos' => 'Apellidos',
			'nombre' => 'Nombre',
			'puesto' => 'Puesto',
			'correo_electronico' => 'Correo Electronico',
			'telefono_trabajo' => 'Telefono Trabajo',
			'sitio_web' => 'Sitio Web',
			'logotipo' => 'Logotipo',
			'descripcion' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('compania',$this->compania,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('municipio',$this->municipio);
		$criteria->compare('localidad',$this->localidad);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('codigo_postal',$this->codigo_postal,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('telefono_trabajo',$this->telefono_trabajo,true);
		$criteria->compare('sitio_web',$this->sitio_web,true);
		$criteria->compare('logotipo',$this->logotipo,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mineras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
