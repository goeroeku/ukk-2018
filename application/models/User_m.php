<?php
    class User_m extends CI_Model{
        function gets(){
            return $this->db->get('users')->result();
        }
        function get($id){}
        function add(){}
        function del($id){
            $this->db->delete('users', ["id"=>$id]);
        }
        function edit($d){}    
    }