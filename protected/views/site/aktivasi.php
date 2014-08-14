		<?php 
			$loginvar = new LoginForm; 
			if(isset($_POST['LoginForm']))
			{
				$loginvar->attributes=$_POST['LoginForm'];
				if($loginvar->validate() && $loginvar->login())
				{
					$this->redirect(Yii::app()->user->returnUrl);
				}
			}
		?>	

	<div class="topbg"><br/><br/></div>
	   <div class="page-title">
				<div class="container">
					<div class="row">
						<div class="span12">
							<i class="icon-user page-title-icon"></i>
							<h2>Login</h2>
						</div>
					</div>
				</div>
		</div>
	<div class="botbg"><br/><br/></div>

	<div class="what-we-do container">
		<div class="portfolio-title">
			<div class="pesansukses">
				<p style="color:#468847;font-size:18px;font-family:'Candara';">
					&nbsp;&nbsp;<b> SELAMAT !</b> Akun anda telah teraktivasi silahkan login kembali &nbsp;<i class="icon-sign"></i> &nbsp;&nbsp;
				</p>
			</div>
            <h3>Silahkan isi</h3>
        </div><br/>
		<div class="container">
			<div class="login">
					<center>
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
						'validateOnSubmit'=>true,
						),)); ?><br/>
					<label id="icon" for="name"><i style="margin-right:15px;" class="icon-envelope"></i></label>
					<?php echo $form->textField($loginvar,'username',array('placeholder'=>'Email')); ?>
					<br/>
					<label id="icon" for="name"><i style="margin-right:15px;" class="icon-lock"></i></label>
					<?php echo $form->passwordField($loginvar,'password',array('placeholder'=>'Password')); ?>
					<br/><hr/>
					<button style="font-family:'Candara'; width: 264px; margin-left:14px;" type="submit" class="btn">LOGIN</button>
					<?php $this->endWidget(); ?></center>
			</div>
		</div>
    </div><br/><br/><br/>