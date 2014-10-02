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
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }
/*-------------to load launch  page-------*/
	public function index()
	{
		$this->load->view('castingfox/launch');

	}
  public function getstarted()
  {
    $this->load->view('castingfox/getstarted');
  }
  public function check()
  {
    $email=$this->input->post('email');

    $this->load->model('casting');
     $result=$this->casting->checkemail($email);
  //echo "hi";
    if($result==0)
    {
       $data['email']=$email;
      $this->load->view('castingfox/complete_your_registration',$data);
    }
    
  }
  

/*------------It is checking whether email already exists in user_info table or not----------*/
  public function checkemail()
  {
    $email=$this->input->post('email');

    $this->load->model('casting');
     $result=$this->casting->checkemail($email);
  //echo "hi";

  echo $result ;    
   
    //die;
  }


/*--------------------signing up for newsletter----------------------*/
    public function newsletter()
  {
        
     $email=$this->input->post('email');
     $this->load->model('casting');
     $result=$this->casting->newsletter($email);

    }


  /*--------------loading all pages-----------*/
	public function loadPage($pagename="index")
	{
     $this->load->view('castingfox/'.$pagename);
	}
  /*----------------For loading the signup Page-------*/
  public function signup()
  {  
     $this->load->view('castingfox/signup');
  }
	/*-----------For submitting the signup entries---------------*/
	public function loadSignup()
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
       $this->load->view('castingfox/Post_your_casting');
       
        
      
	}

/*---------------------Complete registeration----------------------*/
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
       $this->load->view('/castingfox/Post_your_casting');
     

}

/*--------------------posting the casting---------------------*/
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
      $submissionNote=$this->input->post('submissionNote');
      $subtype_production=$this->input->post('cc');
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
 
          
          $data1=array(
            'casting_title'=>$projectname,
            'production_company'=>$productionCompany,
            'casting_director'=>$castingDirector,
            'casting_team_info'=>$teamInfo,
            'production_type'=>$productionType,
            'lang_req'=>$language,
            'subtype_production'=>$subtype_production,
            'project_description'=>$description,
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
            'note_for_actor'=>$noteForActor,
            'submission_note'=>$submissionNote
            );
          
       $this->load->model('casting');
       $r=$this->casting->postCasting($data_char,$data1 );
       header("Location: index.php?/castingfox/reviewCasting");

}

/*---------------------Extracting images for find actors---------------------*/
public function extractImage()
{
   $this->load->model('casting');
   $result=$this->casting->extractImage( );
print_r($result);
die;

    
} 

