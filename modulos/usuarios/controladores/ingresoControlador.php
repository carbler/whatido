<?php

class ingresoControlador extends usuariosControlador
{
    private $login;
    private $registro;

    public function __construct(){
        parent::__construct();

        $this->login= $this->cargarModelo('login');
        $this->registro = $this->cargarModelo('registro');
        $this->vista->setCssPublic(array("estilos"));
    }
    
    public function index()
    {
        $this->vista->assign('titulo','Bienvenido A What I Do');

        if(Session::getClaveSession('autenticado')){
            $this->redireccionarPagina();
        }

        /*Verifica Datos De Login*/
        if($this->getInt('login')==1){

            $this->vista->assign('datos_login',$_POST);

            if(!$this->getAlphaNum('usuario')){
                $this->vista->assign('error','Debe Introducir Nombre De Usuario');
                $this->vista->renderizarVista('index','ingreso');
                exit;
            }
            
            if(!$this->getSql('pass')){
               $this->vista->assign('error','Debe Introducir Su Passwore');
               $this->vista->renderizarVista('index','ingreso');
                exit;
            }
            
            $row= $this->login->loginUsuario(
                $this->getAlphaNum('usuario'),
                $this->getSql('pass')
            );
            
            if(!$row){
                $this->vista->assign('error','Usuario y/o Passwore Incorrectos');
                $this->vista->renderizarVista('index','ingreso');
                exit;
            }
            
            if($row['estado']!=1){
                $this->vista->assign('error','Su Cuenta Aun No Se Encuentra Habilitada, Por Favor Active Su Cuenta');
                $this->vista->renderizarVista('index','ingreso');
                exit;
            }
            
            Session::setVariableSession('autenticado', true);
            Session::setVariableSession('usuario', $row['usuario']);
            Session::setVariableSession('id_usuario', $row['id']);
            Session::setVariableSession('tiempo', time());
        
            $this->redireccionarPagina();
        }

        /*Cerifica Datos Registro*/
        if($this->getInt('registro') == 1){
            $this->vista->assign('datos_registro', $_POST);


            if(!$this->getAlphaNum('usuario_registro')){
                $this->vista->assign('error', 'Debe introducir su nombre de usuario');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

            if(strlen ($this->getAlphaNum('usuario_registro')) < 6){
                $this->vista->assign('error','El Nombre De Usuario Debe Tener Al Menos 6 Caracteres');
                $this->vista->renderizarVista('index','ingreso');
                exit;
            }

            if($this->registro->verificarUsuario($this->getAlphaNum('usuario_registro'))){
                $this->vista->assign('error' , 'El usuario ' . $this->getAlphaNum('usuario_registro') . ' ya existe');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

            if(!$this->validarEmail($this->getPostParametro('email'))){
                $this->vista->assign('error', 'La direccion de email es inv&aacute;lida');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

            if($this->registro->verificarEmail($this->getPostParametro('email'))){
                $this->vista->assign('error', 'Esta direccion de correo ya esta registrada');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

            if(!$this->getSql('pass_registro')){
                $this->vista->assign('error','Debe introducir su password');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

            if(strlen ($this->getSql('pass_registro')) < 6){
                $this->vista->assign('error','La Contraseña Debe Tener Al Menos 6 Caracteres');
                $this->vista->renderizarVista('index','ingreso');
                exit;
            }

            if($this->getPostParametro('pass_registro') != $this->getPostParametro('confirmar')){
                $this->vista->assign('error','Los passwords no coinciden');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }


            $this->registro->registrarUsuario(
                $this->getAlphaNum('usuario_registro'),
                $this->getSql('pass_registro'),
                $this->getPostParametro('email')
            );

            $usuario = $this->registro->verificarUsuario($this->getAlphaNum('usuario_registro'));


            if(!$usuario){
                $this->vista->assign('error', 'Error al registrar el usuario');
                $this->vista->renderizarVista('index', 'ingreso');
                exit;
            }

//            $enlace =  BASE_URL .'usuarios/ingreso/activar/' . $usuario['id'] . '/' . $usuario['codigo'];
//
//            $mensaje='<h1>Hola <strong> Bienvenido A What I Do</strong></h1>' .
//                '<p>Su Registro Se Ha Completado De Manera Correcta, Para Activar Su Cuenta Por Favor Haga Clic Sobre El Siguiente Enlace : </p><br>' .
//                '<a href='. $enlace.'>'.$enlace.'</a>';
//
//            $email= new Mail(MAIL_HOST, MAIL_USER, MAIL_PASS, MAIL_PORT);
//            $email->sendMail(MAIL_USER,'What I Do',$usuario['email'],'Registro Cuenta What I Do Events',$mensaje);

            $this->vista->assign('datos_registro', false);
            $this->vista->assign('mensaje', 'Registro Completado,Por Favor Revise Su Email Para Activar Su Cuenta');
        }

        $this->vista->renderizarVista('index','ingreso');
    }
    
    public function cerrar()
    {
        Session::destruirSession();
        $this->redireccionarPagina();
    }

     /**
      *  Método mediante el cual se activa un usuario registrado
      * @param type $id
      * @param type $codigo
      */
    public function activar($id, $codigo)
    {
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
            $this->vista->assign('error' ,'Esta cuenta no existe');
            $this->vista->renderizarVista('activar', 'registro');
            exit;
        }

        $row = $this->registro->getUsuario(
            $this->filtrarInt($id),
            $this->filtrarInt($codigo)
        );

        if(!$row){
            $this->vista->assign('error','Esta cuenta no existe');
            $this->vista->renderizarVista('activar', 'registro');
            exit;
        }

        if($row['estado'] == 1){
            $this->vista->assign('error','Esta cuenta ya ha sido activada');
            $this->vista->renderizarVista('activar', 'registro');
            exit;
        }

        $this->registro->activarUsuario(
            $this->filtrarInt($id),
            $this->filtrarInt($codigo)
        );

        $row = $this->registro->getUsuario(
            $this->filtrarInt($id),
            $this->filtrarInt($codigo)
        );

        if($row['estado'] == 0){
            $this->vista->assign('error', 'Error al activar la cuenta, por favor intente mas tarde');
            $this->vista->renderizarVista('activar', 'registro');
            exit;
        }

        $this->vista->assign('mensaje', 'Su cuenta ha sido activada');
        $this->vista->renderizarVista('activar', 'registro');
    }
}

?>
