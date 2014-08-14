<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div style="margin-left:35px;" class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'level-form',
		'enableAjaxValidation'=>false,
	)); ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->textField($model,'Level',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Level'); ?>
	</div>
	<div style="margin-top:15px;"class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'ADD NEW LEVEl' : 'SAVE',array('style'=>'font-family:Candara; width: 227px; margin-left:-8px;','class'=>'btn')); ?>
	</div>
	<?php $this->endWidget(); ?>
</div><br/><!-- form -->