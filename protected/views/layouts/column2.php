<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
<div class="container">
   <div class="row">
       <div style="margin-left:40px; margin-top:10px;text-align:left;" class="span12">
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>CHtml::link('Home',array('site/index')),
				'htmlOptions'=>array('style'=>'height:24px; font-family:Candara; font-size:17px;','class'=>'breadcrumb')
				)); ?><!-- breadcrumbs -->
			<?php endif?>
        </div>
    </div>
</div>
<div  class="container">
  <div class="row-fluid">
    <div style="margin-left:10px;margin-top:12px;"class="span2">
	<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
				));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-list'),
				));
			$this->endWidget();
		?>
		</ul><!-- sidebar -->
    </div>		
    </div>
	<div style="text-align:justify; margin-left:10px;" class="span10">
		<div style="" id="content">
			<?php echo $content; ?>
		</div>
	</div>	
  </div>
 </div>
</section>
<?php $this->endContent(); ?>