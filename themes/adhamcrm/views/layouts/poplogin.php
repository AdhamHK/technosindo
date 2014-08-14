 		<!-- popup form #1 -->        
		 <div class="popup">
            <center><h4 style="color:#5d5d5d;font-size:24px;font-family:'Candara';">SIGN IN</h4><hr/></center>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),)); ?>
				<label id="icon" for="name"><i class="icon-envelope"></i></label>
				<?php echo $form->textField($loginvar,'username',array('placeholder'=>'Email')); ?>		
				<?php echo $form->error($loginvar,'username',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>				
				<br/>
				<label id="icon" for="name"><i class="icon-lock"></i></label>
                <?php echo $form->passwordField($loginvar,'password',array('placeholder'=>'Password')); ?>	
				<?php echo $form->error($loginvar,'password',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?>				
				<br/>
				<hr/>
				<center><button style="font-family:'Candara'; width: 264px; margin-left:14px;" type="submit" class="btn">LOGIN</button></center>
				<?php $this->endWidget(); ?>
				<a class="close" href=""></a>
        </div>       
