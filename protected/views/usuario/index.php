<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Mi Cuenta',
);

$this->menu=array(
	//array('label' => 'List header','itemOptions' => array('class' => 'nav-header')),
	array('label'=>'Vender Producto', 'url'=>array('aviso/create','tipo'=>1)),
	array('label'=>'Editar Perfil', 'url'=>array('update', 'id'=>Yii::app()->user->id)),
);

?>