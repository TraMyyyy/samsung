<?php
    session_start();

    if(isset($_POST['sbmGuiDi'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    // Kết nối sql
    $conn = mysqli_connect("localhost","root","12345","samsung");
    if(!$conn){
        die("Không thể kết nối");
    }
    // Truy vấn CSDL
    $sql = "SELECT * FROM  users WHERE username =  '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['loginOK'] = $username;
        header('Location: admin/index.php');

    }else{
        header('Location: index.php');
    }
?>
