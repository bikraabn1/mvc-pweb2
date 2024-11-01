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

    <form method="post" action="/updatePinjam" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">

        <input type="hidden" name="id_peminjam" value="<?= $datas[0] ?>">

        <label for="name">Nama Peminjam</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Nama" value="<?= $datas[1] ?>" type="text" name="name" id="name" required>

        <label for="date">Tanggal Peminjaman</label>
        <input class="input input-bordered w-full" type="date" name="date" id="date" value="<?= $datas[2] ?>" required>

        <label for="books">Judul Buku</label>

        <select class="select select-bordered" name="books" id="books">
            <?php foreach ($books as $data) : ?>
                <option value="<?= $data['id_buku'] ?>"> <?= $data['judul_buku'] ?> </option>
            <?php endforeach ?>
        </select>

        <button class="btn w-fit self-center my-5" type="submit" name="update" id="submit">Update Peminjaman</button>
    </form>
</body>

</html>