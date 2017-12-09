<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 07/12/2017
 * Time: 10:45 AM
 */

class Ci_Admin extends CI_Controller
{
    private $CI;
    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
    }

    public function index()
    {
        $this->template->set('title', 'SB Admin - Start Bootstrap Template');
        $this->template->load('admin_view', 'contents' , 'admin/index.php');
    }
}