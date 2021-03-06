<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_workhour extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fip_workhour_model');
    } 

    /*
     * Listing of fip_workhours
     */
    function index()
    {
        $data['fip_workhours'] = $this->Fip_workhour_model->get_all_fip_workhours();
        
        $data['_view'] = 'fip_workhour/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fip_workhour
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'emp_id' => $this->input->post('emp_id'),
				'login' => $this->input->post('login'),
				'logout' => $this->input->post('logout'),
            );
            
            $fip_workhour_id = $this->Fip_workhour_model->add_fip_workhour($params);
            redirect('fip_workhour/index');
        }
        else
        {            
            $data['_view'] = 'fip_workhour/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fip_workhour
     */
    function edit($id)
    {   
        // check if the fip_workhour exists before trying to edit it
        $data['fip_workhour'] = $this->Fip_workhour_model->get_fip_workhour($id);
        
        if(isset($data['fip_workhour']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'emp_id' => $this->input->post('emp_id'),
					'login' => $this->input->post('login'),
					'logout' => $this->input->post('logout'),
                );

                $this->Fip_workhour_model->update_fip_workhour($id,$params);            
                redirect('fip_workhour/index');
            }
            else
            {
                $data['_view'] = 'fip_workhour/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fip_workhour you are trying to edit does not exist.');
    } 

    /*
     * Deleting fip_workhour
     */
    function remove($id)
    {
        $fip_workhour = $this->Fip_workhour_model->get_fip_workhour($id);

        // check if the fip_workhour exists before trying to delete it
        if(isset($fip_workhour['id']))
        {
            $this->Fip_workhour_model->delete_fip_workhour($id);
            redirect('fip_workhour/index');
        }
        else
            show_error('The fip_workhour you are trying to delete does not exist.');
    }
    
}
