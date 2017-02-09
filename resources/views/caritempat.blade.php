@extends('layouts.app')
@section('content')
<!-- Search
================================================== -->
<section class="search margin-bottom-50">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Title -->
			<h3 class="search-title">Cari Tempat Untuk Belajar</h3>

			<!-- Form -->
			<div class="main-search-box no-shadow">
				<form>

				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Main Search Input -->
					<div class="col-md-12">
						<div class="main-search-input">
							<input type="text" placeholder="Masukan nama atau alamat tempat" value="" name="cari" />
							<button class="button">Cari</button>
						</div>
					</div>
				</div>

			</div>

		</form>
			<!-- Box / End -->
		</div>
	</div>
</div>
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
					</div>
				</div>
			</div>


			<!-- Listings -->

			<div class="listings-container grid-layout-three">

				<!-- Listing Item -->
				@foreach($data as $key => $value)
				<div class="listing-item">

					<a href="{{ url('detailtempat/'.$value->id) }}" class="listing-img-container">

						<div class="listing-img-content">
							<span class="listing-price">{{$value->tarif}}&nbsp;IDR <i>Perjam</i></span>
						</div>

						<div class="listing-carousel">
							<div><img src="{{ url('picture/'.$value->foto) }}" alt=""></div>
						</div>
					</a>


					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="{{ url('detailtempat/'.$value->id) }}">{{ $value->nama }}</a></h4>
							<h5><a href="#" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								{{$value->lokasi}}
							</a></h5>
							<a href="#" class="listing-address popup-gmaps">
								<i class="fa fa-map-signs"></i>
								{{ $value->alamat }}
							</a></h5>

							<a href="{{ url('detailtempat/'.$value->id) }}" class="details button border">Details</a>
						</div>

						<!-- <ul class="listing-details">
							<li>{{$value->deskripsi}}</li>
						</ul> -->

						<!-- <div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> David Strozier</a>
							<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
						</div> -->

					</div>

				</div>
				@endforeach
			</div>

				<!-- Listing Item / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<!-- <nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav> -->
				{{ $data->render('vendor.pagination.bootstrap-4') }}
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>
@endsection
