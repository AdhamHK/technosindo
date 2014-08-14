	<div class="topbg"><br/><br/></div>
	   <div class="page-title">
				<div class="container">
					<div class="row">
						<div class="span12">
							<i class="icon-user page-title-icon"></i>
							<h2>Register</h2>
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
				'id'=>'user-form',
				'enableAjaxValidation'=>false,
			)); ?><br/>
				<?php echo $form->errorSummary($model); ?>
				<label id="icon" for="name"><i style="margin-right:15px;" class="icon-envelope"></i></label>
				<?php echo $form->textField($model,'Email',array('placeholder'=>'Email')); ?><br/>
				<label id="icon" for="name"><i style="margin-right:15px;" class="icon-lock"></i></label>
                <?php echo $form->passwordField($model,'Password',array('placeholder'=>'Password')); ?><br/>
				<label id="icon" for="name"><i style="margin-right:15px;" class="icon-user"></i></label>
				<?php echo $form->textField($model,'FullName',array('placeholder'=>'Nama Lengkap')); ?><hr/>
				<?php $level = 2;?>
				<?php echo $form->hiddenField($model,'Level_id',array('type'=>"text",'size'=>2,'maxlength'=>2, 'value'=>$level));?>
			<button style="font-family:'Candara'; width: 264px; margin-left:14px;" type="submit" class="btn">Register</button>
			<?php $this->endWidget(); ?></center>
		</div></div><br/>
	</div><br/><br/>