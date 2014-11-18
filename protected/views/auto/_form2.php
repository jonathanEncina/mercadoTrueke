<?php 

        echo $form->dropDownListGroup(
			$model2,
			'marca_auto_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => CHtml::listData(MarcaAuto::model()->findAll(),'idmarca_auto', 'nombre'),
					'htmlOptions' => array('prompt'=>'.:: Seleccione Marca ::.'),
				)
			)
		);

        echo $form->dropDownListGroup(
			$model2,
			'modelo_auto_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
					
			    ),
				'widgetOptions' => array(
					'data' => CHtml::listData(ModeloAuto::model()->findAllByAttributes(array('marca_auto_id'=>$model2->marca_auto_id)),'idmodelo_auto', 'nombre'),
					'htmlOptions' => array('prompt'=>'.:: Seleccione Modelo ::.'),
				)
			)
		);
		
		echo $form->dropDownListGroup(
			$model2,
			'version_auto_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  array(2016=>2016 , 2015=>2015, 2014=>2014),
					'htmlOptions' => array('prompt'=>'.:: Seleccione Version ::.'),
				)
			)
		);
		
		echo $form->dropDownListGroup(
			$model2,
			'combustible_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  CHtml::listData(Combustible::model()->findAll(),'idcombustible', 'nombre'),
					'htmlOptions' => array('prompt'=>'.:: Combustible ::.'),
				)
			)
		);
		
		echo $form->dropDownListGroup(
			$model2,
			'tipo_vehiculo_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  CHtml::listData(TipoVehiculo::model()->findAll(),'idtipo_vehiculo', 'nombre'),
					'htmlOptions' => array('prompt'=>'.:: Seleccione Tipo Vehiculo ::.'),
				)
			)
		);

        echo $form->dropDownListGroup(
			$model2,
			'ano',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  array(2016=>2016 , 2015=>2015, 2014=>2014),
					'htmlOptions' => array('prompt'=>'.:: Seleccione Año ::.'),
				)
			)
		);
		
		echo $form->dropDownListGroup(
			$model2,
			'transmision',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  array('Manual'=>'Manual' , 'Automatico'=>'Automatico'),
					'htmlOptions' => array('prompt'=>'.::Seleccione Categoria::.'),
				)
			)
		);
		
	    echo $form->textFieldGroup(
			  $model2,
			  'kilometros',
			  array('prepend' => '$','wrapperHtmlOptions' => array('class' => 'col-sm-5',))
		); 
		
	?>
	
	<script>
	
	$(document).ready(function(){
	     if($('#Auto_marca_auto_id').val() == ''){
		        $('#Auto_modelo_auto_id').val("");
				$('#Auto_modelo_auto_id').attr("disabled", true);		
		}
	});
	
	
	/* ajax para llenar dropdownlist con los modelos de autos*/
	$('#Auto_marca_auto_id').change(function(){
	
	    if($(this).val() == ''){
		        $('#Auto_modelo_auto_id').val("");
				$('#Auto_modelo_auto_id').attr("disabled", true);
				
		}else{
			$.ajax({
				url  : "<?php echo Yii::app()->createURL('aviso/addModeloAutoSelect');?>",
				type : 'post',
				cache: false ,
				data : {id: $(this).val() },
				success: function(data){
						$('#Auto_modelo_auto_id').html(data.div);
						$('#Auto_modelo_auto_id').removeAttr("disabled");
					}
			});
		}
    return false;
    });
	
	
	</script>