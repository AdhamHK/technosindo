<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Level', 'url'=>array('index')),
	array('label'=>'Manage Level', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">BUAT LEVEL 
	<span class="header-line"></span> 
</h3>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>