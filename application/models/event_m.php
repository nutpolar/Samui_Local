<?php

class event_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function get_event() {
        //return $this->db->get('tb_event')->result();
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->order_by('DATE(tb_event.date)');
        $this->db->order_by('MONTH(tb_event.date)');
        return $this->db->get()->result();
    }
    
    public function get_event_jan() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=1');
        return $this->db->get()->result();
    }
    
    public function get_event_feb() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=2');
        return $this->db->get()->result();
    }
    
    public function get_event_mar() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=3');
        return $this->db->get()->result();
    }
    
    public function get_event_apr() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=4');
        return $this->db->get()->result();
    }
    
    public function get_event_may() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=5');
        return $this->db->get()->result();
    }
    
    public function get_event_jun() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=6');
        return $this->db->get()->result();
    }
    
    public function get_event_jul() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=7');
        return $this->db->get()->result();
    }
    
    public function get_event_aug() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=8');
        return $this->db->get()->result();
    }
    
    public function get_event_sep() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=9');
        return $this->db->get()->result();
    }
    
    public function get_event_oct() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=10');
        return $this->db->get()->result();
    }
    
    public function get_event_nov() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=11');
        return $this->db->get()->result();
    }
    
    public function get_event_dec() {
        $this->db->select("*");
        $this->db->from("tb_event");
        $this->db->where('MONTH(tb_event.date)=12');
        return $this->db->get()->result();
    }
    
    public function get_edit_event($id) {
        return $this->db->where('id',$id)->get('tb_event')->row();
    }
    
    public function insert_event($input = array()) {
        $star_exp = explode(" ", $input['date']);
        $date = strtotime($star_exp[2] . "-" . $star_exp[1] . "-" . $star_exp[0]);
        $data = array(
            'name' => $input['name'],
            'date' => date('Y-m-d 00:00:00', $date),
            'detail' => $input['detail'],
            'location' => $input['location'],
        );
        $this->db->insert('tb_event', $data);
        return TRUE;
    }
    public function update_event($event_id,$input = array()){
        $star_exp = explode(" ", $input['date']);
        $date = strtotime($star_exp[2] . "-" . $star_exp[1] . "-" . $star_exp[0]);
        $data = array(
            'name' => $input['name'],
            'date' => date('Y-m-d 00:00:00', $date),
            'detail' => $input['detail'],
            'location' => $input['location'],
        );
        $this->db->where('id',$event_id);
        $this->db->update('tb_event',$data);
        //echo '<pre>';        print_r($data); exit;
        return TRUE;
    }
     public function delete_event($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_event'); 
        return TRUE;
    }
    
    
}