<p>
<?php echo $__env->make('admin/kategori_agenda/tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</p>

<table class="table table-bordered" id="example1">
<thead>
<tr>
    <th width="5%">NO</th>
    <th width="25%">NAMA KATEGORI</th>
    <th width="25%">KETERANGAN</th>
    <th width="15%">SLUG</th>
    <th width="10%">NO URUT</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori_agenda as $kategori_agenda) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td><?php echo $kategori_agenda->nama_kategori_agenda ?></td>
    <td><?php echo $kategori_agenda->keterangan ?></td>
    <td><?php echo $kategori_agenda->slug_kategori_agenda ?></td>
    <td><?php echo $kategori_agenda->urutan ?></td>
    <td>
      <div class="btn-group">
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?php echo $kategori_agenda->id_kategori_agenda ?>">
    <i class="fa fa-edit"></i> Edit
</button>
      <a href="<?php echo e(asset('admin/kategori_agenda/delete/'.$kategori_agenda->id_kategori_agenda)); ?>" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i> Hapus</a>
      </div>
      <?php echo $__env->make('admin/kategori_agenda/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/kategori_agenda/index.blade.php ENDPATH**/ ?>