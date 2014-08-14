<?php
/* @var $this RekaplayananinfoController */
/* @var $model Rekaplayananinfo */

$this->breadcrumbs=array(
	'Rekaplayananinfos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rekaplayananinfo', 'url'=>array('index')),
	array('label'=>'Create Rekaplayananinfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rekaplayananinfo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">KELOLA REKAP LAYANAN INFO
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rekaplayananinfo-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'email',
		'subject',
		'message',
		'tanggal',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?><br/><br/>
