<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issued_item_model extends MY_Model {


	public function get()
	{	
			$this->load->model('issued_item_model','issue');
			$q=$this->issue->get_all();
			return $q;
	}

	

}

/* End of file issued_items_model.php */
/* Location: ./application/models/issued_items_model.php */
