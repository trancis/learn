<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manipulate extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }
    public function index()
	{
		$this->load->view('welcome_message');

	}
	public function loadPage($pagename="index"){
		$this->load->view('castingfox/'.$pagename);
	}
	public function updatepass()
   {

	    $pass = md5($this->input->post('current_pass'));
      $newpass =md5($this->input->post('new_pass')); 
      $newpass_again =md5($this->input->post('new_pass_again')); 
      $this->load->model('Menipulate');
      if($newpass==$newpass_again)
      {
         $result=$this->Menipulate->updatepass($newpass, $pass);
      $this->load->view('castingfox/Account');
       echo "Update Password";
     
      }
      
      
        else{
            echo "Update failed";
           }
      }
      public function casting_call()
      {
        $seon=$this->session->userdata('name');
        print_r($seon);
        $this->load->model('Menipulate');
      $hld= $this->Menipulate->castingcall($seon);
        print_r($hld);
       /*if($result==$seon)
       {
        $this->load->view('castingfox/CastingCall');
       }
       else
       {
        $this->load->view('castingfox/ManageYourCall');
       }
      */
      }

   }

?>