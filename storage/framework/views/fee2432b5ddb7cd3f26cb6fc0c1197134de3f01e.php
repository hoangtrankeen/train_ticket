<?php $__env->startSection('title','| Quản lý tàu'); ?>
<?php $__env->startSection('content'); ?>

<!-- /.box -->
<div class="panel panel-default">
  <div class="panel-heading ">
    <div class="row">
      <div class="col-xs-10">
        <h4>Quản Lý Tàu</h4>
      </div>
      <div class="col-xs-2">
        <a class="btn btn-primary pull-right" href="<?php echo e(route('tau.create')); ?>" ><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới</a>
      </div>

    </div>
    
  </div>
  <!-- /.box-header -->
  <div class="panel-body">
    <table class="table table-striped table-bordered">
      <tr>
        <th>Mã Tàu</th>
        <th>Tên Tàu</th>
        <th>Loại Tàu</th>
        <th>Ngày Nhập</th>
        <th>Tác Vụ</th>
      </tr>
     
      <?php $__currentLoopData = $taus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($tau->ma_tau); ?></td>
        <td><a href="<?php echo e(route('tau.edit',$tau->id)); ?>"><?php echo e($tau->ten_tau); ?></a></td>
        <td><?php echo e($tau->loai_tau); ?></td>
        <td><?php echo e($tau->created_at); ?></td>
        
        <td>
          <a class="btn btn-info btn-sm " href="<?php echo e(route('tau.edit',$tau->id)); ?>"><i class="fa fa-edit"></i> Edit</a>
          <form class="delete" action="<?php echo e(route('tau.destroy', $tau->id)); ?>" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <?php echo e(csrf_field()); ?>

            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
          </form>  

        </td>
      </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
  <!-- /.box-body -->

</div>
<!-- /.box -->


<?php $__env->stopSection(); ?>      

<?php $__env->startSection('scripts'); ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manage/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>