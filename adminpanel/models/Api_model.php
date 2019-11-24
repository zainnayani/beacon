<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	public function getOffers()
	{
		$q = $this->db->get('shop');
		if ($q->num_rows()) {
			$i = 0;
			foreach ($q->result() as $row) {
				$data[$i] = $row;
				$data[$i]->img_url = base_url('uploads/'.$row->offer_img) ;
				$i++;
			}
			return $data;
		}
		return null;
	}

}

/* End of file Api_model.php */
/* Location: ./application/models/Api_model.php */