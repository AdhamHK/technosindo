<?php
/* @var $this RekaplayananinfoController */
/* @var $model Rekaplayananinfo */

$this->breadcrumbs=array(
	'Rekaplayananinfos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rekaplayananinfo', 'url'=>array('index')),
	array('label'=>'Create Rekaplayananinfo', 'url'=>array('create')),
	array('label'=>'Update Rekaplayananinfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rekaplayananinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rekaplayananinfo', 'url'=>array('admin')),
);
?>

<h1>View Rekaplayananinfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'subject',
		'message',
		'tanggal',
	),
)); ?>
