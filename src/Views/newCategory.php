<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Tambah Kategori Buku</h1>
    
    <form method="post" action="/newCategory" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <label for="title">Nama Kategori</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Nama Kategori" type="text" name="nama_kategori" id="nama_kategori" required>

        <button class="btn w-fit self-center my-5" type="submit" name="submit" id="submit">Tambah Kategori</button>
    </form>
</body>
</html>