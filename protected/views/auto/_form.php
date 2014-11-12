
			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Año<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[ano]",$model2->ano,
			     array(2016=>2016 , 2015=>2015, 2014=>2014),
			     array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Categoria::.'
			       )
		         );?>
				</div>
		    </div>
