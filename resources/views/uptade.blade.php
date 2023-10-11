<!DOCTYPE html>
<html lang="en">
<head>
  <title>isi pengaduan</title>
  <link rel="stylesheet" href={{asset("/dinda/bs/bs/css/bootstrap.min.css")}}>

</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color:#8CABFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Isi Pengaduan</a>
  </nav>
<div class="container" style="margin-top:40px;">
<div class="mb-3">
  <form action={{url("/update_pengaduan/$pengaduan>id_pengaduan")}} method="POST" enctype="multipart/form-data">
    @method("POST")
    @csrf
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="isi_laporan" >{{$pengaduan->isi_laporan}}</textarea>
  @error('')
<div> {{ $message}} </div>
  @enderror
</div>
<label for="inputGroupFile02" class="form-label">Foto</label>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">
</div>
<button type="submit" class="btn btn-outline-success" style="padding:6px 40px;">Kirim</button>
<a href="{{ url ('table') }} " class="btn btn-outline-success">Kembali</a>
</form>
</div>
</body>
</html>