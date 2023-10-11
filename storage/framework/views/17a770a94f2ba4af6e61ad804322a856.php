<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="laporan.css">
</head>

<body>
    <div class="container mt-5">
        <form action="pengaduan_simpan.php" method="POST" enctype="multipart/form-data">

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="isi">isi Laporan</label>
                <textarea class="form-control" id="isi" rows="4" name="isi_laporan"></textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Bukti Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-syaaa\resources\views/pengaduan_masyarakat.blade.php ENDPATH**/ ?>