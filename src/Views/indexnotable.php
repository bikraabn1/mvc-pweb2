<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku</title>
  <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
  <?php $no = 1 ?>
  <main class="flex flex-col justify-center items-center gap-10">
    <h1 class="text-center text-3xl font-semibold my-14">List Buku Terbaru 2024</h1>
    
    <img class="h-[20rem]" src="ohno.svg" alt="gambar-ohno">

    <ul class="flex flex-col justify-center items-center">
        <li><p>List Kosong</p></li>
        <li><a href="/newBook" class="text-xs text-primary italic underline">Tambah Buku Baru</a></li>
    </ul>
  </main>
</body>

</html>