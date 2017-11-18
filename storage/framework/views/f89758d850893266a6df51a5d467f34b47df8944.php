<?php $__env->startSection('title','| Create New Post'); ?>

<?php $__env->startSection('head'); ?>
<link href="<?php echo e(asset('date-picker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" media="screen">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<h1 class="page-title">Tạo mới tàu</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('hanhtrinh.store')); ?>" accept-charset="UTF-8"
enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="row">
	<div class="col-md-9">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				
				<div class="form-group">
					<label for="ma_hanh_trinh">Mã hành trình</label>
					<input type="text" name="ma_hanh_trinh" class="form-control"  required>
				</div>

				<div class="form-group">
					<label>Tàu</label>
					<select name="ma_tau" class="form-control">
						<?php $__currentLoopData = $taus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($tau->ma_tau); ?>"><?php echo e($tau->ten_tau); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>

				<div class="form-group">
					<label for="ga_di">Ga đi</label>
					<select name="ga_di" class="form-control">
						<?php $__currentLoopData = $ga_dis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ga_di): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($ga_di->id); ?>"><?php echo e($ga_di->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>

				<div class="form-group">
					<label for="ga_den">Ga đến</label>
					<select name="ga_den" class="form-control">
						<?php $__currentLoopData = $ga_dens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ga_den): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($ga_den->id); ?>"><?php echo e($ga_den->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>

				<div class="form-group">
					<label for="time_start" class=" control-label">Giờ khởi hành</label>
					<div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="time_start">
						<input class="form-control" size="16" type="text" value="" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
					<input type="hidden" id="time_start" value="" name="time_start" ><br/>
				</div >

				<div class="form-group">
					<label for="time_end" class=" control-label">Giờ đến</label>
					<div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="time_end">
						<input class="form-control" size="16" type="text" value="" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
					<input type="hidden" id="time_end" value="" name="time_end" ><br/>
				</div >
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="box box-primary">
			<div class="box-body">
				<div class="text">
					<button class="btn btn-success ">
						<i class="fa fa-check"></i> Save
					</button>
					<a href="<?php echo e(route('hanhtrinh.index')); ?>" type="button" class="btn btn-default pull-right"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
				</div>
			</div>
		</div>


		<div class="box box-primary">
			<div class="box-header with-border">
				<h4 class="box-title">Trạng Thái</h4>
				<div class="box-tools">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="box-body">
				<select name="is_published" id="" class="form-control">
					<option value="0">Ẩn</option>
					<option value="1">Hiện</option>
				</select>
			</div>
		</div>
	</div>
</div>
</form> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script type="text/javascript" src="<?php echo e(asset('date-picker/js/bootstrap-datetimepicker.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('date-picker/js/locales/bootstrap-datetimepicker.fr.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo e(asset('date-picker/index.js')); ?>"></script>

<script type="text/javascript">
	$('.select2-multi').select2();
	
</script>
<?php $__env->stopSection(); ?>	

<?php echo $__env->make('manage/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>