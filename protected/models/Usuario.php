<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idusuario
 * @property string $nombre
 * @property string $apellidos
 * @property string $email
 * @property string $telefono_fijo
 * @property string $telefono_celular
 * @property string $user
 * @property string $password
 * @property string $ciudad
 * @property string $region
 * @property string $created
 * @property string $foto
 * @property string $pagina_web
 * @property integer $tipo_usuario_id
 * @property integer $tipo_cuenta_id
 *
 * The followings are the available model relations:
 * @property Aviso[] $avisos
 * @property Cliente[] $clientes
 * @property Cliente[] $clientes1
 * @property Empleado[] $empleados
 * @property Empleado[] $empleados1
 * @property Pregunta[] $preguntas
 * @property Respuesta[] $respuestas
 * @property TipoUsuario $tipoUsuario
 * @property TipoCuenta $tipoCuenta
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_usuario_id, tipo_cuenta_id , user ,password , email, nombre, apellidos', 'required' , 'message'=> '{attribute} requerido '),
			array('email','email','message'=>'email invalido'),
			array('tipo_usuario_id, tipo_cuenta_id', 'numerical', 'integerOnly'=>true),
			array('nombre, apellidos, email, telefono_fijo, telefono_celular, user, password, ciudad, region, foto, pagina_web', 'length', 'max'=>45),
			array('created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuario, nombre, apellidos, email, telefono_fijo, telefono_celular, user, password, ciudad, region, created, foto, pagina_web, tipo_usuario_id, tipo_cuenta_id', 'safe', 'on'=>'search'),
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
			'avisos' => array(self::HAS_MANY, 'Aviso', 'usuario_id'),
			'clientes' => array(self::HAS_MANY, 'Cliente', 'usuario_id_vendedor'),
			'clientes1' => array(self::HAS_MANY, 'Cliente', 'usuario_id_cliente'),
			'empleados' => array(self::HAS_MANY, 'Empleado', 'usuario_id_empresa'),
			'empleados1' => array(self::HAS_MANY, 'Empleado', 'usuario_id_empleado'),
			'preguntas' => array(self::HAS_MANY, 'Pregunta', 'usuario_id'),
			'respuestas' => array(self::HAS_MANY, 'Respuesta', 'usuario_id'),
			'tipoUsuario' => array(self::BELONGS_TO, 'TipoUsuario', 'tipo_usuario_id'),
			'tipoCuenta' => array(self::BELONGS_TO, 'TipoCuenta', 'tipo_cuenta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'nombre' => 'Nombre',
			'apellidos' => 'Apellidos',
			'email' => 'Email',
			'telefono_fijo' => 'Telefono Fijo',
			'telefono_celular' => 'Telefono Celular',
			'user' => 'User',
			'password' => 'Password',
			'ciudad' => 'Ciudad',
			'region' => 'Region',
			'created' => 'Created',
			'foto' => 'Foto',
			'pagina_web' => 'Pagina Web',
			'tipo_usuario_id' => 'Tipo Usuario',
			'tipo_cuenta_id' => 'Tipo Cuenta',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('pagina_web',$this->pagina_web,true);
		$criteria->compare('tipo_usuario_id',$this->tipo_usuario_id);
		$criteria->compare('tipo_cuenta_id',$this->tipo_cuenta_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
