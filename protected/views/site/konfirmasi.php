<div class="container">
	<div style="margin-left:10px; margin-top:10px;text-align:left;height:24px; font-family:Candara; font-size:17px;">
		<ol class="breadcrumb">
			<li style="color:#E91B27;" class="active">Konfirmasi Akun <i class="icon-warning-sign"></i></li>
		</ol>
	</div><br/><br/>
	<div class="pesansukses">
		<p style="margin-top:8px;color:#468847;font-size:18px;font-family:'Candara';">
			&nbsp;&nbsp;<b> BERHASIL !</b> Anda telah terdaftar di Technosindo, silahkan cek email Anda di '<b><?php echo $model->Email; ?></b>' untuk mengaktivasi akun Anda &nbsp;<i class="icon-check"></i> &nbsp;&nbsp;
		</p>
	</div>
	<div style="margin-top:15px;font-size:18px;font-family:'Candara';">
		<a class="lightblue" href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/SendEmail&id=<?php echo $model->id?>">Kirim ulang email verifikasi jika belum terkirim</a>
	</div>
</div><br/><br/>

