<?
    $ip="Unknown";
    if(isset($HTTP_SERVER_VARS)){
        if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]){
            $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
        }elseif ($HTTP_SERVER_VARS["HTTP_CLIENT_IP"]){
            $ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
        }elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"]){
            $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
        }
    }else{
        if(getenv("HTTP_X_FORWARDED_FOR")){
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        }elseif (getenv("HTTP_CLIENT_IP")){
            $ip = getenv("HTTP_CLIENT_IP");
        }elseif (getenv("REMOTE_ADDR")){
            $ip = getenv("REMOTE_ADDR");
        }else{
        }
    }
    $css_version=36655;
    //echo $_SERVER['PHP_SELF'];
    //echo $_SERVER["REQUEST_URI"];
?>