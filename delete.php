<?php

require_once "database.php";

$id = $_GET['id'];

$query = "DELETE FROM mahasiswas WHERE id = '$id'";

$sql = mysqli_query($connection, $query);

if ($sql) {
    header('location:index.php');
}else {
    echo "Error ! Fail delete mahasiswa";
}
