
@extends('layouts.master')


@section('content')


<!-- Main content -->
<section class="content">
  <div class="row" id="field_detail">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Dashboard</b></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>
      
           {{--  <div class="box-body">
              
           </div> --}}
         </div>

         {{--    @include('admin.templates.partials._alert') --}}

         <!-- /.box-header -->

         <div class="box-body">
          Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang diinginkan.
          <br>
          <br>
          <br>
          <canvas id="chartPenulis" width="400" height="150"></canvas>
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
 <script>
  var data = {
    labels: {!! json_encode($authors) !!},
    datasets: [{
      label: 'Jumlah buku',
      data: {!! json_encode($books) !!},
      backgroundColor: "rgba(151,187,205,0.5)",
      borderColor: "rgba(151,187,205,0.8)",
    }]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true,
          stepSize: 1
        }
      }]
    }
  };
  var ctx = document.getElementById("chartPenulis").getContext("2d");
  var authorChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
</script>
  @endsection
