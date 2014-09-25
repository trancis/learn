<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class audition extends CI_Model {

public function signup($data)
{
	$this->load->database();
    $query=$this->db->insert('user_info', $data); 
    return $query;

    
  
    /*$query2="select id from signup where email_id='$param1'";
    $exec_query2=$this->db->query($query2)->result_array();
    $j=$exec_query2[0]['id'];


    $query3="insert into signup_info(id,dob,invite_code,alert) values($j,'$param9','$param10','$param11')";
    $exec_query3=$this->db->query($query3); 
    echo "Values Successfully Inserted into Signup_info";  */
}
public function login($email,$pass)
{
	$this->load->database();
	$query="Select count(*)as number from login_info where email_id='$email' and password='$pass' ";
	$exec_query1=$this->db->query($query)->result_array();
	return  ($exec_query1);
	
	




}


}	
?>