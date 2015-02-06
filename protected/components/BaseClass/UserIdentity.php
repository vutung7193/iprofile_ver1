<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    
    private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{$user=  User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
            
            
		$users=array(
			// username => password
			'admin'=>'21232f297a57a5a743894a0e4a801fc3',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==  md5($this->password))
                  
                    
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
                {
                    
                    $this->_id=$user->id;
			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
                    
                }
			
		return !$this->errorCode;
	}
}