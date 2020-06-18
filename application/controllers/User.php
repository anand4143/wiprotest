<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('users');
      
        // Session
        $this->load->library('session');
		$this->auth();
}

    public function index(){
        $usersList = $this->users->getassestList();
        $data['userList'] = $usersList;
        $this->load->view('admin/users/userList',$data);
    }
//need
    public function edit($id){
        $data = array();
        $data['user'] = $this->users->getUser($id);
       // echo "<pre>";print_r($data);//die('hiiiii');
        $this->load->view('admin/users/editUser',$data);
      
    }
//need
    public function update($id){
        //echo "<pre>";print_r($this->input->post());die('edit funcjkkjtions') ;
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('sapid', 'Sap Id', 'trim|required');
            $this->form_validation->set_rules('hostname', 'Host Name', 'trim|required');
            $this->form_validation->set_rules('loopback', 'Loopback', 'trim|required');
            $this->form_validation->set_rules('macid', 'Mac Id', 'trim|required');

            if($this->form_validation->run() == FALSE){
                $data['user'] = $this->users->getUser($id);
                $this->load->view('admin/users/editUser',$data);
            }else{
                $sapid   = $this->input->post('sapid');
                $hostname      = $this->input->post('hostname');
                $loopback  = $this->input->post('loopback');
                $macid   = $this->input->post('macid');
                $Data   = array(
                    'sapid'  => $sapid,
                    'hostname'     => $hostname,
                    'loopback' => $loopback,
                    'macid'  => $macid
                );
                $result     = $this->users->updateUser($id,$Data);
                $message    = $result ? 'Updated successfully' : 'Fail update!';
                $this->session->set_flashdata('updateMessage',$message);
                if($result){
                    redirect('user');
                }else{
                    $this->index();
                }
            }
        }else{
            $this->index();
        }
    }



    public function delete(){
        $id = $this->input->post('id');
        $result = $this->users->deleteUserById($id);
        return $result;
    }
}

?>