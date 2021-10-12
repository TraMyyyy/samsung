<?php
    session_start();
    if(isset($_SESSION['loginOK'])){
        unset($_SESSION['logonOK']);
        header('Location: ../index.php');
    }
?>