<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tambah User</title>
</head>
<body class="container mt-5">
    <h2 class="mb-4">Tambah User</h2>

    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="level_id">ID Level Pengguna</label>
            <input type="number" name="level_id" id="level_id" class="form-control" placeholder="Masukkan ID Level" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/user" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
