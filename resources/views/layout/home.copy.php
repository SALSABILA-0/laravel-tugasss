<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{$judul}}

  @foreach($pengaduan as $pengaduan)
    <p>{{$pengaduan->nik}} - {{ $pengaduan->isi_laporan}}</p>
  @endforeach
</body>
</html>