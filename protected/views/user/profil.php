<?php
$this->breadcrumbs=array(
	'Activitas',
);

$this->menu=array(
	array('label'=>'Profil', 'url'=>array('profil','id'=>$model->Email)),
	array('label'=>'Order', 'url'=>array('order/order')),
	array('label'=>'Status', 'url'=>array('order/status','id'=>Yii::app()->user->name)),
);
?>
<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';"><i class="icon-user"></i> MY PROFIL
	<span class="header-line"></span> 
</h3>
<div class="profil">
    <div class="row-fluid">
		<div class="span3">
		    <a href="<?php echo Yii::app()->theme->baseUrl;?>/img/client/<?php echo $model->Avatar;?>" width="200" height="72" title="<?php echo ''.$model->FullName.' As '.$model->Karir.''; ?>" alt="Me" rel="prettyPhoto">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/<?php echo $model->Avatar;?>" class="img-rounded" alt="">
            </a>
		</div>
		<div  class="span8">
			<h3 class="header" style="color:#5d5d5d;font-size:28px;font-family:'Bubblegum Sans';">As <?php $level=Level::model()->findByAttributes(array('ID'=>$model->Level_id)); echo $level->Level; ?>
                <span class="header-line"></span> 
            </h3>
			<div style="font-family:Candara;font-size:14px;margin-left:2px;" class="span5">
				<b><?php echo CHtml::encode($model->getAttributeLabel('Email')); ?> : </b>
				<?php echo CHtml::link(CHtml::encode($model->Email), array('profil', 'id'=>Yii::app()->user->name)); ?>
				<br />
				<b><?php echo CHtml::encode($model->getAttributeLabel('FullName')); ?> : </b>
				<?php echo CHtml::encode($model->FullName); ?>
				<br />
				<b><?php echo CHtml::encode($model->getAttributeLabel('Gender')); ?> : </b>
				<?php echo CHtml::encode($model->Gender); ?>
				<br />
				<b><?php echo CHtml::encode($model->getAttributeLabel('Karir')); ?> : </b>
				<?php echo CHtml::encode($model->Karir); ?>
				<br />
				<a href="#uploadfoto" style="font-family:'Candara';margin-top:12px;" class="btn"><i class="icon-camera"></i> UBAH FOTO</a>
			</div>
			<div style="font-family:Candara;font-size:13px;" class="span6">
				<b><?php echo CHtml::encode($model->getAttributeLabel('Kutipan')); ?> : </b>
				<br/>
				<?php echo CHtml::encode($model->Kutipan); ?>
				<br />
			</div>
		</div>
	</div>
</div><br/>

<ul class="nav nav-tabs">
    <li><a href="#first" data-toggle="tab">Ganti Password</a></li>
    <li class="active"><a href="#second" data-toggle="tab">Edit Biodata</a></li>
</ul>

