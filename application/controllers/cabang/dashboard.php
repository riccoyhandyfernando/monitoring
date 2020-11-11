<?php

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();

        login();
    }

    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username'=>$data->username,
            'level'   =>$data->level,

        );
        $this->load->view('templates_cabang/header');
        $this->load->view('templates_cabang/sidebar');
        $this->load->view('cabang/dashboard',$data);
        $this->load->view('templates_cabang/footer');
        
    }
}


?>