<?php
//kết nối csdl
include_once 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu gửi đến từ biểu mẫu
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    // câu lệnh insert sql
    $sql = "UPDATE `account` SET `name`='$name',`email`=' $email',`password`=' $password' WHERE id='$id'";

    // kiểm tra câu lệnh sql trước khi insert database
    // echo $sql;

    // thực hiện câu lệnh sql
    if (mysqli_query($conn, $sql)) {
        // Chuyển hướng đến trang get.php
        header("Location: get.php");
    } else {
        die(mysqli_error($conn));
    }
}
