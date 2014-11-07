<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'usuario-form',
		'type' => 'horizontal',
	'htmlOptions' => array('class' => 'well'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Registros con <span class="required">*</span> son requeridos.</p>


	<?php echo $form->textFieldGroup($model,'nombre', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup($model,'apellidos', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup(
			$model,
			'email',
			array('prepend' => '@','wrapperHtmlOptions' => array('class' => 'col-sm-5',))
		); ?>

	<?php echo $form->textFieldGroup($model,'telefono_fijo', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup($model,'telefono_celular', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup($model,'user', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->passwordFieldGroup($model,'password', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>
	
    <?php echo $form->textFieldGroup($model,'region', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup($model,'ciudad', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>
	
	<?php echo $form->textFieldGroup($model,'foto', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->textFieldGroup($model,'pagina_web', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>

	<?php echo $form->dropDownListGroup(
			$model,
			'tipo_usuario_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(TipoUsuario::model()->findAll(),'idtipo_usuario', 'nombre'),
					'htmlOptions' => array(),
				)
			)
		);
	?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
            'buttonType'=>'submit',
            'context'=>'primary',
            'label'=>'Crear',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->