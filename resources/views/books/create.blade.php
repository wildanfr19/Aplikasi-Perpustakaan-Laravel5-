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
         <ul class="nav nav-tabs" role="tablist">
           <li role="presentation" class="active">
             <a href="#form" aria-controls="form" role="tab" data-toggle="tab">
               <i class="fa fa-pencil-square-o"></i> Isi Form
             </a>
           </li>
           <li role="presentation">
             <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
               <i class="fa fa-cloud-upload"></i> Upload Excel
             </a>
           </li>
         </ul>
         <br>
         <div class="tab-content">
           <div role="tabpanel" class="tab-pane active" id="form">
             {!! Form::open(['url' => route('books.store'),
             'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
             @include('books._form')
             {!! Form::close() !!}
           </div>
           <div role="tabpanel" class="tab-pane" id="upload">
             {!! Form::open(['url' => route('import.books'),
             'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
             @include('books._import')
             {!! Form::close() !!}
           </div>
         </div>
       </div>
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
