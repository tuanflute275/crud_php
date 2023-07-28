<?php
//lấy dữ liệu id cần xóa
$id = $_GET['id'];
// echo $id;

// kết nối mysql
include_once 'connect.php';

//lệnh xóa sql
$sql = "DELETE FROM account WHERE id='$id'";
// thực thi sql
if (mysqli_query($conn, $sql)) {
    //in thông báo thành công
    // Chuyển hướng đến trang get.php
    header("Location: get.php");
    exit; // Đảm bảo không có mã PHP tiếp tục thực thi sau khi chuyển hướng
}
