@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->


<section class="ftco-section">
	<form action="{{url('store')}}" method="POST" class="billing-form">
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">

					<h3 class="mb-4 billing-heading">Detail Pemesanan</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" placeholder="">
								@error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
							<div class="form-group">
								<!-- <label for="firstname">Firt Name</label> -->
								<input type="hidden" name="id_paket" class="form-control" value="{{$data->id}}">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="towncity">No. KTP</label>
								<input type="text" name="ktp" class="form-control form-control-user @error('ktp') is-invalid @enderror" placeholder="">
								@error('ktp') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="country">Provinsi</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="province_destination" id="" class="form-control form-control-user @error('province_destination') is-invalid @enderror">
										<option value="">Provinsi</option>
										@foreach ($provinces as $province => $value)
										<option value="{{$province}}">{{$value}}</option>
										@endforeach
									</select>
									@error('province_destination') <div class="invalid-feedback">{{$message}}</div> @enderror
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="country">Kota</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="city_destination" id="" class="form-control form-control-user @error('city_destination') is-invalid @enderror">
										<option>Kota</option>
									</select>
									@error('city_destination') <div class="invalid-feedback">{{$message}}</div> @enderror
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="streetaddress">Street Address</label>
								<input type="text" name="jalan" class="form-control form-control-user @error('jalan') is-invalid @enderror" placeholder="House number and street name">
								@error('jalan') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" name="phone" class="form-control form-control-user @error('phone') is-invalid @enderror" placeholder="">
								@error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="emailaddress">Email Address</label>
								<input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="">
								@error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
					</div>

				</div>
				<div class="col-xl-5">
					<div class="row mt-5 pt-3">
						<div class="col-md-12 d-flex mb-5">
							<div class="cart-detail cart-total p-3 p-md-4">
								<h3 class="billing-heading mb-4">Total Pembayaran</h3>
								<p class="d-flex">
									<span>Modal</span>
									<span>Rp. {{number_format($data->modal, 0)}}</span>
								</p>
								<p class="d-flex">
									<span>Discount</span>
									<span>Rp. {{number_format(0,0)}}</span>
								</p>
								<hr>
								<p class="d-flex total-price">
									<span>Total</span>
									<span>Rp. {{number_format($data->modal, 0)}}</span>
								</p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="cart-detail p-3 p-md-4">
								<h3 class="billing-heading mb-4">Detail Pemesanan</h3>
								<div class="cart-detail cart-total p-3 p-md-4">
									<!-- <h3 class="billing-heading mb-4">Total Pembayaran</h3> -->
									<p class="d-flex">
										<span>Paket</span>
										<span>{{$data->nama_paket}}</span>
									</p>
									<p class="d-flex">
										<span>Jangka Waktu</span>
										<span>{{$data->waktu}} Tahun</span>
									</p>
									<p class="d-flex">
										<span>Profit</span>
										<span>{{$data->profit}}%</span>
									</p>
								</div>
								<!-- <div class="form-group">
									<div class="col-md-12">
										<div class="checkbox">
											<input type="text" name="cekbox" class="form-control form-control-user @error('cekbox') is-invalid @enderror" placeholder="">
											@error('cekbox') <div class="invalid-feedback">{{$message}}</div> @enderror

											<a href="">Baca peraturan</a>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input @error('cekbok') is-invalid @enderror" type="checkbox" name="cekbok" value="1" id="defaultCheck1">
										<label for="">Saya telah membaca dan menyetujui syarat dan ketentuan</label>
										<a href="/pdf" target="_blank">Syarat dan ketentuan</a>
										@error('cekbok') <div class="invalid-feedback">{{$message}}</div> @enderror
									</div>
								</div>

								<button type="submit" class="btn btn-primary py-3 px-4">
									Pesan
								</button>
								<!-- <a><a href="#" class="btn btn-primary py-3 px-4">Pesan</a></p> -->
							</div>
						</div>
					</div>
				</div> <!-- .col-md-8 -->
			</div>
		</div>
	</form><!-- END -->
</section> <!-- .section -->

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
	<div class="container py-4">
		<div class="row d-flex justify-content-center py-5">
			<div class="col-md-6">
				<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
				<span>Get e-mail updates about our latest shops and special offers</span>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<form action="#" class="subscribe-form">
					<div class="form-group d-flex">
						<input type="text" class="form-control" placeholder="Enter email address">
						<input type="submit" value="Subscribe" class="submit px-3">
					</div>
				</form>
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

<script>
	$(document).ready(function() {
		$('select[name="province_destination"]').on('change', function() {
			let provinceId = $(this).val();
			if (provinceId) {
				jQuery.ajax({
					url: "{{url('province')}}" + '/' + provinceId + '/cities',
					type: "GET",
					dataType: "json",
					success: function(data) {
						$('select[name="city_destination"]').empty();
						$.each(data, function(key, value) {
							$('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option> ');
						});
					},
				});
			} else {
				$('select[name="city_destination"]').empty();
			}
		});
	});
</script>

<script>
	window.onload = function() {
		window.open("/pdf", "_blank"); // will your open new tab on load window.onload
	}
</script>

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