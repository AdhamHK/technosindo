
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
					<?php echo $form->textField($model,'username',array('placeholder'=>'Email')); ?>
					<?php echo $form->error($model,'username',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>
					<br/>
					<label id="icon" for="name"><i style="margin-right:15px;" class="icon-lock"></i></label>
					<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
					<?php echo $form->error($model,'password',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>
					<br/><hr/>
					<button style="font-family:'Candara'; width: 264px; margin-left:14px;" type="submit" class="btn">LOGIN</button>
					<?php $this->endWidget(); ?></center>
			</div>
		</div>
    </div><br/><br/><br/>
