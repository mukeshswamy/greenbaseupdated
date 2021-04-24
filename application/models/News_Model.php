<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_Model extends CI_Model 
{
    // CREATE
    function add_news_to_db($data)  
    {  
       return $this->db->insert('greenbase_news', $data);
    }
    // SHOW SINGLE DATA
    function get_news_items_from_db($news_id){
        $this->db->select('*');
        $this->db->from('greenbase_news');
        $this->db->where('id',$news_id);
        $q = $this->db->get();
        return $q->result_array();
    }
    // READ
    function show_all_news(){
        $this->db->select();
        $query = $this->db->get('greenbase_news');
        if ($query->num_rows() > 0)
            return $query->result_array();
        else
            return $response= "No Data Found";
    }
     // UPDATE
     public function update_news_to_db($id,$data){
        $this->db->select();
        $this->db->where('ID', $id);
        return $this->db->update('greenbase_news', $data);
    }
    // DELETE
    public function deleteSelectedNews($id){
        $this->db->where('ID', $id);
        $data = $this->db->delete('greenbase_news');
        return $data;
    }
}
    