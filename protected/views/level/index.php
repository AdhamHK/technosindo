<?php
/* @var $this LevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Levels',
);

$this->menu=array(
	array('label'=>'Buat Level', 'url'=>array('create')),
	array('label'=>'Kelola Level', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">LIST LEVEL
	<span class="header-line"></span> 
</h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
