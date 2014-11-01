<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

	public function index()
	{	
		$this->load->view('includes/header_view');
		$this->load->view('book_view');
		$this->load->view('includes/footer_view');
	}
	public function test()
	{
	$dt1=$this->input->post('dt1');
	$dt2=$this->input->post('dt2');
	if(strtotime($dt1) < strtotime($dt2)){
    echo $dt2."is greater than".$dt1."<br>";
	}else{
    echo $dt1."is greater than".$dt2."<br>";
	 }
	echo $dt1.$dt2;
	}
}

/* End of file book.php */
/* Location: ./application/controllers/book.php */