<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>user ubah</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form action="post" action="/user/ubah_simpan/{{$data->user_id}}">
        {{(csrf_field())}}
        {{(method_field('PUT'))}}

        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{$data->username}}">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$data->nama}}">
        <br>
        <label for="level_id">ID Level Pengguna</label>
        <input type="text" name="level_id" id="level_id" value="{{$data->level_id}}">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
