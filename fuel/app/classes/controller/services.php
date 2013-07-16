<?php

class Controller_Services extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Services &raquo; Index';
		$this->template->content = View::forge('services/index', $data);
	}
	
	public function action_consulting()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Services &raquo; Index';
		$this->template->content = View::forge('services/consulting', $data);
	}
	
	public function action_repair()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Services &raquo; Index';
		$this->template->content = View::forge('services/repair', $data);
	}
	
	public function action_networking()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Services &raquo; Index';
		$this->template->content = View::forge('services/networking', $data);
	}

}
