<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Mi Cuenta'=>array('index'),
	'Update',
);


?>

<h1>Update Usuario <?php echo $model->idusuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>