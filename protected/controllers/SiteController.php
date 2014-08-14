<?php

class SiteController extends Controller
{

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	
	public function actionPortfolio()
	{
		$this->render('portfolio');
	}
	
	public function actionAbout()
	{
		$this->render('about');
	}
	
	public function actionDenied($id)
	{
		$model=$this->loadModel($id);
		$this->render('denied',array(
			'model'=>$model,
		));
	}
	
	public function actionKonfirmasi($id)
	{
		$model=$this->loadModel($id);
		$this->render('konfirmasi',array(
			'model'=>$model,
		));
	}
	
	public function actionSendEmail($id)
	{
		$model=$this->loadModel($id);
		$this->render('kirimulang',array(
			'model'=>$model,
		));
	}
	
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionLogin()
	{
		$model=new LoginForm;
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			$id=User::model()->findByAttributes(array('Email'=>$model->username));
			if($model->validate() && $model->login())
			{	$this->redirect(Yii::app()->user->returnUrl); }
			elseif($id->isActive != 1)
			{
				$this->redirect(array('site/denied&id='.$id->id.''));
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	
	public function actionAktivasi($id)
	{
		$model=$this->loadAktivasi($id);
		$model->isActive=1;
		$model->ActivateCode='';
		$model->save();		
		$this->render('aktivasi',array(
			'model'=>$model,
		));
	}
	
	public function loadAktivasi($id)
	{
		$model=User::model()->findByAttributes(array('ActivateCode'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionRegister()
	{
		$model=new User;
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];	
			$kodeaktivasi=User::model()->buatkode();
			$model->isActive=0;
			$model->ActivateCode=$kodeaktivasi;		
			$model->Avatar= $model->Password.'.png';			
			if($model->save())
			{
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
					$this->redirect(array('konfirmasi','id'=>$model->id));	
			}
		}

		$this->render('register',array(
			'model'=>$model,
		));
	}
		
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
}