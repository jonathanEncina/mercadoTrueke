<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
        <?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/prueba.gif" />',array('aviso/view','id'=>$data->idaviso)); ?>
        <div class="caption">
            <h3>$<?php echo $data->precio?></h3>
            <p><?php echo $data->nombre?></p>
            <!--<p><a href="#" class="btn btn-primary" role="button">Ver</a> </p> -->
        </div>
    </div>
</div>