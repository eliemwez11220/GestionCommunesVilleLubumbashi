<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Avenue_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get avenue by avenue_id
     */
    function get_avenue($avenue_id)
    {
        return $this->db->get_where('avenues',array('avenue_id'=>$avenue_id))->row_array();
    }
    
    /*
     * Get all avenues count
     */
    function get_all_avenues_count()
    {
        $this->db->from('avenues');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all avenues
     */
    function get_all_avenues($params = array())
    {
        $this->db->order_by('avenue_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('avenues')->result_array();
    }
        
    /*
     * function to add new avenue
     */
    function add_avenue($params)
    {
        $this->db->insert('avenues',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update avenue
     */
    function update_avenue($avenue_id,$params)
    {
        $this->db->where('avenue_id',$avenue_id);
        return $this->db->update('avenues',$params);
    }
    
    /*
     * function to delete avenue
     */
    function delete_avenue($avenue_id)
    {
        return $this->db->delete('avenues',array('avenue_id'=>$avenue_id));
    }
}