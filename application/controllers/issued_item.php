<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class issued_item extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('issued_item_model');
	}
	public function index()
	{	
		$row['data']=$this->issued_item_model->get();
		$this->load->view('test', $row);
	}

}

/* End of file issued_item */
/* Location: ./application/controllers/issued_item */