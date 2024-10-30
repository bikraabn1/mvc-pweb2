<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1>Tambah Kategori Buku</h1>
    <form method="post" action="/newCategory">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" required>  

        <button type="submit" name="submit" id="submit">Submit</button>
    </form>
</body>
</html>