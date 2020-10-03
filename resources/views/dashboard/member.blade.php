@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-7 col-lg-offset-2" style="margin-top: 10px">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Dashboard</h2>
			</div>
			<div class="panel-body">
				Selamat datang di Larapus.
				@include('layouts._flash') 
				<table class="table">
					<tbody>
						<tr>
							<td class="text-muted">Buku dipinjam</td>
							<td>
								@if($borrowLogs->count() == 0)
								Tidak ada buku yg dipinjam
								@endif
								<ul>
									@foreach ($borrowLogs as $borrowLog)
									<li>
										{!! Form::open(['url' => route('member.books.return', $borrowLog->book_id),
											'method' => 'put',
											'class' => 'form-inline js-confirm',
											'data-confirm' => "Anda yakin hendak mengembalikan " . $borrowLog->book->title . "?"] ) !!}
										{{ $borrowLog->book->title }}
										{!! Form::submit('Kembalikan', ['class'=>'btn btn-xs btn-default']) !!}
										{!! Form::close() !!}
										{{ $borrowLog->book->title }}
									</li>
									@endforeach
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection