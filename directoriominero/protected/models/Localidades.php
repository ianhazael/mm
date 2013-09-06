<?php

/**
 * This is the model class for table "localidades".
 *
 * The followings are the available columns in table 'localidades':
 * @property integer $id
 * @property integer $municipio_id
 * @property string $clave
 * @property string $nombre
 * @property string $latitud
 * @property string $longitud
 * @property string $altitud
 *
 * The followings are the available model relations:
 * @property Directorio[] $directorios
 * @property Municipios $municipio
 */
class Localidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'localidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('municipio_id, clave, nombre, latitud, longitud, altitud', 'required'),
			array('municipio_id', 'numerical', 'integerOnly'=>true),
			array('clave, altitud', 'length', 'max'=>4),
			array('nombre', 'length', 'max'=>110),
			array('latitud', 'length', 'max'=>6),
			array('longitud', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, municipio_id, clave, nombre, latitud, longitud, altitud', 'safe', 'on'=>'search'),
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
			'directorios' => array(self::HAS_MANY, 'Directorio', 'localidad'),
			'municipio' => array(self::BELONGS_TO, 'Municipios', 'municipio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'municipio_id' => 'Municipio',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'latitud' => 'Latitud',
			'longitud' => 'Longitud',
			'altitud' => 'Altitud',
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
		$criteria->compare('municipio_id',$this->municipio_id);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('latitud',$this->latitud,true);
		$criteria->compare('longitud',$this->longitud,true);
		$criteria->compare('altitud',$this->altitud,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Localidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