/*-----------------Advanced filtering of find_actor---------------------*/
public function advanced_filter(){
 $relevance=$this->input->post('show');


  $gender=$this->input->post('cc');
  $min_age=$this->input->post('min_age');
  print_r($min_age);
  //die;
  $max_age=$this->input->post('max_age');
  //$city=$this->input->post('city1').$this->input->post('city2');
  if($this->input->post('north_ind')!="")
  $appearence=$this->input->post('north_ind');
if($this->input->post('south_ind')!="")
$appearence.=",".$this->input->post('south_ind');
if($this->input->post('north_e')!="")
$appearence.=",".$this->input->post('north_e');
if($this->input->post('s')!="")
$appearence.=",".$this->input->post('s');
if($this->input->post('nepali2')!="")
$appearence.=",".$this->input->post('nepali2');
if($this->input->post('caucasian2')!="")
  $appearence.=",".$this->input->post('caucasian2');
if($this->input->post('middle_east2')!="")
  $appearence.=",".$this->input->post('middle_east2');
if($this->input->post('east_asian2')!="")
  $appearence.=",".$this->input->post('east_asian2');
if($this->input->post('african2')!="")
  $appearence.=",".$this->input->post('african2');
if($this->input->post('mixed2')!="")
  $appearence.=",".$this->input->post('mixed2');
  $appearence=trim($appearence,',');

        if($this->input->post('eng')!="")
        $indian_fluent_lang=$this->input->post('eng');
        if($this->input->post('hindi')!="")
        $indian_fluent_lang.=",".$this->input->post('hindi');
        if($this->input->post('bengali')!="")
        $indian_fluent_lang.=",".$this->input->post('bengali');
        if($this->input->post('telugu')!="")
        $indian_fluent_lang.=",".$this->input->post('telugu');
        if($this->input->post('marathi')!="")
        $indian_fluent_lang.=",".$this->input->post('marathi');
        if($this->input->post('tamil')!="")
        $indian_fluent_lang.=",".$this->input->post('tamil');
        if($this->input->post('urdu')!="")
        $indian_fluent_lang.=",".$this->input->post('urdu');
        if($this->input->post('gujrati')!="")
        $indian_fluent_lang.=",".$this->input->post('gujrati');
        if($this->input->post('kannad')!="")
        $indian_fluent_lang.=",".$this->input->post('kannad');
        if($this->input->post('punjabi')!="")
        $indian_fluent_lang.=",".$this->input->post('punjabi');
        if($this->input->post('malayalam')!="")
        $indian_fluent_lang.=",".$this->input->post('malayalam');
        if($this->input->post('oriya')!="")
        $indian_fluent_lang.=",".$this->input->post('oriya');
        if($this->input->post('bhojpuri')!="")
        $indian_fluent_lang.=",".$this->input->post('bhojpuri');
        if($this->input->post('rajasthani')!="")
        $indian_fluent_lang.=",".$this->input->post('rajasthani');
        $indian_fluent_lang=trim($indian_fluent_lang,',');

        if($this->input->post('signlang')!="")
        $international_fluent_lang=",".$this->input->post('signlang');
        if($this->input->post('arabic')!="")
        $international_fluent_lang.=",".$this->input->post('arabic');
        if($this->input->post('mandarin')!="")
        $international_fluent_lang.=",".$this->input->post('mandarin');
        if($this->input->post('french')!="")
        $international_fluent_lang.=",".$this->input->post('french');
        if($this->input->post('german')!="")
        $international_fluent_lang.=",".$this->input->post('german');
        if($this->input->post('italian')!="")
        $international_fluent_lang.=",".$this->input->post('italian');
        if($this->input->post('japanese')!="")
        $international_fluent_lang.=",".$this->input->post('japanese');
        if($this->input->post('nepali')!="")
        $international_fluent_lang.=",".$this->input->post('nepali');
        if($this->input->post('pashto')!="")
        $international_fluent_lang.=",".$this->input->post('pashto');
        if($this->input->post('russian')!="")
        $international_fluent_lang.=",".$this->input->post('russian');
        if($this->input->post('spanish')!="")
        $international_fluent_lang.=",".$this->input->post('spanish');
        $international_fluent_lang=trim($international_fluent_lang,',');


  /*$indian_fluent_lang=$this->input->post('eng').",".$this->input->post('hindi');
  ." ".$this->input->post('bengali')." ".$this->input->post('telugu')." ".$this->input->post('marathi')." ".$this->input->post('tamil')." ";
  $indian_fluent_lang.=$this->input->post('urdu')." ".$this->input->post('gujrati')." ".$this->input->post('kannad')." ".$this->input->post('punjabi')." ".$this->input->post('malayalam')." ";
  $indian_fluent_lang.=$this->input->post('oriya')." ".$this->input->post('bhojpuri')." ".$this->input->post('rajasthani');
  $international_fluent_lang=$this->input->post('signlang')." ".$this->input->post('arabic')." ".$this->input->post('mandarin')." ";
  $international_fluent_lang.=$this->input->post('french')." ".$this->input->post('german')." ".$this->input->post('italian')." ";
  $international_fluent_lang.=$this->input->post('japanese')." ".$this->input->post('')." ".$this->input->post('pashto')." ";
  $international_fluent_lang.=$this->input->post('russian')." ".$this->input->post('spanish');*/
  $show_profile_photo=$this->input->post('photo');
  $video_files=$this->input->post('video_files');
  $audio_files=$this->input->post('audio_files');
  $passport=$this->input->post('passport');
  $piercing=$this->input->post('piercing');
  $tattoo=$this->input->post('tattoo');

  if($this->input->post('white')!="")
  $complexion=$this->input->post('white');
  if($this->input->post('fair')!="")
  $complexion.=",".$this->input->post('fair');
  if($this->input->post('wheatish')!="")
  $complexion.=",".$this->input->post('wheatish');
  if($this->input->post('dusky')!="")
  $complexion.=",".$this->input->post('dusky');
  if($this->input->post('dark_brown')!="")
  $complexion.=",".$this->input->post('dark_brown');
  $complexion=trim($complexion,',');

  $height_range=$this->input->post('h_min_value')." ".$this->input->post('h_max_value');

  $weight_range=$this->input->post('w_min_value')." ".$this->input->post('w_max_value');

  if($this->input->post('')!="")
  $body_type=$this->input->post('thin');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('athletic');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('curvy');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('average');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('heavyset');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('plussize');
  if($this->input->post('')!="")
  $body_type.=",".$this->input->post('muscular');
  if($this->input->post('')!="")
  $body_type=trim($body_type,',');
  
  if($this->input->post('')!="")
  $hair_length=$this->input->post('bald_total');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('bald_top');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('receding');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('short_hair');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('ear_leng');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('chin_length');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('shoulder_leng');
  if($this->input->post('')!="")
  $hair_length.=",".$this->input->post('below_should');
  if($this->input->post('')!="")
  $hair_length=trim($hair_length,',');

  if($this->input->post('')!="")
  $hair_color=$this->input->post('bald_color');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('black');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('dark_brown');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('light_brown');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('salt_pepper');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('grey');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('white_silver');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('blonde_yellow');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('red');
  if($this->input->post('')!="")
  $hair_color.=",".$this->input->post('mixed_other');
  $hair_color=trim($hair_color,',');
  
  if($this->input->post('')!="")
  $eye_color=$this->input->post('black_eye');
  if($this->input->post('')!="")
  $eye_color.=",".$this->input->post('brown_eye');
  if($this->input->post('')!="")
  $eye_color.=",".$this->input->post('hazel');
  if($this->input->post('')!="")
  $eye_color.=",".$this->input->post('grey_eye');
  if($this->input->post('')!="")
  $eye_color.=",".$this->input->post('green_eye');
  $eye_color=trim($eye_color,',');
  $data=array(
            //'relevance'=>$relevance,
            'cc'=>$gender,
            'min_age_u_can_play'=>$min_age,
            'max_age_u_can_play'=>$max_age,
            'ethnic_apperance'=>$appearence,
            'fluent_indian_languages'=>$indian_fluent_lang,
            'fluent_international_languages'=>$international_fluent_lang,
            'complexion'=>$complexion,
            'body_type'=>$body_type,
            'hair_length'=>$hair_length,
            'hair_colour'=>$hair_color,
            'eye_colour'=>$eye_color,
              
              'have_passport'=>$passport,
              'have_visible_piercings'=>$piercing,
              'have_visible_tattoos'=>$tattoo
             );  
  
  
       
       $a=$data['cc'];
       $k=$data['ethnic_apperance'];    
       $f_ind_lang=$data['fluent_indian_languages'];
       $f_int_lang=$data['fluent_international_languages'];
       $comp=$data['complexion'];
       $body=$data['body_type'];
       $h_len=$data['hair_length'];
       $h_col=$data['hair_colour'];
       $e_col=$data['eye_colour'];
       $pass=$data['have_passport'];
       $pier=$data['have_visible_piercings'];
       $tattoo=$data['have_visible_tattoos'];
       $this->load->model('casting'); 
       print_r($f_ind_lang);
       print_r($f_int_lang);
       print_r($comp);
       
        
       $result=$this->casting->advanced_filter($a,$k,$f_ind_lang,$f_int_lang,$comp,$body,$h_len,$h_col,$e_col,$pass,$pier,$tattoo);
       print_r($result);
       
       //$res=$this->casting->
       $this->load->view('castingfox/find_actor',$data);

  //    header("Location: index.php?/castingfox/loadPage/find_actor.php");
         

}

