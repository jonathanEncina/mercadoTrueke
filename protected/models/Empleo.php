<?php

/**
 * This is the model class for table "empleo".
 *
 * The followings are the available columns in table 'empleo':
 * @property integer $idempleo
 * @property string $administrativo
 * @property string $comercial
 * @property string $artes
 * @property string $informatica
 * @property string $salud
 * @property string $marketing
 * @property string $servicio_domestico
 * @property string $construccion
 * @property string $agricultura
 * @property string $ganaderia
 * @property string $telecomunicaciones
 * @property string $atencion_cliente
 *
 * The followings are the available model relations:
 * @property Aviso[] $avisos
 */
class Empleo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('administrativo, comercial, artes, informatica, salud, marketing, servicio_domestico, construccion, agricultura, ganaderia, telecomunicaciones, atencion_cliente', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idempleo, administrativo, comercial, artes, informatica, salud, marketing, servicio_domestico, construccion, agricultura, ganaderia, telecomunicaciones, atencion_cliente', 'safe', 'on'=>'search'),
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
			'avisos' => array(self::HAS_MANY, 'Aviso', 'empleo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idempleo' => 'Idempleo',
			'administrativo' => 'Administrativo',
			'comercial' => 'Comercial',
			'artes' => 'Artes',
			'informatica' => 'Informatica',
			'salud' => 'Salud',
			'marketing' => 'Marketing',
			'servicio_domestico' => 'Servicio Domestico',
			'construccion' => 'Construccion',
			'agricultura' => 'Agricultura',
			'ganaderia' => 'Ganaderia',
			'telecomunicaciones' => 'Telecomunicaciones',
			'atencion_cliente' => 'Atencion Cliente',
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

		$criteria->compare('idempleo',$this->idempleo);
		$criteria->compare('administrativo',$this->administrativo,true);
		$criteria->compare('comercial',$this->comercial,true);
		$criteria->compare('artes',$this->artes,true);
		$criteria->compare('informatica',$this->informatica,true);
		$criteria->compare('salud',$this->salud,true);
		$criteria->compare('marketing',$this->marketing,true);
		$criteria->compare('servicio_domestico',$this->servicio_domestico,true);
		$criteria->compare('construccion',$this->construccion,true);
		$criteria->compare('agricultura',$this->agricultura,true);
		$criteria->compare('ganaderia',$this->ganaderia,true);
		$criteria->compare('telecomunicaciones',$this->telecomunicaciones,true);
		$criteria->compare('atencion_cliente',$this->atencion_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
