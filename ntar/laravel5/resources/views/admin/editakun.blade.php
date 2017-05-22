@extends('admin.adminlayout')
@section('title')Edit Akun @stop
@section('styletambahan')
<!-- Extra CSS Libraries Start -->
                <link href="{{asset("assets/libs/jquery-datatables/css/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{asset("assets/css/style-responsive.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/bootstrap-select/bootstrap-select.min.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/summernote/summernote.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" />
        @stop
@section('body')
<!-- Error Message -->
@if($errors->has())
	<div class="alert alert-danger alert-dismissable">
	<div class="widget-header transparent">
	<button type="button" style="color:black;" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h2><strong>Ooops , Error !</strong> Fail To Input Data</h2>
</div>
		@foreach($errors->all() as $error)
		<li style="margin-left:20px;">{{ $error }}</li>
		@endforeach
	</div>
@endif
<!-- Error Message -->
<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>Edit</strong> Akun</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<form class="form-horizontal" role="form" method="POST" action="{{ $url }}">
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
							  <input value="{{$account->username}}" type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
							  <input value="{{$account->password}}" type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Re-Type Password</label>
							<div class="col-sm-10">
							  <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Retype Password">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
							  <input value="{{$account->nama}}" type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
							  <input value="{{$account->gambar}}" type="file" class="btn btn-default" id="gambar" name="gambar" title="Select Photo">
							</div>
						  </div>
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="reset" style="float:right;" class="btn btn-warning">Reset</button>
						  <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-success">Submit</button>
						  <a href="/admin/tabelakun" style="float:right;margin-right:20px;" class="btn btn-danger">I Changed My Mind !</a>
						  
						</div>
						</form>
						</div>
						

@stop
@section('scripttambahan')
<script src="{{asset("assets/libs/jquery-datatables/js/jquery.dataTables.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-datatables/js/dataTables.bootstrap.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js")}}"></script>
	<script src="{{asset("assets/js/pages/datatables.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-select/bootstrap-select.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-inputmask/inputmask.js")}}"></script>
	<script src="{{asset("assets/libs/summernote/summernote.js")}}"></script>
	<script src="{{asset("assets/js/pages/forms.js")}}"></script>
	<script src="{{asset("assets/js/pages/index.js")}}"></script>
	@stop