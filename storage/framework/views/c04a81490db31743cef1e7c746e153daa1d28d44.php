<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<title>Adminsitrator Section <?php echo $__env->yieldContent('title'); ?></title>

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo e(asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('asset/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo e(asset('asset/bower_components/Ionicons/css/ionicons.min.css')); ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(asset('asset/dist/css/AdminLTE.min.css')); ?>">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo e(asset('asset/dist/css/skins/_all-skins.min.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/mystyle.css')); ?>">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->



<link rel="stylesheet" type="text/css" href="<?php echo e(asset('select2/css/select2.css')); ?>">


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/notice.css')); ?>">

<?php echo $__env->yieldContent('head'); ?>

<?php echo $__env->yieldContent('style'); ?>


  