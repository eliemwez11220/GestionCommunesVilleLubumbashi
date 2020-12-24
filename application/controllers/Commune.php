<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Commune extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Commune_model');
    } 

    /*
     * Listing of communes
     */
    function index()
    {
        $data['communes'] = $this->Commune_model->get_all_communes();
        
        $data['_view'] = 'commune/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new commune
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nomCommune' => $this->input->post('nomCommune'),
				'nomBourgmestre' => $this->input->post('nomBourgmestre'),
				'telephoneBourgmestre' => $this->input->post('telephoneBourgmestre'),
				'nombreQuartiers' => $this->input->post('nombreQuartiers'),
				'contactBureau' => $this->input->post('contactBureau'),
				'date_created' => $this->input->post('date_created'),
				'last_update' => $this->input->post('last_update'),
				'adresseBourgmestre' => $this->input->post('adresseBourgmestre'),
				'adresseBureau' => $this->input->post('adresseBureau'),
            );
            
            $commune_id = $this->Commune_model->add_commune($params);
            redirect('commune/index');
        }
        else
        {            
            $data['_view'] = 'commune/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a commune
     */
    function edit($commune_id)
    {   
        // check if the commune exists before trying to edit it
        $data['commune'] = $this->Commune_model->get_commune($commune_id);
        
        if(isset($data['commune']['commune_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nomCommune' => $this->input->post('nomCommune'),
					'nomBourgmestre' => $this->input->post('nomBourgmestre'),
					'telephoneBourgmestre' => $this->input->post('telephoneBourgmestre'),
					'nombreQuartiers' => $this->input->post('nombreQuartiers'),
					'contactBureau' => $this->input->post('contactBureau'),
					'date_created' => $this->input->post('date_created'),
					'last_update' => $this->input->post('last_update'),
					'adresseBourgmestre' => $this->input->post('adresseBourgmestre'),
					'adresseBureau' => $this->input->post('adresseBureau'),
                );

                $this->Commune_model->update_commune($commune_id,$params);            
                redirect('commune/index');
            }
            else
            {
                $data['_view'] = 'commune/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The commune you are trying to edit does not exist.');
    } 

    /*
     * Deleting commune
     */
    function remove($commune_id)
    {
        $commune = $this->Commune_model->get_commune($commune_id);

        // check if the commune exists before trying to delete it
        if(isset($commune['commune_id']))
        {
            $this->Commune_model->delete_commune($commune_id);
            redirect('commune/index');
        }
        else
            show_error('The commune you are trying to delete does not exist.');
    }
    
}