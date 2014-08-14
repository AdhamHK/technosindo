  		<!-- popup form #2 -->
		<div class="popup">
            <center><h4 style="color:#5d5d5d;font-size:24px;font-family:'Candara';">SIGN UP</h4><hr/></center>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),)); ?>
				<?php echo $form->errorSummary($registervar); ?>
				<label id="icon" for="name"><i class="icon-envelope"></i></label>
				<?php echo $form->textField($registervar,'Email',array('placeholder'=>'Email')); ?><br/>
				<label id="icon" for="name"><i class="icon-lock"></i></label>
                <?php echo $form->passwordField($registervar,'Password',array('placeholder'=>'Password')); ?><br/>
				<label id="icon" for="name"><i class="icon-user"></i></label>
				<?php echo $form->textField($registervar,'FullName',array('placeholder'=>'Nama Lengkap')); ?>
				<hr/>
				<center><button style="font-family:'Candara'; width: 264px; margin-left:14px;" type="submit" class="btn">SIGN UP</button></center>	
					<?php $level = 2;?>
					<?php echo $form->hiddenField($registervar,'Level_id',array('type'=>"text",'size'=>2,'maxlength'=>2, 'value'=>$level));?>
				<?php $this->endWidget(); ?>
				<a class="close" href=""></a>
        </div>