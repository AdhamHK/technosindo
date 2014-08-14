<?php
$this->breadcrumbs=array(
	'Activitas',
);

$this->menu=array(
	array('label'=>'Profil', 'url'=>array('user/profil','id'=>Yii::app()->user->name)),
	array('label'=>'Order', 'url'=>array('order')),
	array('label'=>'Status', 'url'=>array('status','id'=>Yii::app()->user->name)),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';"><i class="icon-shopping-cart"></i> MY ORDER
	<span class="header-line"></span> 
</h3>
<div>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'order-form',
		'enableAjaxValidation'=>false,
	)); ?>
		<?php echo $form->label($model,'NamaLengkap',array('style'=>'margin-left:15px;')); ?>
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->textField($model,'FullName',array('placeholder'=>'Tulis Nama Lengkap Anda')); ?>
		<?php echo $form->error($model,'FullName',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>	<br/>
		
		<?php echo $form->labelEx($model,'Email',array('style'=>'margin-left:15px;')); ?>
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->textField($model,'email',array('maxlength'=>30,'placeholder'=>'Tulis Email Anda')); ?>
		<?php echo $form->error($model,'email',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>	
		
		<?php echo $form->labelEx($model,'Subject',array('style'=>'margin-left:15px;')); ?>		
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->dropDownList($model,'subject',Order::Jenis_Subjek(),array('maxlength'=>50,'style'=>'margin-left:-3px;margin-top:6px;height:37px;width:350px')); ?>
		<?php echo $form->error($model,'subject',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>
		
		<?php echo $form->label($model,'Message',array('style'=>'margin-left:15px;')); ?>	
		<?php echo $form->textArea($model,'Message',array('rows' => 7,'style'=>'margin-left:15px;width:625px','maxlength'=>300)); ?>
		<?php echo $form->error($model,'Message',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/><hr/>	
		
		<button style="font-family:'Candara';width: 160px;margin-left:15px;" type="submit" class="btn">GO</button>
		<button style="font-family:'Candara';width: 100px;margin-left:3px;" type="reset" class="btn">CANCEL</button>
	<?php $this->endWidget(); ?>
</div><br/><br/> 

