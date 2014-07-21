<?php
class Client_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all()
    {
        $query = $this->db->get('client');
        return $query;
    }

    function get_all_active()
    {
        $this->db->where('active_client','1');
        $query = $this->db->get('client');
        return $query;
    }

    function get_all_limit($limit)
    {
        $this->db->where('active_client','1');
        $query = $this->db->get('client',$limit);
        return $query;
    }

    function get_all_limit_pagination($limit,$start)
    {
        $this->db->where('active_client','1');
        $query = $this->db->get('client',$limit,$start);
        return $query;
    }

    function get_by_id($id)
    {
        $this->db->where('id_client',$id);
        $query = $this->db->get('client');
        return $query;
    }

    function insert_data($data)
    {
        $insert = $this->db->insert('client', $data);
        return $insert;
    }

    function update($id,$data)
    {
        $this->db->where('id_client',$id);
        $update = $this->db->update('client', $data);
        return $update;
    }

    function delete($id)
    {
        $this->delete_img($id);
        $delete = $this->db->delete('client',array('id_client'=>$id));
        return $delete;
    }

    function delete_img($id)
    {
        $row = $this->get_by_id($id)->row()->image;
        return unlink('./client/'.$row);
    }
}
