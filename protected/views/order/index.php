<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'Kelola Order', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">LIST ORDER
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<br/>
