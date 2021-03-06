<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cellule extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cellule_model');
    } 

    /*
     * Listing of cellules
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('cellule/index?');
        $config['total_rows'] = $this->Cellule_model->get_all_cellules_count();
        $this->pagination->initialize($config);

        $data['cellules'] = $this->Cellule_model->get_all_cellules($params);
        
        $data['_view'] = 'cellule/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cellule
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('quartier_sid','Quartier Sid','required');
		$this->form_validation->set_rules('nomCellule','NomCellule','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'quartier_sid' => $this->input->post('quartier_sid'),
				'nomCellule' => $this->input->post('nomCellule'),
				'nomChefCellule' => $this->input->post('nomChefCellule'),
				'telephoneChefCellule' => $this->input->post('telephoneChefCellule'),
				'nombreAvenues' => $this->input->post('nombreAvenues'),
				'date_created' => $this->input->post('date_created'),
				'last_update' => $this->input->post('last_update'),
				'adresseChefCellule' => $this->input->post('adresseChefCellule'),
            );
            
            $cellule_id = $this->Cellule_model->add_cellule($params);
            redirect('cellule/index');
        }
        else
        {
			$this->load->model('Quartier_model');
			$data['all_quartiers'] = $this->Quartier_model->get_all_quartiers();
            
            $data['_view'] = 'cellule/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a cellule
     */
    function edit($cellule_id)
    {   
        // check if the cellule exists before trying to edit it
        $data['cellule'] = $this->Cellule_model->get_cellule($cellule_id);
        
        if(isset($data['cellule']['cellule_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('quartier_sid','Quartier Sid','required');
			$this->form_validation->set_rules('nomCellule','NomCellule','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'quartier_sid' => $this->input->post('quartier_sid'),
					'nomCellule' => $this->input->post('nomCellule'),
					'nomChefCellule' => $this->input->post('nomChefCellule'),
					'telephoneChefCellule' => $this->input->post('telephoneChefCellule'),
					'nombreAvenues' => $this->input->post('nombreAvenues'),
					'date_created' => $this->input->post('date_created'),
					'last_update' => $this->input->post('last_update'),
					'adresseChefCellule' => $this->input->post('adresseChefCellule'),
                );

                $this->Cellule_model->update_cellule($cellule_id,$params);            
                redirect('cellule/index');
            }
            else
            {
				$this->load->model('Quartier_model');
				$data['all_quartiers'] = $this->Quartier_model->get_all_quartiers();

                $data['_view'] = 'cellule/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cellule you are trying to edit does not exist.');
    } 

    /*
     * Deleting cellule
     */
    function remove($cellule_id)
    {
        $cellule = $this->Cellule_model->get_cellule($cellule_id);

        // check if the cellule exists before trying to delete it
        if(isset($cellule['cellule_id']))
        {
            $this->Cellule_model->delete_cellule($cellule_id);
            redirect('cellule/index');
        }
        else
            show_error('The cellule you are trying to delete does not exist.');
    }
    
}
