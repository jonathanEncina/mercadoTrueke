<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">

   

    <div class="col-sm-9 col-xs-12 ">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
	
	<div class="col-sm-3 col-xs-12 bs-docs-sidebar">
        <?php
            $this->widget('booster.widgets.TbMenu', array(
			    'type' => 'list',
				//'stacked'=>true,
				//'justified'=>true,
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'bs-docs-sidenav'),
            ));
        ?>
       <!-- sidebar -->
    </div>
	
    
	
	
</div>
<?php $this->endContent(); ?>