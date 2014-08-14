<?php
/* @var $this RekaplayananinfoController */
/* @var $model Rekaplayananinfo */

$this->breadcrumbs=array(
	'Rekaplayananinfos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rekaplayananinfo', 'url'=>array('index')),
	array('label'=>'Create Rekaplayananinfo', 'url'=>array('create')),
	array('label'=>'View Rekaplayananinfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rekaplayananinfo', 'url'=>array('admin')),
);
?>

<h1>Update Rekaplayananinfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>