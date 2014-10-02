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

    /*--------------loading all pages-----------*/
	public function loadPage($pagename="index"){
		$this->load->view('auditionfox/'.$pagename);
	}
	/*-----For finding next audition signup-------*/
	public function signupactor()
	{
		$email=$this->input->post('email');
		$data['email']=$email;
		$this->load->view('auditionfox/SignupActor.php',$data);
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
	/*--------For launching page----------*/
	    public function newsletter()
	{
        
     $email=$this->input->post('email');
     $this->load->model('audition');
     $result=$this->audition->newsletter($email);
    }


	/*-----------For Login----------------*/
		public function login()
		{
		
			//session_start(); //Start the session.  Call on every page that will have the login.
			$email = $this->input->post('email');

			$pass = $this->input->post('password'); 
            $this->load->model('audition');
            $result=$this->audition->login($email,$pass);
                       
            $k=$this->audition->login1($email);
            $id=$k[0]['id'];
            
           $i=$result[0]['number'];
           if($i==1){
           	
            $this->session->set_userdata('email',$email);
            $id=$this->session->set_userdata('id',$id);
            
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


	public function editProfile()
	{
        $first = $this->input->post('first');
        $second = $this->input->post('second');
        $last = $this->input->post('last');
        $actorName=$first." ".$second." ".$last;
        $jobTitle = $this->input->post('jobTitle');
        $gender = $this->input->post('gender');
        $body_type=$this->input->post('bodytype');
        $dd = $this->input->post('dd');
        $mm = $this->input->post('mm');
        $yy = $this->input->post('yy');
        $date=$yy."-".$mm."-".$dd;
        $indian = $this->input->post('indian');
        $passport = $this->input->post('passport');
        $dd1 = $this->input->post('dd1');
        $mm1 = $this->input->post('mm1');
        $yy1 = $this->input->post('yy1');
        $dateExpire=$yy1."-".$mm1."-".$dd1;
        $indian = $this->input->post('indian');
        $min_age = $this->input->post('min_age');
        $max_age = $this->input->post('max_age');
        $complexion = $this->input->post('complexion');
        $weight = $this->input->post('weight'); 
        $height = $this->input->post('height');
        $hairLength=$this->input->post('hairLength');         
        $hairColor=$this->input->post('hairColor');
        $eyeColor=$this->input->post('eyeColor');   

        
        $array=$this->input->post('ethnicapp');
        $ethnicarray_string="";
        foreach($array as $appearence){
          $ethnicarray_string=$ethnicarray_string.','.$appearence;
        }
        $ethnicarray_string=ltrim($ethnicarray_string,',');
       // var_dump($ethnicarray_string);
       // die;

        
        $array1=$this->input->post('athletics');
        $gamearray_string="";
        foreach($array1 as $game){
          $gamearray_string=$gamearray_string.",".$game;
        }
        $gamearray_string=ltrim($gamearray_string,",");
       //var_dump($gamearray_string);
       //die;


        $array2=$this->input->post('martial');
        $martialarray_string="";
        foreach($array2 as $martialArt){
          $martialarray_string=$martialarray_string.','.$martialArt;
        }
        $martialarray_string=ltrim($martialarray_string,',');
        var_dump($martialarray_string);
        //die;

        $array3=$this->input->post('musical');
        $musicalarray_string="";
        foreach($array3 as $instrument){
          $musicalarray_string=$musicalarray_string.','.$instrument;
        }
        $musicalarray_string=ltrim($musicalarray_string,',');
        var_dump($musicalarray_string);
        //die;
        
        $array4=$this->input->post('performance');
        $performancearray_string="";
        foreach($array4 as $performance){
          $performancearray_string=$performancearray_string.','.$performance;
        }
        $performancearray_string=ltrim($performancearray_string,',');

        $array5=$this->input->post('dance');
        $dancearray_string="";
        foreach($array5 as $dance){
          $dancearray_string=$dancearray_string.','.$dance;
        }
        $dancearray_string=ltrim($dancearray_string,',');
       $array6=$this->input->post('indianfluentlang');
       $indlangarray_string="";
        foreach($array6 as $indian_fluent_lang){
          $indlangarray_string=$indlangarray_string.','.$indian_fluent_lang;
        }
        $indlangarray_string=ltrim($indlangarray_string,',');

       $array7=$this->input->post('internationalfluentlang');
       $interlangarray_string="";
        foreach($array7 as $international_fluent_lang){
          $interlangarray_string=$interlangarray_string.','.$international_fluent_lang;
        }
        $interlangarray_string=ltrim($interlangarray_string,',');
        
        $array8=$this->input->post('indianfluentaccent');
        $indianaccentarray_string="";
        foreach($array8 as $indian_accent){
          $indianaccentarray_string=$indianaccentarray_string.','.$indian_accent;
        }     
        $indianaccentarray_string=ltrim($indianaccentarray_string,',');

        $array9=$this->input->post('internationalfluentaccent');
        $internationalaccentarray_string="";
        foreach($array9 as $international_accent){
          $internationalaccentarray_string=$internationalaccentarray_string.','.$international_accent;
        }
        $internationalaccentarray_string=ltrim($internationalaccentarray_string,',');
        
        $array10=$this->input->post('disability');
        $disabilityarray_string="";
        foreach($array10 as  $disability){
           $disabilityarray_string=$disabilityarray_string.','.$disability;
        }
        $disabilityarray_string=ltrim($disabilityarray_string,',');
       
        $piercing=$this->input->post('piercing');
        $tattoo=$this->input->post('tattoo');
        $licence=$this->input->post('licence');    
 
       if($this->input->post('os1')!="")
      $other_skills=$this->input->post('os1').",";
      if($this->input->post('os2')!="")
      $other_skills.=$this->input->post('os2').",";
      if($this->input->post('os3')!="")
      $other_skills.=$this->input->post('os3').",";
      if($this->input->post('os4')!="")
      $other_skills.=$this->input->post('os4').",";
      if($this->input->post('os5')!="")
      $other_skills.=$this->input->post('os5').",";
      if($this->input->post('os6')!="")
      $other_skills.=$this->input->post('os6').",";
      if($this->input->post('os7')!="")
      $other_skills.=$this->input->post('os7').",";
      if($this->input->post('os8')!="")
      $other_skills.=$this->input->post('os8').",";
      if($this->input->post('os9')!="")
      $other_skills.=$this->input->post('os9').",";
      if($this->input->post('os10')!="")
      $other_skills.=$this->input->post('os10').",";
      if($this->input->post('os11')!="")
      $other_skills.=$this->input->post('os11').",";
      if($this->input->post('os12')!="")
      $other_skills.=$this->input->post('os12').",";
      if($this->input->post('os13')!="")
      $other_skills.=$this->input->post('os13').",";
      if($this->input->post('os14')!="")
      $other_skills.=$this->input->post('os14').",";
      if($this->input->post('os15')!="")
      $other_skills.=$this->input->post('os15');
       $other_skills=trim($other_skills,',');

     
             $data=array(
              'id'=>'44',//$this->session->userdata('id'),
             'actor_name'=>$actorName,
             'job_title'=>$jobTitle,
             'gender'=>$gender,
             'dob'=>$date,
             'indian'=>$indian,
             'have_passport'=>  $passport,
             'passport_expiry_date'=>$dateExpire,
             'min_age_u_can_play'=>$min_age,
             'max_age_u_can_play'=>$max_age,
             'complexion'=> $complexion,
             'Height'=> $height,
             'weight'=> $weight,
             'hair_length'=> $hairLength,
             'hair_colour'=>$hairColor,
             'eye_colour'=>$eyeColor,
             'ethnic_apperance'=> $ethnicarray_string,
             'body_type'=> $body_type,
             'have_visible_piercings'=>$piercing,
             'have_visible_tattoos'=>$tattoo,
             'have_driving_license'=>$licence,
             'game_played'=>$gamearray_string,
            'martial_arts'=>$martialarray_string,
             'musical_instruments'=>$musicalarray_string,
             'performances'=>$performancearray_string,
             	'dance_styles'=>$dancearray_string,
              'fluent_indian_languages'=>$indlangarray_string,
              'fluent_international_languages'=>$interlangarray_string,
              'accent_of_indian_language'=>$indianaccentarray_string,
              'accent_of_international_language'=>$internationalaccentarray_string,
              'other_skills'=>$other_skills,
              'disabilities'=>$disabilityarray_string

             	);
   $as=$data['id'];
print_r($as);
//die;
         $this->load->model('audition');
         //$res=$this->audition->signupid();
       $result=$this->audition->editProfile($data);

	}	

/*-------------------------------------to get the casting detail for FindCastingCalls------------------------------*/
public function CastingCall()
{
  $this->load->model('audition');
  $data['result']=$this->audition->CastingCall();
  $this->load->view('auditionfox/FindCastingCalls',$data);
}  


/*---------------------------narrow list option of find casting calls=-----------------------------*/
public function narrowList()
{
  $result='';
  $data['char_min_age']=$this->input->post('min_age');
  $data['char_max_age']=$this->input->post('max_age');
  $data['char_gender']=$this->input->post('gender');
  $data['char_city']=$this->input->post('data');
  $data['production_type']=$this->input->post('type');

  $revelance=$this->input->post('revelance');
  $this->load->model('audition');
  $result=$this->audition->narrowList($data);
  $content='';
foreach ($result as $rows)
{
    $projectName=$rows->casting_title;
    $productionType=$rows->production_type;
    $payRate=$rows->pay_role;
    $Producer=$rows->production_company;
    $date=$rows->shooting_date;
    $array=explode('-',$date);
    $date1=mktime(0, 0, 0, $array[1], $array[2], $array[0]);
    $startDate=date('F d,Y',$date1);

  $content.='<div class="col-md-12 column round"><div class="col-md-2 column">2 hours ago</div>';
  $content.='<div class="col-md-2 column">'.$productionType.'</div>';
  $content.=' <div class="col-md-2 column"><a href="" class="orangeanchor"><u>'.strtoupper($projectName).'</u></a></div>';
  if($payRate=='')
  { 
  $content.='<div class="col-md-2 column">Unpaid Role</div>'; 
   } 
  else 
  { 
  $content.='<div class="col-md-2 column">Paid Role</div>';
  }           
  $content.=' <div class="col-md-2 column">Start Date: <br>'. $startDate.'</div>';           
  $content.='<div class="col-md-2 column">Producer: <br>'. $Producer.' </div></div>';                 
}
echo $content; 
  
}  

/*---------------------------------------search----------------------------------*/
public function search()
{
  $name=$this->input->post('name');
  $option=$this->input->post('data');
  $array=explode(',', $option);
  $array_length=sizeof($array);
   
  for($i=0;$i<$array_length;$i++){
    $data[$array[$i]]=$name;  
}
$this->load->model('audition');
$result=$this->audition->search($data);
$content='';
foreach ($result as $rows)
{
    $projectName=$rows->casting_title;
    $productionType=$rows->production_type;
    $payRate=$rows->pay_role;
    $Producer=$rows->production_company;
    $date=$rows->shooting_date;
    $array=explode('-',$date);
    $date1=mktime(0, 0, 0, $array[1], $array[2], $array[0]);
    $startDate=date('F d,Y',$date1);

  $content.='<div class="col-md-12 column round"><div class="col-md-2 column">2 hours ago</div>';
  $content.='<div class="col-md-2 column">'.$productionType.'</div>';
  $content.=' <div class="col-md-2 column"><a href="" class="orangeanchor"><u>'.strtoupper($projectName).'</u></a></div>';
  if($payRate=='')
  { 
  $content.='<div class="col-md-2 column">Unpaid Role</div>'; 
   } 
  else 
  { 
  $content.='<div class="col-md-2 column">Paid Role</div>';
  }           
  $content.=' <div class="col-md-2 column">Start Date: <br>'. $startDate.'</div>';           
  $content.='<div class="col-md-2 column">Producer: <br>'. $Producer.' </div></div>';                 
}
echo $content; 
}









}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */