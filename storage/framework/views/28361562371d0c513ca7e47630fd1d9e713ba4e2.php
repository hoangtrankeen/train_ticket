<?php $__env->startSection('title','| Create New Post'); ?>

<?php $__env->startSection('head'); ?>
<link href="<?php echo e(asset('date-picker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" media="screen">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<h1 class="page-title">Tạo mới hành trinh</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="" accept-charset="UTF-8"
enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label for="tag">Ga Đi</label> 
					<select class="form-control" name="ga_di" id="ga_di">
						<?php $__currentLoopData = $ga_dis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ga_di): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option>Chọn ga đi</option>
						<option value="<?php echo e($ga_di->id); ?>"><?php echo e($ga_di->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				<div class="form-group">
					<label for="tag">Ga Đến</label>
					<select class="form-control" name="ga_den" id="ga_den">
						<option>Chọn ga đến</option>
						<?php $__currentLoopData = $ga_dens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ga_den): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($ga_den->id); ?>"><?php echo e($ga_den->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select> 
				</div>
				
				<div class="form-group">
					<input type="checkbox" name="">
					<label>Một Chiều  &nbsp;</label>

					<input type="checkbox" name="">
					<label>Khứ Hồi</label>
				</div>
				<div class="form-group">

					
				</div>
				<div class="form-group">
					<label for="time_start" class=" control-label">Ngày Đi</label>
					<div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="time_start">
						<input class="form-control" size="16" type="text" value="" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
					<input type="hidden" id="time_start" value="" name="time_start" ><br/>
				</div >
				<div class="form-group">
					<label for="time_end" class=" control-label">Ngày Về</label>
					<div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="time_end">
						<input class="form-control" size="16" type="text" value="" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
					<input type="hidden" id="time_end" value="" name="time_end" ><br/>
				</div >
				<button class="btn btn-primary ">Tra Cứu</button>
			</div>	
		</div>
	</div>
</div>
</form> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">
	
	$('#ga_di').select2({

	});


	$('#ga_den').select2({

	});
</script>

<script type="text/javascript" src="<?php echo e(asset('date-picker/js/bootstrap-datetimepicker.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('date-picker/js/locales/bootstrap-datetimepicker.fr.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('date-picker/index.js')); ?>"></script>

<script type="text/javascript">
	$('.select2-multi').select2();
	
</script>
<?php $__env->stopSection(); ?>	

<?php echo $__env->make('manage/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>