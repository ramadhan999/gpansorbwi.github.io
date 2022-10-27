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
<!--About Start-->
<section class="wf100 about">
<!--About Txt Video Start-->
<div class="about-video-section wf100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-text text-aws">
            <style type="text/css" media="screen">
                              .text-aws img {
                                 width: auto;
                                 max-width: 100%;
                                 height: auto;
                              }
                           </style>               
               <?php echo $read->isi ?>
            </div>
         </div>
         <div class="col-lg-6">
            <a href="#"><img src="<?php echo e(asset('assets/upload/image/'.$read->gambar)); ?>" alt="<?php echo e($title); ?>" class="img img-fluid img-thumbnail"></a>
         </div>
         
         
      </div>
   </div>
</div>
</section>
<!--About Txt Video End--> 



<?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/berita/read.blade.php ENDPATH**/ ?>