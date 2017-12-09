<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 09/12/2017
 * Time: 4:50 PM
 */

class Ci_User extends CI_Controller
{
    private $CI;
    public $csrf = null;

    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
    }

    public function index()
    {
        $breadcrum = array(
            'br1' => array('name' => 'Dashboard', 'url'=>'wp-admin'),
            'br2' => array('name' => 'Thành Viên'),
        );
        $this->template->breadcrum($breadcrum);
        $this->template->set('title', 'Thành Viên');
        $this->template->load('admin_view', 'contents' , 'user/index.php');
    }
}