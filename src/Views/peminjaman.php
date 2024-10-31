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
          <?php foreach ($peminjaman as $pinjam): ?>
            <form method="post" action="/peminjaman">
            <tr>
              <th><?= $no++ ?></th>
              <td><?= $pinjam['nama_peminjam'] ?></td>
              <td><?= $pinjam['tanggal_peminjaman'] ?></td>
              <td><?= $pinjam['judul_buku'] ?></td>
              <td>
                  <input type="hidden" name="id_peminjam" value="<?= $pinjam['id_peminjaman'] ?>">
                  <input type="hidden" name="name" value="<?= $pinjam['nama_peminjam'] ?>">
                  <input type="hidden" name="date" value="<?= $pinjam['tanggal_peminjaman'] ?>">
                  <input type="hidden" name="books" value="<?= $pinjam['id_buku'] ?>">
                  <ul class="flex gap-2 justify-center">
                    <li><button type="submit" name="update" class="btn btn-success btn-sm"><a href="/updatePinjam? id=<?= $pinjam['id_peminjaman']?>&nama_peminjam=<?= $pinjam['nama_peminjam']?>&tanggal_peminjaman=<?=$pinjam['tanggal_peminjaman']?>&judul_buku=<?=$pinjam['judul_buku']?>">Update</a></button></li>
                    <li><button type="submit" name="delete" class="btn btn-error btn-sm">Delete</button> </li>
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