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

    function your_rule() 
    {
        
    }