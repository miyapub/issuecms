<?
//session_start();
if (isset($_SESSION['user_id'])) {
    //
    $user_id=$_SESSION['user_id'];

    if(isset($_SESSION['name'])){
        $user_name=$_SESSION['name'];
    }
    if(isset($_SESSION['is_admin'])){
        $is_admin=$_SESSION['is_admin'];
    }    
}else{
    //public
    header("location: login.php");
}