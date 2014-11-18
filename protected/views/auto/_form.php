            <div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Marca<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[marca_auto_id]",$model2->marca_auto_id,
			     CHtml::listData(MarcaAuto::model()->findAll(),'idmarca_auto', 'nombre'),
			     array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Marca::.'
			       )
		         );?>
				</div>
		    </div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Modelo<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[modelo_auto_id]",$model2->modelo_auto_id,
			     array(),
			     array(
					'class' => 'form-control',
					//'disabled'=>'disabled',
                    'prompt'=>'.::Seleccione Modelo::.'
			       )
		         );?>
				</div>
		    </div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Version Auto<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[version_auto_id]",$model2->version_auto_id,
			     CHtml::listData(VersionAuto::model()->findAll(),'idversion_auto', 'nombre'),
			     array(
					'class' => 'form-control',
					//'disabled'=>'disabled',
                    'prompt'=>'.::Seleccione Version::.'
			       )
		         );?>
				</div>
		    </div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Combustible<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[combustible_id]",$model2->combustible,
			      CHtml::listData(Combustible::model()->findAll(),'idcombustible', 'nombre'),
			     array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Combustible::.'
			       )
		         );?>
				</div>
		    </div>


			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Tipo Vehiculo<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[tipo_vehiculo_id]",$model2->tipo_vehiculo_id,
			      CHtml::listData(TipoVehiculo::model()->findAll(),'idtipo_vehiculo', 'nombre'),
			     array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Tipo Vehiculo::.'
			       )
		         );?>
				</div>
		    </div>
			
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
			
			<div class="form-group">
				<label class="col-sm-3 control-label required" for="Auto_ano">Transmision<span class="required">*</span>
                </label>
				<div class="col-sm-5 col-sm-9">
				<?php echo CHtml::dropDownList("Auto[transmision]",$model2->transmision,
			     array('Manual'=>'Manual' , 'Automatico'=>'Automatico'),
			     array(
					'class' => 'form-control',
                    'prompt'=>'.::Seleccione Categoria::.'
			       )
		         );?>
				</div>
		    </div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label" for="Auto_kilometros">Kilometros</label>
				<div class="col-sm-5 col-sm-9">
				<div class="input-group">
				<span class="input-group-addon">$</span>
				<input id="Auto_kilometros" class="form-control" type="text" maxlength="45" name="Auto[kilometros]" placeholder="Kilometros">
				</div>
				</div>
			</div>
			
			<script>
	/* ajax para llenar dropdownlist con los modelos de autos*/
	
	
	$(document).ready(function(){
	     if($('#Auto_marca_auto_id').val() == ''){
		        $('#Auto_modelo_auto_id').val("");
				$('#Auto_modelo_auto_id').attr("disabled", true);		
		}
	});
	
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
			
			
