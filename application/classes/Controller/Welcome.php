<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
	
	public function before()
	{

	}

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$this->response->status(404);
	}
	public function action_test()
	{
		$view=View::factory('front/index')->set('title','test!!! title')->bind_global('TITLE', 'hello');
		
		$this->response->body($view);
	}

} // End Welcome
