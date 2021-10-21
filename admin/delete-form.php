<?php

    $id = $_GET['knox'];

    $conn = mysqli_connect("localhost","root","12345","samsung");
    if(!$conn){
        die ("Lỗi");
    }
    
    $sql = "DELETE FROM employees WHERE knox_id = '$id'" ;
    echo $sql;
    $result = mysqli_query($conn,$sql);

    if($result == true){
        header ('Location: index.php');
    }else{
        header ('Location: ../error.php');
    }



?>