<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_activity extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fip_activity_model');
    } 

    /*
     * Listing of fip_activity
     */
    function index()
    {
        $data['fip_activity'] = $this->Fip_activity_model->get_all_fip_activity();
        
        $data['_view'] = 'fip_activity/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fip_activity
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'date' => $this->input->post('date'),
				'hour1' => $this->input->post('hour1'),
				'hour2' => $this->input->post('hour2'),
				'hour3' => $this->input->post('hour3'),
				'hour4' => $this->input->post('hour4'),
				'hour5' => $this->input->post('hour5'),
				'hour6' => $this->input->post('hour6'),
				'hour7' => $this->input->post('hour7'),
				'hour8' => $this->input->post('hour8'),
            );
            
            $fip_activity_id = $this->Fip_activity_model->add_fip_activity($params);
            redirect('fip_activity/index');
        }
        else
        {            
            $data['_view'] = 'fip_activity/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fip_activity
     */
    function edit($id)
    {   
        // check if the fip_activity exists before trying to edit it
        $data['fip_activity'] = $this->Fip_activity_model->get_fip_activity($id);
        
        if(isset($data['fip_activity']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'date' => $this->input->post('date'),
					'hour1' => $this->input->post('hour1'),
					'hour2' => $this->input->post('hour2'),
					'hour3' => $this->input->post('hour3'),
					'hour4' => $this->input->post('hour4'),
					'hour5' => $this->input->post('hour5'),
					'hour6' => $this->input->post('hour6'),
					'hour7' => $this->input->post('hour7'),
					'hour8' => $this->input->post('hour8'),
                );

                $this->Fip_activity_model->update_fip_activity($id,$params);            
                redirect('fip_activity/index');
            }
            else
            {
                $data['_view'] = 'fip_activity/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fip_activity you are trying to edit does not exist.');
    } 

    /*
     * Deleting fip_activity
     */
    function remove($id)
    {
        $fip_activity = $this->Fip_activity_model->get_fip_activity($id);

        // check if the fip_activity exists before trying to delete it
        if(isset($fip_activity['id']))
        {
            $this->Fip_activity_model->delete_fip_activity($id);
            redirect('fip_activity/index');
        }
        else
            show_error('The fip_activity you are trying to delete does not exist.');
    }
    
}