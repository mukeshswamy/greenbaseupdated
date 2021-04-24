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
    // READ NEWS
    public function read_news(){
        $result = $this->News_Model->show_all_news();
        // echo json_encode($result); 
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News Data",'data' => $result)));
    }
    //SHOW SINGLE DATA
    public function getSingleNewsItems($news_id){
        $news_content = $this->News_Model->get_news_items_from_db($news_id);
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News Found",'data' => $news_content)));
    }
     // UPDATE
     public function updatenews($id){
        $this->form_validation->set_rules('editMainHeadline', 'Heading', 'required');
        $this->form_validation->set_rules('editdescription', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
            return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Could Not Update News For Some reasons.",'validation_message' => strip_tags(validation_errors()))));
        else{
            $userData = array();
            $userData['news_headline'] = $this->input->post('editMainHeadline',TRUE);
            $userData['news_description'] = $this->input->post('editdescription',TRUE);
            $userData['news_content'] = $this->input->post('editNewsContent',FALSE);
            
            if(!empty($_FILES['editCoverImage']['name'])){
                $config['upload_path'] = 'assets/images/uploads/news';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] =  true;
                $config['max_filename'] =  1000;
                $config['overwrite'] =  true;
                $config['file_name'] = $_FILES['editCoverImage']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('editCoverImage')){
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
                    // print_r($uploadData['fill_name']);
                    $userData['news_media'] = $uploadData['file_name'];
                }else{
                    // $userData['news_media'] = '';
                }
            }else{
                // $userData['news_media'] = '';
                $userData['news_media'] = $this->input->post('editCoverImage',TRUE);
            }
            $this->News_Model->update_news_to_db($id,$userData);
            return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News updated")));
        }
    }
    // DELETE NEWS
    public function deleteNews($id){
        $this->News_Model->deleteSelectedNews($id);
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "News Deleted")));
    }
}
