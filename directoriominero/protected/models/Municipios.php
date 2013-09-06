<?php

/**
 * This is the model class for table "municipios".
 *
 * The followings are the available columns in table 'municipios':
 * @property integer $id
 * @property integer $estado_id
 * @property string $clave
 * @property string $nombre
 * @property string $sigla
 *
 * The followings are the available model relations:
 * @property Directorio[] $directorios
 * @property Localidades[] $localidades
 * @property Estados $estado
 */
class Municipios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_id, clave, nombre, sigla', 'required'),
			array('estado_id', 'numerical', 'integerOnly'=>true),
			array('clave', 'length', 'max'=>3),
			array('nombre', 'length', 'max'=>50),
			array('sigla', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, estado_id, clave, nombre, sigla', 'safe', 'on'=>'search'),
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
			'directorios' => array(self::HAS_MANY, 'Directorio', 'municipio'),
			'localidades' => array(self::HAS_MANY, 'Localidades', 'municipio_id'),
			'estado' => array(self::BELONGS_TO, 'Estados', 'estado_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'estado_id' => 'Estado',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'sigla' => 'Sigla',
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
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('sigla',$this->sigla,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Municipios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
