@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('/vege/images/sawit_2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        @foreach($data as $transaksi)
        @foreach($transaksi['paket'] as $paket)

        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <?php
                $province = DB::table('provinces')->where('id', $transaksi->provinsi_id)->get();
                $cities = DB::table('cities')->where('city_id', $transaksi->kota_id)->get();
                $provinsi = $province->all();
                $kota = $cities->all();

                foreach ($provinsi as $data) { }
                foreach ($kota as $data2) { }
                ?>
                <div class="info bg-white p-4">
                    <p>{{substr($transaksi->nama,0,20)}}..
                        <br>
                        {{$data->title}}-{{$data2->title}}
                        <br>
                        {{$transaksi->jalan}}
                    </p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p>
                        <span>Phone: </span>
                        {{$transaksi->phone}}
                        <br>
                        <span>Rekening: </span>
                        143-00-1855344-4
                        <br>
                        <span>Bank: </span>
                        Mandiri
                        <br>
                        <!-- <span>Email:</span> -->
                        {{$transaksi->email}}
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span></span>{{$paket->nama_paket}}
                        <br>
                        Rp {{number_format($paket->modal,0)}}
                        <br>
                        {{$paket->waktu}} Tahun
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <!-- <a><span>Website</span> <a href="#">yoursite.com</a></p> -->
                    <a class="img-prod">
                        <p><span>Bukti Transfer</span></p>
                        <img class="img-fluid" src="{{asset('storage/'.  $transaksi->bukti_tf)}}">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>

                    </a>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
        <div class="row block-9">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th><span class="ion-ios-settings"></span></th>
                                <th>Image</th>
                                <th>Paket</th>
                                <th>Modal</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">

                                <td><a href="#"><span class="ion-ios-settings"><span></a></td>
                                <td class="image-prod">
                                    <div class="img" style="background-image:url('{{asset('storage/')}}');"></div>
                                </td>

                                <td class="product-name">
                                    <h3>Lorem Ipsum</h3>
                                    <p>Lorem Ipsum</p>
                                </td>

                                <td class="price">Rp Lorem Ipsum</td>

                                <td class="price">
                                    <span class="badge badge-success">Lorem Ipsum</span>
                                    <!-- <span class="badge badged-success"></span> -->
                                </td>



                                <td class="total">Lorem Ipsum</td>
                            </tr><!-- END TR-->
                        </tbody>
                    </table>
                </div>
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