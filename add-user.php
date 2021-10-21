<?php
    if(isset($_POST['sbmUser'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
    }

    $conn = mysqli_connect("localhost","root","12345","samsung");
    if(!$conn){
        die('Không thể kết nối!');
    }

    $sql = "INSERT INTO users(username, password) VALUES ('$email','$pass')";
    $result = mysqli_query($conn,$sql);

    if($result = true){
        echo "Thêm nhân viên thành công";
        echo "<a href='index.php'>Đăng nhập</a>";
    }else{
        echo "Thêm nhân viên thất bại";
    }
?>