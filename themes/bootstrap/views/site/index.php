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



echo CHtml::openTag('div', array('class' => 'row-fluid'));
$this->widget(
    'booster.widgets.TbThumbnails',
    array(
        'dataProvider' => $dataProvider,
        'template' => "{items}\n{pager}",
        'itemView' => 'application.views.aviso._aviso',
    )
);
echo CHtml::closeTag('div');


?>




