@extends('layouts.master')
@section('content')

<div class="col-xs-12">
    <div class="row">
    
       
    </div>
    <div class="hr hr32 hr-dotted"></div>

    <div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Role Management</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('role-create')
	            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
	            @endpermission
	        </div>
	    </div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
			<table id="simple-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>{{ __('main.name') }}</th>
						<th>{{ __('main.description') }}</th>
						<th width="280px">Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($roles as $key => $role)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $role->display_name }}</td>
							<td>{{ $role->description }}</td>
							<td>
								<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
								@permission('role-edit')
								
								<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
								@endpermission
								@permission('role-delete')
								{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
					            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					        	{!! Form::close() !!}
					        	@endpermission
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
			{!! $roles->render() !!}
		</div><!-- /.span -->
	</div><!-- /.row -->
</div>
@endsection
