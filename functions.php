<?php
$connect = mysqli_connect("localhost", "kualitas_kualitas1", "salamharum797", "kualitas_db_perpustakaan");

// $connect = mysqli_connect("localhost", "root", "", "db_perpustakaan");

function display ($query) {
    global $connect;
    $results = mysqli_query($connect, $query);
    $rows = array();

    while ($row = mysqli_fetch_assoc($results)) {
        $rows[] = $row;
    }

    return $rows;
}