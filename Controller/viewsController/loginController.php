<?php
include_once 'Model/User.php';
include_once 'Model/email_permiso.php';

class loginController{
    public function index(){
        session_start(); // Inicia la sesión

        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (isset($_SESSION['admin'])) {
            header("Location: ".url."?controller=admin");
   
        }else{
            if (isset($_COOKIE['error'])) {
                $error = $_COOKIE['error'];
            }
            // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
            require_once("view/header.php");
            require_once("view/admin/login.php");
            require_once("view/footer.php");
        }

        
    }

    public function loguear(){
        session_start(); // Inicia la sesión
        $users = User::getUsers();

        $error = "Error: ";
        foreach ($users as $user) {
            if ($user->getUSER() == $_POST['user']) {
                if (password_verify($_POST['password'], $user->getPASSWORD())) {
                    $emails = email_permiso::getEmailsByUser($user->getUSUARIO_ID());
                    foreach ($emails as $email) {
                        if ($email->getEMAIL() == $_POST['email']) {
                            $_SESSION['admin'] = array($user->getUSER(), $user->getPASSWORD(), $email->getEMAIL());
                            header("Location: ".url."?controller=admin");
                        }else{
                            $error = 1;
                        }
                    }
                }else{
                    $error = 2;
                }
            }else{
                $error = 3;
            }

            setcookie('error', $error, time() + 3600, "/");
            header("Location: ".url."?controller=login");
        }
        
        
    }

    public function prueba(){
        session_start(); // Inicia la sesión

    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/prueba.html");
    }
}
?>