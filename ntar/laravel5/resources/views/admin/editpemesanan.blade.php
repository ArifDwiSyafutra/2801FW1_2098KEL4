@extends('admin.adminlayout')
@section('title')Edit Pemesanan@stop
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
						<h2><strong>Edit</strong> Pemesanan</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<form class="form-horizontal" role="form" method="POST" action="{{ $url }}">
						 <div class="form-group">
							<label class="col-sm-2 control-label">Pelanggan</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="pelanggan_id" name="pelanggan_id">
								 @foreach($pelanggan as $plg)
      							 <option value="{{$plg->id}}">{{$plg->nama}} <?php echo " , ID : " ?> {{$plg->id}}</option>
								 @endforeach
								</select>
							</div>
						  </div>

						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Customers Service</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="customer_service_id" name="customer_service_id">
								  @foreach($customer_service as $cs)      							  
								  <option value="{{$cs->id}}">{{$cs->nama}}</option>
								  @endforeach
								</select>
							</div>
						  </div>

						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Kurir</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="kurir_id" name="kurir_id">
								  @foreach($kurir as $kr)
								  <option value="{{$kr->id}}">{{$kr->nama}}</option>
								  @endforeach
								</select>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tujuan Awal</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="tujuan_awal" id="tujuan_awal">{{$delivery->tujuan_awal}}</textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tujuan Akhir</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="tujuan_akhir" id="tujuan_akhir">{{$delivery->tujuan_akhir}}</textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Keterangan</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="keterangan" id="keterangan">{{$delivery->keterangan}}</textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal</label>
							<div class="col-sm-3">
							  <input value="{{$delivery->tanggal_pemesanan}}" type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Total Biaya</label>
							
							<div class="col-xs-2">
							  <input type="text" class="form-control" id="angka1" name="angka1" onchange="OperasiPerhitungan();" placeholder="Masukan Jarak (Km)">
							</div>
							
							<div class="col-xs-3">
							  <input value="{{$delivery->total_biaya}}" type="text" class="form-control" id="total_biaya" name="total_biaya" placeholder="Total Biaya">
							</div>
						  </div>
						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="reset" style="float:right;" class="btn btn-warning">Reset</button>
						  <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-success">Submit</button>
						  <a href="/admin/tabelpemesanan" style="float:right;margin-right:20px;" class="btn btn-danger">I Changed My Mind !</a>
						  
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
	<script language="javascript" >

function OperasiPerhitungan(){

A1 = document.getElementById("angka1").value;
A3 = parseFloat(A1) * 5000;
document.getElementById("total_biaya").value =A3;
}
</script>

	@stop