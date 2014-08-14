<div class="container">
	<div style="margin-left:10px; margin-top:10px;text-align:left;height:24px; font-family:Candara; font-size:17px;">
		<ol class="breadcrumb">
			<li style="color:#E91B27;" class="active">Email Telah dikirm <i class="icon-ok-circle"></i></li>
		</ol>
	</div><br/><br/>
	<?php
		$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
		$mailer->IsSMTP();
		$mailer->IsHTML(true);
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = "ssl";
		$mailer->Host = "smtp.gmail.com";
		$mailer->Port = 465;
		$mailer->Username = "admntechnosindo@gmail.com";
		$mailer->Password = 'adm1ntechn0';
		$mailer->From = "Technosindo";
		$mailer->FromName = "Admin Technology Solution Indonesia";
		$mailer->AddAddress($model->Email);
		$isi='Hai '.$model->FullName.'<br/> 
			  Anda telah melakukan register dengan :<br/>
			  Username  :'.$model->Email.'<br/>
			  Klik link berikut untuk aktifasi akun anda <br/>
			<a href="http://localhost/technosindo/index.php?r=site/aktivasi&id='.$model->ActivateCode.'">http://localhost/technosindo/index.php?r=site/aktivasi&id='.$model->ActivateCode.'</a>';
		$mailer->Subject = "Confirmation.";
		$mailer->Body = $isi;
		$mailer->Send();
	?>
</div>