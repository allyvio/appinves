@include('layouts._header')

@include('layouts._contact')
@include('layouts._navbar')
<!-- END nav -->


<section class="ftco-section">
	<form action="{{route('investasi.store')}}" method="POST" enctype="multipart/form-data" class="billing-form">
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">
					<h3 class="mb-4 billing-heading">Detail Paket Investasi</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="nama_paket">Nama Paket</label>
								<input name="nama_paket" type="text" class="form-control form-control-user @error('nama_paket') is-invalid @enderror" placeholder="">
								@error('nama_paket') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea name="deskripsi" id="" cols="30" rows="7" class="form-control form-control-user @error('deskripsi') is-invalid @enderror"></textarea>
								@error('deskripsi') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="modal">Modal</label>
								<input type="text" name="modal" class="form-control form-control-user @error('modal') is-invalid @enderror">
								@error('modal') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="luas_lahan">Luas Lahan</label>
								<input type="text" name="luas_lahan" class="form-control form-control-user @error('luas_lahan') is-invalid @enderror">
								@error('luas_lahan') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="profit">Profit</label>
								<input type="text" name="profit" class="form-control form-control-user @error('profit') is-invalid @enderror" placeholder="">
								@error('profit') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="waktu">Jangka Waktu Investasi</label>
								<input type="text" name="waktu" class="form-control form-control-user @error('waktu') is-invalid @enderror" placeholder="">
								@error('waktu') <div class="invalid-feedback">{{$message}}</div> @enderror
							</div>
						</div>
						<div class="w-100"></div>

					</div>
				</div>
				<div class="col-xl-5">
					<div class="row mt-5 pt-3">
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
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" name="foto" class="@error('foto') is-invalid @enderror custom-file-input" id="uploadImage" onchange="PreviewImage();">
											<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
											@error('foto') <div class="invalid-feedback">{{$message}}</div> @enderror
										</div>
									</div>
								</div>
								<p><a>
										<button type="submit" class="btn btn-primary py-3 px-4">
											Tambah
										</button>
									</a></p>
							</div>
						</div>
					</div>
				</div> <!-- .col-md-8 -->
			</div>
		</div>
	</form><!-- END -->
</section> <!-- .section -->





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