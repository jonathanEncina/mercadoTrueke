<?php 

        echo $form->dropDownListGroup(
			$model2,
			'ano',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' =>  array(2016=>2016 , 2015=>2015, 2014=>2014),
					'htmlOptions' => array('prompt'=>'.::Seleccione Categoria::.'),
				)
			)
		);
		
	?>