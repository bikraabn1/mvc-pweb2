<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori Buku</title>
  <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
  <?php $no = 1 ?>
  <main>
    <h1 class="text-center text-3xl font-semibold my-14">List Kategori Buku</h1>
    <div class="overflow-x-auto">
      <table class="table table-md border border-1 w-[80%] mx-auto text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kategori</th>
          </tr>
        </thead>
        <tbody>
          <form action="/kategori" method="post">
          <?php foreach($categories as $category): ?>
            <tr>
              <th><?= $no++ ?></th>
              <td><?= $category['nama_kategori'] ?></td>
              <td>
                <input type="hidden" name="id_kategori" value="<?= $category['id_kategori'] ?>">
                <input type="hidden" name="nama_kategori" value="<?= $category['nama_kategori'] ?>">
                <ul class="flex gap-2 justify-center">
                  <li><a href="/updatekategori?id=<?= $category['id_kategori'] ?>&name=<?= $category['nama_kategori'] ?>" class="btn btn-success btn-sm">Update</a></li>
                  <li><button type="submit" name="delete" class="btn btn-error btn-sm">Delete</button></li>
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