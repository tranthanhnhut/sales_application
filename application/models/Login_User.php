<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function CheckLoginAdmin($user,$pass)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user',$user);
        $this->db->where('pass',md5($pass));
        $this->db->limit(1);
        $result = $this->db->get();
        if($result->num_rows() == 1)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }
}