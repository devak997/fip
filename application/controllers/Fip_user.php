<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_user extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fip_user_model');
    } 

    /*
     * Listing of fip_users
     */
    function index()
    {
        $data['fip_users'] = $this->Fip_user_model->get_all_fip_users();
        
        $data['_view'] = 'fip_user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fip_user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'id' => $this->input->post('id'),
				'role' => $this->input->post('role'),
            );
            
            $fip_user_id = $this->Fip_user_model->add_fip_user($params);
            redirect('fip_user/index');
        }
        else
        {            
            $data['_view'] = 'fip_user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fip_user
     */
    function edit($emp_id)
    {   
        // check if the fip_user exists before trying to edit it
        $data['fip_user'] = $this->Fip_user_model->get_fip_user($emp_id);
        
        if(isset($data['fip_user']['emp_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'id' => $this->input->post('id'),
					'role' => $this->input->post('role'),
                );

                $this->Fip_user_model->update_fip_user($emp_id,$params);            
                redirect('fip_user/index');
            }
            else
            {
                $data['_view'] = 'fip_user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fip_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting fip_user
     */
    function remove($emp_id)
    {
        $fip_user = $this->Fip_user_model->get_fip_user($emp_id);

        // check if the fip_user exists before trying to delete it
        if(isset($fip_user['emp_id']))
        {
            $this->Fip_user_model->delete_fip_user($emp_id);
            redirect('fip_user/index');
        }
        else
            show_error('The fip_user you are trying to delete does not exist.');
    }
    
}