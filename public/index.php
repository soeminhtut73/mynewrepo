<?php
    
    define ( "DD" , realpath("../"));

    require DD . "/wpa32/function.php";
    require DD . "/app/controller/controllers.php";

    $file = DD . "/app/view/" . $page . ".php";

    if(!isset($_GET['page'])){
        $page = "home";
    }else{
        $page = $_GET['page'];
    }


    // $default_lang = _config_get("app.lang");
    // // echo $default_lang;

    // $error = _lang_get("setting.view_not_found");
    // // echo $error;
    // // die();

  

    $controller = "_" . ucfirst($page) . "Controller";

    if(function_exists($controller)){
        call_user_func($controller);
    }else{
        echo "function not found";
    }


    

    // if(!isset($_GET['page'])){
    //     $page = "home";
    // }else{
    //     $page = $_GET['page'];
    // }

    

?>