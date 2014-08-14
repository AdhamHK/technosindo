<?php
/* @var $this RekaplayananinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rekap layanan info',
);

$this->menu=array(
	array('label'=>'Kelola Rekaplayananinfo', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';"><i class="icon-book"></i> LIST REKAP LAYANAN INFO
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?><br/>
