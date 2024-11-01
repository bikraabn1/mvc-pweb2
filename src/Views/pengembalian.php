<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pengambalian Buku</title>
  <link rel="stylesheet" href="output.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php include "Navbar.php" ?>

<body>
  <?php $no = 1 ?>
  <main>
    <h1 class="text-center text-3xl font-semibold my-14">List Pengembalian Buku</h1>
    <div class="overflow-x-auto">
      <table class="table table-md border border-1 w-[80%] mx-auto text-center">
        <thead>
          <tr>
            <th>No</th>
            <td>Nama Peminjam</td>
            <td>Tanggal Peminjaman</td>
            <td>Tanggal Pengembalian</td>
            <td>Jumlah Denda</td>
            <td>Judul Buku</td>
            <td>Modifier</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($datas as $data): ?>
            <form method="post" action="/pengembalian" id="dataForm<?= $data['id_peminjaman']?>">
              <tr>
                <th><?= $no++ ?></th>
                <td><?= $data['nama_peminjam'] ?></td>
                <td><?= $data['tanggal_peminjaman'] ?></td>
                <td><?= $data['tanggal_pengembalian'] ?></td>
                <td><?= $data['jumlah_denda'] ?></td>
                <td><?= $data['judul_buku'] ?></td>
                <td>
                  <input type="hidden" name="id_peminjam" value="<?= $data['id_pengembalian'] ?>">
                  <ul class="flex gap-2 justify-center">
                    <li><button onclick="returnHandler(dataForm<?= $data['id_peminjaman']?>)" name="update" class="btn btn-success btn-sm">Update</button></li>
                    <li><button type="submit" name="delete" class="btn btn-error btn-sm">Delete</li>
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
<script>
  const returnHandler = (formId) => {
    const form = document.getElementById(formId);

    const newInput = document.createElement('input');
    newInput.name = "update";
    newInput.type = "hidden";

    form.appendChild(newInput);
    form.submit();
  }
</script>

</html>