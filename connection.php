<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'Sekolah');
if (mysqli_connect_errno()) {
    printf('connection failed: ' . mysqli_connect_error());
    exit();
}
