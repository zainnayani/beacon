<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        $this->load->helper('language');
        $this->load->model('Shop_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('string');
		$this->load->library('email');
		$this->load->library('parser');	
		if (!$this->session->userdata('company') === 'shop') {
			redirect('auth/login','refresh');
		}
    }

	public function index()
	{
		$data = array();
		$data['shopData'] =  $this->Shop_model->fetchShopData();
		$this->load->view('shop',$data);
	}

	public function addOffer()
	{
		$this->load->view('addoffer');
	}

	public function add_shop_offer()
	{
		$this->form_validation->set_rules('shop_name', 'Shop Name', 'required');
		$this->form_validation->set_rules('shop_no', 'Shop Number', 'required');
		$this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('offer_title', 'Offer Title date', 'required');
		$this->form_validation->set_rules('offer_description', 'Offer Description', 'required');

	if ($this->form_validation->run() == TRUE) {

	     		$config['upload_path']          = './uploads';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('offer_img'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('shop');
                        exit();
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $avatar = $data['upload_data']['file_name'];
                }

		$data = array(
				'user_id' =>$this->input->post('user_id')	,
				'shop_name' =>$this->input->post('shop_name')	,
				'shop_no' =>$this->input->post('shop_no')	,
				'brand_name' =>$this->input->post('brand_name')	,
				'product_name' =>$this->input->post('product_name') ,
				'offer_title' =>$this->input->post('offer_title')	,
				'offer_description' =>$this->input->post('offer_description'),
				'offer_img' => $avatar
			);
	}

	if($this->Shop_model->addShopForm($data)){
		redirect('shop');
	}
	else{
		redirect('shop');
	}

}

}

?>