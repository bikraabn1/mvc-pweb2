<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Peminjaman Buku</title>
</head>
<body>
    <h1>Update Peminjaman Buku</h1>
    <form method="POST" action="/postPeminjaman">
        <input type="hidden" name="id_peminjaman" value="<?= $datas[0] ?>">

        <label>Nama Peminjam:</label>
        <input type="text" name="name" value="<?= $datas[1] ?>" required><br><br>

        <label>Tanggal Peminjaman:</label>
        <input type="date" name="date" value="<?= $datas[2] ?>" required><br><br>

        <label>ID Buku:</label>
        <select name="books" required>
            <?php foreach ($peminjaman as $pinjam): ?>
                <option value="<?= $pinjam['id_buku'] ?>" 
                <?= ($datas[3] == $pinjam['id_buku']) ? 'selected' : '' ?>>
                <?= $pinjam['judul_buku'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" name="update" value="Simpan Perubahan">
    </form>
</body>
</html>
