<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('Blogs_Model');
        // 
    }
    // CREATING NEWS
	public function add_blogs()
	{
		$this->form_validation->set_rules('blogsHead', 'Heading', 'required');
        $this->form_validation->set_rules('blogsDescription', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
            return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Could Not Add News For Some reasons.",'validation_message' => strip_tags(validation_errors()))));
        else{
            $userData = array();
            $userData['blog_title'] = $this->input->post('blogsHead',TRUE);
            $userData['blog_description'] = $this->input->post('blogsDescription',TRUE);
            $userData['blog_content'] = $this->input->post('blogsContent',TRUE);
            $userData['blog_createdAt'] = local_to_gmt(time());
            if(!empty($_FILES['blogsCoverImage']['name'])){
                $config['upload_path'] = 'assets/images/uploads/blogs';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] =  true;
                $config['max_filename'] =  1000;
                $config['file_name'] = $_FILES['blogsCoverImage']['name'];
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('blogsCoverImage')){
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/images/uploads/blogs/'.$uploadData['file_name'];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '60%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;   
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize(); 
                    // print_r($uploadData['full_path']);
                    $userData['blog_media'] = $uploadData['file_name'];
                }else{
                    $userData['blog_media'] = '';
                }
            }else{
                $userData['blog_media'] = '';
            }
            $this->Blogs_Model->add_blogs_to_db($userData);
            return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Blogs Added")));
        }
	}
    // READ NEWS
    public function read_blogs(){
        $result = $this->Blogs_Model->show_all_blogs();
        // echo json_encode($result); 
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Blogs Data",'data' => $result)));
    }
    //SHOW SINGLE DATA
    public function getSingleBlogsItems($blogs_id){
        $news_content = $this->Blogs_Model->get_blogs_items_from_db($blogs_id);
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Blogs Found",'data' => $news_content)));
    }
     // UPDATE
     public function updateblog($id){
        $this->form_validation->set_rules('editMainHeadline', 'Heading', 'required');
        $this->form_validation->set_rules('editdescription', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
            return $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode(array('message' => "Could Not Update News For Some reasons.",'validation_message' => strip_tags(validation_errors()))));
        else{
            $userData = array();
            $userData['blog_title'] = $this->input->post('editMainHeadline',TRUE);
            $userData['blog_description'] = $this->input->post('editdescription',TRUE);
            $userData['blog_content'] = $this->input->post('editNewsContent',TRUE);
            
            if(!empty($_FILES['editCoverImage']['name'])){
                $config['upload_path'] = 'assets/images/uploads/blogs';
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
                    $config['source_image'] = './assets/images/uploads/blogs/'.$uploadData['file_name'];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '60%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;   
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize(); 
                    // print_r($uploadData['fill_name']);
                    $userData['blog_media'] = $uploadData['file_name'];
                }else{
                    // $userData['news_media'] = '';
                }
            }else{
                // $userData['news_media'] = '';
                $userData['blog_media'] = $this->input->post('editCoverImage',TRUE);
            }
            $this->Blogs_Model->update_blogs_to_db($id,$userData);
            return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Blogs updated")));
        }
    }
    // DELETE NEWS
    public function deleteblog($id){
        $this->Blogs_Model->deleteSelectedBlog($id);
        return $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode(array('message' => "Blogs Deleted")));
    }
}
