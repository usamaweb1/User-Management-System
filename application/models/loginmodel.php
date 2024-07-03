<?php
class loginmodel extends CI_Model
{
    public function signup($array){
        
      return $this->db->insert('users',$array);
    }
    public function signin($email,$pas)
    {
        $q=$this->db->where(['email'=>$email,'password'=>$pas])
        ->get('users');
        if($q->num_rows())
        {
            return $q->row()->id;
        }
        else{
            return false;
        }
    }
    
} 
?>