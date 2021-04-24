<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs_Model extends CI_Model 
{
    // CREATE
    function add_blogs_to_db($data)  
    {  
       return $this->db->insert('greenbase_blogs', $data);
    }
    // SHOW SINGLE DATA
    function get_blogs_items_from_db($blogs_id){
        $this->db->select('*');
        $this->db->from('greenbase_blogs');
        $this->db->where('id',$blogs_id);
        $q = $this->db->get();
        return $q->result_array();
    }
    // READ
    function show_all_blogs(){
        $this->db->select();
        $query = $this->db->get('greenbase_blogs');
        if ($query->num_rows() > 0)
            return $query->result_array();
        else
            return $response= "No Data Found";
    }
     // UPDATE
     public function update_blogs_to_db($id,$data){
        $this->db->select();
        $this->db->where('ID', $id);
        return $this->db->update('greenbase_blogs', $data);
    }
    // DELETE
    public function deleteSelectedBlog($id){
        $this->db->where('ID', $id);
        $data = $this->db->delete('greenbase_blogs');
        return $data;
    }
}
    