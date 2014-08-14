<div class="container">
	<div style="margin-left:10px; margin-top:10px;text-align:left;height:24px; font-family:Candara; font-size:17px;">
		<ol class="breadcrumb">
			<li style="color:#E91B27;" class="active">Denied <i class="icon-warning-sign"></i></li>
		</ol>
	</div><br/><br/>
	<div class="pesanwarning">
		<p style="margin-top:8px;color:#E91B27;font-size:18px;font-family:'Candara';">
			&nbsp;&nbsp;<b> MAAF !</b> Anda tidak dapat login silahkan cek email Anda di '<b><?php echo $model->Email; ?></b>' untuk proses aktivasi akun Anda &nbsp;<i class="icon-warning-sign"></i> &nbsp;&nbsp;
		</p>
	</div>
	<div style="margin-top:15px;font-size:18px;font-family:'Candara';">
		<a class="lightblue" href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/SendEmail&id=<?php echo $model->id?>" id="join_pop">Kirim ulang email verifikasi jika belum terkirim</a>
	</div>
</div><br/><br/>
