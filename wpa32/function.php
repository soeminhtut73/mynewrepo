<?php
function _get_view($view , $data=null){

    $file = DD . "/app/view/" . $view . ".php";
    //$file->home.php;

    if(file_exists($file)){
        ob_start();
        if($data != null){
            extract($data);
        }
        require $file;
        ob_end_flush();
    }else{
        echo trigger_error(_lang_get("setting.view_not_found"),E_USER_ERROR);
    }
}

/* must have app/config/app.php file */

function _config_get($config_value){

    $e_config = explode(".",$config_value);
    //$e_config->[app.lang];
    // var_dump($e_config);

    $config_file = DD . "/app/config/" . $e_config[0] . ".php";
    //$config_file->app.php;

    if(file_exists($config_file)){
        $config = require $config_file;
        //$config->[lang];
        // var_dump($config_value);
        // die();

        if(array_key_exists($e_config[1],$config)){
            return $config[$e_config[1]];
            
        }else{
            trigger_error("Config key not found",E_USER_ERROR);
        }

    }else{
        echo trigger_error("Config file not found",E_USER_ERROR);
    }
}

function _lang_get($lang_value){
    $e_lang = explode(".",$lang_value);
    //$e_lang->[setting,view_not_found];

    $lang_file = DD . "/app/lang/" . _config_get("app.lang") . "/" . $e_lang[0] . ".php";
    //$lang_file->setting.php;
    // var_dump($lang_file);

    if(file_exists($lang_file)){
        $lang_value = require $lang_file;
        
        if(array_key_exists($e_lang[1],$lang_value)){
            return $lang_value[$e_lang[1]];
        }else{
            echo trigger_error("Array key not exits",E_USER_ERROR);
        }



        // $file = require $lang_file;
        // //$file->[view_not_found]
        // // var_dump($file);
        // if(array_key_exists($e_lang[1],$file)){
        //     return $file[0];
        // }else{
        //     echo trigger_error("Array key not exits",E_USER_ERROR);
        // }
    }else{
        echo trigger_error("Lang file not found",E_USER_ERROR);
    }
}

function _dump($value, $die = false) {
    var_dump($value);
    if($die == true) {
        die();
    }
}
function _check_empty($value) {
  if(empty(trim($value))) {
      return true;
  }
  return false;
}
function _check_equal($first, $second) {
  if($first != $second) {
      return true;
  }
  return false;
}
function _check_count($value, $count = 1) {
  if(strlen($value) < $count) {
      return true;
  }
  return false;
}















?>