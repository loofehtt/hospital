<?php
include '../header.php';
include '../config.php';
?>

<form action="add.php" method="post">
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Fname">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Họ</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Lname">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Ngày sinh</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Birth" placeholder="YYYY-MM-DD">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Giới tính</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Gender">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Mobile">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="Email">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Chiều cao</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Height">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Cân nặng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Weight">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Nhóm máu</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Bgroup">
        </div>
    </div>

    <div class="form-group row">
        <label for="saveBtn" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" name="Save" class="btn btn-success">Lưu lại</button>
        </div>
    </div>

</form>


<?php
if (isset($_POST['Save'])) {
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $birth = $_POST['Birth'];
    $gender = $_POST['Gender'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['Email'];
    $height = $_POST['Height'];
    $weight = $_POST['Weight'];
    $bgroup = strtoupper($_POST['Bgroup']);
    //? câu lệnh
    $sql = "INSERT INTO patient(firstname, lastname, dateofbirth, gender, mobile, email, height, weight, blood_type)
    VALUES ('$fname','$lname','$birth','$gender','$mobile','$email','$height','$weight','$bgroup')";

    //? kiểm tra và thực thi lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:../index.php');
    } else {
        header('location:Error.php');
    }
}


//? đóng kết nối
mysqli_close($conn);

include '../footer.php';
