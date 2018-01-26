<?php
    class Users extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('user_m');
        }

        function index(){
            $data['tbuser'] = $this->user_m->gets();
            $this->load->view('user_data', $data);
        }
        function add(){}
        function del($id){
            $this->user_m->del($id);
            redirect('Users');
        }
        function edit($id){}
        function detail($id){}
    }
