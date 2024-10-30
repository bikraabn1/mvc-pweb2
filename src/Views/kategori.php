<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku</title>
  <link rel="stylesheet" href="../output.css">
</head>
<?php include "Navbar.php" ?>
<body>
  <?php $no = 1 ?>
  <main>
    <div class="overflow-x-auto">
      <table class="table table-xs table-pin-rows table-pin-cols border border-1 w-[80%] mt-[10rem] mx-auto">
        <thead>
          <tr>
            <th>No</th>
            <td>Nama Kategori</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach($books as $book): ?>
            <tr>
              <th><?= $no++ ?></th>
              <td><?= $book['judul_buku'] ?></td>
              <td><?= $book['penulis'] ?></td>
              <td><?= $book['tahun_terbit'] ?></td>
              <td><?= $book['nama_kategori'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>