<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anggota</title>
    </head>
    <body>
        <h1 align="center">Welcome to Aplikasi Perpustakaan</h1>
        <h3 align="center">Silahkan Pilih Salah Satu</h3>
        <br>
        <form align="center" action="{{ route('get_anggota') }}">
            <label for="id_anggota">Anggota</label>
            <input type="submit" value="Anggota">
        </form>
        <br>
        <form align="center" action="{{  route('get_petugas') }}">
            <label for="petugas">Petugas</label>
            <input type="submit" value="Petugas">
        </form>
    </body>
</html>