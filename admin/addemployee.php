<?php
    $id = $_POST['emp-id'];
    $name = $_POST['name'];
    $knox = $_POST['knox-id'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $t1 = $_POST['test1'];
    $t2 = $_POST['test2'];
    $office = $_POST['offices'];

    $conn = mysqli_connect('localhost','root','12345','samsung');
    if(!$conn){
        die("không thể kết nối");
    }

    $sql = "INSERT INTO employees(emp_id, emp_name, knox_id, email, place, hire_date, test1, test2, dep_id) 
            VALUES ('$id','$name','$knox','$email','$address','$date','$t1','$t2','$office' )";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header ('Location: index.php');
    }else{
        header ('Location: ../error.php');
    }
?>