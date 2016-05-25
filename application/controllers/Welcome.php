<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('main_model');
	}

	public function index()
	{
		$this->load->helper('url');
		$post = $this->main_model->get_array('cerpen_posts', array('post_type'=>'post'));
		echo '<pre>';
		print_r($post);
		echo '</pre>';
	}
}
