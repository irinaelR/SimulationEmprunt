<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

    public function checkLogin($pseudo){
        $query=$this->db->query('SELECT * FROM Users WHERE pseudo = ' . $pseudo);
        $res=null;
        foreach($query->result_array() as $r) {
            $res=$r;
        }
        return $res;
    }

    public function inscription($user){
        if(!isset($user['id'])){
            $user['id']='default';
        }
        $this->db->insert('users', $user);
    }
    
}