/*---------Login form---------*/
public function login()
    {
    
      $email = $this->input->post('email');
      $pass = md5($this->input->post('password')); 
      $this->load->model('casting');
      $result=$this->casting->login($email,$pass);
      $result_length=sizeof($result);
      
      if($result_length==1){
      $job=$this->casting->getjobtitle();
      $job_title=$job[0]['job_title'];
      
      $k=$result[0]['first_name'].' '.$result[0]['middle_name'].' '.$result[0]['last_name'];
      $this->session->set_userdata('name',$k);  
      $this->session->set_userdata('id',$id);       
      $this->session->set_userdata('gender',$result[0]['gender']);
      $this->session->set_userdata('pincode',$result[0]['pincode']);
      $this->session->set_userdata('password',$result[0]['password']);  
      $this->session->set_userdata('mobile_no',$result[0]['mobile_no']);
      $this->session->set_userdata('type',$result[0]['type']);
      $this->session->set_userdata('email',$email);
      
      $this->session->set_userdata('job_title',$job_title);
    
      echo '1';
     }

     else
     {
      echo '0';
     }
        
    }
/*-------------After successful login , loading home page--------*/
    public function home()
    {
      $data['name']=$this->session->userdata('name');
      $data['job']=$this->session->userdata('job_title');
      $this->load->view('castingfox/home',$data);
    }


