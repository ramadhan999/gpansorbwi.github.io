<p class="text-right">
	<a href="<?php echo e(asset('admin/staff/edit/'.$staff->id_staff)); ?>" class="btn btn-warning btn-sm">
		<i class="fa fa-edit"></i> Edit
	</a>
	<a href="<?php echo e(asset('admin/staff')); ?>" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>

<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="<?php if($staff->gambar=="") { ?>asset('assets/upload/staff/thumbs/'.$staff->gambar) }}<?php }else{ ?><?php echo e(asset('assets/upload/image/thumbs/'.website('icon'))); ?><?php } ?>" alt="<?php echo e($staff->nama_staff); ?>">
        </div>

        <h3 class="profile-username text-center"><?php echo e($staff->nama_staff); ?></h3>

        <p class="text-muted text-center"><?php echo e($staff->jabatan); ?></p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b><?php echo e($staff->pendidikan); ?></b>
          </li>
          <li class="list-group-item">
            <b><?php echo e($staff->expertise); ?></b>
          </li>
          <li class="list-group-item">
            <b><?php echo e($staff->email); ?></b>
          </li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <div class="col-md-9">
    	<div class="card card-primary">
    	<div class="card-header">
                <h3 class="card-title">About Me: <?php echo e($staff->nama_staff); ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th width="25%">Nama lengkap</th>
    				<th><?php echo e($staff->nama_staff); ?></th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>Jabatan</td>
    				<td><?php echo e($staff->jabatan); ?></td>
    			</tr>
    			<tr>
    				<td>Jenis/Kategori</td>
    				<td><?php echo e($staff->nama_kategori_staff); ?></td>
    			</tr>
    			<tr>
    				<td>Pendidikan</td>
    				<td><?php echo e($staff->pendidikan); ?></td>
    			</tr>
    			<tr>
    				<td>Expertise</td>
    				<td><?php echo e($staff->expertise); ?></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td><?php echo e($staff->email); ?></td>
    			</tr>
    			<tr>
    				<td>Telepon</td>
    				<td><?php echo e($staff->telepon); ?></td>
    			</tr>
    			<tr>
    				<td>Tampil di website?</td>
    				<td><?php echo e($staff->status_staff); ?></td>
    			</tr>
    			<tr>
    				<td>Keywords di Google</td>
    				<td><?php echo e($staff->keywords); ?></td>
    			</tr>
    			<tr>
    				<td>Deskripsi lengkap</td>
    				<td><?php echo e($staff->isi); ?></td>
    			</tr>
    		</tbody>
    	</table>
</div>
</div>
</div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/staff/detail.blade.php ENDPATH**/ ?>