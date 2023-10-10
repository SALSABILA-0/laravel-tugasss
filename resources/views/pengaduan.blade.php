<center><h1>{{isi pengaduan}}</h1></center>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <main>
    <div class="container pt-4">
      <form action="isi-pengaduan" method="post" enctype="multipart/form-data">
       
        <div class="mb-3">

          <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Disini :</label>
          <textarea class="form-control border-primary" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required></textarea>
          <div></div>  
         
</div>

        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="foto">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>


        <button type="submit" class="btn btn-success">Success</button>
      </form>
    </div>
  </main>
  <!--Main layout-->
</body>

</html>