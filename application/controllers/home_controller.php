<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
   
    $this->init();
  }
  
	public function init()
	{
    $this->load->helper('url');
    $this->load->view('home_view');
   }
   
   public function  index()
   {
   }
}

