<?php

/**
 * This is the model class for table "proveedores".
 *
 * The followings are the available columns in table 'proveedores':
 * @property integer $id
 * @property string $compania
 * @property integer $giro
 * @property integer $estado
 * @property integer $municipio
 * @property integer $localidad
 * @property string $direccion
 * @property string $correo
 * @property string $telefono
 * @property string $sitio_web
 * @property string $logotipo
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Estados $estado0
 * @property Giros $giro0
 * @property Localidades $localidad0
 * @property Municipios $municipio0
 * @property Usuarios[] $usuarioses
 */
class Proveedores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedores';
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
			array('giro, estado, municipio, localidad', 'numerical', 'integerOnly'=>true),
			array('compania, correo, logotipo', 'length', 'max'=>128),
			array('telefono', 'length', 'max'=>15),
			array('sitio_web', 'length', 'max'=>45),
			array('direccion, descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, compania, giro, estado, municipio, localidad, direccion, correo, telefono, sitio_web, logotipo, descripcion', 'safe', 'on'=>'search'),
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
			'giro0' => array(self::BELONGS_TO, 'Giros', 'giro'),
			'localidad0' => array(self::BELONGS_TO, 'Localidades', 'localidad'),
			'municipio0' => array(self::BELONGS_TO, 'Municipios', 'municipio'),
			'usuarioses' => array(self::MANY_MANY, 'Usuarios', 'rel_usuario_compania(id_compania, id_usuario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'compania' => 'Compania',
			'giro' => 'Giro',
			'estado' => 'Estado',
			'municipio' => 'Municipio',
			'localidad' => 'Localidad',
			'direccion' => 'Direccion',
			'correo' => 'Correo',
			'telefono' => 'Telefono',
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
		$criteria->compare('giro',$this->giro);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('municipio',$this->municipio);
		$criteria->compare('localidad',$this->localidad);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('telefono',$this->telefono,true);
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
	 * @return Proveedores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
