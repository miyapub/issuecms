<?
    function get_up_load_file($name){
        $file=NULL;
        if($_FILES[$name]["tmp_name"]!=''){
            $md5=md5_file($_FILES[$name]["tmp_name"]);
            $tmp_arr = explode('.',$_FILES[$name]["name"]);
            $ext_name=$tmp_arr[count($tmp_arr)-1];
            $file="upload/".$md5.".".$ext_name;
            $file=str_replace(".php",".zip",$file);
            if (file_exists($file)){
            }else{
                move_uploaded_file($_FILES[$name]["tmp_name"],$file);
            }
        }
        return $file;
    }
    
?>