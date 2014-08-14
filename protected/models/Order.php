<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id
 * @property string $FullName
 * @property string $email
 * @property string $subject
 * @property string $Message
 * @property string $tanggal
 * @property string $status
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FullName, email','required','message'=>'{attribute} Tidak Boleh Kosong'),
			array('FullName, email', 'length', 'max'=>30),
			array('subject', 'length', 'max'=>50),
			array('Message', 'length', 'max'=>300),
			array('status', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, FullName, email, subject, Message, tanggal, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'FullName' => 'Full Name',
			'email' => 'Email',
			'subject' => 'Subject',
			'Message' => 'Message',
			'tanggal' => 'Tanggal',
			'status' => 'Status',
		);
	}

	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('FullName',$this->FullName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('Message',$this->Message,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchid()
	{
		$criteria=new CDbCriteria;
		$id = Yii::app()->user->name;
		$criteria->select = 'id,FullName,email,subject,Message,tanggal,status';
		$criteria->condition = 'email=:email';
		$criteria->params=array(':email'=>$id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function Jenis_Subjek()
	{
		return array(
		'Order-App'=>'Jasa App Mobile Desain dan Programming ',
		'Order-Web'=>'Jasa Web Desain dan Programming',
		'Order-Logo'=>'Jasa Desain Logo Company',
		'Konsultasi'=>'Konsultasi Seputar IT',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
