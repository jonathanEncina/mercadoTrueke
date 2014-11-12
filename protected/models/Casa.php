<?php

/**
 * This is the model class for table "casa".
 *
 * The followings are the available columns in table 'casa':
 * @property integer $idcasa
 * @property string $comuna
 * @property string $dormitorios
 * @property string $superficie
 * @property string $superficie_construida
 * @property string $estacionamiento
 * @property string $gastos_comunes
 * @property string $banos
 * @property string $tipo_edificacion
 *
 * The followings are the available model relations:
 * @property Aviso[] $avisos
 */
class Casa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'casa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comuna, dormitorios, superficie, superficie_construida, estacionamiento, gastos_comunes, banos, tipo_edificacion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcasa, comuna, dormitorios, superficie, superficie_construida, estacionamiento, gastos_comunes, banos, tipo_edificacion', 'safe', 'on'=>'search'),
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
			'avisos' => array(self::HAS_MANY, 'Aviso', 'casa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcasa' => 'Idcasa',
			'comuna' => 'Comuna',
			'dormitorios' => 'Dormitorios',
			'superficie' => 'Superficie',
			'superficie_construida' => 'Superficie Construida',
			'estacionamiento' => 'Estacionamiento',
			'gastos_comunes' => 'Gastos Comunes',
			'banos' => 'Banos',
			'tipo_edificacion' => 'Tipo Edificacion',
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

		$criteria->compare('idcasa',$this->idcasa);
		$criteria->compare('comuna',$this->comuna,true);
		$criteria->compare('dormitorios',$this->dormitorios,true);
		$criteria->compare('superficie',$this->superficie,true);
		$criteria->compare('superficie_construida',$this->superficie_construida,true);
		$criteria->compare('estacionamiento',$this->estacionamiento,true);
		$criteria->compare('gastos_comunes',$this->gastos_comunes,true);
		$criteria->compare('banos',$this->banos,true);
		$criteria->compare('tipo_edificacion',$this->tipo_edificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Casa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
