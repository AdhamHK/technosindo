<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Level', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#level-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">KELOLA LEVEL
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'level-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'Level',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?><br/><br/>
