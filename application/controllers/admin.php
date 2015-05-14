
<?php
//TEST
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends CI_Controller {

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
        $this->load->model('attraction_m');
        $this->load->model('event_m');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function index() {
        
        $data['category_name'] = $this->category_m->get_category();
        $data['event_name'] = $this->event_m->get_event();
        //$data['attraction_name'] = $this->attraction_m->get_attraction();

        $base_where = array();
        $base_where = $this->input->post('cate_name') ? $base_where + array('s_cate_name' => $this->input->post('cate_name')) : $base_where;

        $search = "";
        $search.=isset($base_where['s_cate_name']) ? $base_where['s_cate_name'] : '-';

        $config['base_url'] = base_url() . 'index.php/admin/count_get_attraction/' . $search;
        $config['total_rows'] = $this->attraction_m->count_get_attraction($base_where);
        $config['per_page'] = 15;

        $data['attraction_name'] = $this->attraction_m->get_attraction($base_where, $config['per_page'], 0);
        $this->pagination->initialize($config);
        $data['base_where'] = $base_where;

        $this->load->view('admin_main', $data);
    }

    public function get_attraction() {

//        $data['category_name'] = $this->category_m->get_category();
//        $data['attraction_name'] = $this->attraction_m->get_attraction();
//        $this->load->view('admin_main', $data);
        $data['event_name'] = $this->event_m->get_event();
        $data['category_name'] = $this->category_m->get_category();
        //$data['attraction_name'] = $this->attraction_m->get_attraction();

        $base_where = array();
        $base_where = $this->input->post('cate_name') ? $base_where + array('s_cate_name' => $this->input->post('cate_name')) : $base_where;

        $search = "";
        $search.=isset($base_where['s_cate_name']) ? $base_where['s_cate_name'] : '-';

        $config['base_url'] = base_url() . 'index.php/admin/count_get_attraction/' . $search;
        $config['total_rows'] = $this->attraction_m->count_get_attraction($base_where);
        $config['per_page'] = 15;

        $data['attraction_name'] = $this->attraction_m->get_attraction($base_where, $config['per_page'], 0);
        $this->pagination->initialize($config);
        $data['base_where'] = $base_where;

        $this->load->view('admin_main', $data);
    }

    public function count_get_attraction($s_cate_name, $page = 0) {
        $data['category_name'] = $this->category_m->get_category();
        //$data['attraction_name'] = $this->attraction_m->get_attraction();

        $s_cate_name = $this->input->post('cate_name') ? $this->input->post('cate_name') : str_replace("-", "", $s_cate_name);

        $base_where = array();
        $base_where = $s_cate_name ? $base_where + array('s_cate_name' => $s_cate_name) : $base_where;

        $search = "";
        $search.=isset($base_where['s_cate_name']) ? $base_where['s_cate_name'] : '-';

        $config['base_url'] = base_url() . 'index.php/admin/count_get_attraction/' . $search;
        $config['total_rows'] = $this->attraction_m->count_get_attraction($base_where);
        $config['per_page'] = 15;
        $config['uri_segment'] = 4;

        $data['attraction_name'] = $this->attraction_m->get_attraction($base_where, $config['per_page'], $page);
        $this->pagination->initialize($config);
        $data['base_where'] = $base_where;

        $this->load->view('admin_main', $data);
    }

    public function add_attraction() {
        $data['category_name'] = $this->category_m->get_category();
        $this->load->view('add_attraction', $data);
    }

    public function insert_attraction() {
        if ($_POST) {
//            echo '<pre>';
//            print_r($_POST);

            $name_array = array();
            $count = count($_FILES['userfile']['size']);

            foreach ($_FILES as $key => $value)
                for ($s = 0; $s <= $count - 1; $s++) {
                    $_FILES['userfile']['name'] = $value['name'][$s];
                    $_FILES['userfile']['type'] = $value['type'][$s];
                    $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                    $_FILES['userfile']['error'] = $value['error'][$s];
                    $_FILES['userfile']['size'] = $value['size'][$s];
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '';
                    $config['max_width'] = '';
                    $config['max_height'] = '';
                    $config['file_name'] = $this->input->post('name') . '_' . $s;
                    $this->load->library('upload', $config);
                    $this->upload->do_upload();
                    $data = $this->upload->data();
                    $name_array[] = $data['file_name'];
                }

//            echo '<pre>';
//            print_r($name_array);

            $names = implode(' , ', $name_array);

//            echo '<pre>';
//            print_r($names);


            $this->load->database();
            $db_data = array('id' => NULL,
                'category_id' => $this->input->post('cate_id'),
                'name' => $this->input->post('name'),
                'detail' => $this->input->post('detail'),
                'address' => $this->input->post('address'),
                'contact' => $this->input->post('contact'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'time' => $this->input->post('open'),
                'service' => $this->input->post('service'),
                'picture' => $names);

//            echo '<pre>';
//            print_r($db_data);


            $this->db->insert('tb_attraction', $db_data);
            redirect('admin');
        }
    }

    public function do_upload() {
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {
                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '';
                $config['max_width'] = '';
                $config['max_height'] = '';
                $config['file_name'] = 'picture_' . $s;
                $this->load->library('upload', $config);

                echo '<pre>';
                print_r($name_array);
                exit;

                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = $data['file_name'];
            }

        $names = implode(',', $name_array);
    }

    public function update_attraction($id) {
        $data['category_name'] = $this->category_m->get_category();
        $data['get_attraction'] = $this->attraction_m->get_edit_attraction($id);
        //echo '<pre>';        print_r($data); exit;

        $this->load->view('update_attraction', $data);

        if ($_POST) {
            //echo '<pre>';
            //print_r($_POST);
            //exit;

            $name_array = array();
            $count = count($_FILES['userfile']['size']);

            foreach ($_FILES as $key => $value)
                for ($s = 0; $s <= $count - 1; $s++) {
                    $_FILES['userfile']['name'] = $value['name'][$s];
                    $_FILES['userfile']['type'] = $value['type'][$s];
                    $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                    $_FILES['userfile']['error'] = $value['error'][$s];
                    $_FILES['userfile']['size'] = $value['size'][$s];
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '';
                    $config['max_width'] = '';
                    $config['max_height'] = '';
                    $config['file_name'] = $this->input->post('name') . '_';
                    $this->load->library('upload', $config);
                    $this->upload->do_upload();
                    $data = $this->upload->data();
                    $name_array[] = $data['file_name'];
                }

            echo '<pre>';
            print_r($name_array);
            //exit;
            $names = implode(' , ', $name_array);

            echo '<pre>';
            print_r($names);


            $this->load->database();
            $db_data = array('id' => $id,
                'category_id' => $this->input->post('cate_id'),
                'name' => $this->input->post('name'),
                'detail' => $this->input->post('detail'),
                'address' => $this->input->post('address'),
                'contact' => $this->input->post('contact'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'time' => $this->input->post('open'),
                'service' => $this->input->post('service'),
                'picture' => $names);

            $this->db->where('id', $id);
            $this->db->update('tb_attraction', $db_data);

            echo '<pre>';
            print_r($db_data);
            //exit;
            redirect('admin');
        }
    }

    public function delete_attraction($id) {
        if ($id) {
            if ($this->attraction_m->delete_attraction($id)) {
                redirect('admin');
            }
        }
    }

    public function insert_category() {

        if ($_POST) {
            //print_r($_POST);exit; 
            if ($this->category_m->insert_category($_POST)) {
                redirect('admin#tab-2');
            }
        }
    }

    public function update_category($cate_id) {
        $data['category_name'] = $this->category_m->get_category();
        //$data['attraction_name'] = $this->attraction_m->get_attraction();
        $data['edit_category_name'] = $this->category_m->get_edit_category($cate_id);
        
        
        $base_where = array();
        $base_where = $this->input->post('cate_name') ? $base_where + array('s_cate_name' => $this->input->post('cate_name')) : $base_where;

        $search = "";
        $search.=isset($base_where['s_cate_name']) ? $base_where['s_cate_name'] : '-';

        $config['base_url'] = base_url() . 'index.php/admin/count_get_attraction/' . $search;
        $config['total_rows'] = $this->attraction_m->count_get_attraction($base_where);
        $config['per_page'] = 5;

        $data['attraction_name'] = $this->attraction_m->get_attraction($base_where, $config['per_page'], 0);
        $this->pagination->initialize($config);
        $data['base_where'] = $base_where;
        
        $this->load->view('admin_main', $data);

        if ($_POST) {
            //echo '<pre>';        print_r($_POST); exit;
            if ($this->category_m->update_category($cate_id, $_POST)) {

                redirect('admin');
            }
        }
    }

    public function delete_category($id) {
        if ($id) {
            if ($this->category_m->delete_category($id)) {
                redirect('admin');
            }
        }
    }
    
    public function add_event() {
        //$data['category_name'] = $this->category_m->get_category();
        $this->load->view('add_event');
    }
    
    public function insert_event() {

        if ($_POST) {
            //print_r($_POST);exit; 
            if ($this->event_m->insert_event($_POST)) {
                redirect('admin');
            }
        }
    }
    
    public function update_event($event_id) {
        //$data['category_name'] = $this->category_m->get_category();
        $data['get_event'] = $this->event_m->get_edit_event($event_id);
        //echo '<pre>';        print_r($data); exit;

        $this->load->view('update_event', $data);

        if ($_POST) {
            //echo '<pre>';        print_r($_POST); exit;
            if ($this->event_m->update_event($event_id, $_POST)) {

                redirect('admin');
            }
        }
    }
    
    public function delete_event($id) {
        if ($id) {
            if ($this->event_m->delete_event($id)) {
                redirect('admin');
            }
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */