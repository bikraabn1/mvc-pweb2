<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku</title>
  <link rel="stylesheet" href="output.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php include "Navbar.php" ?>

<body>
  <?php $no = 1 ?>
  <main>
    <h1 class="text-center text-3xl font-semibold my-14">List Peminjaman Buku</h1>
    <div class="overflow-x-auto">
      <table class="table table-md border border-1 w-[80%] mx-auto text-center">
        <thead>
          <tr>
            <th>No</th>
            <td>Nama Peminjam</td>
            <td>Tanggal Peminjaman</td>
            <td>Judul Buku</td>
            <td>Modifier</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($Peminjaman as $pinjam): ?>
            <form action="/deletePeminjaman" method="post" id="delete-form">
            <tr>
              <th><?= $no++ ?></th>
              <td><?= $pinjam['nama_peminjam'] ?></td>
              <td><?= $pinjam['tanggal_peminjaman'] ?></td>
              <td><?= $pinjam['judul_buku'] ?></td>
              <td>
                  <input type="hidden" name="id_peminjaman" value="<?= $book['id_peminjaman'] ?>">
                  <input type="hidden" name="nama_peminjam" value="<?= $book['nama_peminjam'] ?>">
                  <input type="hidden" name="tanggal_peminjaman" value="<?= $book['tanggal_peminjaman'] ?>">
                  <input type="hidden" name="judul_buku" value="<?= $book['judul_buku'] ?>">
                  <ul class="flex gap-2 justify-center">
                    <li><button type="submit" name="update" class="btn btn-success btn-sm"><a href="/updatePeminjaman?id=<?= $pinjam['id_peminjaman']?>&nama_peminjam=<?= $pinjam['nama_peminjam']?>&tanggal_peminjaman=<?=$pinjam['tanggal_peminjaman']?>&judul_buku=<?=$book['judul_buku']?>">Update</a></button></li>
                    <li><button name="delete" class="btn btn-error btn-sm" onclick="confirmDelete(<?= $pinjam['id_peminjaman'] ?>)">Delete</button> </li>
                  </ul>
                </td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>