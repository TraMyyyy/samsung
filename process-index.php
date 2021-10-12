<?php
    session_start();

    if(isset($_POST['sbmGuiDi'])){
        $username = $_POST['email'];
        $password = $_POST['password'];
    }

    // Kết nối sql
    include 'config/constant.php';

    // Truy vấn CSDL
    $sql = "SELECT * FROM  employees WHERE email =  $username AND emp_id = $password";
    $result = mysqli_query($conn,$sql);

    if(sqli_num_rows($result)>0){
        $_SESSION['loginOK'] = $username;
        header('Location: admin/index.php');

    }else{
        header('Location: index.php');
    }
?>
