<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {

	public function index()
	{
        $url = "./application/third_party/fpdf186/fpdf.php";
        require($url);

        $this->load->model('dpt');
        $this->load->model('emp');
        $this->load->helper("pdf_helper");

        $data = array(
            'dpts' => $this->dpt->getAll(),
            'emps' => $this->emp->getAll(),
        );

        

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial',null,12);
        
        draw_table_pdf($data, $pdf);
        
        $pdf->Output();

    }

    function mail ()
    {

        $this->load->helper("mail_helper");

        $subject = "prova de mail";
        $body = "prova de mail body";
        $correu = "jgarcia16@milaifontanals.org";

        echo my_send_mail($subject, $body, $correu);
    }
    
}