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
            'br1' => array('name' => 'Trang chủ', 'url'=>'wp-admin'),
            'br2' => array('name' => 'Thành Viên'),
        );

        $query = $this->db->select('id,	user,email,group_admin')->from('user')->get()->result_array();
        $this->template->breadcrum($breadcrum);
        $this->template->set('title', 'Thành Viên');
        $this->template->load('admin_view', 'contents' , 'user/index.php',array('ordering'=>$query,'csrf'=>$this->csrf));
    }

    public function dataUser(){
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $query = $this->db->select('id,	user,email,group_admin,status,remove')->where(array('remove' => 1))->get('user');
        $row = array();
        $data = array();
        foreach($query->result_array() as $key =>$value)
        {
            $data[] = array(
                $value['user'],
                $value['email'],
                ($value['group_admin']==1)? 'Quản trị viên' : (($value['group_admin']==2)?'Nhập sản phẩm':(($value['group_admin']==3)?'Tiếp hóa đơn': '')),
                ($value['status']) ? 'Hoạt động' : 'Tạm ngừng hoạt động',
                $value[] = '<a href="'.base_url('wp-admin/user/edit/'.$value['id']).'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>',
                $value[] = '<a class="userdelete"><span value="'.$value['id'].'" data="'.$value['user'].'" name="delete" id="userDelete"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>'
            );
        }
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data
        );
        echo json_encode($output);
        exit();
    }

    public function edit($id){
        if(isset($_POST['btnEditUser']))
        {
            $user =  $this->security->xss_clean($this->input->post('user'));
            $email =  $this->security->xss_clean($this->input->post('email'));
            $group_admin =  $this->security->xss_clean($this->input->post('group_admin'));
            $status =  $this->security->xss_clean($this->input->post('status'));
            //`id`, `name`, `title`, `alt`, `des`, `slug`, `img`, `menu_image`, `order_menu`, `parent`, `status`
            $data = array(
                'user'   => $user,
                'email'  => $email,
                'group_admin'    => $group_admin,
                'status' => $status
            );
            $this->db->where('id', $this->security->xss_clean($this->input->post('id')));
            $this->db->update('user', $data);
            $this->db->trans_complete();
            if ($this->db->trans_status() === TRUE)
            {
                redirect('wp-admin/user');
            }

        }
        else if(isset($_POST['btnBackUser']))
        {
            redirect(base_url('wp-admin/user'));
        }
        else
        {
            $query = $this->db->get_where('user', array('id' => $id));
            $this->template->set('title', 'Chỉnh sửa thành viên');
            $this->template->load('admin_view', 'contents' , 'user/edit.php',array('csrf'=>$this->csrf,'data'=>$query->result_array()));
        }

    }

    public function delete()
    {
        $data = array(
            'remove' => 0
        );
        $id = $this->security->xss_clean($this->input->post('idUser'));
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        if ($this->db->trans_status() === TRUE){
            echo 1;
            exit();
        }
    }


}