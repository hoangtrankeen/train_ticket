@extends('manage/main')

@section('title','| Create New Post')

@section ('head')
<link href="{{asset('date-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">

@stop

@section('content-header')
<h1 class="page-title">Tạo mới Hành Trình</h1>
@stop

@section('content')

<form method="POST" action="{{route('tau.store')}}" accept-charset="UTF-8"
enctype="multipart/form-data">
{{csrf_field()}}
<div class="row">
	<div class="col-md-9">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label for="ma_tau">Mã tàu</label>
					<input type="text" name="ma_tau" class="form-control"  required>
				</div><div class="form-group">
					<label for="ten_tau">Tên tàu</label>
					<input type="text" name="ten_tau" class="form-control"  required>
				</div>
				<div class="form-group">
					<label for="loai_tau">Loại tàu</label>
					<input type="text" name="loai_tau" class="form-control"  required>
				</div>
				
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
					<a href="{{route('tau.index')}}" type="button" class="btn btn-default pull-right"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
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

@stop

@section('scripts')
{{--Date Picker  --}}
<script type="text/javascript" src="{{asset('date-picker/js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('date-picker/js/locales/bootstrap-datetimepicker.fr.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('date-picker/index.js')}}"></script>

<script type="text/javascript">
	$('.select2-multi').select2();
	
</script>
@stop	
