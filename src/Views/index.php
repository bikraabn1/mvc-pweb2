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
  <main>
    <h1 class="text-center text-3xl font-semibold my-14">List Buku Terbaru 2024</h1>
    <div class="overflow-x-auto">
      <table class="table table-md border border-1 w-[80%] mx-auto text-center">
        <thead>
          <tr>
            <th>No</th>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>Tahun Terbit</td>
            <td>Kategori</td>
            <td>Modifier</td>
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
              <td>
                <ul class="flex gap-2 justify-center">
                  <li><button class="btn btn-success btn-sm">Update</button></li>
                  <li><button class="btn btn-error btn-sm">Delete</button></li>
                </ul>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>