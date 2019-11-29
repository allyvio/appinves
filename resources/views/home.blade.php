@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->

<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(vege/images/sawit_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
						<h1 class="mb-2">Sikawi investasi aman &amp; berprofit</h1>
						<h2 class="subheading mb-4">Pelayanan terbaik &amp; terpercaya</h2>
						<p><a href="#" class="btn btn-primary">View Details</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(vege/images/img/ppl1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
						<h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
						<p><a href="#" class="btn btn-primary">View Details</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-box"></span>

						<!-- <i class="fas fa-images"></i> -->
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<span>On order over $100</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-salad"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Always Fresh</h3>
						<span>Product well package</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-award"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<span>Quality Products</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support</h3>
						<span>24/7 Support</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last align-items-stretch d-flex">
						<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(vege/images/sikawi1.jpg);">
							<div class="text text-center">
								<h2>Sikawi Unej</h2>
								<p>Playanan Investasi Tebaik</p>
								<p><a href="/maintenance" class="btn btn-primary">Join Now</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(vege/images/img/ppl2.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Benih</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(vege/images/img/ppl3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Peralatan</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(vege/images/img/ppl7.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Lahan</a></h2>
					</div>
				</div>
				<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(vege/images/img/ppl4.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Hasil</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Featured Products</span>
				<h2 class="mb-4">Our Products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			@foreach ($paket as $data)
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a class="img-prod">
						@if ($data->foto)
						<img class="img-fluid" src="{{asset('storage/'.  $data->foto)}}">
						<!-- <span class="status">30%</span> -->
						<div class="overlay"></div>
						@endif
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a>{{$data->nama_paket}}</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<!-- <p class="price"><span class="mr-2 price-dc">Rp. {{$data->modal}}</span> -->
								<span class="price-sale">Rp. {{number_format($data->modal, 0)}}</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(vege/images/bg_3.jpg);">
	<div class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="1000">0</strong>
								<span>Mitra/Pelanggan</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="2590">0</strong>
								<span>Transaction</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="100">0</strong>
								<span>Partner</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="100">0</strong>
								<span>Awards</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">How About investation?</span>
				<h2 class="mb-4">Pendapat tentang investasi digital</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vege/images/img/vio.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">"Kecanggihan teknologi pada masa kini memberikan peluang besar bagi masyarakat untuk terjun pada investasi digital".</p>
								<p class="name">Allyvio Yonim Mahardhika</p>
								<span class="position">Developer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vege/images/img/sri.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">"Presiden minta semua yang ada di kabinet, semua menteri, fokus soal investasi. Kita juga diminta perbaiki biroktasi".</p>
								<p class="name">Sri Mulyani Indrawati</p>
								<span class="position">Menteri Keuangan</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vege/images/img/joko.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">"Kita harus bisa lebih cepat lagi, karena kompetitor kita berlomba berbenah dengan tawaran yang lebih menarik berinvestasi"</p>
								<p class="name">Ir. Joko Widodo</p>
								<span class="position">Presiden RI</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<hr>

<section class="ftco-section ftco-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{asset('vege/images/partner-1.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{asset('vege/images/partner-2.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{asset('vege/images/partner-3.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{asset('vege/images/partner-4.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<div class="col-sm ftco-animate">
				<a href="#" class="partner"><img src="{{asset('vege/images/partner-5.png')}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
		</div>
	</div>
</section>


@include('layouts._footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

@include('layouts._script')

</body>

</html>