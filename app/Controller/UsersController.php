<?php
class UsersController extends AppController {
	
	public function login(){
		
	}

	/**
	 * Register 
	 * 1. Check password
	 * 2. Check username & email
	 * 3. Save user info
	 * 4. Redirect Reffer or Info page
	 * Enter description here ...
	 */
	public function register(){
		if($this->request->is("post")){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$retype   = $_POST['retype'];
			$email	  = $_POST['email'];
			
			if($password != $retype){
				$this->Session->setFlash();
			}
		}
	}
}

?>