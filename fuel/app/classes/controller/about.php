<?php

class Controller_About extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'About &raquo; Index';
		$this->template->content = View::forge('about/index', $data);
	}

}
