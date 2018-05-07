<?php

class User extends CI_Controller{
    //function auto run
    function __construct(){
        parent::__construct();
        //load model
        $this->load->model("user_m");
    }

    public function index(){
        //siapkan data pada sebuah variable
        $data["users"] = $this->user_m->gets();
        //tampilkan view dan kirimkan data users
        $this->load->view("data_user_v", $data);
    }

    public function form(){
        $this->load->view('form_user_v');
    }

    public function edit($id){
        $data["user"] = $this->user_m->get($id);
        $this->load->view('form_user_v', $data);
    }

    public function add(){
        //create data array
        $data = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "fullname" => $this->input->post("fullname"),
            "level" => $this->input->post("level")
        );
        //save data to database
        $this->user_m->add($data);
        redirect("user");
    }

    public function save_edit(){
        //get id
        $id = $this->input->post("oldid");
        //create data array
        $data = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "fullname" => $this->input->post("fullname"),
            "level" => $this->input->post("level")
        );
        //save data to database
        $this->user_m->edit($data, $id);
        redirect("user");
    }

    public function del($id){
        $this->user_m->del($id);
        redirect("user");
    }
}