<?php
class Partner_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all()
    {
        $query = $this->db->get('partner');
        return $query;
    }

    function get_all_active()
    {
        $this->db->where('active_partner','1');
        $query = $this->db->get('partner');
        return $query;
    }

    function get_all_limit($limit)
    {
        $this->db->where('active_partner','1');
        $query = $this->db->get('partner',$limit);
        return $query;
    }

    function get_all_limit_pagination($limit,$start)
    {
        $this->db->where('active_partner','1');
        $query = $this->db->get('partner',$limit,$start);
        return $query;
    }

    function get_by_id($id)
    {
        $this->db->where('id_partner',$id);
        $query = $this->db->get('partner');
        return $query;
    }

    function insert_data($data)
    {
        $insert = $this->db->insert('partner', $data);
        return $insert;
    }

    function update($id,$data)
    {
        $this->db->where('id_partner',$id);
        $update = $this->db->update('partner', $data);
        return $update;
    }

    function delete($id)
    {
        $this->delete_img($id);
        $delete = $this->db->delete('partner',array('id_partner'=>$id));
        return $delete;
    }

    function delete_img($id)
    {
        $row = $this->get_by_id($id)->row()->image;
        return unlink('./partner/'.$row);
    }
}
