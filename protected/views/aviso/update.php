<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	$model->idaviso=>array('view','id'=>$model->idaviso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aviso', 'url'=>array('index')),
	array('label'=>'Create Aviso', 'url'=>array('create')),
	array('label'=>'View Aviso', 'url'=>array('view', 'id'=>$model->idaviso)),
	array('label'=>'Manage Aviso', 'url'=>array('admin')),
);
?>

<h1>Update Aviso <?php echo $model->idaviso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>