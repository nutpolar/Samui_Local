<?php

class public_attraction_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // ----- Get detail department to Manage Department page
    public function get_attraction() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->get('tb_attraction')->result();
    }
    
    public function get_attraction_beach() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_category.id',1)->get('tb_attraction')->result();
    }
    
    public function get_attraction_temple() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_category.id',2)->get('tb_attraction')->result();
    }
    
    public function get_attraction_waterfall() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_category.id',3)->get('tb_attraction')->result();
    }
    
    public function get_attraction_adventure() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_category.id',5)->get('tb_attraction')->result();
    }
    
    public function get_attraction_other() {
        $this->db->select('tb_attraction.*,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_category.id',6)->get('tb_attraction')->result();
    }
    
    public function get_view_attraction($id) {
        $this->db->select('tb_attraction.*,tb_category.id as id_category,tb_category.name as cate_name');
        $this->db->join('tb_category', 'tb_attraction.category_id=tb_category.id', 'left');
        return $this->db->where('tb_attraction.id',$id)->get('tb_attraction')->row();
    }
    
    
    
    
    
    

}