<?php
$this->breadcrumbs=array(
	'Activitas',
);

$this->menu=array(
	array('label'=>'Profil', 'url'=>array('user/profil','id'=>Yii::app()->user->name)),
	array('label'=>'Order', 'url'=>array('order')),
	array('label'=>'Status', 'url'=>array('status','id'=>Yii::app()->user->name)),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';"><i class="icon-shopping-cart"></i> STATUS ORDER
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-grid',
	'dataProvider'=>$model->searchid(),
	'columns'=>array(
		array(
		'name'=>'id',
		'type'=>'raw',
		'header'=>'No',
		'value'=>'CHtml::encode(
			$data->id)',
			'htmlOptions'=>array('style'=>'text-align:center;'),
		),
		array(
		'name'=>'tanggal',
		'type'=>'raw',
		'header'=>'Tanggal',
		'value'=>'CHtml::encode(
			$data->tanggal)',
			'htmlOptions'=>array('style'=>'width:60px;text-align:center;'),
		),
		array(
		'name'=>'subject',
		'type'=>'raw',
		'header'=>'Subject',
		'value'=>'CHtml::encode(
			$data->subject)',
			'htmlOptions'=>array('style'=>'width:80px;text-align:center;'),
		),
		array(
		'name'=>'message',
		'type'=>'raw',
		'header'=>'Pesanan',
		'value'=>'CHtml::encode(
			$data->Message)',
			'htmlOptions'=>array('style'=>'text-align:center;'),
		),
		array(
		'name'=>'status',
		'type'=>'raw',
		'header'=>'Status',
		'value'=>'CHtml::encode($data->status)',
			'htmlOptions'=>array('style'=>'text-align:center;'),
		),
	),
)); 
?><br/><br/>
