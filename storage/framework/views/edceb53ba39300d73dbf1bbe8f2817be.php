<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>PengaduanMasyarakat.com</title>
</head>

<body>
  
  <div style="display:flex;justify-content:center;">
  <h1>pengaduan</h1> <a href="<?php echo e('isi-pengaduan'); ?>" type="button" class="btn btn-info" style="margin-left: 2rem;height:50px;width:50px;margin-top:1rem;">+</a>
  </div>

  <div class="container">
        <table  style="margin-top: 2rem;" class="table">
          <thead>
            <tr>
              <th scope="col" class="table-warning">Id_laporan</th>
              <th scope="col" class="table-warning">Tanggal Laporan</th>
              <th scope="col" class="table-warning">Nik</th>
              <th scope="col" class="table-warning">Isi Laporan</th>
              <th scope="col" class="table-warning">Gambar Bukti</th>
              <th scope="col" class="table-warning">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengaduan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th scope="row" class="table-secondary"><?php echo e($pengaduan->id_pengaduan); ?></th>
              <td class="table-secondary"><?php echo e($pengaduan->tgl_pengaduan); ?></td>
              <td class="table-secondary"><?php echo e($pengaduan->nik); ?></td>
              <td class="table-secondary"><?php echo e($pengaduan->isi_laporan); ?></td>
              <td class="table-secondary"><?php echo e($pengaduan->foto); ?></td>
              <td class="table-secondary">
                <a href="<?php echo e('update'); ?>" type="button" class="btn btn-danger">uptade</a>
                <a href="<?php echo e('detail'); ?>" type="button" class="btn btn-primary">detail</a>
                <a href="<?php echo e('delete'); ?>" type="button" class="btn btn-primary">delete</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-syaaa\resources\views/home.blade.php ENDPATH**/ ?>