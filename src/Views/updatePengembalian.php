<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Edit Data Pengembalian</h1>

    <form method="post" action="/updatePengembalian" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <input type="hidden" name="id" value="<?=$id?>" >

        <label for="publisher">Tanggal Peminjaman</label>
        <input class="input input-bordered w-full" type="date" name="date" required>
        
        <label for="nama_peminjam">Nama Peminjam</label>
        <select class="select select-bordered" name="name" id="nama_peminjam">
            <?php foreach ($peminjam as $pinjam) : ?>
                <option value="<?= $pinjam['id_peminjaman'] ?>"> <?= $pinjam['nama_peminjam'] ?> </option>
            <?php endforeach ?>
        </select>

        <button class="btn w-fit self-center my-5" type="submit" name="update">Update Buku</button>
    </form>
</body>

</html>