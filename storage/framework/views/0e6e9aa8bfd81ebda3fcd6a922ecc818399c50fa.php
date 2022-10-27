<?php 
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('<?php echo e(asset('assets/upload/image/'.$bg->gambar)); ?>'); background-position: bottom center;">
   <div class="container">
      <h1><?php echo e($title); ?></h1>
   </div>
</section>
<!--Inner Header End--> 
<!--Blog Start-->
<section class="wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            
              <?php foreach($galeris as $galeri) { ?>
          <!--Blog Small Post Start-->
            <div class="col-md-6 col-sm-12">
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="<?php echo e(asset('galeri/detail/'.$galeri->id_galeri)); ?>"><i class="fas fa-link"></i></a> <img src="<?php echo e(asset('assets/upload/image/thumbs/'.$galeri->gambar)); ?>" alt="><?php  echo $galeri->judul_galeri ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="<?php echo e(asset('galeri/detail/'.$galeri->id_galeri)); ?>"><?php  echo $galeri->judul_galeri ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="<?php echo e(asset('galeri/detail/'.$galeri->id_galeri)); ?>"><i class="fas fa-calendar-alt"></i> <?php echo e(tanggal('tanggal_id',$galeri->tanggal)); ?></a> </li>
                        <li> <a href="<?php echo e(asset('galeri/detail/'.$galeri->id_galeri)); ?>"><i class="fas fa-comments"></i> <?php echo e($galeri->nama_kategori_galeri); ?></a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($galeri->isi), 100, $end='...') ?></p>
                     <a href="<?php echo e(asset('galeri/detail/'.$galeri->id_galeri)); ?>" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
          <?php } ?>

           </div>
         <div class="gt-pagination">
            <?php echo e($galeris->links()); ?>

         </div>
      </div>
   </div>
</section>
<!--Blog End--> <?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/galeri/index.blade.php ENDPATH**/ ?>