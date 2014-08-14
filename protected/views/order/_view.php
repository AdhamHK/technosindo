<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?> :</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FullName')); ?> :</b>
	<?php echo CHtml::encode($data->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?> :</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?> :</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Message')); ?> :</b>
	<?php echo CHtml::encode($data->Message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?> :</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?> :</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
	<a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=rekaplayananinfo/reply&id=<?php echo $data->id;?>" style="font-family:'Candara';margin-top:7px;" class="btn"><i class="icon-retweet"></i> Reply</a>

</div><hr/>