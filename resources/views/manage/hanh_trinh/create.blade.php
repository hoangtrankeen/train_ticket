@extends('manage/main')

@section('title','| Create New Post')

@section ('head')
<link href="{{asset('date-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">

@stop

@section('content-header')
<h1 class="page-title">Tạo mới tàu</h1>
@stop

@section('content')

<form method="POST" action="{{route('hanhtrinh.store')}}" accept-charset="UTF-8"
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
					<label for="ma_hanh_trinh">Mã hành trình</label>
					<input type="text" name="ma_hanh_trinh" class="form-control"  required>
				</div>

				<div class="form-group">
					<label>Tàu</label>
					<select name="ma_tau" class="form-control">
						@foreach($taus as $tau)
						<option value="{{$tau->ma_tau}}">{{$tau->ten_tau}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="ga_di">Ga đi</label>
					<select name="ga_di" class="form-control">
						@foreach($ga_dis as $ga_di)
						<option value="{{$ga_di->id}}">{{$ga_di->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="ga_den">Ga đến</label>
					<select name="ga_den" class="form-control">
						@foreach($ga_dens as $ga_den)
						<option value="{{$ga_den->id}}">{{$ga_den->name}}</option>
						@endforeach
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
					<a href="{{route('hanhtrinh.index')}}" type="button" class="btn btn-default pull-right"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
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
