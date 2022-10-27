<p>
<?php echo $__env->make('admin/heading/tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</p>

<table class="table table-bordered" id="example1">
<thead>
<tr>
    <th width="5%">NO</th>
    <th width="10%">GAMBAR</th>
    <th width="30%">JUDUL</th>
    <th width="30%">KETERANGAN</th>
    <th width="10%">Halaman</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($heading as $heading) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td class="text-center">
      <?php if($heading->gambar=="") { echo '-';}else{ ?>
        <img src="<?php echo e(asset('assets/upload/image/thumbs/'.$heading->gambar)); ?>" class="img img-fluid img-thumbnail" style="width: 100px; height: auto;">
      <?php } ?>
    </td>
    <td><?php echo $heading->judul_heading ?></td>
    <td><small><?php echo $heading->keterangan ?></small></td>
    <td><?php echo $heading->halaman ?></td>
    <td>
      <div class="btn-group">
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?php echo $heading->id_heading ?>">
    <i class="fa fa-edit"></i>
</button>
      <a href="<?php echo e(asset('admin/heading/delete/'.$heading->id_heading)); ?>" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i></a>
      </div>
      <?php echo $__env->make('admin/heading/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/heading/index.blade.php ENDPATH**/ ?>