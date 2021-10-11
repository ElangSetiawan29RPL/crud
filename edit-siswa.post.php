<?php     
include 'connection.php';

$id = $_GET['id'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$username = $_POST['username'];


$sql = "
    UPDATE siswa
    set Nama = '".$nama."', Alamat= '". $alamat . "', username= '". $username . "'
    where id = '".$id."'
    ;

";

$result =mysqli_query($conn,$sql);

if($result){
  
    header('Location: index.php');

}else{
    printf('Failed update student'.mysqli_error($conn));
    exit();
}
?>