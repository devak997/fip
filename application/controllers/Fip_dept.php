<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_dept extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fip_dept_model');
    } 

    /*
     * Listing of fip_dept
     */
    function index()
    {
        $data['fip_dept'] = $this->Fip_dept_model->get_all_fip_dept();
        
        $data['_view'] = 'fip_dept/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fip_dept
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'dept_name' => $this->input->post('dept_name'),
            );
            
            $fip_dept_id = $this->Fip_dept_model->add_fip_dept($params);
            redirect('fip_dept/index');
        }
        else
        {            
            $data['_view'] = 'fip_dept/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fip_dept
     */
    function edit($id)
    {   
        // check if the fip_dept exists before trying to edit it
        $data['fip_dept'] = $this->Fip_dept_model->get_fip_dept($id);
        
        if(isset($data['fip_dept']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'dept_name' => $this->input->post('dept_name'),
                );

                $this->Fip_dept_model->update_fip_dept($id,$params);            
                redirect('fip_dept/index');
            }
            else
            {
                $data['_view'] = 'fip_dept/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fip_dept you are trying to edit does not exist.');
    } 

    /*
     * Deleting fip_dept
     */
    function remove($id)
    {
        $fip_dept = $this->Fip_dept_model->get_fip_dept($id);

        // check if the fip_dept exists before trying to delete it
        if(isset($fip_dept['id']))
        {
            $this->Fip_dept_model->delete_fip_dept($id);
            redirect('fip_dept/index');
        }
        else
            show_error('The fip_dept you are trying to delete does not exist.');
    }
    
}