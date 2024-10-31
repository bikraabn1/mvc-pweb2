<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Peminjaman</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php include "Navbar.php" ?>

<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Tambah Peminjaman</h1>

    <form method="post" action="/newPinjam" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl" onsubmit='submitHandler()'>
        <label for="name">Nama Peminjam</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Nama" type="text" name="name" id="name" required>

        <label for="date">Tanggal Peminjaman</label>
        <input class="input input-bordered w-full" type="date" name="date" id="date" required>

        <label for="year">Tahun Terbit</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Tahun Terbit" maxlength="4" inputmode="numeric" type="text" name="year" id="year" required>

        <label for="category">Judul Buku</label>
        <select class="select select-bordered" name="books" id="books">
            <?php foreach ($books as $data) : ?>
                <option value="<?= $data['id_buku'] ?>"> <?= $data['judul_buku'] ?> </option>
            <?php endforeach ?>
        </select>

        <button class="btn w-fit self-center my-5" type="submit" name="submit" id="submit">Tambah Peminjaman</button>
    </form>
</body>
</html>