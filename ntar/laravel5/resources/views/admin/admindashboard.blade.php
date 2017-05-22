@extends('admin.adminlayout')
@section('title')Dashboard
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
						<h2><strong>Form</strong> Input Pemesanan</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">

						<form class="form-horizontal" role="form" method="POST" >
						  <div class="form-group">
							<label class="col-sm-2 control-label">Petugas</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="petugas_id" name="petugas_id">
								 @foreach($petugas as ptg) 
      							 <option value="{{$ptg->id}}">{{$ptg->nama}} <?php echo " , ID : " ?> {{$ptg->id}}</option>
								 @endforeach
								</select>
							</div>
						  </div>
						
						  <div class="form-group">
							<label class="col-sm-2 control-label">Tujuan Awal</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="tujuan_awal" id="tujuan_awal"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tujuan Akhir</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="tujuan_akhir" id="tujuan_akhir"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Keterangan</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="keterangan" id="keterangan"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal</label>
							<div class="col-sm-3">
							  <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Total Biaya</label>
							
							<div class="col-xs-2">
							  <input type="text" class="form-control" id="angka1" name="angka1" onchange="OperasiPerhitungan();" placeholder="Masukan Jarak (Km)">
							</div>
							
							<label for="total_biaya" class="col-sm-2 control-label">Rp.</label>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="total_biaya" name="total_biaya" placeholder="Total Biaya">
							</div>
						  </div>

						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="reset" style="float:right;" class="btn btn-warning">Reset</button>
						  <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-default">Submit</button>
						  
						</div>
						</form>
						</div>


				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>Tabel</strong> Pesanan Masuk</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
							<br>								
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-1" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>ID</th>
									                <th>Nama</th>
									                <th>Alamat</th>
									                <th>Telepon</th>
									                <th>Tempat Lahir</th>
									                <th>Tanggal Lahir</th>
									                <th>Jenis Kelamin</th>
									                <th>No KTP</th>
									                <th>Photo</th>
									            </tr>
									        </thead>
									 
									        <tfoot>
									            <tr>
									                <th>ID</th>
									                <th>Nama</th>
									                <th>Alamat</th>
									                <th>Telepon</th>
									                <th>Tempat Lahir</th>
									                <th>Tanggal Lahir</th>
									                <th>Jenis Kelamin</th>
									                <th>No KTP</th>
									                <th>Photo</th>
									            </tr>
									        </tfoot>
									 
									        <tbody>
									        @foreach ($petugas as $ptg)
									            <tr>
									                <td>{{ptg->id}}</td>
									                <td>{{ptg->nama}}</td>
									                <td>{{ptg->alamat}}</td>
									                <td><span class="rounded-image topbar-profile-image"><img style="width:50px;height:50px;" src="{{asset(ptg->photo_identitas)}}"></span></td>
									            </tr>
									        @endforeach
									        </tbody>
									    </table>
									</form>
								</div>
							</div>
						</div>
					</div>
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

	<script language="javascript" >

function OperasiPerhitungan(){

A1 = document.getElementById("angka1").value;
A3 = parseFloat(A1) * 4000;
document.getElementById("total_biaya").value =A3;
}
</script>
	@stop