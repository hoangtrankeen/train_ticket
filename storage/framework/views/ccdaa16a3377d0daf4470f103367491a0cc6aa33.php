<?php $__env->startSection('title','| Create New Post'); ?>

<?php $__env->startSection('head'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header'); ?>
<h1 class="page-title">Đặt Vé</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
	<div class="col-md-12">
		<div class=" box box-primary">
			<div class="box-header"><h3 class="box-title">Giỏ Vé	</h3> </div>
			<div class="box-body">
				
				<table class="table table-striped table-bordered">
					<tr>
						<th>Thông Tin Chỗ</th>
						<th>Giá Vé</th> 
						<th>Giảm Đối Tượng</th>
						<th>Khuyến Mại</th>
						<th>Bảo Hiểm</th>
						<th>Thành Tiền</th>
						<th> </th>
					</tr>
					
					
					<tr>
						<td>SE1 Hà Nội-Nam Định <br>
							08/11/2017 19:30 <br>
							Toa 1 chỗ 47 <br>
						Ngồi cứng điều hòa</td>
						<td>37,000 vnđ</td>
						<td>Sinh viên: 10%</td>
						<td>Không có khuyến mại cho vé này</td>
						<td>1,000</td>
						<td>34,000 vnđ</td>
						<td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
					</tr>
				</table>
			</div>
		</div>


		<form method="POST" action="" accept-charset="UTF-8"
		enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Thông Tin Khách Hàng</h3>
			</div>
			<div class="box-body" id="slug">
				
				<div class="form-group">
					<label for="title">Họ và Tên</label>
					<input type="text" name="title" class="form-control" v-model:value="title" required>
				</div>
				
				<div class="form-group">
					<label for="sub_title">Email</label>
					<input type="text" name="sub_title" id="sub_title" class="form-control">
				</div>


				<div class="form-group">
					<label>Số Di Động</label>
					<input type="text" name="slug"  class="form-control">
				</div>

				<div class="form-group">
					<label>Đối Tượng</label>
					<select class="form-control">
						<option></option>
						<option> Sinh Viên</option>
						<option> Người Già</option>
						<option> Trẻ Em</option>
					</select>
				</div>
				

				<div class="form-group">
					<label for="tag">Số CMT/Hộ Chiếu</label> 
					<input type="text" name="" class="form-control">
				</div>
				

				<div class="form-group">
					<input type="checkbox" name="">
					<label for="body">Thanh Toán Trực Tuyến &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="checkbox" name="">
					<label for="body">Thanh Toán Trả Sau</label>
				</div>
				<button class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Đặt Vé</button>
			</div>

		</div>
	</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>



<script type="text/javascript">
	$('.select2-multi').select2();
	
</script>
<?php $__env->stopSection(); ?>	

<?php echo $__env->make('manage/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>