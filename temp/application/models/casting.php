<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class casting extends CI_Model {

public function signup($data)
{
	$this->load->database();
    $query=$this->db->insert('user_info', $data); 
    
  
    return $query;
    
}
public function newsletter($param1)
{
   $this->load->database();
   $query="insert into newsletter(email_id) values('$param1')";
   $s=$this->db->query($query);
   return $s;

}
Public function postCasting($data_char,$data,$data1,$data2)
{
	$this->load->database();
   $query=$this->db->insert('production_type', $data);
   $query2="select ProductionId from production_type where production_name='$data[production_name]'";
    $exec_query2=$this->db->query($query2)->result_array();        
    $j=$exec_query2[0]['ProductionId'];
    $data2['production_id']=$j;
    $data1['production_type_id']=$j;
    $query3=$this->db->insert('production_info', $data2); 

    $query4=$this->db->insert('casting',$data1);      
      $query1=$this->db->insert('character', $data_char);     

    // $query5="select id from casting where casting_title='$data1[casting_title]'";
  
  // $exec_query1=$this->db->query($query5)->result_array();
   //$id=$exec_query1[0]['id'];
    //$data_char['id']=$id;
    
    //print_r($data_char);
    //die;


   /*  $query6="select char_id from character where char_role_desc='$data_char[char_role_desc]'";
   $exec_query3=$this->db->query($query6)->result_array();
   $char_id=$exec_query3[0]['char_id'];
   print_r($char_id);
   die;*/

     //$query6="insert into casting_character (casting_id,character_id) values('$id','$char_id')";

}


}	
?>