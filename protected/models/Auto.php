<?php

/**
 * This is the model class for table "auto".
 *
 * The followings are the available columns in table 'auto':
 * @property integer $idauto
 * @property string $ano
 * @property string $transmision
 * @property string $kilometros
 * @property integer $marca_auto_id
 * @property integer $modelo_auto_id
 * @property integer $version_auto_id
 * @property integer $combustible_id
 * @property integer $tipo_vehiculo_id
 *
 * The followings are the available model relations:
 * @property Combustible $combustible
 * @property MarcaAuto $marcaAuto
 * @property ModeloAuto $modeloAuto
 * @property TipoVehiculo $tipoVehiculo
 * @property VersionAuto $versionAuto
 * @property Aviso[] $avisos
 */
class Auto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('ano','marca_auto_id, modelo_auto_id, version_auto_id, combustible_id, tipo_vehiculo_id', 'required'),
			array('ano ,marca_auto_id, modelo_auto_id,', 'required'),
			array('marca_auto_id, modelo_auto_id, version_auto_id, combustible_id, tipo_vehiculo_id', 'numerical', 'integerOnly'=>true),
			array('ano, transmision, kilometros', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idauto, ano, transmision, kilometros, marca_auto_id, modelo_auto_id, version_auto_id, combustible_id, tipo_vehiculo_id', 'safe', 'on'=>'search'),
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
			'combustible' => array(self::BELONGS_TO, 'Combustible', 'combustible_id'),
			'marcaAuto' => array(self::BELONGS_TO, 'MarcaAuto', 'marca_auto_id'),
			'modeloAuto' => array(self::BELONGS_TO, 'ModeloAuto', 'modelo_auto_id'),
			'tipoVehiculo' => array(self::BELONGS_TO, 'TipoVehiculo', 'tipo_vehiculo_id'),
			'versionAuto' => array(self::BELONGS_TO, 'VersionAuto', 'version_auto_id'),
			'avisos' => array(self::HAS_MANY, 'Aviso', 'auto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idauto' => 'Idauto',
			'ano' => 'Año',
			'transmision' => 'Transmision',
			'kilometros' => 'Kilometros',
			'marca_auto_id' => 'Marca Auto',
			'modelo_auto_id' => 'Modelo Auto',
			'version_auto_id' => 'Version Auto',
			'combustible_id' => 'Combustible',
			'tipo_vehiculo_id' => 'Tipo Vehiculo',
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

		$criteria->compare('idauto',$this->idauto);
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('transmision',$this->transmision,true);
		$criteria->compare('kilometros',$this->kilometros,true);
		$criteria->compare('marca_auto_id',$this->marca_auto_id);
		$criteria->compare('modelo_auto_id',$this->modelo_auto_id);
		$criteria->compare('version_auto_id',$this->version_auto_id);
		$criteria->compare('combustible_id',$this->combustible_id);
		$criteria->compare('tipo_vehiculo_id',$this->tipo_vehiculo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Auto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
