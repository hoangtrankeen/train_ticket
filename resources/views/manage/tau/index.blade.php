@extends('manage/main')

@section('title','| Quản lý tàu')
@section('content')

<!-- /.box -->
<div class="panel panel-default">
  <div class="panel-heading ">
    <div class="row">
      <div class="col-xs-10">
        <h4>Quản Lý Tàu</h4>
      </div>
      <div class="col-xs-2">
        <a class="btn btn-primary pull-right" href="{{route('tau.create')}}" ><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới</a>
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
     
      @foreach ($taus as $tau)
      <tr>
        <td>{{$tau->ma_tau}}</td>
        <td><a href="{{route('tau.edit',$tau->id)}}">{{$tau->ten_tau}}</a></td>
        <td>{{$tau->loai_tau}}</td>
        <td>{{$tau->created_at}}</td>
        
        <td>
          <a class="btn btn-info btn-sm " href="{{route('tau.edit',$tau->id)}}"><i class="fa fa-edit"></i> Edit</a>
          <form class="delete" action="{{ route('tau.destroy', $tau->id) }}" method="POST">
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