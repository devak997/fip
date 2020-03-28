<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fip_role by id
     */
    function get_fip_role($id)
    {
        return $this->db->get_where('fip_roles',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all fip_roles
     */
    function get_all_fip_roles()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('fip_roles')->result_array();
    }
        
    /*
     * function to add new fip_role
     */
    function add_fip_role($params)
    {
        $this->db->insert('fip_roles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fip_role
     */
    function update_fip_role($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('fip_roles',$params);
    }
    
    /*
     * function to delete fip_role
     */
    function delete_fip_role($id)
    {
        return $this->db->delete('fip_roles',array('id'=>$id));
    }
}
