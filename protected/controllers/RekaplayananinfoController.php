<?php

class RekaplayananinfoController extends Controller
{
	public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete', 
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', 
				'actions'=>array('admin','delete','reply'),
				'users'=>array('admntechnosindo@gmail.com'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Rekaplayananinfo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Rekaplayananinfo']))
		{
			$model->attributes=$_POST['Rekaplayananinfo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionReply($id)
	{
		$model2=$this->loadReply($id);
		$model=new Rekaplayananinfo;
		if(isset($_POST['Rekaplayananinfo'],$_POST['Order']))
		{
			$model->attributes=$_POST['Rekaplayananinfo'];
			$model2->status='Diterima';
			$today = Yii::app()->localtime->TimeZone ='Asia/Jakarta';
			$model->tanggal=Yii::app()->localtime->LocalNow;
			if($model->save())
			{
				$model2->save();
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
				$mailer->AddAddress($model->email);
				$isi='';
				$mailer->Subject = $model->subject;
				$mailer->Body = $model->message;
				$mailer->Send();				
				$this->redirect(array('order/index'));
			}
		}

		$this->render('reply',array(
			'model'=>$model,
			'model2'=>$model2,
		));
	}
	
	public function loadReply($id)
	{
		$model2=Order::model()->findByPk($id);
		if($model2===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model2;
	}


	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Rekaplayananinfo']))
		{
			$model->attributes=$_POST['Rekaplayananinfo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Rekaplayananinfo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Rekaplayananinfo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rekaplayananinfo']))
			$model->attributes=$_GET['Rekaplayananinfo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Rekaplayananinfo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Rekaplayananinfo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Rekaplayananinfo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rekaplayananinfo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
