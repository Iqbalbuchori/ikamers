@extends('layout')
@section('content')

	<section id="cart_items">
		<div class="container">
		<div class="col-sm-8">    			   			
					<h2 class="title text-center">Pendaftaran  <strong>Penjual atau Seller</strong></h2>    			    				    				
		</div>
			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="bill-to">

	<form class="form-horizontal" action="{{ route('save.penjual') }}" method="post" 
			enctype="multipart/form-data">
        <div class="control-group">
            <label class="control-label" for="date01">Nama Toko</label>
            <div class="controls">
            <input type="text" class="form-control input-xlarge" name="nama_toko" required="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" class="form-control input-xlarge" name="customer_id" value="{{ Session::get('customer_id') }}" required="">
            </div>
        </div>
        <div class="control-group hidden-phone">
            <label class="control-label" for="textarea2">Description Toko</label>
            <div class="controls">
            <textarea class="cleditor" name="description_toko" rows="3" required=""></textarea>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>	
    </form>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

@endsection