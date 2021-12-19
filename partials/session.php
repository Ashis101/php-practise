<?php

session_start();

$name=$_SESSION['email'];
if(empty($_SESSION['email'])){
    header('Location:../view/login.php');
}

return $name;

?>