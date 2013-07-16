<?php

class Controller_Contact extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Contact &raquo; Index';
		$this->template->content = View::forge('contact/index', $data);
	}

}
