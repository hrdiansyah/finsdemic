<?php
Class User extends CI_Model
{
 function Login($username, $password)
 {
   $this -> db -> select('id, Cusername, Cemail, Cpassword, CfullName, CdateReg, Cstatus');
   $this -> db -> from('corp_member');
   $this -> db -> where('Cusername', $username);
   $this -> db -> where('Cpassword', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>