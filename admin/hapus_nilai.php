<?php

include 'koneksiadmin.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM penilaian WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    header("location: insertnilai.php");

?>