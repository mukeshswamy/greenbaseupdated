<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Auth_Model');
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function index()
	{
        $meta_data['title'] ="login";
        $this->load->view('/backend/backendheader');
		$this->load->view('/backend/login');
        $this->load->view('/backend/backendfooter');
	}
    public function dashboard(){
        $meta_data['title'] ="dashboard";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/dashboard');
        $this->load->view('/backend/backendfooter');
    }
    public function home_dashboard(){
        $meta_data['title'] ="Home";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/home/home.php');
        $this->load->view('/backend/backendfooter');
    }
    public function about_dashboard(){
        $meta_data['title'] ="About";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/about/about.php');
        $this->load->view('/backend/backendfooter');
    }
    public function whyus_dashboard(){
        $meta_data['title'] ="Why us";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/whyus/whyus.php');
        $this->load->view('/backend/backendfooter');
    }
    public function client_dashboard(){
        $meta_data['title'] ="Client";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/clients/clients.php');
        $this->load->view('/backend/backendfooter');
    }
    public function newspage(){
        $meta_data['title'] ="News";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/backendnews');
        $this->load->view('/backend/backendfooter');
    }
    public function newsaddpage(){
        $meta_data['title'] ="News";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/newspageadd');
        $this->load->view('/backend/backendfooter');
    }
    public function newseditpage()
	{
        $meta_data['title'] ="News";
        $this->load->view('/backend/backendheader',$meta_data);
		$this->load->view('/backend/newsedit');
        $this->load->view('/backend/backendfooter');
	}
    public function blogspage(){
        $meta_data['title'] ="Blogs";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/backendblog');
        $this->load->view('/backend/backendfooter');
    }
    public function blogsadd()
	{
        $meta_data['title'] ="Blogs";
        $this->load->view('/backend/backendheader',$meta_data);
		$this->load->view('/backend/blogsadd');
        $this->load->view('/backend/backendfooter');
	}
	public function blogsedit()
	{
        $meta_data['title'] ="Blogs";
        $this->load->view('/backend/backendheader',$meta_data);
		$this->load->view('/backend/blogsedit');
        $this->load->view('/backend/backendfooter');
	}
    public function gallerypage(){
        $meta_data['title'] ="Gallery";
        $this->load->view('/backend/backendheader',$meta_data);
        $this->load->view('/backend/backendgallery');
        $this->load->view('/backend/backendfooter');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
            return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Validation Failed",'validation_message' => strip_tags(validation_errors()))));
        else{
            $userData = $this->Auth_Model->can_login($this->input->post('email'),$this->input->post('password'));
            if(!empty($userData))
            {
                return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Login Successfull")));
               
            }
            else
                return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Wrong password or Email")));
        }
    }
    public function logout(){
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('email');
        redirect('auth');
    }
    public function email_exist($email) //checks if email exist 
    {   
        $query = $this->db->query("SELECT * FROM `users_auth` where email='".$email."'");      
        $query->num_rows();
        if ($query->num_rows() > 0)
            return FALSE;
        else
        {
            $this->form_validation->set_message('email_exist', 'Email Does Not Exists');
            return FALSE;    
        }
        
    }
}


