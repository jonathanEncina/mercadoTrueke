<?php 

        echo $form->dropDownListGroup(
			$model2,
			'marca_auto_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  array(2016=>2016 , 2015=>2015, 2014=>2014),
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
					'data' =>  array(2016=>2016 , 2015=>2015, 2014=>2014),
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