<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpController extends CI_Controller {

	public function index()
	{
        $this->load->library("form_validation");
        $this->load->model('dpt');
        $this->load->model('emp');
        
        $data = array(
            'dpts' => $this->dpt->getAll(),
            'emps' => $this->emp->getAll(),
        );

        //hola
        
        if(isset($_POST["submit"]) && 2 == 2){
            
            $this->form_validation->set_rules('name', 'Nom usuari', 'required');
            $this->form_validation->set_rules('dpt', 'Departament', 'callback_dpt_check');
    
            if ($this->form_validation->run() == TRUE)
            {
                $this->emp->add(array(
                    "nom" => $this->input->post("name"),
                    "dpt" => $this->input->post("dpt"),
                ));
                $this->load->view('Empleats/index', $data);
                exit;
            }

        }

        $this->load->view('Empleats/index', $data);
    }

    public function dpt_check($value)
    {
        if($value == 0){
            $this->form_validation->set_message('dpt_check', 'Cal seleccionar un valor valid per el control {field}.');
            return FALSE;
        }
        return TRUE;
    }
    
}