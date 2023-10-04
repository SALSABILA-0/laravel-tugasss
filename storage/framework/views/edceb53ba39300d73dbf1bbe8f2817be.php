


<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
home
<?php $__env->stopSection(); ?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">TGL</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($data->tgl_pengaduan); ?></td>
        <td><?php echo e($data->nik); ?></td>
        <td><?php echo e($data->isi_laporan); ?></td>
        <td><img width="200px" src='<?php echo e(asset("images/$data->foto")); ?>' /></td>
        <td><a href="<?php echo e(url('delete')); ?>" class="btn btn-danger">delete</a></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel-syaaa\resources\views/home.blade.php ENDPATH**/ ?>