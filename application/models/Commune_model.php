<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Commune_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get commune by commune_id
     */
    function get_commune($commune_id)
    {
        return $this->db->get_where('communes',array('commune_id'=>$commune_id))->row_array();
    }
        
    /*
     * Get all communes
     */
    function get_all_communes()
    {
        $this->db->order_by('commune_id', 'desc');
        return $this->db->get('communes')->result_array();
    }
        
    /*
     * function to add new commune
     */
    function add_commune($params)
    {
        $this->db->insert('communes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update commune
     */
    function update_commune($commune_id,$params)
    {
        $this->db->where('commune_id',$commune_id);
        return $this->db->update('communes',$params);
    }
    
    /*
     * function to delete commune
     */
    function delete_commune($commune_id)
    {
        return $this->db->delete('communes',array('commune_id'=>$commune_id));
    }
}
