<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sikawi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('vege/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('vege/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('vege/css/aos.css')}}">

	<link rel="stylesheet" href="{{asset('vege/css/ionicons.min.css')}}">

	<link rel="stylesheet" href="{{asset('vege/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/jquery.timepicker.css')}}">


	<link rel="stylesheet" href="{{asset('vege/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('vege/css/style.css')}}">
</head>
@include('layouts._contact')

<!-- @include('layouts._navbar') -->
<!-- END nav -->

<section class="ftco-section">
	@foreach($data as $transaksi)
	@foreach($transaksi['paket'] as $paket)
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				@if($transaksi->bukti_tf == null)
				<a href="images/product-1.jpg" class="image-popup"><img src="{{asset('vege/images/img/nofile.png')}}" class="img-fluid" alt="Colorlib Template"></a>
				@endif
				@if($transaksi->bukti_tf != null)
				<a href="images/product-1.jpg" class="image-popup"><img src="{{asset('storage/'.  $transaksi->bukti_tf)}}" class="img-fluid" alt="Colorlib Template"></a>
				@endif
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3>{{$paket->nama_paket}}</h3>
				<div class="rating d-flex">
					<p class="text-left mr-4">
						<a href="#" class="mr-2">5.0</a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
					</p>
					<p class="text-left mr-4">
						<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
					</p>
					<p class="text-left">
						<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
					</p>
				</div>

				<p class="price"><span>Rp {{number_format($paket->modal,0)}}</span></p>
				<p>Informasi Transaksi</p>
				<ul>
					<li>{{$transaksi->nama}}</li>
					<li>{{$transaksi->ktp}}</li>
					<li>{{$transaksi->phone}}</li>
					<li>{{$transaksi->email}}</li>
				</ul>

				<p>
					<a href="{{url('verification/1/'.$transaksi->id)}}" class="btn btn-primary">Konfirmasi</a>
					<a href="{{url('verification/2/'.$transaksi->id)}}" class="btn btn-black">Tolak</a>
				</p>
				<!-- <a><a href="#" class="btn btn-danger py-3 px-5">Tolak</a></p> -->
			</div>
		</div>
	</div>
	@endforeach
	@endforeach
</section>





<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


@include('layouts._script')

<script>
	$(document).ready(function() {

		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>

</body>

</html>