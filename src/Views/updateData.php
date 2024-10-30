<?php $id = $_GET['id']?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<?php include "Navbar.php"?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Tambah Buku Baru</h1>

    <form method="post" action="/newBook" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl" onsubmit="submitHandler()">
        <input type="hidden" name="id_buku" value="<?= $id ?>">
        
        <label for="title">Judul Buku</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Judul Buku" type="text" name="title" id="title" required>

        <label for="publisher">Penerbit</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Nama Penulis" type="text" name="publisher" id="publisher" required>

        <label for="year">Tahun Terbit</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Tahun Terbit" maxlength="4" inputmode="numeric" type="text" name="year" id="year" required>

        <label for="category">Kategori Buku</label>
        <select class="select select-bordered" name="category" id="category">
            <?php foreach ($category as $data) : ?>
                <option value="<?= $data['id_kategori'] ?>"> <?= $data['nama_kategori'] ?> </option>
            <?php endforeach ?>
        </select>

        <button class="btn w-fit self-center my-5" type="submit" name="update" id="submit">Update Buku</button>
    </form>
</body>

<script>
    const submitHandler = (event) => {
        const input = document.getElementById('year')

        if (input.value < 1900 || input.value > 2100) {
            Swal.fire({
                title: 'Error!',
                text: 'Mohon Isi Tahun 1900 - 2100',
                icon: 'error',
                confirmButtonText: 'OK'
            })
            return
        }

        Swal.fire({
            title: 'Success!!',
            text: 'Data Berhasil Ditambahkan',
            icon: 'success',
            confirmButtonText: 'OK'
        })
        
    }
</script>

</html>