<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Email), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FullName')); ?>:</b>
	<?php echo CHtml::encode($data->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isActive')); ?>:</b>
	<?php echo CHtml::encode($data->isActive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActivateCode')); ?>:</b>
	<?php echo CHtml::encode($data->ActivateCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Level_id')); ?>:</b>
	<?php echo CHtml::encode($data->Level_id); ?>
	<br />
	
</div><hr/>