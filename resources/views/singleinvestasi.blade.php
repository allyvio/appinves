@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->


<section class="ftco-section">
	<div class="billing-form">
		<div class="container">
			@foreach ($data as $transaksi)
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">
					<h3 class="mb-4 billing-heading">Detail Pemesanan</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="firstname">Nama Lengkap</label>
								<input disabled placeholder="{{$transaksi->nama}}" type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" placeholder="">
								@error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
							<div class="form-group">
								<!-- <label for="firstname">Firt Name</label> -->
								<input type="hidden" name="id_paket" class="form-control" value="#">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="towncity">No. KTP</label>
								<input disabled placeholder="{{$transaksi->ktp}}" type="text" name="ktp" class="form-control form-control-user @error('ktp') is-invalid @enderror">
								@error('ktp') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="towncity">Provinsi</label>
								<?php
								$province = DB::table('provinces')->where('id', $transaksi->provinsi_id)->get();
								$cities = DB::table('cities')->where('city_id', $transaksi->kota_id)->get();
								$provinsi = $province->all();
								$kota = $cities->all();

								foreach ($provinsi as $data) { }
								foreach ($kota as $data2) { }
								?>
								<input disabled placeholder="{{$data->title}}" type="text" name="ktp" class="form-control">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">kota</label>
								<input disabled placeholder="{{$data2->title}}" type="text" name="ktp" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">Jalan</label>
								<input disabled placeholder="{{$transaksi->jalan}}" type="text" name="ktp" class="form-control">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">Phone</label>
								<input disabled placeholder="{{$transaksi->phone}}" type="text" name="ktp" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">Email</label>
								<input disabled placeholder="{{$transaksi->email}}" type="text" name="ktp" class="form-control">
							</div>
						</div>
						<div class="w-100"></div>
					</div>

				</div>
				<div class="col-xl-5">
					<div class="row mt-5 pt-3">
						<div class="col-md-12 d-flex mb-0">
							<div class="cart-detail cart-total p-3 p-md-4">
								<h3 class="billing-heading mb-4">Pembayaran</h3>
								<p class="d-flex">
									<span>Rekening</span>
									<!-- <span class="badge badge-success">Success</span> -->
									<span>143-00-1855344-4</span>
								</p>
								<p class="d-flex">
									<span>Bank</span>
									<span>Mandiri</span>
								</p>
								<p class="d-flex">
									<span>An.</span>
									<span>Allyvio Yonim Mahardhika</span>
								</p>
							</div>
						</div>
					</div>
					<div class="row mt-0 pt-3">
						<div class="col-md-12 d-flex mb-5">
							<div class="cart-detail cart-total p-3 p-md-4">
								<div class="product">
									<a href="#" class="img-prod">
										<img class="img-fluid" id="uploadPreview">
										<!-- <img width="200" class="img-responsive mb-3" id="uploadPreview" /> <br> -->
										<!-- <span class="status">30%</span> -->
										<div class="overlay"></div>
									</a>
									<div class="text py-3 pb-4 px-3 text-center"></div>
								</div>

								<div class="form-group">
									<form action="/posttf" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="hidden" name="transaksi_id" value="{{$transaksi->id}}">
												<input type="file" name="foto" class="@error('foto') is-invalid @enderror custom-file-input" id="uploadImage" onchange="PreviewImage();">
												<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
												@error('foto') <div class="invalid-feedback">{{$message}}</div> @enderror
											</div>
										</div>
										<p>
											<a>
												<button type="submit" class="btn btn-primary py-3 px-4">Upload</button>
											</a>
										</p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .col-md-8 -->
			</div>
			@endforeach
		</div>
	</div><!-- END -->
</section> <!-- .section -->


@include('layouts._footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


@include('layouts._script')
<script type="text/javascript">
	function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
	};
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