/*----------------For editing personal account (director) info---------*/
public function edit_info(){
       
   $this->load->model('casting');
   $result=$this->casting->edit_info(); 
   $data['user_id']=$result[0]['user_id'];
   $data['first_name']=$result[0]['first_name'];
   $data['middle_name']=$result[0]['middle_name'];
   $data['last_name']=$result[0]['last_name'];
   $data['company']=$result[0]['company'];
   $data['gender']=$result[0]['gender'];
   $data['pincode']=$result[0]['pincode'];
   $data['mobile_no']=$result[0]['mobile_no'];
   $this->load->view('castingfox/Account',$data);
      
}
/*-----------------------------extracting actors information for ActorProfile page------------------*/
public function profile($param1)
{
   $this->load->model('casting');
   $result=$this->casting->profile($param1);
     $res=$this->casting->profilepic($param1);
     $data['image']=$res[0]['image_name'];
  $data['name']= $result[0]['actor_name'];
  $data['job_title']= $result[0]['job_title'];
  $data['min']= $result[0]['min_age_u_can_play'];
  $data['max']= $result[0]['max_age_u_can_play'];
  $data['ethnic_apperance']=$result[0]['ethnic_apperance'];
  
  $data['complexion']= $result[0]['complexion'];
  $data['height']= $result[0]['Height'];
  $data['body_type']= $result[0]['body_type'];
  $data['weight']= $result[0]['weight'];
  $data['hair_colour']= $result[0]['hair_colour'];
  $data['eye_colour']= $result[0]['eye_colour'];
  $data['tattoo']=$result[0]['have_visible_tattoos'];
  $data['game']= $result[0]['game_played']."".$result[0]['martial_arts'];
  $data['instrument']=$result[0]['musical_instruments'];
  $data['dance_styles']=$result[0]['dance_styles'];
  $data['fluent_language']=$result[0]['fluent_indian_languages']."".$result[0]['fluent_international_languages'];
  $data['accent']=$result[0]['accent_of_indian_language']."".$result[0]['accent_of_international_language'];
  $data['license']=$result[0]['have_driving_license'];
  $data['id']=$param1;
  $this->load->view('castingfox/ActorProfile',$data); 

}  

/*-----------------------extracting actor data to be shown on ActorContact------------------------*/
public function actorContact($param1)
{
  $this->load->model('casting');
   $result=$this->casting->profile($param1);
   $pic=$this->casting->profilepic($param1);
   $email=$this->casting->getEmail($param1);
   $data['image']=$pic[0]['image_name'];
  $data['name']= $result[0]['actor_name'];
  $data['job_title']= $result[0]['job_title'];
  $data['email']=$email[0]['email_id'];
  $data['id']=$param1;
  $this->load->view('castingfox/ActorContact',$data); 
}

