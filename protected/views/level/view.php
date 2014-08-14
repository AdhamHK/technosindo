<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Level', 'url'=>array('index')),
	array('label'=>'Update Level', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Level', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Level', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">DETAIL LEVEL - <?php echo $model->ID ?>
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Level',
	),
)); ?><br/>
