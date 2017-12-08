<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 07/12/2017
 * Time: 2:48 PM
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(isset($_POST['subLogin']))
        {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            echo $user;
            echo $pass;
            die;
        }
        $this->load->view('login/login');
    }
}