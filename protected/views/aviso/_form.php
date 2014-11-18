<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'aviso-form',
	'type' => 'horizontal',
	'htmlOptions' => array('class' => 'well'),
	//'enableClientValidation'=>true,
	'clientOptions'=>array(
		//'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php 
	
	// echo $form->errorSummary($model);
	
	if($model->tipo_aviso_id == 1){
	   echo 'venta';
	}else{
	   echo 'trueke';
	}
	?>

	<?php echo $form->dropDownListGroup(
			$model,
			'categoria_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(Categoria::model()->findAll(),'idcategoria', 'nombre' ,'grupoCategoria.nombre'),
					'htmlOptions' => array('prompt'=>'.::Seleccione Categoria::.'),
				)
			)
		);
	?>

	<?php echo $form->textFieldGroup($model,'nombre', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',))); ?>
	
	<div id="formCategoria">
	<?php if($model->categoria_id == 7){
	      $this->renderPartial('application.views.auto._form2', array('model2'=>$model2 ,'form'=>$form ));
	}
	
	
	
	?>
	</div>
	
	<?php 
            echo $form->ckEditorGroup(
			$model,
			'descripcion',
			array(
		   		'wrapperHtmlOptions' => array(
					/* 'class' => 'col-sm-5', */
				),
				'widgetOptions' => array(
					'editorOptions' => array(
						'fullpage' => 'js:true',
						/* 'width' => '640', */
						/* 'resize_maxWidth' => '640', */
						/* 'resize_minWidth' => '320'*/
					)
				)
			)
		);

		?>

	    <?php echo $form->textFieldGroup(
			  $model,
			  'precio',
			  array('prepend' => '$','wrapperHtmlOptions' => array('class' => 'col-sm-5',))
		); ?>
		
		<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
              'buttonType'=>'submit',
              'context'=>'primary',
              'label'=>'Crear',
        )); 
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>

$('#Aviso_categoria_id').change(function(){

 $.ajax({
        url  : "<?php echo Yii::app()->createURL('aviso/addCategoriaForm');?>",
        type : 'post',
        cache: false ,
	    data : {id: $(this).val() },
        success: function(data){
            $('#formCategoria').html(data.div);
        }
    });
    return false;
});

</script>