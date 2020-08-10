<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';

class SendMail
{
    public static function dataMail($dataForm)
    {
        foreach ($dataForm as $value) {
            if ($value ==  NULL) {
                echo "Por favor lleve todos los campos";
                break;
                exit();
            }
        }

        $mail = new PHPMailer();
        $companyMail = 'YOUR EMAIL';
        $companyMailPAss = 'YOUR PASS';


        if ($dataForm['servicio'] == 'Pintura') {
            $precio = intval($dataForm['area']) * 20;
        } elseif ($dataForm['servicio'] == 'Drywall') {
            $precio = intval($dataForm['area']) * 45;
        } else {
            $precio = $dataForm['area'] * 33.05;
        }

        $bodyMail = $dataForm['mensaje'] . "\n<h1>Precio total del trabajo:<h1>" . $precio;
        $dataForm['Mailbody'] = $bodyMail;

        try {

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host         = "smtp.gmail.com";
            $mail->SMTPAuth     = true;
            $mail->Username     = $companyMail;
            $mail->Password     = $companyMailPAss;
            $mail->SMTPSecure   = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port         = 465;

            $mail->setFrom($companyMail);
            $mail->addAddress($dataForm['correo'], $dataForm['nombre']);
            $mail->addCC($dataForm['correo']);

            $mail->isHTML(true);
            $mail->Subject = $dataForm['asunto'];
            $mail->Body    = $bodyMail;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if ($mail->send()) {
                echo "ok";
            } else {
                echo  "Ocurrió un error al enviar";

                $dataForm['Mailbody'] = $bodyMail;
                $json = json_encode($dataForm);
                $f = fopen("../../mail_data.json", "w");
                fwrite($f, $json);
                fclose($f);
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
