<?php
class Vendor_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all()
    {
        $query = $this->db->get('vendor');
        return $query;
    }

    function get_all_limit($limit)
    {
        $this->db->where('active_vendor','1');
        $query = $this->db->get('vendor',$limit);
        return $query;
    }

    function get_all_limit_pagination($limit,$start)
    {
        $this->db->where('active_vendor','1');
        $query = $this->db->get('vendor',$limit,$start);
        return $query;
    }

    function get_by_id($id)
    {
        $this->db->where('id_vendor',$id);
        $query = $this->db->get('vendor');
        return $query;
    }

    function insert_data($data)
    {
        $insert = $this->db->insert('vendor', $data);
        return $insert;
    }

    function update($id,$data)
    {
        $this->db->where('id_vendor',$id);
        $update = $this->db->update('vendor', $data);
        return $update;
    }

    function delete($id)
    {
        $this->delete_img($id);
        $delete = $this->db->delete('vendor',array('id_vendor'=>$id));
        return $delete;
    }

    function delete_img($id)
    {
        $row = $this->get_by_id($id)->row()->image;
        return unlink('./vendor/'.$row);
    }
}
