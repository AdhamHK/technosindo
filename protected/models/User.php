<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $FullName
 * @property string $Password
 * @property string $Email
 * @property string $isActive
 * @property string $ActivateCode
 * @property string $Avatar
 * @property string $Gender
 * @property string $Karir
 * @property string $Kutipan
 * @property string $Tgl_Lahir
 * @property string $Alamat
 * @property integer $Level_id
 */
class User extends CActiveRecord
{
	public function tableName()
	{
		return 'user';
	}
	
	public function result($value)
	{
		return ($value) == $this->Password;
	}
		
	public function buatkode()
    {
    	$x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$y = '';
    	for ($i = 0; $i < 10; $i++)
          $y .= $x[rand(0, strlen($x))];
		return $y;
    }

	public function aktivasi($attribute,$params)
	{
		if($this->$attribute==$params['isi'])
		{
			$this->addError('nama', $params['message']);
			return false;
		}
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Password, Email', 'required','message'=>'{attribute} Tidak Boleh Kosong'),
			array('Email','unique','message'=>'{attribute} Tersebut Telah Terdaftar'),
			array('Avatar', 'file', 'types'=>'jpg, gif, png','allowEmpty'=>true, 'on'=>'update'),
			array('Level_id', 'numerical', 'integerOnly'=>true),
			array('FullName, Password, Email, isActive', 'length', 'max'=>30),
			array('Tgl_Lahir', 'length', 'max'=>10),
			array('Gender', 'length', 'max'=>6),
			array('Karir', 'length', 'max'=>50),
			array('Kutipan', 'length', 'max'=>150),
			array('Alamat', 'length', 'max'=>300),
			array('id, FullName, Password, Email, isActive, ActivateCode, Avatar, Gender, Karir, Kutipan, Tgl_Lahir, Alamat, Level_id', 'safe', 'on'=>'search'),
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
			'FullName' => 'Nama Lengkap',
			'Password' => 'Password',
			'Email' => 'Email',
			'isActive' => 'Is Active',
			'ActivateCode' => 'Activate Code',
			'Avatar' => 'Avatar',
			'Gender' => 'Jenis Kelamin',
			'Karir' => 'Karir',
			'Kutipan' => 'Kutipan',
			'Tgl_Lahir' => 'Tgl Lahir',
			'Alamat' => 'Alamat',
			'Level_id' => 'Level',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('FullName',$this->FullName,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('isActive',$this->isActive,true);
		$criteria->compare('ActivateCode',$this->ActivateCode);
		$criteria->compare('Avatar',$this->Avatar,true);
		$criteria->compare('Gender',$this->Gender);
		$criteria->compare('Karir',$this->Karir);
		$criteria->compare('Kutipan',$this->Kutipan);
		$criteria->compare('Tgl_Lahir',$this->Tgl_Lahir);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('Level_id',$this->Level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function Jenis_Kelamin()
	{
		return array(
		'Male'=>'Male',
		'Female'=>'Female',
		);
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
