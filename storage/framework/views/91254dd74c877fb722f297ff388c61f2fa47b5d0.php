<?php 
$site_config = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo e($title); ?></title>
<meta name="description" content="<?php echo e($deskripsi); ?>">
<meta name="keywords" content="<?php echo e($keywords); ?>">
<meta name="author" content="<?php echo e($site_config->namaweb); ?>">
<!-- icon -->
<link rel="shortcut icon" href="<?php echo e(asset('assets/upload/image/'.$site_config->icon)); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/fontawesome-free/css/all.min.css')); ?>">
<!-- CSS FILES START -->
<link href="<?php echo e(asset('assets/aws/css/custom.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/color.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/responsive.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/owl.carousel.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/prettyPhoto.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/aws/css/all.min.css')); ?>" rel="stylesheet">
<?php echo $site_config->metatext ?>
</head>

<body><?php /**PATH C:\xampp\htdocs\comprolaravel8\resources\views/layout/head.blade.php ENDPATH**/ ?>