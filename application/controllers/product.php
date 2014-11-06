<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}
	public function index()
	{	$lang=$this->uri->segment(3);
		if($lang=='np'){
		$this->session->set_userdata('locale','np');
		$row['data']=$this->product_model->get_np();
		$this->load->view('includes/header_view_np');
		$this->load->view('test', $row);
		$this->load->view('includes/footer_view');
	}

		elseif($lang=='en'){
		$this->session->set_userdata('locale','en');
		//$this->load->view('includes/header_view');
		$row['data']=$this->product_model->get();
		$this->load->view('test', $row);
		//$this->load->view('includes/footer_view');
		}
		else
		{
		$row['data']=$this->product_model->get_np();
		$this->load->view('includes/header_view');
		$this->load->view('test', $row);
		$this->load->view('includes/footer_view');
		}

	}


}

/* End of file product.php */
/* Location: ./application/controllers/product.php */