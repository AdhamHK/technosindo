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
<br/>
<div>
	<div class="pesansukses">
		<p style="margin-top:8px;color:#468847;font-size:18px;font-family:'Candara';">
			&nbsp;&nbsp;<b> BERHASIL !</b> Order anda telah terkirim, silahkan tunggu balasan dari kami pada email Anda di '<b><?php echo $model->email; ?></b>' atau cek status order pada akun Anda &nbsp;<i class="icon-check"></i> &nbsp;&nbsp;
		</p>
	</div>
</div><br/><br/> 

