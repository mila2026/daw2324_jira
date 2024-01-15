<?php

    defined("BASEPATH") OR exit("no direct script acces allowed");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(!function_exists('my_send_mail')){
        function convert_array_dropdown($data, $key, $value)
        {
            $result = array();
            foreach($data as $item){
                $result[$item->$key] = $item->$value;
            }
            return $result;
        }
    }
?>