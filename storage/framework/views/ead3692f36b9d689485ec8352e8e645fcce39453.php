<?php $__env->startSection('title','| Quản lý tàu'); ?>
<?php $__env->startSection('content'); ?>

<!-- /.box -->
<div class="panel panel-default">
  <div class="panel-heading ">
    <div class="row">
      <div class="col-xs-10">
        <h4>Quản Lý Hành Trình</h4>
      </div>

      <div class="col-xs-2">
        <a class="btn btn-primary pull-right" href="<?php echo e(route('hanhtrinh.create')); ?>" ><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới hành trình</a>
      </div>

    </div>
    
  </div>
  <!-- /.box-header -->
  <div class="panel-body">
    <table class="table table-striped table-bordered">
      <tr>
        <th>Mã Hành Trình</th>
        <th>Tàu</th> 
        <th>Ga Đi</th>
        <th>Ga Đến</th>
        <th>Giờ Khởi Hành</th>
        <th>Giờ Đến</th>
        <th>Tác Vụ</th>
         </tr>
     
      <?php $__currentLoopData = $hanhtrinhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ht): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><a href="<?php echo e(route('hanhtrinh.edit',$ht->id)); ?>"><?php echo e($ht->ma_hanh_trinh); ?></a></td>
        <td><?php echo e($ht->ma_hanh_trinh); ?></td>
        <td<?php echo e($ht->ten_tau); ?></td>
        <td><?php echo e($ht->ga_di); ?></td>
        <td><?php echo e($ht->ga_den); ?></td>
        <td><?php echo e($ht->time_start); ?></td>
        <td><?php echo e($ht->time_end); ?></td>
        <td>
          <a class="btn btn-info btn-sm " href="<?php echo e(route('hanhtrinh.edit',$ht->id)); ?>"><i class="fa fa-edit"></i> Edit</a>
          <form class="delete" action="<?php echo e(route('hanhtrinh.destroy', $ht->id)); ?>" method="POST">
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