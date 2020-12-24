<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Demandesactesmariage_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get demandesactesmariage by demande_id
     */
    function get_demandesactesmariage($demande_id)
    {
        return $this->db->get_where('demandesactesmariages',array('demande_id'=>$demande_id))->row_array();
    }
    
    /*
     * Get all demandesactesmariages count
     */
    function get_all_demandesactesmariages_count()
    {
        $this->db->from('demandesactesmariages');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all demandesactesmariages
     */
    function get_all_demandesactesmariages($params = array())
    {
        $this->db->order_by('demande_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('demandesactesmariages')->result_array();
    }
        
    /*
     * function to add new demandesactesmariage
     */
    function add_demandesactesmariage($params)
    {
        $this->db->insert('demandesactesmariages',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update demandesactesmariage
     */
    function update_demandesactesmariage($demande_id,$params)
    {
        $this->db->where('demande_id',$demande_id);
        return $this->db->update('demandesactesmariages',$params);
    }
    
    /*
     * function to delete demandesactesmariage
     */
    function delete_demandesactesmariage($demande_id)
    {
        return $this->db->delete('demandesactesmariages',array('demande_id'=>$demande_id));
    }
}