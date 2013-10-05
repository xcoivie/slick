<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {
  public function __construct() {
    parent::__construct();
      $this->init();      
  }
    
  public function init()
  {
    // $this->load->model(MODEL_ROLE_COMMON_URL);
    //    $this->load->helper('url');
    //    $this->load->view(VIEW_ROLE_URL);
    $this->load->model('role/role_modeler');    
  } 
  public function add(){
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    $this->load->view(VIEW_ROLE_ADD_URL);
  }
  public function add_excute(){
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('param_role_name', 'param_role_name', 'required');
    $this->form_validation->set_rules('param_role_description', 'param_role_description', 'required');
    if($this->form_validation->run() === FALSE){
      $data['error'] = 'error';
    }else{
      $this->role_mongo_cn->set_NewRole();
    }
    $this->load->view('home');   
  }
    
    
 }
     