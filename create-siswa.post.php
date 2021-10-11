<?php

    include './connection.php';
    $name = $_POST['name'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

$sql = "
    insert into siswa (nama, alamat, username, password)
    values ('" . $name . "' , '" . $address . "', '" . $username . "', '" . md5($password) . "');
    ";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Success create student';
    } else {
        printf('Failed create student: ' . mysqli_error($conn));
       exit();
    }
    ?>
    
<body>
    <a href="./index.php">Back To Database</a>
</body>

