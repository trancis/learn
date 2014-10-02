<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class casting extends CI_Model {

/*------------------Signup----------------*/
public function signup($data)
{
	$this->load->database();
    $query=$this->db->insert('user_info', $data); 
    return $query;  
}

/*------------It is checking whether email already exists in user_info table or not----*/
public function checkemail($param1)
{
  $this->load->database();
  $query="select * from user_info where user_id='$param1'"; 

  $s=$this->db->query($query);

  $res=$s->num_rows(); 
 
  return $res;
 
 
}

/*--------------------signing up for newsletter----------------------*/
public function newsletter($param1)
{
   $this->load->database();
   $query="insert into newsletter(email_id) values('$param1')";
   $s=$this->db->query($query);
   return $s;

}

public function login($email,$pass)
{
  $this->load->database();
  $query="Select * from user_info where user_id='$email' and password='$pass' ";
  $exec_query1=$this->db->query($query)->result_array();
  return  $exec_query1;
  
}
public function getjobtitle()
{
  $a=$this->session->userdata('id');
  $query1="select * from actor_profile where id='12'";
  $exec_query2=$this->db->query($query1)->result_array();
  return $exec_query2;
}



/*--------------------posting the casting---------------------*/
Public function postCasting($data_char,$data1)
{
	$this->load->database();
  $query4=$this->db->insert('casting',$data1);      
  $query1=$this->db->insert('charactor', $data_char);   

  $query5="select id from casting where casting_title='$data1[casting_title]'";
  
  $exec_query1=$this->db->query($query5)->result_array();
  $id=$exec_query1[0]['id'];
  $data_char['id']=$id;
    
   $query6="SELECT id FROM `charactor` WHERE char_role_desc = '$data_char[char_role_desc]'" ;
   $exec_query3=$this->db->query($query6)->result_array();
   $char_id=$exec_query3[0]['id'];
 

  $query6="insert into casting_character (casting_id,character_id) values('$id','$char_id')";
  $exec_query4=$this->db->query($query6);
  return $exec_query4;

}

/*---------------------search option of  find actors---------------------*/
Public function search($name)
{
$this->load->database();
$query="select * from actor_profile,actor_photos where id=actor_id and actor_name like '%$name%' and current_profile='1'";
$query1=$this->db->query($query)->result();
//print_r($query1);
//die;
return $query1;


}
/*-----------------Advanced filtering of find_actor---------------------*/
public function advanced_filter($a,$k,$f_ind_lang,$f_int_lang,$body,$h_len,$h_col,$e_col,$pass,$pier,$tattoo){
 
 $this->load->database();
 //$query="SELECT * FROM  `actor_profile` WHERE gender = '$a' AND ethnic_apperance LIKE '%$k%' AND fluent_indian_languages LIKE '%$f_ind_lang%' AND fluent_international_languages LIKE '%$f_int_lang%' AND complexion LIKE '%$comp%' AND body_type LIKE '%$body%' AND hair_length LIKE '%$h_len%' AND hair_colour LIKE '%$h_col%' AND eye_colour LIKE '%$e_col%' AND have_passport='$pass' AND have_visible_piercings='$pier' AND have_visible_tattoos='$tattoo'";
 $query="SELECT * FROM  `actor_profile` WHERE gender = '$a' AND ethnic_apperance LIKE '%$k%' AND fluent_indian_languages LIKE '%$f_ind_lang%' AND fluent_international_languages LIKE '%$f_int_lang%' AND body_type LIKE '%$body%' AND hair_length LIKE '%$h_len%' AND hair_colour LIKE '%$h_col%' AND eye_colour LIKE '%$e_col%' AND have_passport='$pass' AND have_visible_piercings='$pier' AND have_visible_tattoos='$tattoo'";
 print_r($query);
 
 $query1=$this->db->query($query)->result_array();
 return $query1;

}
public function edit_info(){
  $this->load->database();
  $query="select * from user_info where id='82'";
  $query1=$this->db->query($query)->result_array();
  return $query1;
}
/*----------------------------for showing data of find actor----------------------*/
/*-----------------------------extracting actors information ------------------*/
public function profile($param1)
{
  $this->load->database();
  $query="select *  from actor_profile where id='$param1'";
   $query1=$this->db->query($query)->result_array();
  return $query1;
   
}

/*-----------------Getting actor profile pic----------*/
public function profilepic($param1)
{

  $this->load->database();
  $query="select image_name  from actor_photos where actor_id='$param1' and current_profile='1'";

   $query1=$this->db->query($query)->result_array();
    return $query1;
}

/*-------------------------getting emailId of actor to show on contact page-------------------*/
public function getEmail($param1)
{
  $this->load->database();
  $query="select email_id  from signup where id='$param1'";
   $query1=$this->db->query($query)->result_array();
   return $query1;
}

/*----------------------------getting actor all photos to be shown on ActorContact-------------------*/
public function getPhotos($param1)
{
   $this->load->database();
   $query="select * from actor_photos where actor_id='$param1'";
   $query1=$this->db->query($query)->result();
   
   return $query1;
}

/*-------------------------to  display all actors data on find actor page--------------------------*/
public function allActor()
{
  $this->load->database();
  $query=$this->db->get("actor_profile");
  return $query->result();
}

/*-------------------------to  display all actors images on find actor page--------------------------*/
public function allActorPic()
{
  $this->load->database();
  $query=$this->db->get("actor_photos");
  return $query->result();
}

/*---------------------------------------------Review your casting---------------------------------*/
public function reviewCasting()
{

   $this->load->database();
  $query2="select max(id)as high from casting";
  $query3=$this->db->query($query2)->result_array();
  $id=$query3[0]['high'];
  $query="select * from casting where id='$id'";
  $query1=$this->db->query($query)->result();
 return $query1;
}


/*-----------------------------------getting detail of character for review your casting--------------------*/
public function getCharacterId($casting_id)
{
 $this->load->database();
 $query="select character_id from casting_character  where casting_id='$casting_id'";
 $query1=$this->db->query($query)->result();
return $query1;
}

/*---------------------getting details of character for review your casting------------------------*/
public function getCharacterDetail($id)
{
     $this->load->database();
     $query="SELECT * FROM `charactor` WHERE id='$id';";
     $query1=$this->db->query($query)->result();
     return $query1;
}

/*--------------------------------------narrow list on find actor--------------------------*/
Public function narrowList($data)
{
$this->load->database();
$query="select * from actor_profile,actor_photos where id=actor_id  and current_profile='1' and ";
foreach ($data as $rows =>$value)
{
  if ($value!=''){

    if($rows=='min_age_u_can_play')
    {
      $query.="$rows>=$value and ";
    }
    else if($rows=='max_age_u_can_play')
    {
      $query.="$rows<=$value and ";
    }
     else if($rows=='ethnic_apperance')
    {
      $query.="$rows in ( $value  )and ";
    }
    else{
    $query.="$rows='$value' and ";
     }
}

}
$query1=rtrim($query,' and ');
$query2=$this->db->query($query1)->result();
return $query2;

}

/*-----------------------------------search by sort---------------------------------------*/
public function searchByLatest()
{
  $this->load->database();
$query="select * from actor_profile,actor_photos where id=actor_id  and current_profile='1' order by id desc ";
$query2=$this->db->query($query)->result();
return $query2;
}

/*-----------------------------------search by name---------------------------------------*/
public function searchByName()
{
  $this->load->database();
$query="select * from actor_profile,actor_photos where id=actor_id  and current_profile='1' order by actor_name ASC ";
$query2=$this->db->query($query)->result();
return $query2;
}

/*-----------------------------------search Random--------------------------------------*/
public function searchRandom()
{
  $this->load->database();
$query="select * from actor_profile,actor_photos where id=actor_id  and current_profile='1' order by rand() ";
$query2=$this->db->query($query)->result();
return $query2;
}


}	
?>