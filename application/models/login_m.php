<?php

class Login_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check_login($input = array()) {
        //print_r($input);exit;
        $this->db->where('username', $input['username']);
        $this->db->where('password', $input['password']);
        return $this->db->get('tb_login')->row();
    }

    

}
