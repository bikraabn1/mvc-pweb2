<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form method="post" action="/newUser">
        <label for="title">Judul Buku</label>
        <input type="text" name="title" id="title" required>

        <label for="publisher">Penerbit</label>
        <input type="text" name="publisher" id="publisher" required>

        <label for="year">Tahun Terbit</label>
        <input type="year" name="year" id="year" required>

        <button type="submit" name="submit" id="submit">Submit</button>
    </form>
</body>
</html>