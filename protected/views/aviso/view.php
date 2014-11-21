<?php 
    $this->breadcrumbs=array(
	'Mi Cuenta'=>array('usuario/index'),
	 $model->nombre,
     );
?>

<div>
  <div class="col-xs-12 col-sm-6 col-md-7" style="background:#f5f5f5;padding-bottom:10px;">
     <div class="col-xs-12 col-sm-6 col-md-7">
	    <h2><?php echo $model->nombre?></h2>
     </div>
	 
	 <div class="col-xs-6 col-md-5">
	    <h2><?php echo '$'.$model->precio?></h2>
     </div>
	 
	 <div>
	 <img src="<?php echo Yii::app()->request->baseUrl.'/images/imagen-no-disponible.gif';?>" class="img-thumbnail" align="center" >
	 </div>
	 
  
</div>
  
  
<div class="col-sm-4 col-xs-12 bs-docs-sidebar" style="border:1px solid #ddd;">
    <div class="row">
	  <center>
         <img src="<?php echo Yii::app()->request->baseUrl.'/images/usuario.png';?>" class="img-circle">
      </center>
    </div>
	
	<div class="row">
	   <center>
	      <h3><?php echo $model->usuario->nombre.' '.$model->usuario->apellidos?></h3>
		  <p><?php echo $model->usuario->region ?></p>
		  <p><?php echo $model->usuario->ciudad?></p>
	   </center>
    </div>
</div>