<?php
/**
 * Created by PhpStorm.
 * User: jr
 * Date: 05/06/2015
 * Time: 04:45 PM
 */
require_once ROOT . 'libs' . DS . 'class.phpmailer.php';
class Mail
{
    private $mail;
    private $host;
    private $username;
    private $passwore;
    private $port;
    private $invalid;

    /**
     * @param $host        host provedor de correo
     * @param $username    correo electronico del usuario
     * @param $passwore    contraseña
     * @param $port        puerto por donde escucha el provedor de servicio
     */
    public function __construct($host, $username, $passwore, $port)
    {
        $this->mail = new PHPMailer();
        $this->host = $host;
        $this->username = $username;
        $this->passwore = $passwore;
        $this->port = $port;
        $this->invalid='';
    }

    /**
     * @param $from                      correo remitente
     * @param string $fromName           nombre alternativo remitente
     * @param $destinatarios            correos electronicos separados por un espacio a quien se envia el mail
     * @param string $asunto            asunto correo electronico
     * @param string $contenido         cuerpo html del contenido del mensaje
     * @return string                   informacion de la transaccion
     * @throws Exception                el correo no pudo ser enviado
     */
    public function sendMail($from, $fromName = '', $destinatarios, $asunto='', $contenido='')
    {
        $mail=$this->mail;

        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;
        $mail->Host       = $this->host;
        $mail->Port       = $this->port;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Username   = $this->username;
        $mail->Password   =  $this->passwore;
        $mail->SetFrom($from, $fromName);
        $this->filtrarCorreos($destinatarios);
        $mail->Subject = $asunto;
        $mail->Body= $contenido;
        $mail->AltBody = strip_tags($contenido);

        if(!$this->mail->send()) {
            return $this->mail->ErrorInfo;
        } else {
            return 'El Correo Se Ha Sido Enviado De Forma Correcta, Correos Descartados: ' . $this->invalid;
        }
    }

    /**
     * @param $correos   string de correos
     *
     * valida las direcciones de correo enviadas en un string separadas por espacios y si son validas las adiciona al +
     * mail
     */
    protected function filtrarCorreos($correos){

        if($correos) {
            $correos = explode(' ', $correos);

            for ($i=0; $i<count($correos); $i++) {

                if (filter_var($correos[$i], FILTER_VALIDATE_EMAIL)) {
                    $this->mail->AddAddress($correos[$i]);
                }
                else{
                    $this->invalid = $this->invalid . $correos[$i].' ';
                }
            }
        }
    }



}