<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();

        $this->load->model('category_m');
        $this->load->model('event_m');
        $this->load->model('public_attraction_m');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
        $this->load->library('Googlemaps');
    }

    public function index() {
        $this->load->view('home');
    }

    public function attraction() {
        $data['category_name'] = $this->category_m->get_category();
        $data['attraction_name'] = $this->public_attraction_m->get_attraction();
        $data['attraction_beach'] = $this->public_attraction_m->get_attraction_beach();
        $data['attraction_temple'] = $this->public_attraction_m->get_attraction_temple();
        $data['attraction_waterfall'] = $this->public_attraction_m->get_attraction_waterfall();
        $data['attraction_adventure'] = $this->public_attraction_m->get_attraction_adventure();
        $data['attraction_other'] = $this->public_attraction_m->get_attraction_other();
        $this->load->view('attraction',$data);
    }
    
    public function view_attraction($id) {
        //$data['category_name'] = $this->category_m->get_category();
        $data['attraction_name'] = $this->public_attraction_m->get_view_attraction($id);
        //echo '<pre>';        print_r($data); exit;
        $this->load->view('view_attraction',$data);
    }

    public function weather() {
        $this->load->view('weather');
    }
    
    public function samui_map() {
        $data['attraction_name'] = $this->public_attraction_m->get_attraction();
        $this->load->view('samui_map',$data);
    }
    
    public function samui_event() {
        $data['event_name'] = $this->event_m->get_event();
        $data['event_jan'] = $this->event_m->get_event_jan();
        $data['event_feb'] = $this->event_m->get_event_feb();
        $data['event_mar'] = $this->event_m->get_event_mar();
        $data['event_apr'] = $this->event_m->get_event_apr();
        $data['event_may'] = $this->event_m->get_event_may();
        $data['event_jun'] = $this->event_m->get_event_jun();
        $data['event_jul'] = $this->event_m->get_event_jul();
        $data['event_aug'] = $this->event_m->get_event_aug();
        $data['event_sep'] = $this->event_m->get_event_sep();
        $data['event_oct'] = $this->event_m->get_event_oct();
        $data['event_nov'] = $this->event_m->get_event_nov();
        $data['event_dec'] = $this->event_m->get_event_dec();
        $this->load->view('samui_event',$data);
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */