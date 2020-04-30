<?php 

namespace App\Helpers\Auth\Login;

use App\Model\User\User;

class loginHelpers
{
	private $model;

	private $arrayLogin;
	
	public function __construct()
	{
		$this->model = new User();
	}

	public function ExistUser($user,$pass)
	{
		$this->arrayLogin = $this->model->getLoginData();
		echo $this->nameUser($user).' - '.$this->password($pass).' <br>'.$pass.' ++ '.$this->arrayLogin->nombre;
		if ( $this->nameUser($user) &&  $this->password($pass) ) {
			return true;
		}else{
			return false;
		}
	}

	private function nameUser($user)
	{
		return ( $this->arrayLogin->nombre == $user ) ? true : false ;
	}

	private function password($password)
	{
		return ( password_verify($password,$this->arrayLogin->password) ) ? true : false ;
	}
	
}
