<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Bluemark extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->helper('language');
       $this->load->model('Api_model');
       $this->load->library('form_validation');
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */

  
	public function offers_get()
	{
    $token = $_SERVER['HTTP_TOKEN'];
    $data = array(
      'status' => 0,
      'code' => -1,
      'msg' => 'Bad Request',
      'data' => null
    );
    if($this->checkToken($token))
      {
        $offers = $this->Api_model->getOffers();
        if (isset($offers)) {
          $data = array(
            'status' => 1,
            'code' => 1,
            'msg' => 'success',
            'data' => $offers
          );
        }else{
          $data = array(
            'status' => 1,
            'code' => 1,
            'msg' => 'success',
            'data' => null
          );
        }
      }else
      {
        $data['msg'] = 'Request Unknown or Bad Request';
      }
    $this->response($data, REST_Controller::HTTP_OK);
	}

  public function checkToken($token)
  {
    if ($token == SECRET_TOKEN) {
      return true;
    }
    return false;
  }
    	
}