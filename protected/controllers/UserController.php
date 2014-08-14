<?php

class UserController extends Controller
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
				'actions'=>array('profil'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update',),
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
	
	public function actionProfil($id)
	{
		$model=$this->loadProfil($id);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$namafile=CUploadedFile::getInstance($model,'Avatar');  
			if($model->save()) 
			{ 
				if(!empty($namafile))  // check if uploaded file is set or not
                {
                    $namafile->saveAs(Yii::app()->basePath.'/../themes/adhamcrm/img/client/'.$model->Avatar);
                }
				$this->redirect(array('profil','id'=>$id));	
			}
		}

		$this->render('profil',array(
			'model'=>$model,
		));
	}
	
	public function loadProfil($id)
	{
		$id=Yii::app()->user->name;
		$model=User::model()->findByAttributes(array('Email'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionCreate()
	{
		$model=new User;
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$namafile=CUploadedFile::getInstance($model,'Avatar');  
			$model->Avatar = $namafile;
			if($model->save()) 
			{ 
				$namafile->saveAs(Yii::app()->basePath  . '/../themes/adhamcrm/img/client/' .$namafile); 
				$this->redirect(array('view','id'=>$model->id)); 
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$namafile=CUploadedFile::getInstance($model,'Avatar');  
			if($model->save()) 
			{ 
				if(!empty($namafile))  // check if uploaded file is set or not
                {
                    $namafile->saveAs(Yii::app()->basePath.'/../themes/adhamcrm/img/client/'.$model->Avatar);
                }
				$this->redirect(array('profil','id'=>$id));	
			}
		}

		$this->render('update',array(
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
