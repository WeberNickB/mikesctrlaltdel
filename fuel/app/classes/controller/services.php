<?php

class Controller_Services extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Services &raquo; Index';
		$this->template->content = View::forge('services/index', $data);
	}

}
