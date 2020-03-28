<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_profile_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fip_profile by id
     */
    function get_fip_profile($id)
    {
        return $this->db->get_where('fip_profile',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all fip_profile
     */
    function get_all_fip_profile()
    {
        $this->db->select('fp.id, fp.emp_id,fd.dept_name,fp.dob, fp.gender, fp.mobileno, fp.mailid, fp.city, fp.aadhar, fp.pan, fp.bank_name, fp.bank_accno,fp.bank_ifsc');
        $this->db->where('fp.deleted_at', null);
        $this->db->from('fip_profile as fp');
        $this->db->join('fip_dept as fd', 'fp.dept = fd.id');
        $this->db->order_by('fp.id', 'asc');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new fip_profile
     */
    function add_fip_profile($params)
    {
        $this->db->insert('fip_profile',$params);
        $params['dob']=date("Y-m-d",strtotime($params['dob']));
        return $this->db->insert_id();
    }
    
    /*
     * function to update fip_profile
     */
    function update_fip_profile($id,$params)
    {
        $this->db->where('id',$id);
        if(isset($params['dob'])) {
            $params['dob']=date("Y-m-d",strtotime($params['dob']));
        }
        $params['updated_at'] = date("Y-m-d H:i:s");
        return $this->db->update('fip_profile',$params);
    }
    
    /*
     * function to delete fip_profile
     */
    function delete_fip_profile($id)
    {
        $this->db->where('id',$id);
        $params = [];
        $params['deleted_at'] = date("Y-m-d H:i:s");
        return $this->db->update('fip_profile',$params);
        // return $this->db->delete('fip_profile',array('id'=>$id));
    }
}
