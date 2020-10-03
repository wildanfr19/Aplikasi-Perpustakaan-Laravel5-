{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $edit_url }}" class="btn btn-xs btn-success" title="Ubah" ><i class="glyphicon glyphicon-edit"></i></a>
<button type="submit" class="btn btn-xs btn-warning" title="Hapus"><i class="glyphicon glyphicon-trash"></i></button>
{!! Form::close()!!}