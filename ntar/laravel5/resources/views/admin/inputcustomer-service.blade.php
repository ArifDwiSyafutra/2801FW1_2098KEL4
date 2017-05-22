@extends('admin.adminlayout')
@section('title')Input Customer Service
@stop
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
						<h2><strong>Form</strong> Input Customer Service</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">

						<form class="form-horizontal" role="form" method="POST" action="{{ $url }}">
						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Akun</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="akun_id" name="akun_id">
								  <?php
       							  $akun = \App\Akun::all()->sortBy('id');
        						  foreach($akun as $akn)
      							  { ?> <option value="<?php echo $akn->id; ?>"><?php echo $akn->username." , ID : ".$akn->id; ?></option>
								 <?php  }  ?>
								</select>
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Telepon</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Tempat Lahir</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-3">
							  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-3">
								<div class="radio iradio">
								  <label>
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" checked>
									Pria
								  </label>
								</div>
								<div class="radio iradio">
								  <label>
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
									Wanita
								  </label>
								</div>
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="alamat" id="alamat"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">No KTP</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No KTP">
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
							  <input type="file" class="btn btn-default" id="photo_identitas" name="photo_identitas" title="Select Photo">
							</div>
						  </div>

						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="reset" style="float:right;" class="btn btn-warning">Reset</button>
						  <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-default">Submit</button>
						  
						</div>
						</form>
						</div>
						

@stop
@section('scripttambahan')
<script src="{{("assets/libs/jquery-datatables/js/jquery.dataTables.min.js")}}"></script>
	<script src="{{("assets/libs/jquery-datatables/js/dataTables.bootstrap.js")}}"></script>
	<script src="{{("assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js")}}"></script>
	<script src="{{("assets/js/pages/datatables.js")}}"></script>
	<script src="{{("assets/libs/bootstrap-select/bootstrap-select.min.js")}}"></script>
	<script src="{{("assets/libs/bootstrap-inputmask/inputmask.js")}}"></script>
	<script src="{{("assets/libs/summernote/summernote.js")}}"></script>
	<script src="{{("assets/js/pages/forms.js")}}"></script>
	<script src="{{("assets/js/pages/index.js")}}"></script>
	@stop