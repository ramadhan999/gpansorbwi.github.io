<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<p>
  <?php echo $__env->make('admin/video/tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</p>
<form action="<?php echo e(asset('admin/video/proses')); ?>" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>

<div class="row">

  <div class="col-md-12">
    <div class="btn-group">
      <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
      </button> 
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#Tambah">
            <i class="fa fa-plus"></i> Tambah Baru
        </button>
   </div>
</div>
</div>

<div class="clearfix"><hr></div>
<div class="table-responsive mailbox-messages">
    <div class="table-responsive mailbox-messages">
<table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
<thead>
    <tr class="bg-info">
        <th width="5%">
            <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
            </div>
        </th>
    <th width="15%">VIDEO</th>
    <th width="30%">JUDUL</th>
    <th width="20%">KETERANGAN</th>
    <th width="10%">POSISI</th>
    <th>ACTION</th>
</tr>
</thead>
<tbody>

    <?php $i=1; foreach($video as $video) { ?>

        <td class="text-center">
        <div class="icheck-primary">
                  <input type="checkbox" class="icheckbox_flat-blue " name="id_video[]" value="<?php echo $video->id_video ?>" id="check<?php echo $i ?>">
                   <label for="check<?php echo $i ?>"></label>
        </div>
    </td>
      <td>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo e($video->video); ?>?rel=0" allowfullscreen></iframe>
        </div>
          <hr>
        <?php $site   = DB::table('konfigurasi')->first(); if($video->gambar!="") { ?>
      <img src="<?php echo e(asset('assets/upload/image/thumbs/'.$video->gambar)); ?>" class="img-thumbnail img-size-50 mr-2" >
      <?php }else{ ?>
      <img src="<?php echo e(asset('assets/upload/image/thumbs/'.$site->icon)); ?>" class="img-thumbnail img-size-50 mr-2" >
      <?php } ?>
    </td>

    <td><?php echo $video->judul ?></td>
    <td><small><?php echo $video->keterangan ?></small></td>
    <td><?php echo $video->posisi ?></td>
    <td>
        <div class="btn-group">
        <a href="<?php echo e(asset('admin/video/edit/'.$video->id_video)); ?>" 
          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

          <a href="<?php echo e(asset('admin/video/delete/'.$video->id_video)); ?>" class="btn btn-danger btn-sm  delete-link">
            <i class="fa fa-trash"></i></a>
        </div>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</div>
</form><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/video/index.blade.php ENDPATH**/ ?>