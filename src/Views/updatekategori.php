<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kategori</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<?php include "Navbar.php" ?>
<body>
    <h1 class="font-semibold self-center text-3xl text-center my-10">Ubah Kategori Buku</h1>
    
    <form method="post" action="/updatekategori" class="flex flex-col w-[70%] mx-auto mt-30 p-5 gap-2 border rounded-2xl">
        <input type="hidden" name="id_kategori" value="<?= $datas[0] ?>">

        <label for="title">Nama Kategori</label>
        <input class="input input-bordered w-full" placeholder="Masukkan Nama Kategori" type="text" name="nama_kategori" id="nama_kategori" value="<?= $datas[1] ?>" required>

        <button class="btn w-fit self-center my-5" type="submit" name="update" id="submit">Ubah Kategori</button>
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