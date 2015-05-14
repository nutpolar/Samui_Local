<?php

class attraction_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // ----- Get detail department to Manage Department page
    public function get_attraction_all() {
        
        
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        
        return $this->db->get('tb_attraction')->result();
    }
    
    public function get_attraction($base_where = array(), $limit1, $limit2) {
        if (!empty($base_where['s_cate_name'])) {
            $this->db->where('tb_category.id', $base_where['s_cate_name']);
        }
        
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        $this->db->limit($limit1, $limit2);
        return $this->db->get('tb_attraction')->result();
    }
    
    public function count_get_attraction($base_where = array()) {
        if (!empty($base_where['s_cate_name'])) {
            $this->db->where('tb_category.id', $base_where['s_cate_name']);
        }
        
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        $get = $this->db->get('tb_attraction')->result();
        return count($get);
        
    }
    public function get_edit_attraction($id) {
        $this->db->select('tb_attraction.*,tb_category.id as id_category,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_attraction.id',$id)->get('tb_attraction')->row();
    }
    public function insert_attraction($input = array()) {
        $data = array(
//            'category_id' => $this->input->post('cate_id'),
//            'name' => $this->input->post('name'),
//            'detail' => $this->input->post('detail'),
//            'address' => $this->input->post('address'),
//            'picture' => $this->do_upload(),
//            'contact' => $this->input->post('contact'),
//            'latitude' => $this->input->post('latitude'),
//            'longitude' => $this->input->post('longitude'),
//            'time' => $this->input->post('open'),
//            'service' => $this->input->post(),
            
            'category_id' => $input['cate_id'],
            'name' => $input['name'],
            'detail' => $input['detail'],
            'address' => $input['address'],
            'picture' => $input['userfile'],
            'contact' => $input['contact'],
            'latitude' => $input['latitude'],
            'longitude' => $input['longitude'],
            'time' => $input['open'],
            'service' => $input['service'],
        );
        $this->db->insert('tb_attraction', $data);
        return TRUE;
    }
    public function update_attraction($id,$input = array()){
        $data = array(
            'category_id' => $input['cate_id'],
            'name' => $input['name'],
            'detail' => $input['detail'],
            'address' => $input['address'],
            'picture' => $input['userfile'],
            'contact' => $input['contact'],
            'latitude' => $input['latitude'],
            'longitude' => $input['longitude'],
            'time' => $input['open'],
            'service' => $input['service'],
        );
        $this->db->where('id',$id);
        $this->db->update('tb_attraction',$data);
        return TRUE;
    }

    public function delete_attraction($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_attraction'); 
        return TRUE;
    }
    
    

}