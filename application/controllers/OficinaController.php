<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OficinaController extends CI_Controller {

	public function index()
	{
        $this->load->model('Oficina');
        $this->load->model('Delegacio');
        
        $data = array(
            'oficinas' => $this->Oficina->getAll(),
            'delegacions' => $this->Delegacio->getAll(),
        );

        $this->load->view('Oficina/oficina_index', $data);
    }

    public function addOficina()
    {
        //$this->load->library("form_validation"); (autoload.php)
        $this->load->model('Oficina');
        $this->load->model('Delegacio');
            
        $this->form_validation->set_rules('nom', 'Nom', 'required|is_unique[oficina.nom]');
        $this->form_validation->set_rules('delegacio', 'Delegacio', 'callback_delegacio_check');

        if ($this->form_validation->run() == TRUE)
        {
            $this->Oficina->add(array(
                "nom" => $this->input->post("nom"),
                "delegacio" => $this->input->post("delegacio"),
            ));
            redirect("OficinaController/index");
        }else{
            $data = array(
                'oficinas' => $this->Oficina->getAll(),
                'delegacions' => $this->Delegacio->getAll(),
            );

            $this->load->view('Oficina/oficina_index', $data);
        }
    }

    public function delegacio_check($value)
    {
        if($value == -1){
            $this->form_validation->set_message('delegacio_check', 'Cal seleccionar una {field} valida.');
            return FALSE;
        }
        return TRUE;
    }

    public function dinamic()
    {
        $this->load->model('Oficina');
        $this->load->model('Delegacio');
        $this->load->helper('dropdown_helper');

        $data = array(
            'delegacions' => convert_array_dropdown($this->Delegacio->getAll(),'id','nom'),
            'op_oficinas' => 0,
        );

        if(isset($_POST['preg1'])){
            $delegacio = $this->input->post('delegacio');
            $data['delegacio'] = $delegacio;
            $data['op_oficinas'] = 1;
            $data['oficines'] = convert_array_dropdown($this->Oficina->getWhere($delegacio),'id','nom');
        }else if(isset($_POST['preg2'])){
            $delegacio = $this->input->post('delegacio');
            $data['delegacio'] = $delegacio;
            $data['op_oficinas'] = 2;
            $data['oficina'] = $this->input->post('oficina');
        }
        

        $this->load->view('Oficina/dinamic', $data);
    }

    public function prueba()
    {
        var_dump($this->input->post('categories'));
    }
    
}