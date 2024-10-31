<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Peminjaman Buku</title>
</head>
<body>
    <h1>Tambah Peminjaman Buku</h1>
    <form method="POST" action="">
        <label>Nama Peminjam:</label>
        <input type="text" name="name" required><br><br>

        <label>Tanggal Peminjaman:</label>
        <input type="date" name="date" required><br><br>

        <label>ID Buku:</label>
        <select name="books" required>
            <?php foreach ($peminjaman as $pinjam): ?>
                <option value="<?= $book['id_buku'] ?>"><?= $book['judul_buku'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
