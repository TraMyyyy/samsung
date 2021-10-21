<?php
    include '../header.php';
?>

<main>
     <!-- Thêm nhân viên -->

     <form action="" method = "POST" >
        <div class = "container mb-3">
            ID <input type="text" name = "emp-id" class = "form-control">
        </div>
        <div class = "container mb-3">
           Họ và tên <input type="text" name = "name" class = "form-control">
        </div>
        <div class = "container mb-3">
            Knox_ID <input type="text" name = "knox-id" class = "form-control">
        </div>
        <div class = "container mb-3">
            Email <input type="email" name = "email" class = "form-control">
        </div>
        <div class = "container mb-3">
            Địa chỉ <input type="text" name = "address" class = "form-control">
        </div>
        <div class = "container mb-3">
            Ngày thuê <input type="date" name = "date" class = "form-control">
        </div>
        <div class = "container mb-3">
            Điểm 1 <input type="number" name = "mark1" class = "form-control">
        </div>
        <div class = "container mb-3">
            Điểm 2 <input type="number" name = "mark2" class = "form-control">
        </div>
        <div class = "container mb-3">
            Văn phòng <input type="text" name = "offices" class = "form-control">
        </div>
        <div class = "container d-grid gap-2 d-md-flex justify-content-md-end">
            <button class = "btn btn-success">Thêm nhân viên</button>
        </div>
    </form>

     <!-- Kết thúc thêm nhân viên -->

</main>

<?php
    include '../footer.php';
?>

