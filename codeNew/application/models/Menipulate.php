<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menipulate extends CI_Model {

public function updatepass($newpassword,$oldpassword)
{

	$this->load->database();
	$query="update user_info set password='$newpassword' where password='$oldpassword'";
	$pass_update=$this->db->query($query);
	
	
	return  ($pass_update);	

}
public function castingcall($sesiondata)
{
$this->load->database();
$query="select *from casting where casting_director='$sesiondata'";
//$data=$this->db->query($query)->result_array();

foreach ($query->result_array() as $row) {
       
  $infoFromDatabaseArray[] = $row['casting_director'];


 }
return($infoFromDatabaseArray[]);

}
}
?>