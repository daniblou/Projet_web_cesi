<?php 
    function init_session_user() : bool 
    {
        if (!session_id()){
            session_start();
            session_regenerate_id();
            return true ;
        }
        return false ;
    }

    function is_logged() : bool 
    {
        if(isset( $_SESSION['login']))
        return true ;
        return false;
    }

    function destroy_php_session()  : void
    {
        session_destroy();
        session_unset();
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data ;
    }

    function your_rule($data) 
    {
        define('ADMIN', 13);
        define('PILOTE', 14);
        define('DELEGUE', 15);
        define('ETUDIANT', 16);
        switch ($data) {
            case ADMIN:
                header("location: /gestion");
                break;
            case PILOTE:
                header("location: gestion");
                break;
            case DELEGUE:
                 header("location: gestion");
                 break;
            case ETUDIANT:
                 header("location: /gestion");
                break;
            default:
               echo "erreur d'identifiants";
                break;
        }
    }