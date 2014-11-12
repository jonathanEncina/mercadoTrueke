<?php
/* @var $this AutoController */
/* @var $model Auto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'auto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


		<?php echo $form->dropDownListGroup(
			$model,
			'ano',
			
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>array(2016=>2016 , 2015=>2015, 2014=>2014) ,
					'htmlOptions' => array('prompt'=>'.::Seleccione Categoria::.'),
				)
			)
		);?>
		
		<?php echo CHtml::dropDownList(
			"Auto[ano]",
			'',
			array(2016=>2016 , 2015=>2015, 2014=>2014),
			array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Categoria::.'
			)
		);?>


	<div class="row">
		<?php echo $form->labelEx($model,'transmision'); ?>
		<?php echo $form->textField($model,'transmision',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'transmision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilometros'); ?>
		<?php echo $form->textField($model,'kilometros',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kilometros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca_auto_id'); ?>
		<?php echo $form->textField($model,'marca_auto_id'); ?>
		<?php echo $form->error($model,'marca_auto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo_auto_id'); ?>
		<?php echo $form->textField($model,'modelo_auto_id'); ?>
		<?php echo $form->error($model,'modelo_auto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version_auto_id'); ?>
		<?php echo $form->textField($model,'version_auto_id'); ?>
		<?php echo $form->error($model,'version_auto_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'combustible_id'); ?>
		<?php echo $form->textField($model,'combustible_id'); ?>
		<?php echo $form->error($model,'combustible_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_vehiculo_id'); ?>
		<?php echo $form->textField($model,'tipo_vehiculo_id'); ?>
		<?php echo $form->error($model,'tipo_vehiculo_id'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->