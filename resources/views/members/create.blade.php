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
      <li class="active"><i class="fa fa-files-o"></i> Tambah Buku </li>
    </ol> 
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row" id="field_detail">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Tambah Buku</b></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <br>
            <br>
          </div>
         {{--    @include('admin.templates.partials._alert') --}}

          <!-- /.box-header -->
          <div class="box-body" style="margin-right: 30%; ">         
         	{!! Form::open(['url' => route('members.store'),
         	'method' => 'post','files'=>'true', 'class'=>'form-horizontal']) !!}
         	@include('members._form')
         	{!! Form::close() !!}
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