/*-------------------------------extracting info to be shown on ActorPhotos---------------------------*/
public function actorPhotos($param1)
{
 $this->load->model('casting');
   $result=$this->casting->profile($param1);
   $pic=$this->casting->profilepic($param1);
   $allPics=$this->casting->getPhotos($param1);
   $data['id']=$param1;
   $data['image']=$pic[0]['image_name'];
  $data['name']= $result[0]['actor_name'];
  $data['job_title']= $result[0]['job_title'];
  $data['allPics']=$allPics;
   $this->load->view('castingfox/ActorPhotos',$data); 
}

/*-------------------------to  display all actors images and data on find actor page--------------------------*/
public function Actors()
{
  $this->load->model('casting');
  $result=$this->casting->allActor();
  $res=$this->casting->allActorPic();

  $data['data']=$result;
  $data['pic']=$res;
  $this->load->view('castingfox/find_actor',$data);
}

/*-------------------------------search option of find actor------------------------------*/
public function search()
{
  $name=$this->input->post('name');
  $this->load->model('casting');
  $result=$this->casting->search($name);

  // $res=$this->casting->allActorPic();

 // $data['data']=$result;
  //$data['pic']=$res;
   $content='<div id="content"  style="width:890px;padding-left:30px;"class="defaults">
                                <div class="holder"></div>
                                 <ul id="itemContainer">';
foreach ($result as $rows)
  {
    $image=$rows->image_name;
    $id=$rows->id;
    $name=$rows->actor_name;
             
          $content.= '<li class="img"><img src="assets/img/preload.png" width="160" height="160" data-original="assets/img/uploads/'.$image.'" alt="image">';
//'<img class="lazy" src="" alt="actorImage" width="160" height="160"/>';
          $content.= '<div class="desc" style="background:black;padding-top:5px;">';
          $content.= '<div class="text-center" style="color:rgb(255,166,105)"><u><a href="index.php?/castingfox/profile/'.$id.'" target="_blank"  class="anchor" data-placement="top" data-toggle="tooltip"   title="View Profile" class="tooltip">'.$name.'</a></u></div>';
          $content.= '<div style="color:white;padding: 5px 0px;">';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="Add to bookmark" class="tooltip" style="padding-right:10px;"><i class="glyphicon glyphicon-star" ></i></a>';
          $content.='<a href="index.php?/castingfox/actorphotos/'.$id.'" target="_blank" class="anchor1" data-toggle="tooltip" data-placement="top"  title="More Photos" class="tooltip" style="padding-right:10px;"> <i class="glyphicon glyphicon-picture" ></i></a>';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See videos" class="tooltip" style="padding-right:10px;"> <span > <span class="recorder" style="display:inline-block;margin-top:-3px;"></span></span></a>';
          $content.=  '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See resume" class="tooltip" style="padding-right:10px;">  <i class="glyphicon glyphicon-file" ></i></a>';
          $content.=  '<a href="index.php?/castingfox/actorContact/'. $id.'" target="_blank" class="anchor1" data-toggle="tooltip"  data-placement="top" title="send message" class="tooltip" style="padding-right:1px;"><i class="glyphicon glyphicon-phone-alt" ></i></a>';
          $content.=   '</div>';
          $content.= '</div>';
          $content.=  '<div class="text-center fontsize11 font5" style="padding-top: 5px;">Audition Fox</div>';
          $content.= '</li>';

                  }
                  $content.='</ul>
<div class="holder"></div>
                                </div>  <script type="text/javascript">lazyLoadImages();</script>';
                                echo $content;
                  

  }

