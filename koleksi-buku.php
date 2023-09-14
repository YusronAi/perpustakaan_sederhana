<?php
require "functions.php";

$query_book = "SELECT * FROM tabel_buku";
$query_categories = "SELECT * FROM tabel_kategori";
$books = display($query_book);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "page/head.php"; ?>
</head>
<body>
<?php include "page/navbar.php"; ?>
    <h2>Koleksi Buku Perpustakaan</h2>
    <br>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Judul Buku</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Stock Buku</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($books as $book) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $book['judul_buku']; ?></td>
                <td><?= $book['pengarang']; ?></td>
                <td><?= $book['penerbit']; ?></td>
                <td><?= $book['stock_buku']; ?></td>
            </tr>
            <?php $i++ ?>
            <php endforeach; ?>
        </tbody>
    </table>
<?php include "page/script.php" ?>
</body>
</html>
