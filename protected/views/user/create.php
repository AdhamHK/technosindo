<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Kelola User', 'url'=>array('admin')),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">BUAT USER
	<span class="header-line"></span> 
</h3>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>