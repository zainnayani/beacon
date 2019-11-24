<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('University_model');
		$this->load->helper('string');
		$this->load->library('parser');
		if (!$this->session->userdata('company') === 'university') {
			redirect('auth/login','refresh');
		}
    }

	public function index()
	{
		$data = array();
		$data['uniData'] =  $this->University_model->fetchUpdates();
		$this->load->view('university',$data);
	}
	
	public function adduniversityupdates()
	{
		$this->load->view('adduniversityupdates');
	}

	public function add_university_info()
	{
		$this->form_validation->set_rules('uni_name', 'Unuiversity Name', 'required');
		$this->form_validation->set_rules('prog_name', 'Program Name', 'required');
		$this->form_validation->set_rules('course_name', 'Course Name', 'required');
		$this->form_validation->set_rules('info_title', 'Information Title', 'required');
		$this->form_validation->set_rules('info_description', 'Information Description', 'required');

	if ($this->form_validation->run() == TRUE) {

		$data = array(
			'user_id' =>$this->input->post('user_id')	,
			'uni_name' =>$this->input->post('uni_name')	,
			'prog_name' =>$this->input->post('prog_name')	,
			'course_name' =>$this->input->post('course_name')	,
			'info_title' =>$this->input->post('info_title') ,
			'info_description' =>$this->input->post('info_description')
			);
		}

		if ($this->University_model->addUpdates($data)) {
			redirect('university');
		}else {
			redirect('adduniversityupdates');
		}
	}
}
