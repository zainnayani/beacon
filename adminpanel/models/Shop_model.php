<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   Shop_model extends CI_Model
{
	
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }

    public function addShopForm($data)
    {
        if($this->db->insert('shop', $data)){
           return true;

       }    
       return false;
   }

   public function fetchShopData()
   {

        $this->db->where('user_id',$this->session->userdata('user_id'));
        $q = $this->db->get('shop');
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return false;

   }
}

?>