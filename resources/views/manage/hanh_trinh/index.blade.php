@extends('manage/main')

@section('title','| Quản lý tàu')
@section('content')

<!-- /.box -->
<div class="panel panel-default">
  <div class="panel-heading ">
    <div class="row">
      <div class="col-xs-10">
        <h4>Quản Lý Hành Trình</h4>
      </div>

      <div class="col-xs-2">
        <a class="btn btn-primary pull-right" href="{{route('hanhtrinh.create')}}" ><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới hành trình</a>
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
     {{-- {{dd($hanhtrinhs)}} --}}
      @foreach ($hanhtrinhs as $ht)
      <tr>
        <td><a href="{{route('hanhtrinh.edit',$ht->id)}}">{{$ht->ma_hanh_trinh}}</a></td>
        <td>{{$ht->ma_hanh_trinh}}</td>
        <td{{$ht->ten_tau}}</td>
        <td>{{$ht->ga_di}}</td>
        <td>{{$ht->ga_den}}</td>
        <td>{{$ht->time_start}}</td>
        <td>{{$ht->time_end}}</td>
        <td>
          <a class="btn btn-info btn-sm " href="{{route('hanhtrinh.edit',$ht->id)}}"><i class="fa fa-edit"></i> Edit</a>
          <form class="delete" action="{{ route('hanhtrinh.destroy', $ht->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
          </form>  

        </td>
      </tr>

      @endforeach
    </table>
  </div>
  <!-- /.box-body -->

</div>
<!-- /.box -->


@stop      

@section('scripts')
  
@stop