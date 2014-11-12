<?php

/**
 * This is the model class for table "aviso".
 *
 * The followings are the available columns in table 'aviso':
 * @property integer $idaviso
 * @property string $nombre
 * @property string $descripcion
 * @property string $estado
 * @property string $precio
 * @property integer $usuario_id
 * @property integer $categoria_id
 * @property string $created
 * @property string $updated
 * @property integer $empleo_id
 * @property integer $casa_id
 * @property integer $auto_id
 * @property integer $tipo_aviso_id
 *
 * The followings are the available model relations:
 * @property Categoria $categoria
 * @property Empleo $empleo
 * @property TipoAviso $tipoAviso
 * @property Auto $auto
 * @property Casa $casa
 * @property Usuario $usuario
 * @property ImagenAviso[] $imagenAvisos
 * @property Pregunta[] $preguntas
 */
class Aviso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aviso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, precio, categoria_id, tipo_aviso_id', 'required' ,'message'=>'{attribute} requerido'),
			array('usuario_id, categoria_id, empleo_id, casa_id, auto_id, tipo_aviso_id', 'numerical', 'integerOnly'=>true),
			array('nombre, estado, precio', 'length', 'max'=>45),
			array('descripcion, created, updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idaviso, nombre, descripcion, estado, precio, usuario_id, categoria_id, created, updated, empleo_id, casa_id, auto_id, tipo_aviso_id', 'safe', 'on'=>'search'),
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
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_id'),
			'empleo' => array(self::BELONGS_TO, 'Empleo', 'empleo_id'),
			'tipoAviso' => array(self::BELONGS_TO, 'TipoAviso', 'tipo_aviso_id'),
			'auto' => array(self::BELONGS_TO, 'Auto', 'auto_id'),
			'casa' => array(self::BELONGS_TO, 'Casa', 'casa_id'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
			'imagenAvisos' => array(self::HAS_MANY, 'ImagenAviso', 'aviso_id'),
			'preguntas' => array(self::HAS_MANY, 'Pregunta', 'aviso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idaviso' => 'Idaviso',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
			'precio' => 'Precio',
			'usuario_id' => 'Usuario',
			'categoria_id' => 'Categoria',
			'created' => 'Created',
			'updated' => 'Updated',
			'empleo_id' => 'Empleo',
			'casa_id' => 'Casa',
			'auto_id' => 'Auto',
			'tipo_aviso_id' => 'Tipo Aviso',
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

		$criteria->compare('idaviso',$this->idaviso);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('usuario_id',$this->usuario_id);
		$criteria->compare('categoria_id',$this->categoria_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('empleo_id',$this->empleo_id);
		$criteria->compare('casa_id',$this->casa_id);
		$criteria->compare('auto_id',$this->auto_id);
		$criteria->compare('tipo_aviso_id',$this->tipo_aviso_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aviso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
