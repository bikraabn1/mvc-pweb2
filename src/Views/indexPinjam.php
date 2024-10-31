<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman Buku</h1>
    <a href="/addPeminjaman">Tambah Peminjaman</a>
    <table border="1">
        <tr>
            <th>ID Peminjaman</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Peminjaman</th>
            <th>ID Buku</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($peminjaman as $pinjam): ?>
        <tr>
            <td><?= $pinjam['id_peminjaman'] ?></td>
            <td><?= $pinjam['nama_peminjam'] ?></td>
            <td><?= $pinjam['tanggal_peminjaman'] ?></td>
            <td><?= $pinjam['id_buku'] ?></td>
            <td>
                <a href="/updatePeminjaman?id_peminjaman=<?= $pinjam['id_peminjaman'] ?>&nama_peminjam=<?= $pinjam['nama_peminjam'] ?>&tanggal_peminjaman=<?= $pinjam['tanggal_peminjaman'] ?>&id_buku=<?= $pinjam['id_buku'] ?>">Update</a>
                <form method="POST" action="/deletePeminjaman" style="display:inline;">
                    <input type="hidden" name="id_peminjaman" value="<?= $pinjam['id_peminjaman'] ?>">
                    <input type="submit" name="delete" value="Delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
