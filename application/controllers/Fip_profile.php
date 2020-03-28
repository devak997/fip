<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fip_profile extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fip_profile_model');
    } 

    /*
     * Listing of fip_profile
     */
    function index()
    {
        $data['fip_profile'] = $this->Fip_profile_model->get_all_fip_profile();
        $data['_view'] = 'fip_profile/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fip_profile
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('emp_id','Emp Id','required|max_length[100]');
		$this->form_validation->set_rules('dob','Dob','required');
		$this->form_validation->set_rules('mobileno','Mobileno','required|max_length[255]');
		$this->form_validation->set_rules('mailid','Mailid','required|max_length[255]');
		$this->form_validation->set_rules('city','City','required|max_length[255]');
		$this->form_validation->set_rules('aadhar','Aadhar','required|integer');
		$this->form_validation->set_rules('pan','Pan','required|max_length[25]');
		$this->form_validation->set_rules('bank_name','Bank Name','required|max_length[100]');
		$this->form_validation->set_rules('bank_accno','Bank Accno','required|max_length[255]');
		$this->form_validation->set_rules('bank_ifsc','Bank Ifsc','required|max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'dept' => $this->input->post('dept'),
				'gender' => $this->input->post('gender'),
				'emp_id' => $this->input->post('emp_id'),
				'dob' => $this->input->post('dob'),
				'mobileno' => $this->input->post('mobileno'),
				'mailid' => $this->input->post('mailid'),
				'city' => $this->input->post('city'),
				'aadhar' => $this->input->post('aadhar'),
				'pan' => $this->input->post('pan'),
				'bank_name' => $this->input->post('bank_name'),
				'bank_accno' => $this->input->post('bank_accno'),
				'bank_ifsc' => $this->input->post('bank_ifsc'),
            );
            
            $fip_profile_id = $this->Fip_profile_model->add_fip_profile($params);
            redirect('fip_profile/index');
        }
        else
        {
			$this->load->model('Fip_dept_model');
			$data['all_fip_dept'] = $this->Fip_dept_model->get_all_fip_dept();
            
            $data['_view'] = 'fip_profile/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fip_profile
     */
    function edit($id)
    {   
        // check if the fip_profile exists before trying to edit it
        $data['fip_profile'] = $this->Fip_profile_model->get_fip_profile($id);
        
        if(isset($data['fip_profile']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('gender','Gender','required');
			$this->form_validation->set_rules('emp_id','Emp Id','required|max_length[100]');
			$this->form_validation->set_rules('dob','Dob','required');
			$this->form_validation->set_rules('mobileno','Mobileno','required|max_length[255]');
			$this->form_validation->set_rules('mailid','Mailid','required|max_length[255]');
			$this->form_validation->set_rules('city','City','required|max_length[255]');
			$this->form_validation->set_rules('aadhar','Aadhar','required|integer');
			$this->form_validation->set_rules('pan','Pan','required|max_length[25]');
			$this->form_validation->set_rules('bank_name','Bank Name','required|max_length[100]');
			$this->form_validation->set_rules('bank_accno','Bank Accno','required|max_length[255]');
			$this->form_validation->set_rules('bank_ifsc','Bank Ifsc','required|max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'dept' => $this->input->post('dept'),
					'gender' => $this->input->post('gender'),
					'emp_id' => $this->input->post('emp_id'),
					'dob' => $this->input->post('dob'),
					'mobileno' => $this->input->post('mobileno'),
					'mailid' => $this->input->post('mailid'),
					'city' => $this->input->post('city'),
					'aadhar' => $this->input->post('aadhar'),
					'pan' => $this->input->post('pan'),
					'bank_name' => $this->input->post('bank_name'),
					'bank_accno' => $this->input->post('bank_accno'),
					'bank_ifsc' => $this->input->post('bank_ifsc'),
                );

                $this->Fip_profile_model->update_fip_profile($id,$params);            
                redirect('fip_profile/index');
            }
            else
            {
				$this->load->model('Fip_dept_model');
				$data['all_fip_dept'] = $this->Fip_dept_model->get_all_fip_dept();

                $data['_view'] = 'fip_profile/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fip_profile you are trying to edit does not exist.');
    } 

    /*
     * Deleting fip_profile
     */
    function remove($id)
    {
        $fip_profile = $this->Fip_profile_model->get_fip_profile($id);

        // check if the fip_profile exists before trying to delete it
        if(isset($fip_profile['id']))
        {
            $this->Fip_profile_model->delete_fip_profile($id);
            redirect('fip_profile/index');
        }
        else
            show_error('The fip_profile you are trying to delete does not exist.');
    }
    
}
