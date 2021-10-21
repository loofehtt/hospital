<?php include './header.php'; ?>

<a href="process/add.php" class="btn btn-success">Thêm</a>


<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">Mã số</th>
            <th scope="col">Tên</th>
            <th scope="col">Họ</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Chiều cao</th>
            <th scope="col">Cân nặng</th>
            <th scope="col">Nhóm máu</th>
            <th scope="col">Ngày tạo hồ sơ</th>
            <th scope="col">Ngày cập nhật</th>
            <th class="col" scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <!--xuất dữ liệu theo CSDL -->
        <?php
        //* B1: mở kết nối
        include './config.php';
        //* B2: Truy vấn
        $sql = "SELECT * FROM patient ";

        //? lưu kết quả trả về $result
        $result = mysqli_query($conn, $sql);

        //* B3: Phân tích sử lý kết quả
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo '<td>' . $row['patientid'] . '</td>';
                echo '<td>' . $row['firstname'] . '</td>';
                echo '<td>' . $row['lastname'] . '</td>';
                echo '<td>' . $row['dateofbirth'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['mobile'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['height'] . '</td>';
                echo '<td>' . $row['weight'] . '</td>';
                echo '<td>' . $row['blood_type'] . '</td>';
                echo '<td>' . $row['created_on'] . '</td>';
                echo '<td>' . $row['modified_on'] . '</td>';
                echo '<td>
                <a href="./detail.php?id=' . $row['patientid'] . '" class="btn btn-primary">Chi tiết</a>
                <a href="process/edit.php?id=' . $row['patientid'] . '" class="btn btn-success">Sửa</a>
                <a href="process/delete.php?id=' . $row['patientid'] . '" class="btn btn-danger">Xoá</a>
                        
                </td>';
                echo '</tr>';
            }
        }
        //* B4: đóng kết nối
        mysqli_close($conn);
        ?>
    </tbody>
</table>

<?php include './footer.php' ?>