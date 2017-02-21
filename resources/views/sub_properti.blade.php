@extends('layouts.app')
@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Properti/Tempat</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		<!-- Section -->
		<form action="{{ url('seemore_tempat') }}" method="POST" enctype="multipart/form-data">
		<div class="submit-section">

			<!-- Title -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form">
				<h5>Judul properti <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" name='nama' id='nama' required/>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Area -->
				<div class="col-md-12">
					<h5>Luas Tempat</h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="m²" name='luas' id='luas'required>
					</div>
				</div>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-6">
					<h5>Tarif <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="IDR" name='tarif' id='tarif' required>
					</div>
				</div>

				<div class="col-md-6">
					<h5>Waktu Tarif <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Jam" name='waktu_tarif' id='waktu_tarif' required>
					</div>
				</div>


		</div>
		<!-- Section / End -->

		<!-- Row -->
		<h3>Waktu Pemakaian</h3>
		<div class="submit-section">
		<div class="row with-forms">
			<div class="col-md-6">

			<label>Dari Jam</label>
			<!-- <input placeholder="Dimulai dari jam" type="text" name='min_waktupemakaian' id='min_waktupemakaian'> -->

			<div class="input-append">
    		<input placeholder="Dari jam" type="time" name="waktu_pemakaian" id="waktu_pemakaian"  required></input>
  </div>

		</div>
		<div class="col-md-6">
			<label>Sampai Jam</label>
			<input placeholder="Sampai jam" type="time" name='max_waktupemakaian' id='max_waktupemakaian' required>
		</div>
</div>
	</div>
	<!-- Section / End -->
		<!-- Section -->

				<!-- Section -->
				<h3>Galeri</h3>
				<div class="submit-section">
					<div class="edit-profile-photo">
						<img src="" alt="" id="img-val">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Upload Photo</span>
							    <input type="file" class="upload" name="photo" id="img-input" />
							</div>
						</div>
					</div>
				</div>
				<!-- Section / End -->





		<!-- Section -->
		<h3>Lokasi</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-12">
					<h5>Pilih Provinsi <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name='lokasi' id='lokasi' required>
						<option label="blank"></option>
						<option value="aceh">Aceh</option>
						<option value="Sumut">Sumatera Utara</option>
						<option value="sumbar">Sumatera Barat</option>
						<option value="Riau">Riau</option>
						<option value="Jambi">Jambi</option>
						<option value="Sumsel">Sumatera Selatan</option>
						<option value="Bengkulu">Bengkulu</option>
						<option value="Lampung">Lampung</option>
						<option value="BaBel">Kep. Bangka Belitung</option>
						<option value="kepRiau">Kepulauan Riau</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Jabar">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jateng">Jawa Tengah</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jatim">Jawa Timur</option>
						<option value="Kalbar">Kalimantan Barat</option>
						<option value="Kalteng">Kalimantan Tengah</option>
						<option value="Kalsel">Kalimantan Selatan</option>
						<option value="Kaltim">Kalimantan Timur</option>
						<option value="Kaltra">Kalimantan Utara</option>
						<option value="Bali">Bali</option>
						<option value="NTT">Nusa Tenggara Timur</option>
						<option value="NTB">Nusa Tenggara Barat</option>
						<option value="Sulut">Sulawesi Utara</option>
						<option value="Sulteng">Sulawesi Tengah</option>
						<option value="Sulsel">Sulawesi Selatan</option>
						<option value="Sultengg">Sulawesi Tenggara</option>
						<option value="Sulbar">Sulawesi Barat</option>
						<option value="Gorontalo">Gorontalo</option>
						<option value="Maluku">Maluku</option>
						<option value="Maluku Utara">Maluku Utara</option>
						<option value="Papua">Papua</option>
						<option value="Papua Barat">Papua Barat</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->

			<div class="form">
				<h5>Alamat Tempat Lengkap</h5>
				<textarea class="WYSIWYG" name="alamat" cols="40" rows="3" id="alamat" spellcheck="true"  required></textarea>
			</div>
		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Informasi Detail</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Descripsi</h5>
				<textarea class="WYSIWYG" name="deskripsi" cols="40" rows="3" id="deskripsi" spellcheck="true"  required></textarea>
			</div>

			<!-- Checkboxes -->
			<h5 class="margin-top-30">Fitur Lain <span>(optional)</span></h5>
			<div class="checkboxes in-row margin-bottom-20">
				@foreach($fasilitas as $key => $value)

				<input id="check-{{$key}}" type="checkbox" name="fasilitas[]" value="{{$value->id}}">
				<label for="check-{{$key}}">{{$value->nama}}</label>

				@endforeach

			</div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->

		<div class="divider"></div>
		<button class="button preview margin-top-5">Buat <i class="fa fa-arrow-circle-right"></i></button>

		</div>
	</form>
	</div>
</div>
</div>
</div>
@endsection
