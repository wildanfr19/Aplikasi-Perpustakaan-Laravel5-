@extends('layouts.master')
@section('content')

	<div class="row">
		<div class="col-md-6 col-lg-offset-2" style="margin-top: 10px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Daftar Buku</h2>
				</div>
				<div class="panel-body">
					@include('layouts._flash')
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
			</div>
		</div>
	</div>

@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection