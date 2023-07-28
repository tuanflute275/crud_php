<?php
//kết nối csdl
include_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu gửi đến từ biểu mẫu
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // câu lệnh insert sql
    $sql = "INSERT INTO `account`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

    // kiểm tra câu lệnh sql trước khi insert database
    // echo $sql;

    //thực hiện câu lệnh sql
    if (mysqli_query($conn, $sql)) {
        // Chuyển hướng đến trang get.php
        header("Location: get.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <h2 class="title text-center text-uppercase text-info font-weight-bold mt-4">
        Add new User
    </h2>

    <form method="POST">
        <div class=container>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>