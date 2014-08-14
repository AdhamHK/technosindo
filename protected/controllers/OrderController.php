<?php

class OrderController extends Controller
{

	public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('order','status','succesful'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admntechnosindo@gmail.com'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionSuccesful($id)
	{
		$this->render('succesful',array(
			'model'=>$this->loadProfil($id),
		));
	}

	public function loadProfil($id)
	{
		$id=Yii::app()->user->name;
		$model=Order::model()->findByAttributes(array('email'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionCreate()
	{
		$model=new Order;
		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionOrder()
	{
		$model=new Order;
		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			$today = Yii::app()->localtime->TimeZone ='Asia/Jakarta';
			$model->tanggal=Yii::app()->localtime->LocalNow;
			$model->status='Pending';
			if($model->save())
				$this->redirect(array('succesful','id'=>$model->email));
		}

		$this->render('order',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionStatus($id)
	{
		$model=new Order('searchid');
		$model->unsetAttributes();  
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('status',array(
			'model'=>$model,
		));
	}
		
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
