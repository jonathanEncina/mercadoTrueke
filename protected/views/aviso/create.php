<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Aviso', 'url'=>array('index')),
	array('label'=>'Manage Aviso', 'url'=>array('admin')),
);*/
?>

<h1>Create Aviso</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'model2'=>$model2)); ?>