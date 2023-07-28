<?php
$conn = new mysqli('localhost', 'root', '', 'crud_php');
if ($conn) {
    echo "connection successfully !";
} else {
    die(mysqli_error($conn));
}
