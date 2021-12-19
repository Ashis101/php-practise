<?php
    require_once './auth.php';

    $logout=$_GET['l'];

    $a=new Auth($logout);
    $a->logout();



?>