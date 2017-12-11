<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_User extends CI_Model
{
    private $table = "user";
    private $select_colun = array('id,user,email,group_admin,status');
//    private $order_column = array(null,null,null,null);
    public function __construct()
    {
        parent::__construct();
    }

    public function CheckLoginAdmin($user,$pass)
    {
        $this->db->select('*');
        $this->db->from($this->table);
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

    public function queryUser()
    {
        $this->db->select($this->select_colun);
        $this->db->from($this->table);
        $result = $this->db->get();
        if($result)
        {
            return $result->result_array();
        }
        else
        {
            return false;
        }
    }
}