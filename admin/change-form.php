<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1><center>Sửa nhân viên</center></h1>
    <form action="change.php" method="POST">
    <?php
      $id = $_GET['knox'];
      include ('../config/constant.php');

      $sql = "SELECT * FROM employees WHERE knox_id ='$id'";
      $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          
          echo '<div class = "container mb-3">ID <input type="text" name = "emp-id" class = "form-control" value="'.$row['emp_id'].'"></div>';
          echo '<div class = "container mb-3">Họ và tên <input type="text" name = "name" class = "form-control" value="'.$row['emp_name'].'"></div>';
          echo '<div class = "container mb-3">Knox-ID <input type="text" name = "knox-id" class = "form-control" value="'.$row['knox_id'].'"></div>';
          echo '<div class = "container mb-3">Email <input type="email" name = "email" class = "form-control" value="'.$row['email'].'"></div>';
          echo '<div class = "container mb-3">Địa chỉ <input type="text" name = "address" class = "form-control" value="'.$row['place'].'"></div>';
          echo '<div class = "container mb-3">Ngày thuê <input type="date" name = "date" class = "form-control" value="'.$row['hire_date'].'"></div>';
          echo '<div class = "container mb-3">Điểm 1 <input type="number" name = "test1" class = "form-control" value="'.$row['test1'].'"></div>';
          echo '<div class = "container mb-3">Điểm 2 <input type="number" name = "test2" class = "form-control" value="'.$row['test2'].'"></div>';
          echo '<div class = "container mb-3">
                Văn phòng; ';
          echo '<select name="offices" id="">';


                    $sql = "SELECT dep_id FROM departments";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<option value = "'.$row['dep_id'].'">'.$row['dep_id'].'</option>';
                        }
                    }
                echo '</select>';
    
                
            echo'</div>';
          }
      }

    ?>
   <div class = "container d-grid gap-2 d-md-flex justify-content-md-end">
                <button class = "btn btn-success">Sửa nhân viên</button>
            </div>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>