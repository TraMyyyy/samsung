<?php

    $email = $_POST['username'];
    $pass_raw = $_POST['password'];

    $conn = mysqli_connect("localhost","root","12345","samsung");
    if(!$conn){
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM users WHERE username = '$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $password_hash = $row['Password'];
        if(password_verify($pass_raw,$password_hash)){
            echo "Đăng nhập thành công";
            echo "<a href = 'admin/index.php'>Trang chủ</a>";
        }else{
            echo 'Mật khẩu không khớp';
        }
    }else{
        echo 'Email không tồn tại';
    }
?>