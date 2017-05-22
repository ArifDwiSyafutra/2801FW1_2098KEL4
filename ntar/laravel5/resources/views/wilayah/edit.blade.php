@extends('master')
@section('konten')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('wilayah') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data wilayah</strong>
	</div>
	{!! Form::model($wilayah,['url'=>'wilayah/edit/'.$wilayah->id,'class'=>'form-horizontal']) !!}
	@include('wilayah.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop