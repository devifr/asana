<?php
class Section_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all($id='1')
    {
        $this->db->join('bahasa','section.bahasa_id=bahasa.id_bahasa','left');
        $this->db->order_by('id_section','ASC');
        $query = $this->db->get('section');
        return $query;
    }

    function get_by_id($id)
    {
        $this->db->join('bahasa','section.bahasa_id=bahasa.id_bahasa','left');
        $this->db->where('id_section',$id);
        $query = $this->db->get('section');
        return $query;
    }

    function get_by_alias($alias, $bhs=NULL)
    {
        $this->db->join('bahasa','section.bahasa_id=bahasa.id_bahasa','left');
        $this->db->where('alias',$alias);
        if($bhs!=NULL){
            $this->db->where('alias_bahasa',$bhs);
        }
        $query = $this->db->get('section');
        return $query;
    }

    function insert_data($data)
    {
        $insert = $this->db->insert('section', $data);
        return $insert;
    }

    function update($id,$data)
    {
        $this->db->where('id_section',$id);
        $update = $this->db->update('section', $data);
        return $update;
    }
}
