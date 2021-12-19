<?php
include_once './auth.php';
$name=$_GET['name'];
$a=new Auth($name);
$a->login();




?>