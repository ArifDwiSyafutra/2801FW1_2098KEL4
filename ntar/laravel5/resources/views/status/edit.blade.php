@extends('master')
@section('konten')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('status') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data status</strong>
	</div>
	{!! Form::model($status,['url'=>'status/edit/'.$status->id,'class'=>'form-horizontal']) !!}
	@include('status.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop