<?php
require_once "../../controllers/sendMailController.php";
class AjaxForm
{
    public $post_data;
    public function sendFormInfo()
    {
        $data = $this->post_data;

        $response = SendMail::dataMail($data);
        if ($response == "ok") {
            echo "Mensaje enviado con éxito";
        } else {
            echo "Ocurrió un error";
        }
    }
}

if (isset($_POST['name']) || !is_null($_POST['name'])) {
    $nombre = htmlspecialchars($_POST['name']);
} else {
    $nombre = NULL;
}
if (isset($_POST['email']) || !is_null($_POST['email'])) {
    $correo = $_POST['email'];
} else {
    $correo = NULL;
}
if (isset($_POST['phone']) || !is_null($_POST['phone'])) {
    $tel = htmlspecialchars($_POST['phone']);
} else {
    $tel = NULL;
}
if (isset($_POST['area']) || !is_null($_POST['area'])) {
    $area = intval($_POST['area']);
} else {
    $area = NULL;
}
if (isset($_POST['service']) || !is_null($_POST['service'])) {
    $servicio = htmlspecialchars($_POST['service']);
} else {
    $servicio = NULL;
}
if (isset($_POST['subject']) || !is_null($_POST['subject'])) {
    $asunto = htmlspecialchars($_POST['subject']);
} else {
    $asunto = NULL;
}
if (isset($_POST['message']) || !is_null($_POST['message'])) {
    $mensaje = htmlspecialchars($_POST['message']);
} else {
    $mensaje = NULL;
}

$ajax = new AjaxForm();
$ajax->post_data = array(
    "nombre" => $nombre,
    "tel" => $tel,
    "correo" => $correo,
    "servicio" => $servicio,
    "area" => $area,
    "asunto" => $asunto,
    "mensaje" => $mensaje
);
$ajax->sendFormInfo();
