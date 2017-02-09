@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<!-- <a href="listings-list-with-sidebar.html" class="back-to-listings"></a> -->
				<div class="property-title">
					<h2> {{ $data->nama }}</h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{ $data->alamat }}, {{ $data->lokasi }}
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div>{{ $data->tarif }} IDR</div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">

			<!-- Slider -->
			<div class="property-slider default">
				<a href="{{ url('picture/'.$data->foto) }}" data-background-image="{{ url('picture/'.$data->foto) }}" class="item mfp-gallery"></a>
	</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Luas Tempat <span>{{ $data->luas }} m²</span></li>
					<li>Jam Pemakaian <span>{{$data->waktu_pemakaian}} - {{$data->max_waktupemakaian}}</span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Deskripsi</h3>
				<div class="show-more">
					<p> {{ $data->deskripsi }}</p>

					<a href="#" class="show-more-button">Lihat Lebih <i class="fa fa-angle-down"></i></a>
				</div>

				<h3 class="desc-headline">Fasilitas yang disediakan</h3>
				<ul class="property-features checkboxes margin-top-0">
					@foreach($data->fasilitas_tempat as $value)
					<li>{{ $value->fasilitas->nama }}</li>
					@endforeach
				</ul>


				<!-- Location -->
				<!-- <h3 class="desc-headline no-border" id="location">Lokasi</h3> -->
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
					<!-- <a href="#" id="streetView">Street View</a> -->
				</div>
			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<!-- <div class="agent-photo"><img src="/images/agent-avatar.jpg" alt="" /></div>
							<div class="agent-details">

								<span><i class="sl sl-icon-call-in"></i>{{ $data->user->telepon }}</span>
							</div> -->
							<h4><a href="#">Pemesanan</a></h4>
							<div class="clearfix"></div>
						</div>
						@if(Entrust::hasRole('pelajar'))
						<form method="post">
							<input type="hidden" name="tempat_id" value="{{ $data->id }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="text" placeholder="Tanggal" name="tanggal">
							<input type="text" placeholder="Dari Jam" name="dari">
							<input type="text" placeholder="Sampai Jam" name="sampai">
							<button class="button fullwidth margin-top-5">Kirim Pemesanan</button>
						</form>
						@endif
						@if(Entrust::hasRole('pembimbing'))
						<form method="post">
							<input type="hidden" name="tempat_id" value="{{ $data->id }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="text" placeholder="Tanggal" name="tanggal">
							<input type="text" placeholder="Dari Jam" name="dari">
							<input type="text" placeholder="Sampai Jam" name="sampai">
							<button class="button fullwidth margin-top-5">Kirim Pemesanan</button>
						</form>
						@endif
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>
@endsection
