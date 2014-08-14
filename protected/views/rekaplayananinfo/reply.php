<?php
$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('order/index')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';"><i class="icon-tag"></i> REPLY
	<span class="header-line"></span> 
</h3>
<div>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'order-form',
		'enableAjaxValidation'=>false,
	)); ?>
		<?php echo $form->label($model2,'NamaLengkap',array('style'=>'margin-left:15px;')); ?>
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->textField($model2,'FullName',array(''=>'','placeholder'=>'Tulis Nama Lengkap Anda')); ?>
		<?php echo $form->error($model2,'FullName',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>	<br/>
		
		<?php echo $form->labelEx($model,'Email',array('style'=>'margin-left:15px;')); ?>
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->textField($model,'email',array('value'=>$model2->email,'maxlength'=>30,'placeholder'=>'Tulis Email Anda')); ?>
		<?php echo $form->error($model,'email',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>	
		
		<?php echo $form->labelEx($model,'Subject',array('style'=>'margin-left:15px;')); ?>		
		<label id="icon" for="name"><i class="icon-edit"></i></label>
		<?php echo $form->dropDownList($model,'subject',Order::Jenis_Subjek(),array('maxlength'=>50,'style'=>'margin-left:-3px;margin-top:6px;height:37px;width:350px')); ?>
		<?php echo $form->error($model,'subject',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>
		
		<?php echo $form->label($model,'Message',array('style'=>'margin-left:15px;')); ?>
		<?php echo $form->textArea($model,'message',array('rows' => 7,'style'=>'margin-left:15px;width:625px','maxlength'=>700)); ?>
		<?php echo $form->error($model,'message',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/><hr/>	
		
		<button style="font-family:'Candara';width: 160px;margin-left:15px;" type="submit" class="btn">GO</button>
		<button style="font-family:'Candara';width: 100px;margin-left:3px;" type="reset" class="btn">CANCEL</button>
	<?php $this->endWidget(); ?>
</div><br/><br/> 

