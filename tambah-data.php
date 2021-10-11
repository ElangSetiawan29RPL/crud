<?php include './connection.php';

$nama= $_POST['Nama'];
$alamat= $_POST['Alamat'];

$sql = "insert into siswa (Nama, Alamat) 
        values ('".$nama."','".$alamat."')";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'Berhasil menambah data';

}else{
    printf('Gagal Menambah'.mysqli_error($conn));
    exit();
}

?>