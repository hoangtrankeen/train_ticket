<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{  ucfirst(Auth::user()->name) }}<a style="font-weight: lighter;"> ({{Auth::user()->roles()->pluck('name')->first()}})</a></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header text-center">MAIN NAVIGATION</li>
      <li>
        <a href="{{route('users.index')}}">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Người dùng</span>
        </a>
      </li>
      <li>
        <a href="{{route('roles.index')}}">
          <i class="fa fa-lock" aria-hidden="true"></i> <span>Chức vụ</span>
        </a>
      </li>
      <li>
        <a href="{{route('permissions.index')}}">
          <i class="fa fa-shield" aria-hidden="true"></i> <span>Phân quyền</span>
        </a>
      </li>
      <li>
        <a href="{{route('tau.index')}}">
          <i class="fa fa-calendar"></i> <span>Tàu</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-th"></i> <span>Toa</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-bars" aria-hidden="true"></i> <span>Chỗ ngồi</span>
        </a>
      </li>
      <li>
        <a href="{{route('hanhtrinh.index')}}">
          <i class="fa fa-sitemap" aria-hidden="true"></i> <span>Hành Trình</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-sitemap" aria-hidden="true"></i> <span>Ga</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Vé</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fa fa-tags" aria-hidden="true"></i> <span>Khách</span>
        </a>
      </li>
       <li>
        <a href="">
          <i class="fa fa-tags" aria-hidden="true"></i> <span>Thống kê</span>
        </a>
      </li>
        <li>
        <a href="/dashboard/tracuu">
          <i class="fa fa-tags" aria-hidden="true"></i> <span>Tra Cứu</span>
        </a>
      </li>
        <li>
        <a href="/dashboard/datve">
          <i class="fa fa-tags" aria-hidden="true"></i> <span>Form Đặt Vé</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->