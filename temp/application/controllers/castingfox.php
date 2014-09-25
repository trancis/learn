<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class castingfox extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function loadPage($pagename="index")
	{
     $this->load->view('castingfox/'.$pagename);
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
       $c_name=$this->input->post('companyname');
       $pincode=$this->input->post('pincode');
       $mobile=$this->input->post('mobileno');
       $informed=$this->input->post('informed');

        $data=array(
        'user_id'=>$email,
        'password'=>$password,
       	'first_name'=>$f_name,
       	'middle_name'=>$m_name,
       	'last_name'=>$l_name,
       	'company'=>$c_name,
        'gender'=>$gender,
       	'pincode'=>$pincode,
       	'keep_me_inform'=>$informed,
       	'mobile_no'=>$mobile,
       	'type'=>'director'
       	);

       $this->load->model('casting');

       $r=$this->casting->signup($data );
       header("Location: index.php?/castingfox/loadPage/Post_your_casting.php");
        
      
	}

    public function newsletter()
	{
        
     $email=$this->input->post('email');
     $this->load->model('casting');
     $result=$this->casting->newsletter($email);
    }

    public function newSignUp()
	{
		
	   
      $email=$this->input->post('email');
       $password=md5($this->input->post('password'));
       $f_name=$this->input->post('first');
       $m_name=$this->input->post('middle');
       $l_name=$this->input->post('last');
       $gender=$this->input->post('dropdown');
       $c_name=$this->input->post('companyname');
       $pincode=$this->input->post('pincode');
       $mobile=$this->input->post('mobileno');
       $informed=$this->input->post('informed');

        $data=array(
        'user_id'=>$email,
        'password'=>$password,
       	'first_name'=>$f_name,
       	'middle_name'=>$m_name,
       	'last_name'=>$l_name,
       	'company'=>$c_name,
        'gender'=>$gender,
       	'pincode'=>$pincode,
       	'keep_me_inform'=>$informed,
       	'mobile_no'=>$mobile,
       	'type'=>'director'
       	);

       $this->load->model('casting');

       $r=$this->casting->signup($data );
       header("Location: index.php?/castingfox/loadPage/Post_your_casting.php");

}

 public function postCasting()
  {
    
       $auditionDate=$this->input->post('auditionDate');
       $audition_date=date('Y-m-d', strtotime($auditionDate));
       $callBackDate=$this->input->post('callBackDate');
       $call_back_date=date('Y-m-d', strtotime($callBackDate));
       $shootingDate=$this->input->post('shootingDate');
       $shooting_date=date('Y-m-d', strtotime($shootingDate));
       $requiresNudity=$this->input->post('requires_nudity');
      $nudity=$this->input->post('nudity');
      $projectname=$this->input->post('projectname');
      $view=$this->input->post('view');
       $whereSubmit=$this->input->post('whereSubmit');
       $payment=$this->input->post('payment');
       $payRate=$this->input->post('payRate');
       $noteCastingFox=$this->input->post('noteCastingFox');
       $noteForActor=$this->input->post('noteForActor');
       $productionType=$this->input->post('productionType');
       $productionCompany=$this->input->post('productionCompany');
       $castingDirector=$this->input->post('castingDirector');
       $teamInfo=$this->input->post('teamInfo');
       $productionLocation=$this->input->post('productionLocation');
       $dd=$this->input->post('dd');
       $mm=$this->input->post('mm');
       $yy=$this->input->post('yy');
       $date=$yy."-".$mm."-".$dd;

       $characterName=$this->input->post('characterName');
         $city=$this->input->post('city');
         $city1=$this->input->post('city1');
          $gender=$this->input->post('gender');
           $age=$this->input->post('age');
          $array=explode("-",$age);
           $r=$array[0];
           $s=$array[1];

           $city_name=$city . " ". $city1;
           $typeOfRole=$this->input->post('typeOfRole');
           $roleDescription=$this->input->post('roleDescription');
           $description=$this->input->post('description');
           $language=$this->input->post('language');

           $data_char=array(
        'char_id'=>'1',
        'char_name'=>$characterName,
        'char_city'=>$city_name,
        'char_gender'=>$gender,
         'char_min_age'=>$r,
        'char_max_age'=>$s,
        'char_role_type'=>$typeOfRole,
        'char_role_desc'=>$roleDescription,
        'requires_nudity'=>$nudity
        
        );
          
       $data=array(
        'production_name'=>$projectname      
        );
          
          $data1=array(
            'casting_title'=>$projectname,
            'production_company'=>$productionCompany,
            'casting_director'=>$castingDirector,
            'casting_team_info'=>$teamInfo,
            'production_location'=>$productionLocation,
            'audition_date'=>$audition_date,
            'call_back_date'=>$call_back_date,
            'shooting_date'=>$shooting_date,
            'can_view'=>$view,
            'wherer_the_submit'=>$whereSubmit,
            'exp_date'=>$date,
            'monitory_payment'=>$payment,
            'pay_role'=>$payRate,
            'note_for_casting_fox'=>$noteCastingFox,
            'requires_nudity'=>$requiresNudity,
            'notes_for_actor'=>$noteForActor
            );
          
           $data2=array(
            'production_type'=>$productionType,
            'description'=>$description,
            'lang_req'=>$language,
            );

    


       $this->load->model('casting');
       $r=$this->casting->postCasting($data_char,$data,$data1,$data2 );
       header("Location: index.php?/castingfox/loadPage/ReviewYourCasting.php");

}


}

/* Location: ./application/controllers/welcome.php */