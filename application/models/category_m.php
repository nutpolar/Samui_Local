<?php

class category_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function get_category() {
        return $this->db->get('tb_category')->result();
    }
    
    public function get_edit_category($id) {
        return $this->db->where('id',$id)->get('tb_category')->row();
    }
    public function insert_category($input = array()) {
        $data = array(
            'name' => $input['category_name'],
        );
        $this->db->insert('tb_category', $data);
        return TRUE;
    }
    public function update_category($cate_id,$input = array()){
        $data = array(
         'id' => $input['id_cate'],  
         'name'=>$input['category_name'],
        );
        $this->db->where('id',$cate_id);
        $this->db->update('tb_category',$data);
        //echo '<pre>';        print_r($data); exit;
        return TRUE;
    }
     public function delete_category($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_category'); 
        return TRUE;
    }
    
}