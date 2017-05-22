@extends('welcome')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('jenis_pengiriman') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data jenis_pengiriman</strong>
	</div>
	{!! Form::model($jenis_pengiriman,['url'=>'jenis_pengiriman/edit/'.$jenis_pengiriman->id,'class'=>'form-horizontal']) !!}
	@include('jenis_pengiriman.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop