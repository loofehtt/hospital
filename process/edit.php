<?php
include '../header.php';
include '../config.php';
$id = $_GET['id'];
?>
<h2>Thay đổi thông tin bệnh nhân</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="post">
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
    $id = $_GET['id'];
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
    $sql = "UPDATE patient SET firstname = '$fname', lastname = '$lname' , dateofbirth = '$birth',
    gender = '$gender', mobile = '$mobile', email = '$email', height = '$height', weight = '$weight',
    blood_type='$bgroup',modified_on= CURRENT_TIMESTAMP WHERE patientid = $id";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:../index.php');
    } else {
        header('location:error.php');
    }
}

//? đóng kết nối
mysqli_close($conn);

include '../footer.php';
