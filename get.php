<!doctype html>
<html lang="en">

<head>
    <title>Get Account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary my-4" href="/crud/add.php">New Clients</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // include_once 'connect.php';
                $connection = new mysqli("localhost", "root", "", "crud_php");

                //read all row from database table
                $sql = "SELECT * FROM account";
                $result = $connection->query($sql);
                if (!$result) {
                    die('invalid query ' . $connection->error);
                }


                //read data of each now
                while ($row = $result->fetch_assoc()) {
                    echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>
                        <a class='mr-3 text-dark text-decoration-none' href='/crud/edit.php?id=$row[id]' role='button'>
                            <i class='fa-solid fa-pencil'></i> 
                        </a>
                         <a class='text-dark text-decoration-none' onClick='return confirm(\"Are you sure ???\")' href='/crud/delete.php?id=$row[id]' type='submit' name='delete' role='button'>
                            <i class='fa-solid fa-trash'></i>
                        </a>
                    </td>
                </tr>
                ";
                }

                ?>


            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
