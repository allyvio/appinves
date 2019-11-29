@include('layouts._header')

@include('layouts._contact')
@include('layouts._navbar')
<!-- END nav -->

@if(Auth::user()->hasAnyRole('pengawas'))
<section class="ftco-section">
    <form action="{{url('monitor/store')}}" method="POST" enctype="multipart/form-data" class="billing-form">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <h3 class="mb-4 billing-heading">Report Kondisi</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Tanaman</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="tanaman" id="" class="form-control form-control-user @error('tanaman') is-invalid @enderror">
                                        <option value="Tanaman Baru">Tanaman Baru</option>
                                        <option value="Tanaman Belum Menghasilkan">Tanaman Belum Menghasilkan</option>
                                        <option value="Tanaman Menghasilkan">Tanaman Menghasilkan</option>
                                    </select>
                                    <input type="hidden" name="transaksi_id" value="{{$data}}">
                                    @error('tanaman') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Proses</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="proses" id="" class="form-control form-control-user @error('proses') is-invalid @enderror">
                                        <option value="Pembibitan">Pembibitan</option>
                                        <option value="Penanaman">Penanaman</option>
                                        <option value="Panen">Panen</option>
                                    </select>
                                    @error('proses') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">penyakit</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="penyakit" id="" class="form-control form-control-user @error('penyakit') is-invalid @enderror">
                                        <option value="Tidak terdeteksi">Tidak terdeteksi</option>
                                        <option value="Terserang penyakit">Terserang penyakit</option>
                                    </select>
                                    @error('penyakit') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kondisi_tumbuhan">Kondisi Tumbuhan</label>
                                <textarea name="kondisi_tumbuhan" id="" cols="30" rows="7" class="form-control form-control-user @error('kondisi_tumbuhan') is-invalid @enderror"></textarea>
                                @error('kondisi_tumbuhan') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kondisi_lahan">Kondisi Lahan</label>
                                <textarea name="kondisi_lahan" id="" cols="30" rows="7" class="form-control form-control-user @error('kondisi_lahan') is-invalid @enderror"></textarea>
                                @error('kondisi_lahan') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <!-- <div class="w-100"></div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kondisi_hama">Kondisi Hama</label>
                                <textarea name="kondisi_hama" id="" cols="30" rows="7" class="form-control form-control-user @error('kondisi_hama') is-invalid @enderror"></textarea>
                                @error('kondisi_hama') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keterangan">Ketarangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="7" class="form-control form-control-user @error('keterangan') is-invalid @enderror"></textarea>
                                @error('keterangan') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>

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
@endif
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <!-- <th>Tes</th> -->
                                <th>&nbsp;</th>
                                <th>Foto</th>
                                <th>Status Tanam</th>
                                <th>Proses</th>
                                <th>Penyakit</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($barang as $item)
                            <tr class="text-center">
                                @if(Auth::user()->hasAnyRole('pengawas'))
                                <td class="product-remove"><a href="{{url('delete/'.$item->id)}}"><span class="ion-ios-trash"></span></a></td>
                                @endif
                                @if(Auth::user()->hasAnyRole('admin'))
                                <td></td>
                                @endif

                                <td class="image-prod">
                                    <div class="img" style="background-image:url({{asset('storage/'.  $item->foto)}});"></div>
                                </td>

                                <td class="product-name">
                                    <h3>{{$item->tanaman}}</h3>
                                    <!-- <p>Far far away, behind the word mountains, far from the countries</p> -->
                                </td>

                                <td class="price">
                                    {{$item->proses}}
                                </td>

                                <td class="quantity">
                                    {{$item->penyakit}}
                                </td>

                                <td class="total">{{ date('d M Y', $item->created_at->timestamp) }}
                                </td>

                                <td class="product-remove"><a href="{{url('lihat/'.$item->transaksi_id)}}"><span class="ion-ios-eye"></span></a></td>

                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>






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