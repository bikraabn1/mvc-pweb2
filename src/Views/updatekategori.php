<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kategori</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Ubah Kategori Buku</h1>
    
    <form method="post" action="/updatekategori" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?? '' ?>">
        
        <label for="category_name">Nama Kategori</label>
        <input class="input input-bordered w-full" value="<?= $data['nama_kategori'] ?? '' ?>" placeholder="Masukkan Nama Kategori" type="text" name="nama_kategori" id="category_name" required>

        <button class="btn w-fit self-center my-5" type="submit" name="submit" id="submit">Ubah Kategori</button>
    </form>
</body>
</html>