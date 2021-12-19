<?php
class Auth{
    public $name;

    public function __construct($value)
    {
        $this->name=$value;
    }

    public function login(){
        
        session_start();
        $_SESSION['email']=$this->name;
        
        header('Location:../view/index.php');
    }

    public function logout(){
        echo $this->name;
        if($this->name){
            session_destroy();
            header('Location:../view/login.php');
        }
        
    }
}


?>