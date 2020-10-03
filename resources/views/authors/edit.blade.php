@extends('layouts.master')


@section('content')
  <section class="content-header">
    <h1>
    Penulis
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><i class="glyphicon glyphicon-info-sign"></i> Penulis</li>
      <li class="active"><i class="fa fa-files-o"></i> Daftar Penulis </li>
      <li class="active"><i class="fa fa-files-o"></i> Ubah Penulis </li>
    </ol> 
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row" id="field_detail">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Ubah Penulis</b></h3>
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
         	{!! Form::model($author, ['url' => route('authors.update', $author->id),
         	'method' => 'put', 'class'=>'form-horizontal']) !!}
         	@include('authors._form')
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
