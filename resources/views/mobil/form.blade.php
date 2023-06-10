<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h1>Form Tambah Data</h1>
        <form action="/mobil/simpanData" method="POST">
            @csrf
            <div>
                <label for="">Nama Mobil</label><br>
                <input type="text" name="nama_mobil" requered><br>
            </div>
            <div>
                <label for="">Merek Mobil</label><br>
                <input type="text" name="merk_mobil" requered><br>
            </div>
            <div>
                <label for="">CC</label><br>
                <input type="text" name="cc" requered><br>
            </div>
            <div>
               <button type="submit">simpan</button>
            </div>
        </form>
    </div>
</body>
</html>