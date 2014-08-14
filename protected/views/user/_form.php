
<div style="margin-left:35px;" class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'FullName',array('placeholder'=>'Nama Lengkap','size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'FullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'Password',array('value'=>'','placeholder'=>'Password','size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'Email',array('placeholder'=>'Email','size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'isActive',array('placeholder'=>'Aktivasi','size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'isActive'); ?><br/>
	</div>
	
	<div class="row">
		<?php echo $form->fileField($model,'Avatar',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Avatar'); ?>
	</div><br/>

	<div class="row">
		<label style="margin-left:-4px;margin-top:4px;font-size:20px;font-family:'Bubblegum Sans';">LEVEL</label>
		<?php $level = CHtml::listData(Level::model()->findAll(),'ID','Level'); ?>
		<?php echo $form->dropDownList($model,'Level_id',$level,array('style'=>'height:40px; margin-left:-6px;')); ?><br/>
	</div>

	<div style="margin-top:15px;"class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'ADD NEW USER' : 'SAVE',array('style'=>'font-family:Candara; width: 227px; margin-left:-8px;','class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><br/>