<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function get()
	{
			
			$q=$this->db->get('cat_fruit');
			$this->output->set_content_type('application/json;charset=utf-8');
			$res['roshan']=$q->result();
			return json_encode($res,JSON_UNESCAPED_UNICODE);
			//return $q->result();
			//print_r($q);
			//echo $this->session->userdata('locale');
	}
	public function get_np()
	{
			
			$q=$this->db->get('cat_fruit_np');
			//$this->output->set_content_type('application/json;charset=utf-8');
			//return json_encode($q,JSON_UNESCAPED_UNICODE);
			return $q->result();
			//print_r($q);
			//echo $this->session->userdata('locale');
	}
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */