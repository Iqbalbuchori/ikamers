@extends('layout')
@section('content')

	<section id="cart_items">
		<div class="container">
		<div class="col-sm-8">    			   			
					<h2 class="title text-center">My <strong>Profile</strong></h2>    			    				    				
		</div>
			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
						
							<p>Nama</p>
							<span class="pull-left">{{ Session::get('customer_name') }}</span><br>
							<p>E-mail</p>
							<span class="pull-left">{{ Session::get('customer_email') }}</span></li><br>
							<p>Mobile Number</p>
							<span class="pull-left">{{ Session::get('mobile_number') }}</span></li><br>
							<p>Status</p>
							<span class="pull-left">{{ status(Session::get('status')) }}</span></li><br>
							<?php $penjual = Session::get('status') ?>

							@if($penjual == 0)
							<p>Daftar Penjual</p>
							<a href="{{ route('daftar.penjual') }}" class="btn btn-success">Registrasi</a>
							@else
							<p>Halaman Dashboard</p>
							<a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a>
							@endif
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->



@endsection