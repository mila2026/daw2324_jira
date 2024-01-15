<?php

    defined("BASEPATH") OR exit("no direct script acces allowed");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(!function_exists('my_send_mail')){
        function my_send_mail($subject, $body, $correu)
        {
            require ('./application/third_party/PHPMailer/PHPMailer/src/Exception.php');
            require ('./application/third_party/PHPMailer/PHPMailer/src/PHPMailer.php');
            require ('./application/third_party/PHPMailer/PHPMailer/src/SMTP.php');

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'jagj0601@gmail.com';
            $mail->Password = 'nitl xjst wkxo basy';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = 2; mostrar tot el que pasa quan s'encvia el mail,  0 no mostra res
            $mail->SMTPDebug = 2;
        
            $mail->SetFrom = 'jagj0601@gmail.com';
            $mail->FromName = 'Juan Antonio';
            $mail->AddAddress("$correu"); //correu del client
        
            $mail->IsHTML(true);
            $mail->Subject = "$subject";
            $mail->AltBody = "-";
            $mail->Body = "$body";
        }
    }
?>