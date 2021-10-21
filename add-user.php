<?php
    if(isset($_POST['sbmUser'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
    }

    $conn = mysqli_connect("localhost","root","12345","samsung");
    if(!$conn){
        die('Không thể kết nối!');
    }

    $sql = "SELECT * FROM users WHERE username = '$email'";
    $result = mysqli_query($conn,$sql);


    if (mysqli_num_rows($result) > 0){
        echo ('Tài khoản đã tồn tại');
    }else{
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql_2 = "INSERT INTO users(username, password) VALUES ('$email','$pass_hash')";
        $result_2 = mysqli_query($conn,$sql_2);
        if($result_2 = true){
                echo "Thêm nhân viên thành công";
                echo "<a href='index.php'>Đăng nhập</a>";
        }else{
                echo "Có lỗi gì đó xảy ra!";
    }}
    
    
?>