/*---------------------------------------------Review your casting---------------------------------*/
public function reviewCasting()
{
   $this->load->model('casting');
   $result=$this->casting->reviewCasting(); 
   foreach ($result as $rows)
    {
    $data['casting_title']=$rows->casting_title;
    $data['casting_director']=$rows->casting_director;
    $data['casting_team_info']=$rows->casting_team_info;
    $data['production_location']=$rows->production_location;
    $data['notes_for_actor']=$rows->note_for_actor;
    $data['wherer_the_submit']=$rows->wherer_the_submit;
    $data['language']=$rows->lang_req;
    $data['description']=$rows->project_description;
    $data['production_type']=$rows->production_type;
    $data['production_company']=$rows->production_company;

    $date=$rows->audition_date;
    $array=explode('-',$date);
    $date1=mktime(0, 0, 0, $array[1], $array[2], $array[0]);
    $data['audition_date']=date('F d,Y',$date1);
 
    $date2=$rows->call_back_date;
    $arr=explode('-',$date2);
    $date3=mktime(0, 0, 0, $arr[1], $arr[2], $arr[0]);
    $data['call_back_date']=date('F d,Y',$date3);
    
     $date4=$rows->shooting_date;
    $array2=explode('-',$date4);
    $date5=mktime(0, 0, 0, $array2[1], $array2[2], $array2[0]);
    $data['shooting_date']=date('F d,Y',$date5);

     $date6=$rows->exp_date;
    $array3=explode('-',$date6);
    $date7=mktime(0, 0, 0, $array3[1], $array3[2], $array3[0]);
    $data['exp_date']=date('F d,Y',$date7);
    $timestamp2 = strtotime($date6);
     $data['exp_day'] = date('D', $timestamp2);

    $data['can_view']=$rows->can_view;
    $data['pay_role']=$rows->pay_role; 
    $casting_id=$rows->id;

   /* $productionDetail=$this->casting->getProductionDetail($production_id);*/
    

     $characterDetail=$this->casting->getCharacterId($casting_id);
     
   

   foreach ($characterDetail as $rows)
       {
       $id=$rows->character_id;
       $data['character']=$this->casting->getCharacterDetail($id);
       }
   $this->load->view('castingfox/ReviewYourCasting',$data);
      


}}

/*------------------------------Search by Age in find actor----------------------------------*/
public function searchByAge()
{
  $result='';
  $data['min_age_u_can_play']=$this->input->post('min_age');
  $data['max_age_u_can_play']=$this->input->post('max_age');
  $data['gender']=$this->input->post('gender');
 // $data['city']=$this->input->post('data');
  $revelance=$this->input->post('revelance');
 /* if($revelance=="bookmark")
  {
    $data['bookmark']=1;
  }*/

  $data['ethnic_apperance']=$this->input->post('appearance');
  
  $this->load->model('casting');
  $result=$this->casting->narrowList($data);
 
   $result_length=sizeof($result);
   if($result_length==0)
   {
    $content='<div class="font2 text-center" style="padding-top: 10px;font-size: 30px;">NO RESULT FOUND!</div>';
   }
       else
       {
        $content='  <div id="content"  style="width:890px;padding-left:30px;"class="defaults">
                                <div class="holder"></div>
                                 <ul id="itemContainer">';
 foreach ($result as $rows)
  {
    $image=$rows->image_name;
    $id=$rows->id;
    $name=$rows->actor_name;
                $content.= '<li class="img"><img src="assets/img/preload.png" width="160" height="160" data-original="assets/img/uploads/'.$image.'" alt="image">';
          $content.= '<div class="desc" style="background:black;padding-top:5px;">';
          $content.= '<div class="text-center" style="color:rgb(255,166,105)"><u><a href="index.php?/castingfox/profile/'.$id.'" target="_blank"  class="anchor" data-placement="top" data-toggle="tooltip"   title="View Profile" class="tooltip">'.$name.'</a></u></div>';
          $content.= '<div style="color:white;padding: 5px 0px;">';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="Add to bookmark" class="tooltip" style="padding-right:10px;"><i class="glyphicon glyphicon-star" ></i></a>';
          $content.='<a href="index.php?/castingfox/actorphotos/'.$id.'" target="_blank" class="anchor1" data-toggle="tooltip" data-placement="top"  title="More Photos" class="tooltip" style="padding-right:10px;"> <i class="glyphicon glyphicon-picture" ></i></a>';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See videos" class="tooltip" style="padding-right:10px;"> <span > <span class="recorder" style="display:inline-block;margin-top:-3px;"></span></span></a>';
          $content.=  '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See resume" class="tooltip" style="padding-right:10px;">  <i class="glyphicon glyphicon-file" ></i></a>';
          $content.=  '<a href="index.php?/castingfox/actorContact/'. $id.'" target="_blank" class="anchor1" data-toggle="tooltip"  data-placement="top" title="send message" class="tooltip" style="padding-right:1px;"><i class="glyphicon glyphicon-phone-alt" ></i></a>';
          $content.=   '</div>';
          $content.= '</div>';
          $content.=  '<div class="text-center fontsize11 font5" style="padding-top: 5px;">Audition Fox</div>';
          $content.= '</li>';    
                      }
        
         $content.='</ul>
<div class="holder"></div></div><script type="text/javascript">lazyLoadImages();</script>';
      
     }
          echo $content;
           
}

