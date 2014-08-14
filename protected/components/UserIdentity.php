<?php
class UserIdentity extends CUserIdentity
{
		private $_id;
		public function authenticate()
		{
                $model = new User;
				$user = $model->findByAttributes(array('Email'=>$this->username));
                if($user===null){
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }else
				{
                    if($user->isActive != 1)
					{
						//akan ter redirect ke controller site/denied.php
					}
					elseif($user->Password != $this->password || $user->Email != $this->username)
					{
						$this->errorCode=self::ERROR_PASSWORD_INVALID;
					}
					else
					{
                        $this->_id = $user->id;
						$this->username = $user->Email;
                        $this->errorCode=self::ERROR_NONE;
                    }
                }
				return !$this->errorCode;
		}
        
        public function getId() {
            return $this->_id;
        }
}