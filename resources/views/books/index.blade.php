@extends('layouts.master')


@section('content')
  <section class="content-header">
    <h1>
      Buku
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><i class="glyphicon glyphicon-info-sign"></i> Buku</li>
      <li class="active"><i class="fa fa-files-o"></i> Daftar Buku </li>
    </ol> 

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row" id="field_detail">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Daftar Buku</b></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <hr>
            <a class="btn btn-primary" href="{{ route('books.create') }}">
              <span class="fa fa-plus"></span> Tambah Buku
            </a>
            <a class="btn btn-warning" class="btn btn-warning" href="{{ url('/admin/export/books') }}"><i class="glyphicon glyphicon-export"></i> Export</a>

           {{--  <div class="box-body">
              
            </div> --}}
          </div>

         {{--    @include('admin.templates.partials._alert') --}}

          <!-- /.box-header -->
          <div class="box-body">
          @include('layouts._flash')         
        {{--  <table id="tblDetail" class="table table-striped table-condensed table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th style='width: 1%;text-align: center'>No</th>
                  <th style='width: 5%;text-align: center'>Name</th> 
                 {{--  <th style='width: 2%;text-align: center'>Action</th> --}}
       {{--          </tr>
              </thead>
              <tbody> --}} 
              {!! $html->table(['class'=>'table-bordered']) !!}
             {{--  </tbody>
            </table>   --}}    
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection