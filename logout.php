<?php
session_start();

if($_GET['action'] == "logout"){
    setcookie("user_name", "", time()-3600);
    setcookie("user_pwd", "", time()-3600);
    setcookie("user_uid", "", time()-3600);
    header("Location:index.php");
    exit;
}
?>