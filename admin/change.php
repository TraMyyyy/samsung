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

    $sql = 'UPDATE employees
    SET emp_id="'.$id.'",emp_name = "'.$name.'", knox_id= "'.$knox.'
    ",email="'.$email.'",place="'.$address.'",hire_date='.$date.',test1="'.$t1.'",test2="'.$t2.'",dep_id = "'.$office.'" 
    WHERE knox_id = "'.$knox.'"';

    $result = mysqli_query($conn, $sql);
    if($result == true){
        header ('Location: index.php');
    }else{
        header ('Location: ../error.php');
    }
?>