<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auditionfox extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('auditionfox/'.$pagename);
	}

	/*-----------For signup---------------*/
	public function signup()
	{
	   $email=$this->input->post('email');
       $password=md5($this->input->post('password'));
       $f_name=$this->input->post('first');
       $m_name=$this->input->post('middle');
       $l_name=$this->input->post('last');
       $gender=$this->input->post('dropdown');
       $dd=$this->input->post('dd');
       $mm=$this->input->post('mm');
       $yy=$this->input->post('yy');
       $dob=$yy."-".$mm."-".$dd;
       $pincode=$this->input->post('pincode');
       $invite_code=$this->input->post('invite_code');
       $alert=$this->input->post('alert');
       $informed=$this->input->post('informed');
       
       $data=array(
        'user_id'=>$email,
        'password'=>$password,
       	'first_name'=>$f_name,
       	'middle_name'=>$m_name,
       	'last_name'=>$l_name,
        'gender'=>$gender,
       	'dob'=>$dob,
       	'pincode'=>$pincode,
       	'keep_me_inform'=>$informed,
       	'invite_code'=>$invite_code,
       	'alert'=>$alert,
       	);
       
       
       $this->load->model('audition');
       $result=$this->audition->signup($data);
       header("Location: index.php?/auditionfox/loadPage/loginModal.php");
        
      
	}

	/*-----------For Login----------------*/
		public function login()
		{
		
			//session_start(); //Start the session.  Call on every page that will have the login.
			$email = $this->input->post('email');
			$pass = $this->input->post('password'); 
            $this->load->model('audition');
            $result=$this->audition->login($email,$pass);
           $i=$result[0]['number'];
           if($i==1){
           	
            $this->session->set_userdata('email',$email);

           }
           else{
           	echo "logined failed";
           }
 

			 //Get login and password the user has sent.

			/*$_SESSION['logged_in'] = $email; //Keep track of the username in the session
			$this->session->set_userdata('logged_in','email');
			$a=$this->session->userdata('logged_in');
			print_r($a);
			die;*/
			//if ($this->session->set_userdata('logged_in') != 1)
        header("Location: index.php?/auditionfox/loadPage/home");
        //redirect(base_url() . 'index.php?login', 'refresh'); 

			//$a=$this->session->userdata('email');
			//print_r($a);
			//die;
			/*if (!isset( $_SESSION[ 'logged_in' ] &&  $_SESSION[ 'logged_in' ] == true))
			   {
			    //If user is valid, pass them along to the next page.
			    echo "You are logged in<br/>";   
               }
			else 
				{
					echo "Not a valid login";
				}*/

			//	else
			//		header("Location: index.php?/auditionfox/loadPage/account.php");
		}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */