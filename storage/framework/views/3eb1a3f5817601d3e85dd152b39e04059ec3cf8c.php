<button class="btn btn-success" data-toggle="modal" data-target="#Tambah">
    <i class="fa fa-plus"></i> Tambah Baru
</button>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title" id="myModalLabel">Tambah data?</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
    
<form action="<?php echo e(url('admin/kategori_agenda/tambah')); ?>" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>


<div class="form-group row">
	<label class="col-md-3 text-right">Nama Kategori</label>
	<div class="col-md-9">
		<input type="text" name="nama_kategori_agenda" class="form-control" placeholder="Nama kategori agenda" value="" required>
		<?php if($errors->has('nama_kategori_agenda')): ?>
	      	<span class="text-danger"><?php echo e($errors->first('nama_kategori_agenda')); ?></span>
	    <?php endif; ?>  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3 text-right">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo e(old('keterangan')); ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3 text-right">Nomor urut</label>
	<div class="col-md-9">
<input type="number" name="urutan" class="form-control" placeholder="Urutan" value="" required>
</div>
</div>

<div class="form-group row">
	<label class="col-md-3 text-right"></label>
	<div class="col-md-9">
<div class="btn-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
<div class="clearfix"></div>

</form>

</div>
</div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/admin/kategori_agenda/tambah.blade.php ENDPATH**/ ?>