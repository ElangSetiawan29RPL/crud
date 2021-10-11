<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <form action="edit-siswa.post.php?id=<?php echo $_GET['id'] ?>" method="post">
    <?php
        $sql = 'select * from siswa where id = ' . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
    ?>

    <div>
        <span>Nama : </span>
        <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
    </div>
    <div>
        <span>Alamat : </span>
        <input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>">
    </div>
    <div>
        <span>Username : </span>
        <input type="text" name="username" value="<?php echo $data['username'] ?>">
    </div>
    <br>
    <button type="submit">Update</button>
</form>