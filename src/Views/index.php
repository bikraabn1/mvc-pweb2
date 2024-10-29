<!DOCTYPE html>
<html lang="en">
<?php $no = 1 ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku</title>
  <link rel="stylesheet" href="../output.css">
</head>

<body>
  <nav>
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">Manajemen Buku</a>
    </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li><a>Home</a></li>
      <li>
        <details>
          <summary>Daftar Data</summary>
          <ul class="bg-base-100 rounded-t-none p-2">
            <li><a>Buku</a></li>
            <li><a>Kategori Buku</a></li>
            <li><a>Peminjaman</a></li>
            <li><a>Pengembalian</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
  </div>
  </nav>

  <main>
    <div class="overflow-x-auto">
      <table class="table table-xs table-pin-rows table-pin-cols border border-1 w-[80%] mt-[10rem] mx-auto">
        <thead>
          <tr>
            <th>No</th>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>Tahun Terbit</td>
            <td>Kategori</td>
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