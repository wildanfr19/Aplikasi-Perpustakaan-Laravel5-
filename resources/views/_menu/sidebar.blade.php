<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
{{--     <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
     <li><a href="{{ route('home') == request()->url() ? 'active' : ''  }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
     @role('member')
     <li><a href="{{ url('/guest') == request()->url() ? 'active' : ''  }}"><i class="fa fa-dashboard"></i> <span>Pinjam Buku</span></a></li>
     @endrole
      
      @role('admin')
      <li><a href="{{ route('authors.index') == request()->url() ? 'active' : '' }}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
      <li><a href="{{ route('books.index') == request()->url() ? 'active' : ''  }}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
      <li><a href="{{ route('members.index') == request()->url() ? 'active' : '' }}"><i class="fa fa-users"></i> <span>Member</span></a></li>
      <li><a href="{{ route('statistics.index') == request()->url() ? 'active' : ''  }}"><i class="fa fa-file"></i>Peminjaman</a></li>
      @endrole
      @if (auth()->check())
      <li><a href="{{ url('/settings/profile') == request()->url() ? 'active' : ''  }}"><i class="glyphicon glyphicon-user"></i>Profil</a></li>
      @endif
     
     {{--  <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>