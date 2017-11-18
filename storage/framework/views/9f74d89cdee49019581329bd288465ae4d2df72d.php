  <!DOCTYPE html>
<html>
<head>
 <?php echo $__env->make('manage/partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php echo $__env->make('manage/partials/_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('manage/partials/_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="content-wrapper">
      <section class="content-header">
        <?php echo $__env->yieldContent('content-header'); ?>
      </section>
      <section class="content" id="app">
        <?php echo $__env->make('manage/partials/_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
      </section>
    </div>

    <?php echo $__env->make('manage/partials/_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar --> 
 </div>
 <!-- ./wrapper -->


 <?php echo $__env->make('manage/partials/_script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
</body>
</html>

<style type="text/css">
body{
  font-size: 15px !important;
}
</style>