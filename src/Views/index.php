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
      <div class="flex-none">
        <button class="btn btn-square btn-ghost">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="inline-block h-5 w-5 stroke-current">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <div class="flex-1">
        <a class="btn btn-ghost text-xl">Manajemen Buku</a>
      </div>

      <label class="grid cursor-pointer place-items-center">
        <input
          type="checkbox"
          value="light"
          class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1" />
        <svg
          class="stroke-base-100 fill-base-100 col-start-1 row-start-1"
          xmlns="http://www.w3.org/2000/svg"
          width="14"
          height="14"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round">
          <circle cx="12" cy="12" r="5" />
          <path
            d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
        </svg>
        <svg
          class="stroke-base-100 fill-base-100 col-start-2 row-start-1"
          xmlns="http://www.w3.org/2000/svg"
          width="14"
          height="14"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
      </label>
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