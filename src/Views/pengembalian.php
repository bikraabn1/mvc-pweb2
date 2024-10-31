<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pengambalian Buku</title>
  <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
  <?php $no = 1 ?>
  <main>
    <h1 class="text-center text-3xl font-semibold my-14">List Pengembalian Buku</h1>
    <div class="overflow-x-auto">
      <table class="table table-md border border-1 w-[80%] mx-auto text-center ">
        <thead>
          <tr>
            <th>No</th>
            <td>Tanggal Pengambalian</td>
            <td>Tanggal Peminjaman</td>
            <td>Nama Peminjam</td>
            <td>Jumlah Denda</td>
            <td>Modifier</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $d): ?>
            <tr>
              <th><?= $no++ ?></th>
              <td><?= $d['tanggal_pengembalian'] ?></td>
              <td><?= $d['tanggal_peminjaman'] ?></td>
              <td><?= $d['nama_peminjam'] ?></td>
              <td><?= $d['jumlah_denda'] ?></td>
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