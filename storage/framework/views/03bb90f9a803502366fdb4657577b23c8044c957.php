<!--Inner Header Start-->
<section class="wf100 p80 inner-header">
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
            
          <?php foreach($videos as $video) { ?>
           <div class="col-md-6 col-sm-6">
              <div class="blog-post">
                  <div class="blog-thumb"> 
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo e($video->video); ?>?rel=0" allowfullscreen></iframe>
                    </div>
                  </div>
                  <hr>
                  <div class="post-txt">
                         <h5><?php echo $video->judul ?></h5>
                  </div>
              </div>
          </div>
          <?php } ?>

          </div>
         <div class="gt-pagination">
            <?php echo e($videos->links()); ?>

         </div>
      </div>
   </div>
</section>
<!--Blog End--> <?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/video/index.blade.php ENDPATH**/ ?>