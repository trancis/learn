<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class castingfox2 extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -  
   *    http://example.com/index.php/welcome/index
   *  - or -
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

  /*--------------loading all pages-----------*/
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

/*------------check email already exit in sign up or not -----------------------------*/
  public function checkemail()
  {
    $email=$this->input->post('email');

    $this->load->model('casting');
     $result=$this->casting->checkemail($email);
  //echo "hi";
  echo $result ;
   
    
    
  }


/*--------------------signing up for newsletter----------------------*/
    public function newsletter()
  {
        
     $email=$this->input->post('email');
     $this->load->model('casting');
     $result=$this->casting->newsletter($email);

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
     //  header("Location: index.php?/castingfox/loadPage/Post_your_casting.php");

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
  $max_age=$this->input->post('max_age');
  //$city=$this->input->post('city1').$this->input->post('city2');   
  $array=$this->input->post('address');
  $ethnicarray_string="";
  if($array!="")
    foreach ($array as $row) {
         $ethnicarray_string=$ethnicarray_string.','.$row;
    }
  $ethnicarray_string=ltrim($ethnicarray_string,','); 

  $array1=$this->input->post('address1');
  $indlangarray_string="";
  if($array1!="")
    foreach($array1 as $row1){
          $indlangarray_string=$indlangarray_string.','.$row1;
    }
  $indlangarray_string=ltrim($indlangarray_string,',');

  $array2=$this->input->post('address2');
  $interlangarray_string="";
  if($array2!="")
  foreach($array2 as $row2){
    //if("input[type=checkbox]:checked")
      $interlangarray_string=$interlangarray_string.','.$row2;
  }
  $interlangarray_string=ltrim($interlangarray_string,',');

  $array3=$this->input->post('address3');
  $complexionarray_string="";
  if($array3!="")
  foreach($array3 as $row3){
    //if("input[type=checkbox]:checked")
      $complexionarray_string=$complexionarray_string.','.$row3;
  }
  $complexionarray_string=ltrim($complexionarray_string,',');

  $array4=$this->input->post('address4');
  $bodyarray_string="";
  if($array4!="")
  foreach($array4 as $row4){
    //if("input[type=checkbox]:checked")
      $bodyarray_string=$bodyarray_string.','.$row4;
  }
  $bodyarray_string=ltrim($bodyarray_string,',');

  $array5=$this->input->post('address5');
  $hairlengarray_string="";
  if($array5!="")
  foreach($array5 as $row5){
    //if("input[type=checkbox]:checked")
      $hairlengarray_string=$hairlengarray_string.','.$row5;
  }
  $hairlengarray_string=ltrim($hairlengarray_string,',');
  

  $array6=$this->input->post('address6');
  $haircolarray_string="";
  if($array6!="")
  foreach($array6 as $row6){
    //if("input[type=checkbox]:checked")
      $haircolarray_string=$haircolarray_string.','.$row6;
  }
  $haircolarray_string=ltrim($haircolarray_string,',');

  $array7=$this->input->post('address7');
  $eyecolarray_string="";
  if($array7!="")
  foreach($array7 as $row7){
    //if("input[type=checkbox]:checked")
      $eyecolarray_string=$eyecolarray_string.','.$row7;
  }
  $eyecolarray_string=ltrim($eyecolarray_string,',');

  $show_profile_photo=$this->input->post('photo');
  $video_files=$this->input->post('video_files');
  $audio_files=$this->input->post('audio_files');
  $passport=$this->input->post('passport');
  $piercing=$this->input->post('piercing');
  $tattoo=$this->input->post('tattoo');
  
  $h_min_range=$this->input->post('h_min_value');
  $h_max_range=$this->input->post('h_max_value');
  print_r($h_min_range);
  print_r($h_max_range);

  $weight_min_range=$this->input->post('w_min_value');
  $weight_max_range=$this->input->post('w_max_value');

  $data=array(
            //'relevance'=>$relevance,
            'cc'=>$gender,
            'min_age_u_can_play'=>$min_age,
            'max_age_u_can_play'=>$max_age,
            'ethnic_apperance'=>$ethnicarray_string,
            'fluent_indian_languages'=>$indlangarray_string,
            'fluent_international_languages'=>$interlangarray_string,
            'complexion'=>$complexionarray_string,
            'body_type'=>$bodyarray_string,
            'hair_length'=>$hairlengarray_string,
            'hair_colour'=>$haircolarray_string,
            'eye_colour'=>$eyecolarray_string,
            'have_passport'=>$passport,
            'have_visible_piercings'=>$piercing,
            'have_visible_tattoos'=>$tattoo,
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
       print_r($k);
       print_r($f_ind_lang);
       print_r($min_age);
       $this->load->model('casting');         
       $result=$this->casting->advanced_filter($a,$k,$f_ind_lang,$f_int_lang,$body,$h_len,$h_col,$e_col,$pass,$pier,$tattoo);
       print_r($result);
      // die;

       /*foreach($result as $rows){
        $name=$rows->actor_name;
        print_r($name);
        die;
        $id=$rows->id;
        $name=$rows->actor_name;
        $content=' <div  style="" align="right">
                             <button type="button" class="previous"><div class="myCloseDiv" style="padding-right:44px;"><div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                             <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                             </div></button>
                           <span class="font1"> &nbsp; PAGE</span> <select style="padding: 5px 15px 5px 10px;"><option>1</option></select>  <span class="font1"> &nbsp;OF 29</span>
                             <button type="button" class="previous"><div class="myCloseDiv"  style="padding-right:44px;"><div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                             <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                             </div></button>
                        </div>
              <div class="row clearfix" style="padding-left:30px;">';       
          $content.='<div class="img">';
          $content.= '<img class="lazy" src="assets/img/uploads/" alt="actorImage" width="160" height="160"/>';
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
          $content.= '</div></div>';
          $content.='<div align="right">
                             <button type="button" class="previous"><div class="myCloseDiv" style="padding-right:44px;"><div class="glyphicon glyphicon-chevron-left" style="color:rgb(89,89,89)"></div>
                             <div class="font2 close1" style="font-size:14px !important;">&nbsp;PREVIOUS</div>
                             </div></button>
                           <span class="font1"> &nbsp; PAGE</span> <select style="padding: 5px 15px 5px 10px;"><option>1</option></select>  <span class="font1"> &nbsp;OF 29</span>
                             <button type="button" class="previous"><div class="myCloseDiv"  style="padding-right:44px;"><div class="font2 close1" style="font-size:14px !important;">&nbsp;NEXT</div>
                             <div class="glyphicon glyphicon-chevron-right" style="color:rgb(89,89,89)"></div>
                             </div></button>
                        </div>';
          echo $content;
        }*/

       //$this->load->view('castingfox/find_actor',$data);


  //    header("Location: index.php?/castingfox/loadPage/find_actor.php");
         

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
   $data['company']=$result[0]['company'];
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
public function allActor()
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
  $res=$this->casting->allActorPic();

  $data['data']=$result;
  $data['pic']=$res;

   foreach($result as $row)
   {
      $name=$row->actor_name;
      $id=$row->id;
      foreach($res as $rows)
      {
        $actor_id=$rows->actor_id;
        $current_profile=$rows->current_profile;
        $image=$rows->image_name;
        if($id==$actor_id && $current_profile==1)
        {
          
          $content='<div class="img">';
          $content.= '<img class="lazy" src="assets/img/uploads/'.$image.'" alt="actorImage" width="160" height="160"/>';
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
          $content.= '</div>';
          echo $content;
                           }}}

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
    $production_id=$rows->production_type_id;
    $casting_id=$rows->id;

    $productionDetail=$this->casting->getProductionDetail($production_id);
    $data['language']=$productionDetail[0]['lang_req'];
    $data['description']=$productionDetail[0]['description'];
    $data['production_type']=$productionDetail[0]['production_type'];

     $characterDetail=$this->casting->getCharacterDetail($casting_id);
     
   

   foreach ($characterDetail as $rows)
       {
       $id=$rows->character_id;
       print_r($id);
       die;
       

       }
   $this->load->view('castingfox/ReviewYourCasting',$data);
      


}}


}


?>