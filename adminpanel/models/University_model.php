<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University_model extends CI_Model
{
	
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }

    public function addUpdates($data)
    {
        if($this->db->insert('university', $data)){
           return true;

       }    
       return false;
   }

   public function fetchUpdates()
   {

        $this->db->where('user_id',$this->session->userdata('user_id'));
        $q = $this->db->get('university');
        if ($q->num_rows() > 0) {
            return $q->result();
        }
        return false;

   }
}

?>