<div class="tab-content">
   <div id="first" class="tab-pane">
		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'user-form',
		'enableAjaxValidation'=>false,
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>
		<label id="icon" for="name"><i class="icon-lock"></i></label>
        <?php echo $form->passwordField($model,'Password',array('value'=>'','placeholder'=>'Ganti Password yang Baru')); ?>	
		<?php echo $form->error($model,'Password',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>			
		<button style="font-family:'Candara';width: 158px;margin-left:15px;margin-top:5px;" type="submit" class="btn">UPDATE</button>
		<button style="font-family:'Candara';width: 100px;margin-top:5px;margin-left:3px;" type="reset" class="btn">CANCEL</button>
		<?php $this->endWidget(); ?>
   </div>
   <div id="second" class="tab-pane active">
		<div style="margin-left:15px;font-family:Candara;font-size:16px;">
			<b><?php echo CHtml::encode($model->getAttributeLabel('FullName')); ?> : </b>
			<?php echo CHtml::link($model->FullName,array('profil', 'id'=>Yii::app()->user->name)); ?>
			<br />
			<b><?php echo CHtml::encode($model->getAttributeLabel('Tgl_Lahir')); ?> : </b>
			<?php echo CHtml::encode($model->Tgl_Lahir); ?>
			<br />
			<b><?php echo CHtml::encode($model->getAttributeLabel('Alamat')); ?> : </b>
			<?php echo CHtml::encode($model->Alamat); ?>
			<br />
			<b><?php echo CHtml::encode($model->getAttributeLabel('Karir')); ?> : </b>
			<?php echo CHtml::encode($model->Karir); ?>
			<br />
			<b><?php echo CHtml::encode($model->getAttributeLabel('Kutipan')); ?> : </b>
			<?php echo CHtml::encode($model->Kutipan); ?>
			<br />
		</div>
		<h3 class="header" style="color:#5d5d5d;font-size:20px;font-family:'Bubblegum Sans';margin-left:15px;">Personal
            <span class="header-line"></span> 
        </h3>
		<div style="margin-left:8px;">
			<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
			)); ?>
			<?php echo $form->label($model,'FullName',array('style'=>'margin-left:15px;')); ?>
			<label id="icon" for="name"><i class="icon-edit"></i></label>
			<?php echo $form->textField($model,'FullName',array('value'=>'','placeholder'=>'Ganti Nama Lengkap Anda')); ?>	
			<?php echo $form->error($model,'FullName',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>
			
			<?php echo $form->label($model,'Karir',array('style'=>'margin-left:15px;')); ?>
			<label id="icon" for="name"><i class="icon-edit"></i></label>
			<?php echo $form->textField($model,'Karir',array('value'=>'','placeholder'=>'Ganti Karir Anda')); ?>	
			<?php echo $form->error($model,'Karir',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>	
			
			<?php echo $form->label($model,'Gender',array('style'=>'margin-left:15px;')); ?>
			<label id="icon" for="name"><i class="icon-edit"></i></label>
			<?php echo $form->dropDownList($model,'Gender',User::Jenis_Kelamin(),array('style'=>'margin-left:-3px;margin-top:6px;height:37px;')); ?>	
			<?php echo $form->error($model,'Gender',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>	
			
			<?php echo $form->label($model,'Tgl_Lahir',array('style'=>'margin-left:15px;')); ?>
			<label id="icon" for="name"><i class="icon-edit"></i></label>
			<?php echo $form->dateField($model,'Tgl_Lahir',array('style'=>'width:208px;')); ?>
			<?php echo $form->error($model,'Tgl_Lahir',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>
			
			<?php echo $form->label($model,'Alamat',array('style'=>'margin-left:15px;')); ?>
			<?php echo $form->textArea($model,'Alamat',array('rows' => 3,'style'=>'margin-left:15px;width:625px','maxlength'=>300)); ?>
			<?php echo $form->error($model,'Alamat',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/>	
			
			<?php echo $form->label($model,'Kutipan',array('style'=>'margin-left:15px;')); ?>
			<?php echo $form->textArea($model,'Kutipan',array('rows' => 2,'style'=>'margin-left:15px;width:625px','maxlength'=>300)); ?>
			<?php echo $form->error($model,'Kutipan',array('style'=>'margin-left:20px;font-family:Candara;color:#E91B27;')); ?><br/><hr/>	
			<button style="font-family:'Candara';width: 160px;margin-left:15px;" type="submit" class="btn">UPDATE</button>
			<button style="font-family:'Candara';width: 100px;margin-left:3px;" type="reset" class="btn">CANCEL</button>
			<?php $this->endWidget(); ?>
		</div>
   </div>
</div>
<br/><br/>

<a href="#" class="overlay" id="uploadfoto"></a>
<div class="popup">
    <center><div class="icon-awesome"><i class="icon-camera"></i></div><hr/></center>
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)); ?>
	<?php echo $form->fileField($model,'Avatar',array('style'=>'margin-left:30px;font-family:Candara;color:#E91B27;','maxlength'=>30)); ?>
	<?php echo $form->error($model,'Avatar',array('style'=>'margin-left:30px;font-family:Candara;color:#E91B27;')); ?>				
	<br/><hr/>
	<center><?php echo CHtml::submitButton($model->isNewRecord ? 'ADD NEW USER' : 'UPLOAD',array('style'=>'font-family:Candara; width: 227px; margin-left:-8px;','class'=>'btn')); ?></center>
	<?php $this->endWidget(); ?>
	<a class="close" href=""></a>
</div>  

