<?php

/**
 * This is the model class for table "modelo_auto".
 *
 * The followings are the available columns in table 'modelo_auto':
 * @property integer $idmodelo_auto
 * @property string $nombre
 * @property integer $marca_auto_id
 *
 * The followings are the available model relations:
 * @property Auto[] $autos
 * @property MarcaAuto $marcaAuto
 */
class ModeloAuto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modelo_auto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marca_auto_id', 'required'),
			array('marca_auto_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmodelo_auto, nombre, marca_auto_id', 'safe', 'on'=>'search'),
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
			'autos' => array(self::HAS_MANY, 'Auto', 'modelo_auto_id'),
			'marcaAuto' => array(self::BELONGS_TO, 'MarcaAuto', 'marca_auto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmodelo_auto' => 'Idmodelo Auto',
			'nombre' => 'Nombre',
			'marca_auto_id' => 'Marca Auto',
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

		$criteria->compare('idmodelo_auto',$this->idmodelo_auto);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('marca_auto_id',$this->marca_auto_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModeloAuto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
