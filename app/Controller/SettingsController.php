<?php

class SettingsController extends AppController {
	
	public function index(){
	}
	
	public function data(){
		if($this->request->is("post")){
			pr($this->request);
		}
	}
	
	public function account(){
		
	}
	
	public function advance(){
	
	}
	
	public function password(){
	
	}
}

?>