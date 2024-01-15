<?php

    defined("BASEPATH") OR exit("no direct script acces allowed");

    if(!function_exists('draw_table_pdf')){
        function draw_table_pdf($data, $pdf)
        {
            foreach($data["emps"] as $emp){
                $pdf->Cell(10,10,'Nom: '.$emp->nom);
                $pdf->Ln(10);
            }
        }
    }
?>