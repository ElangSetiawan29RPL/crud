<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Database Siswa</h1>
    <p>Klik "Create Siswa" dibawah untuk membuat Data Baru</p>
    <a href="./create-siswa.php">Create Siswa</a>

    <hr>

    <?php $sql ='select * from siswa';
        $result = mysqli_query($conn, $sql);

    ?>

    <table border ="1">
        <thead>
            <tr><th>Nama</th>
                <th>Alamat</th>
                <th>username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td>
                <a href="edit-siswa.php ?id= <?php echo $data ['id'] ?>   " >Edit</a>
                <a href="delete-siswa.post.php ?id= <?php echo $data ['id'] ?>   ">delete</a>    
            </td>
            
            </tr>
              
            
            <?php } ?>
            
        </tbody>
    </table>
</body>
</html>