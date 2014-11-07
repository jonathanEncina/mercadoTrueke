<?php

/**
 * This is the model class for table "tipo_cuenta".
 *
 * The followings are the available columns in table 'tipo_cuenta':
 * @property integer $idtipo_cuenta
 * @property string $nombre
 * @property integer $tipo_usuario_id
 * @property integer $catidad_productos
 * @property string $precio
 * @property integer $analisis
 * @property string $descripcion
 * @property string $foto
 *
 * The followings are the available model relations:
 * @property TipoUsuario $tipoUsuario
 * @property Usuario[] $usuarios
 */
class TipoCuenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_cuenta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_usuario_id', 'required'),
			array('tipo_usuario_id, catidad_productos, analisis', 'numerical', 'integerOnly'=>true),
			array('nombre, precio, foto', 'length', 'max'=>45),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idtipo_cuenta, nombre, tipo_usuario_id, catidad_productos, precio, analisis, descripcion, foto', 'safe', 'on'=>'search'),
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
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'tipo_usuario_id'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'tipo_cuenta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtipo_cuenta' => 'Idtipo Cuenta',
			'nombre' => 'Nombre',
			'tipo_usuario_id' => 'Tipo Usuario',
			'catidad_productos' => 'Catidad Productos',
			'precio' => 'Precio',
			'analisis' => 'Analisis',
			'descripcion' => 'Descripcion',
			'foto' => 'Foto',
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

		$criteria->compare('idtipo_cuenta',$this->idtipo_cuenta);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo_usuario_id',$this->tipo_usuario_id);
		$criteria->compare('catidad_productos',$this->catidad_productos);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('analisis',$this->analisis);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoCuenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
