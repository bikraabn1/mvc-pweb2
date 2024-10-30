<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
    <link rel="stylesheet" href="output.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Pengambalian Buku</h1>
    
    <form method="post" action="/newBook" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <label for="title">ID Pengembalian</label>
        <input class="input input-bordered w-full" placeholder="Masukkan ID Pengembalian" type="text" name="title" id="title" required>

        <label for="publisher">ID Peminjaman</label>
        <input class="input input-bordered w-full" placeholder="Masukkan ID Peminjaman" type="text" name="publisher" id="publisher" required>

        <label for="year">Jumlah Denda</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Jumlah Denda" maxlength="4" inputmode="numeric" type="text" name="year" id="year" required>

        <label for="category">Tanggal Pengembalian</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Tanggal Pengembalian" maxlength="4" inputmode="numeric" type="text" name="year" id="year" required>
        </select>

        <button class="btn w-fit self-center my-5" type="submit" name="submit" id="submit">Oke</button>
    </form>
</body>
</html>