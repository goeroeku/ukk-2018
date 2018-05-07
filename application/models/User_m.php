<?php

class User_m extends CI_Model{
    /**
     * function for show all data
     */
    function gets(){
        return $this->db->get('user')->result();
    }
    /**
     * function for show data by id
     */
    function get($id){
        $this->db->where(array("id" => $id));
        return $this->db->get('user')->result();
    }
    /**
     * $data param data array=>column, value
     */
    public function add($data){
        $this->db->insert("user",$data);
    }
    function edit($data, $id){
        $this->db->where(array("id" => $id));
        $this->db->update("user",$data);
    }
    function del($id){
        $this->db->delete("user", array("id"=>$id));
    }
}