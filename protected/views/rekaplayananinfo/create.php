<?php
/* @var $this RekaplayananinfoController */
/* @var $model Rekaplayananinfo */

$this->breadcrumbs=array(
	'Rekaplayananinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rekaplayananinfo', 'url'=>array('index')),
	array('label'=>'Manage Rekaplayananinfo', 'url'=>array('admin')),
);
?>

<h1>Create Rekaplayananinfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>