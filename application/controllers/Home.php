<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('News_Model');
        // 
    }
    // CREATING NEWS
	public function add_news()
	{
		$this->form_validation->set_rules('newheadline', 'Heading', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
            return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Could Not Add News For Some reasons.",'validation_message' => strip_tags(validation_errors()))));
        else{
            $userData = array();
            $userData['news_headline'] = $this->input->post('newheadline',TRUE);
            $userData['news_description'] = $this->input->post('description',TRUE);
            $userData['news_content'] = $this->input->post('NewsContent',FALSE);
            $userData['news_createdAt'] = local_to_gmt(time());
            if(!empty($_FILES['newsCoverImage']['name'])){
                $config['upload_path'] = 'assets/images/uploads/news';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] =  true;
                $config['max_filename'] =  1000;
                $config['file_name'] = $_FILES['newsCoverImage']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('newsCoverImage')){
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/images/uploads/news/'.$uploadData['file_name'];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '60%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;   
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize(); 
                    // print_r($uploadData['full_path']);
                    $userData['news_media'] = $uploadData['file_name'];
                }else{
                    $userData['news_media'] = '';
                }
            }else{
                $userData['news_media'] = '';
            }
            $this->News_Model->add_news_to_db($userData);
            return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News Added")));
        }
	}

    public function add_section_banner(){
        
    }
    // READ NEWS
    public function read_news(){
        $result = $this->News_Model->show_all_news();
        // echo json_encode($result); 
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News Data",'data' => $result)));
    }
}