/*---------------------------------------search by sort on find actor page -------------------------------*/
public function searchBySort()
{
  $selectedValue=$this->input->post('selectedValue');
  $this->load->model('casting');
  if ($selectedValue=="latest")
 {
    $result=$this->casting->searchByLatest();
  }

   if ($selectedValue=="alphabetic")
 {
    $result=$this->casting->searchByName();
  }
  
  if($selectedValue=="random")
  {

    $result=$this->casting->searchRandom();
  }

    $content='  <div id="content"  style="width:890px;padding-left:30px;"class="defaults">
                                <div class="holder"></div>
                                 <ul id="itemContainer">';

            foreach ($result as $rows)
  {
    $image=$rows->image_name;
    $id=$rows->id;
    $name=$rows->actor_name;
               $content.= '<li class="img"><img src="assets/img/preload.png" width="160" height="160" data-original="assets/img/uploads/'.$image.'" alt="image">';
          $content.= '<div class="desc" style="background:black;padding-top:5px;">';
          $content.= '<div class="text-center" style="color:rgb(255,166,105)"><u><a href="index.php?/castingfox/profile/'.$id.'" target="_blank"  class="anchor" data-placement="top" data-toggle="tooltip"   title="View Profile" class="tooltip">'.$name.'</a></u></div>';
          $content.= '<div style="color:white;padding: 5px 0px;">';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="Add to bookmark" class="tooltip" style="padding-right:10px;"><i class="glyphicon glyphicon-star" ></i></a>';
          $content.='<a href="index.php?/castingfox/actorphotos/'.$id.'" target="_blank" class="anchor1" data-toggle="tooltip" data-placement="top"  title="More Photos" class="tooltip" style="padding-right:10px;"> <i class="glyphicon glyphicon-picture" ></i></a>';
          $content.= '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See videos" class="tooltip" style="padding-right:10px;"> <span > <span class="recorder" style="display:inline-block;margin-top:-3px;"></span></span></a>';
          $content.=  '<a href="" class="anchor1" data-toggle="tooltip"  data-placement="top" title="See resume" class="tooltip" style="padding-right:10px;">  <i class="glyphicon glyphicon-file" ></i></a>';
          $content.=  '<a href="index.php?/castingfox/actorContact/'. $id.'" target="_blank" class="anchor1" data-toggle="tooltip"  data-placement="top" title="send message" class="tooltip" style="padding-right:1px;"><i class="glyphicon glyphicon-phone-alt" ></i></a>';
          $content.=   '</div>';
          $content.= '</div>';
          $content.=  '<div class="text-center fontsize11 font5" style="padding-top: 5px;">Audition Fox</div>';
          $content.= '</li>';

        }

 $content.='</ul>
<div class="holder"></div></div><script type="text/javascript">lazyLoadImages();</script>';
          echo $content;

}



}


?>