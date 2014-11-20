<?php 
    $this->breadcrumbs=array(
	'Mi Cuenta'=>array('usuario/index'),
	 $model->nombre,
     );
?>

<div class="row" >
  <div class="col-xs-12 col-sm-6 col-md-8" style="border:1px solid #ddd;">
     <div class="col-xs-12 col-sm-6 col-md-8">
	    <?php echo $model->nombre?>
     </div>
	 
	  <div class="col-xs-6 col-md-4">
	    <?php echo $model->precio?>
     </div>
  
  </div>
  
  
  <div class="col-xs-6 col-md-4" style="border:1px solid #ddd;">.col-xs-6 .col-md-4</div>
</div>