<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = site_url('OficinaController/dinamic');
        $atributs = array('name' => 'form1', 'id'=>'from1', 'method'=> 'POST');
        echo form_open($url, $atributs);

        if($op_oficinas == 0){

            echo 'Delegacions:';
            echo form_dropdown('delegacio', $delegacions);
            echo '<br>';
            echo form_submit('preg1', 'enviar');

        }else if($op_oficinas == 1){
            echo 'Delegacio: ';
            echo form_label($delegacio, 'delegacio_label');
            echo form_hidden('delegacio', $delegacio);
            echo '<br> Oficinas:';
            echo form_dropdown('oficina', $oficines);
            echo '<br>';
            echo form_submit('preg2', 'enviar');
        }else if($op_oficinas == 2){
            echo 'Delegacio: ';
            echo form_label($delegacio, 'delegacio_label');
            echo form_hidden('delegacio', $delegacio);
            echo '<br> Oficinas:';
            echo form_label($oficina, 'oficina');
            echo '<br>';
            echo form_submit('restaurar', 'restaurar');
        }
        
        echo form_close();
    ?>
</body>
</html>