<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Product_model');
        $session_user = $this->session->userdata('logged_in');
        $this->session_user_data = $this->session->userdata('logged_in');
        if ($session_user) {
            $this->user_id = $session_user['login_id'];
        } else {
            $this->user_id = 0;
        }
    }

    public function index() {
        if ($this->user_id) {
            redirect('Admin/members/5');
        }
        redirect('Admin/login');
    }

    //login page
    function login() {
        if ($this->user_id) {
            redirect('Admin/members/5');
        }
        $data1['msg'] = "";
        $data1['countrylist'] = [];

        $link = isset($_GET['page']) ? $_GET['page'] : '';
        $data1['next_link'] = $link;

        if (isset($_POST['signIn'])) {
            $username = $this->input->post('email');
            $password = $this->input->post('password');

            $this->db->select('au.id,au.first_name,au.last_name,au.email,au.password,au.user_type, au.image');
            $this->db->from('admin_users au');
            $this->db->where('email', $username);
            $this->db->where('password', md5($password));
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $userdata = $query->result_array()[0];
                $usr = $userdata['email'];
                $pwd = $userdata['password'];
                if ($username == $usr && md5($password) == $pwd) {
                    $sess_data = array(
                        'username' => $username,
                        'first_name' => $userdata['first_name'],
                        'last_name' => $userdata['last_name'],
                        'login_id' => $userdata['id'],
                    );
                    $user_id = $userdata['id'];
                    $session_cart = $this->session->userdata('session_cart');
                    $productlist = $session_cart['products'];

                    $this->Product_model->cartOperationCustomCopy($user_id);
                    $first_name = $userdata['first_name'];
                    $last_name = $userdata['last_name'];
                    $orderlog = array(
                        'log_type' => "Login",
                        'log_datetime' => date('Y-m-d H:i:s'),
                        'user_id' => $user_id,
                        'order_id' => "",
                        'log_detail' => "$first_name $last_name Login Succesful",
                    );
                    $this->db->insert('system_log', $orderlog);

                    $this->session->set_userdata('logged_in', $sess_data);


                    redirect('Admin/members/5');
                } else {
                    $data1['msg'] = 'Invalid Email Or Password, Please Try Again';
                }
            } else {
                $data1['msg'] = 'Invalid Email Or Password, Please Try Again';
                redirect('Admin/login', $data1);
            }
        }



        $this->load->view('Admin/login', $data1);
    }

    // Logout from admin page
    function logout() {
        $newdata = array(
            'username' => '',
            'password' => '',
            'logged_in' => FALSE,
        );

        $first_name = $this->session_user_data['first_name'];
        $last_name = $this->session_user_data['last_name'];
        $orderlog = array(
            'log_type' => "Logout",
            'log_datetime' => date('Y-m-d H:i:s'),
            'user_id' => $this->user_id,
            'order_id' => "",
            'log_detail' => "$first_name $last_name Logout Succesful",
        );

        $this->db->insert('system_log', $orderlog);
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        redirect('Account/login');
    }

    function error_404() {
        echo "Error 404 Page Not Found<br/><a href=" . site_url("Admin") . ">Back</a>";
    }

    function members($category_id) {

        $this->db->where('id', $category_id);
        $query = $this->db->get('category');
        $categoryobj = $query->row();
        $data['title'] = $categoryobj->category_name;
        $queryst = "SELECT mb.*, ct.category_name as category, cp.position_name as position FROM `members` as mb
  left join category as ct on ct.id = mb.category_id
  left join category_position as cp on cp.id = mb.position_id where mb.category_id = $category_id";
        $query = $this->db->query($queryst);
        $memberslist = $query->result_array();
        $data['memberslist'] = $memberslist;
        $this->load->view('Admin/members', $data);
        if (isset($_POST['delete_data'])) {
            $memberid = $this->input->post("member_id");
            $this->db->where('id', $memberid);
            $this->db->delete('members');
             redirect("Admin/members/$category_id");
        }
    }

    function addmembers() {
        if ($this->user_id == 0) {
            redirect('Admin/members/5');
        }

        $data = [];
        $this->db->order_by('display_index');
        $query = $this->db->get('configuration_state');
        $statelist = $query->result_array();
        $data['statlist'] = $statelist;

        $this->db->order_by('display_index');
        $query = $this->db->get('category_position');
        $positionlist = $query->result_array();
        $data['positionlist'] = $positionlist;


        $this->db->order_by('display_index');
        $query = $this->db->get('category');
        $categorylist = $query->result_array();
        $data['categorylist'] = $categorylist;



        if (isset($_POST['deleteService'])) {
            $id = $this->input->post("service_id");
            $this->db->where('id', $id); //set column_name and value in which row need to update
            $this->db->delete("category_items");
            redirect("Admin/addmembers");
        }


        if (isset($_POST['add_data'])) {

            $insertArray = array(
                "name" => $this->input->post("name"),
                "prefix" => $this->input->post("prefix"),
                "parent" => $this->input->post("parent"),
                "position_id" => $this->input->post("position_id"),
                "category_id" => $this->input->post("category_id"),
                "state" => $this->input->post("state"),
                "district" => $this->input->post("district"),
                "city" => $this->input->post("city"),
                "mobile_no" => $this->input->post("mobile_no"),
                "image" => "",
                "address" => $this->input->post("address")
            );
            $this->db->insert("members", $insertArray);
            $insert_id = $this->db->insert_id();
            $realfilename = $this->input->post("file_real_name");
            if ($realfilename) {
                $config['upload_path'] = 'assets/memberphotos';
                $config['allowed_types'] = '*';
                $tempfilename = rand(10000, 1000000);
                $tempfilename = "" . $tempfilename . $insert_id;
                $ext2 = explode('.', $_FILES['file']['name']);
                $ext3 = strtolower(end($ext2));
                $ext22 = explode('.', $tempfilename);
                $ext33 = strtolower(end($ext22));
                $filename = $ext22[0];
                $file_newname = $filename . '.' . $ext3;
                $config['file_name'] = $file_newname;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();

                    $file_newname = $uploadData['file_name'];

                    $this->db->set('image', $file_newname);
                    $this->db->where('id', $insert_id); //set column_name and value in which row need to update
                    $this->db->update("members"); //
                }
            }
            redirect("Admin/addmembers");
        }

        if (isset($_POST['update_data'])) {
            $tableid = $this->input->post("table_id");
            $this->db->where('id', $tableid);
            $insertArray = array(
                "service_name" => $this->input->post("service_name"),
                "description" => $this->input->post("description"),
                "image" => "",
                "display_index" => $this->input->post("display_index")
            );

            $this->db->update("category_items", $insertArray);
            $realfilename = $this->input->post("file_real_name");
            if ($realfilename) {
                $config['upload_path'] = 'assets/serviceimage';
                $config['allowed_types'] = '*';
                $tempfilename = rand(10000, 1000000);
                $tempfilename = "" . $tempfilename . $tableid;
                $ext2 = explode('.', $_FILES['file']['name']);
                $ext3 = strtolower(end($ext2));
                $ext22 = explode('.', $tempfilename);
                $ext33 = strtolower(end($ext22));
                $filename = $ext22[0];
                $file_newname = $filename . '.' . $ext3;
                $config['file_name'] = $file_newname;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $tableid = $tableid;
                    $file_newname = $uploadData['file_name'];

                    $this->db->set('image', $file_newname);
                    $this->db->where('id', $tableid); //set column_name and value in which row need to update
                    $this->db->update("category_items"); //
                }
            }
            redirect("Admin/addmembers");
        }

        $this->load->view('Admin/member', $data);
    }

    function positions() {
        if ($this->user_id == 0) {
            redirect('Admin/login');
        }
        $this->db->order_by('display_index');
        $query = $this->db->get('category_position');
        $positiondata = $query->result_array();
        if (isset($_POST['add_data'])) {
            $insertArray = array(
                "position_name" => $this->input->post("position_name"),
                "description" => "",
                "display_index" => $this->input->post("display_index")
            );
            $this->db->insert("category_position", $insertArray);
            redirect("Admin/positions");
        }

        $data = [];
        $data['positiondata'] = $positiondata;
        $this->load->view('Admin/position', $data);
    }

    function positionsCategory() {
        if ($this->user_id == 0) {
            redirect('Admin/login');
        }
        $this->db->order_by('display_index');
        $query = $this->db->get('category');
        $positiondata = $query->result_array();
        if (isset($_POST['add_data'])) {
            $insertArray = array(
                "category_name" => $this->input->post("category_name"),
                "description" => "",
                "display_index" => $this->input->post("display_index")
            );
            $this->db->insert("category", $insertArray);
            redirect("Admin/positionsCategory");
        }

        $data = [];
        $data['positiondata'] = $positiondata;
        $this->load->view('Admin/positionsCategory', $data);
    }

    function sliderImages() {
        $this->db->order_by('id desc');
        $query = $this->db->get('slider_images');
        $slider_images = $query->result_array();
        $data['slider_images'] = $slider_images;

        if (isset($_POST['deleteImage'])) {
            $id = $this->input->post("slider_id");
            $this->db->where('id', $id); //set column_name and value in which row need to update
            $this->db->delete("slider_images");
            redirect("Admin/sliderImages");
        }


        if (isset($_POST['addImage'])) {
            $realfilename = $this->input->post("file_real_name");
            if ($realfilename) {
                $config['upload_path'] = 'assets/sliders';
                $config['allowed_types'] = '*';
                $tempfilename = rand(10000, 1000000);
                $tempfilename = "" . $tempfilename . $tableid;
                $ext2 = explode('.', $_FILES['file']['name']);
                $ext3 = strtolower(end($ext2));
                $ext22 = explode('.', $tempfilename);
                $ext33 = strtolower(end($ext22));
                $filename = $ext22[0];
                $file_newname = $filename . '.' . $ext3;
                $config['file_name'] = $file_newname;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                ;
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $tableid = $tableid;
                    $file_newname = $uploadData['file_name'];
                    $insertArray = array(
                        "image" => $file_newname,
                        "display_index" => $this->input->post("display_index")
                    );
                    $this->db->insert("slider_images", $insertArray);
                }
            }
            redirect("Admin/sliderImages");
        }
        $data["folder"] = "sliders";
        $data["title"] = "Slider Images";
        $this->load->view('Admin/sliderimages', $data);
    }

    function gallaryImages() {
        $this->db->order_by('id desc');
        $query = $this->db->get('gallery_images');
        $slider_images = $query->result_array();
        $data['slider_images'] = $slider_images;
        $data["title"] = "Gallery Images";
        $data["folder"] = "gallary";

        if (isset($_POST['deleteImage'])) {
            $id = $this->input->post("slider_id");
            $this->db->where('id', $id); //set column_name and value in which row need to update
            $this->db->delete("gallery_images");
            redirect("Admin/gallaryImages");
        }


        if (isset($_POST['addImage'])) {
            $realfilename = $this->input->post("file_real_name");
            if ($realfilename) {
                $config['upload_path'] = 'assets/gallary';
                $config['allowed_types'] = '*';
                $tempfilename = rand(10000, 1000000);
                $tempfilename = "" . $tempfilename . $tableid;
                $ext2 = explode('.', $_FILES['file']['name']);
                $ext3 = strtolower(end($ext2));
                $ext22 = explode('.', $tempfilename);
                $ext33 = strtolower(end($ext22));
                $filename = $ext22[0];
                $file_newname = $filename . '.' . $ext3;
                $config['file_name'] = $file_newname;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                ;
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $tableid = $tableid;
                    $file_newname = $uploadData['file_name'];
                    $insertArray = array(
                        "image" => $file_newname,
                        "display_index" => $this->input->post("display_index")
                    );
                    $this->db->insert("gallery_images", $insertArray);
                }
            }
            redirect("Admin/gallaryImages");
        }
        $this->load->view('Admin/sliderimages', $data);
    }

    function insertTempData() {
        $paddata = [
            'आंध्रप्रदेश',
            'अरुणाचल प्रदेश',
            'असम',
            'बिहार',
            'छत्तीसगढ़',
            'गोवा',
            'गुजरात',
            'हरियाणा',
            'हिमाचल प्रदेश',
            'झारखण्ड',
            'कर्नाटक',
            'केरल',
            'मध्यप्रदेश',
            'महाराष्ट्र',
            'मणिपुर',
            'मेघालय',
            'मिजोरम',
            'नागालैंड',
            'उड़ीसा',
            'पंजाब',
            'राजस्थान',
            'सिक्किम',
            'तमिलनाडु',
            'तेलांगना',
            'त्रिपुरा',
            'उत्तरप्रदेश',
            'उत्तराखंड',
            'पश्चिम बंगाल',
            'केंद्रशासित क्षेत्र',
            'अंडमान और निकोबार',
            'चंड़ीगढ़',
            'दादर और नागर हवेली',
            'दमन एवं द्वीप',
            'लक्ष्यद्वीप',
            'दिल्ली',
            'पांडिचेरी',
            'जम्मू और कश्मीर', 12
        ];
        foreach ($paddata as $key => $value) {
            $insertArray = array(
                "name	" => $value,
                "display_index" => "",
                "status" => "0"
            );
//            $this->db->insert("configuration_state", $insertArray);
        }
    }

}

?>
