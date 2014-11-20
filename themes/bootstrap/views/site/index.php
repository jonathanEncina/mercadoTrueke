<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php

 $this->widget('booster.widgets.TbCarousel',
    array(
	     'options'=>array(
		
		 ),
	    
        'items' => array(
            array(
                'image' => Yii::app()->request->baseUrl.'/images/first-placeholder830x400.gif',
                'label' => 'First Thumbnail label',
                'caption' => 'First Caption.'
            ),
            array(
                'image' => Yii::app()->request->baseUrl.'/images/first-placeholder830x400.gif',
                'label' => 'Second Thumbnail label',
                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
            ),
            array(
                'image' =>  Yii::app()->request->baseUrl.'/images/first-placeholder830x400.gif',
                'label' => 'Third Thumbnail label',
                'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
            ),
        ),
    )
); 
?>

<div class="col-sm-3 col-xs-12 bs-docs-sidebar" >
        <div style="border-right:1px solid #ddd;">
		<h1>Venta Productos</h1>
		<p>Productos para trueke destacados de la semana</p>
		</div>
    </div>


<div class="col-sm-9 col-xs-12 ">
<?php echo CHtml::openTag('div', array('class' => 'row-fluid'));
$this->widget(
    'booster.widgets.TbThumbnails',
    array(
        'dataProvider' => $dataProviderVenta,
        'template' => "{items}\n{pager}",
        'itemView' => 'application.views.aviso._aviso',
		'htmlOptions'=>array('class'=>'avisoIndex list-view')
    )
);
echo CHtml::closeTag('div'); ?>
</div>

<div class="col-sm-3 col-xs-12 bs-docs-sidebar" >
    <div style="border-right:1px solid #ddd;">
		<h1>Trueke Productos</h1>
		<p>Productos para venta destacados de la semana</p>
    </div>
</div>


<div class="col-sm-9 col-xs-12 ">
<?php echo CHtml::openTag('div', array('class' => 'row-fluid'));
$this->widget(
    'booster.widgets.TbThumbnails',
    array(
        'dataProvider' => $dataProviderTrueke,
        'template' => "{items}\n{pager}",
        'itemView' => 'application.views.aviso._aviso',
		'htmlOptions'=>array('class'=>'avisoIndex list-view')
    )
);
echo CHtml::closeTag('div'); ?>
</div>

<style>
.avisoIndex .col-md-4{
width:25%;
}
</style>





