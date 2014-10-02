<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class audition extends CI_Model {

public function signup($data)
{
	$this->load->database();
   $query=$this->db->insert('user_info', $data); 
   $s= mysql_insert_id();
   $query1="insert into actor_profile (id) values('$s')";
   $result=$this->db->query($query1);

    
}

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
	$query="Select count(*)as number from login_info where email_id='$email' and password='$pass' ";
	$exec_query1=$this->db->query($query)->result_array();
	return  ($exec_query1);
	
}

public function login1($email)
{
  $this->load->database();
  $quer="select id from user_info where user_id='$email' ";
  $r=$this->db->query($quer)->result_array();
  return ($r);
}

public function editProfile($data)
{
	$this->load->database();
  $query=$this->db->insert('actor_profile', $data);
}

/*-------------------------------------to get the casting detail for FindCastingCalls------------------------------*/
public function CastingCall()
{
  $this->load->database();
  $query=$this->db->get("casting");
  return $query->result();
}

/*------------------------------------narrow list option on FindCastingCalls------------------------*/
public function narrowList($data)
{
  $this->load->database();
  $query="select * from casting,casting_character,charactor where casting.id=casting_character.casting_id and casting_character.character_id=charactor.id and ";
foreach ($data as $rows =>$value)
{
  if ($value!='')
    $query.="$rows='$value' and ";
}
$query1=rtrim($query,' and ');
$query2=$this->db->query($query1)->result();
//print_r($query2);
//die;
return $query2;

}

/*--------------------------------------------------search on findcastingcalls--------------------*/
public function search($data)
{
  $this->load->database();
  $query ="select * from casting where ";
  foreach ($data as $rows =>$value)
{
  $query.="$rows like '%$value%' and ";
}
$query1=rtrim($query,' and ');
$query2=$this->db->query($query1)->result();
return $query2;
//print_r($query2);
//die;
}


}	
?>