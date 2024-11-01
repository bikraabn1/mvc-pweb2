<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<?php var_dump($datas) ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Edit Data Buku</h1>

    <form method="post" action="/updateData" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <input type="hidden" name="id_buku" value="<?= $datas[0] ?>">

        <label for="title">Judul Buku</label>
        <input class="input input-bordered w-full" value="<?= $datas[1] ?>" placeholder="Masukkan Judul Buku" type="text" name="title" id="title" required>

        <label for="publisher">Penulis</label>
        <input class="input input-bordered w-full" value="<?= $datas[2] ?>" placeholder="Masukkan Nama Penulis" type="text" name="author" id="author" required>

        <label for="year">Tahun Terbit</label>
        <input class="input input-bordered w-full" value="<?= $datas[3] ?>" placeholder="Masukkan Tahun Terbit" maxlength="4" inputmode="numeric" type="text" name="year" id="year" required>

        <label for="category">Kategori Buku</label>
        <button class="btn w-fit self-center my-5" type="submit" name="update">Update Buku</button>
    </form>
</body>

<script>

</script>

</html>