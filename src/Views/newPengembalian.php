<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengembalian Buku</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <?php include "Navbar.php"; ?>
    
    <h1 class="font-semibold self-center text-3xl text-center my-10">Data Pengembalian Buku</h1>
    
    <form method="post" action="" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <label for="id_pengembalian">ID Pengembalian</label>
        <input class="input input-bordered w-full" placeholder="Masukkan ID Pengembalian" type="text" name="id_pengembalian" id="id_pengembalian" required>

        <label for="id_peminjaman">ID Peminjaman</label>
        <input class="input input-bordered w-full" placeholder="Masukkan ID Peminjaman" type="text" name="id_peminjaman" id="id_peminjaman" required>

        <label for="jumlah_denda">Jumlah Denda</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Jumlah Denda" maxlength="4" inputmode="numeric" type="text" name="jumlah_denda" id="jumlah_denda" required>

        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Tanggal Pengembalian" type="datetime-local" name="tanggal_pengembalian" id="tanggal_pengembalian" required>

        <button class="btn w-fit self-center my-5" type="submit" name="submit" id="submit">Tambah Pengembalian</button>
    </form>
</body>
</html>
