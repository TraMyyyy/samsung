
<?php
    include '../header.php';
?>

<main>
     <!-- Thêm nhân viên -->
     <a href="addemployee-form.php" class = "btn btn-success m-2">Thêm nhân viên</a>

     <!-- Kết thúc thêm nhân viên -->

     <!-- Danh sách nhân viên -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Knox_ID</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Ngày thuê</th>
        <th scope="col">Điểm lần 1</th>
        <th scope="col">Điểm lần 2</th>
        <th scope="col">Văn phòng</th>
        <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../config/constant.php';

            // Thực hiện truy vấn

            $sql = "SELECT * FROM employees";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo  '<th scope="row">'.$row['emp_id'].'</th>';
                echo  '<td>'.$row['emp_name'].'</td>';
                echo  '<td>'.$row['knox_id'].'</td>';
                echo  '<td>'.$row['email'].'</td>';
                echo  '<td>'.$row['place'].'</td>';
                echo  '<td>'.$row['hire_date'].'</td>';
                echo  '<td>'.$row['test1'].'</td>';
                echo  '<td>'.$row['test2'].'</td>';
                echo  '<td>'.$row['dep_id'].'</td>';
                echo '<td>
                <a href="#" class = "btn btn-warning">Xóa</a>
                <a href="#" class = "btn btn-primary">Sửa</a>
                </td>';
                echo   '</tr>';
                }
            }
        ?>

       

    </tbody>
    </table>
    <!-- Kết thúc danh sách nhân viên -->
</main>

<?php
    include '../footer.php';
?>

