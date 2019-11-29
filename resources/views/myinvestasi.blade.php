@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('vege/images/sawit_2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Investasi</span></p>
                <h1 class="mb-0 bread">Investasi Saya</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
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
                            @foreach($data as $transaksi)
                            @foreach($transaksi['paket'] as $paket)
                            <tr class="text-center">

                                @if($transaksi->bukti_tf == null)
                                <td><a href="{{url('myinvestasi/'.$transaksi->id)}}"><span class="ion-ios-settings"><span></a></td>
                                @endif
                                @if ($transaksi->bukti_tf != null)
                                <td>
                                    <a href="{{url('barang',$transaksi->id)}}"><span class="ion-ios-folder"></span></a>
                                    <br>
                                    <a href="{{url('lihat',$transaksi->id)}}"><span class="ion-ios-eye"></span></a>
                                </td>

                                @endif
                                <td class="image-prod">
                                    <div class="img" style="background-image:url('{{asset('storage/'.  $paket->foto)}}');"></div>
                                    <!-- src="{{asset('storage/'.  $paket->foto)}}" -->
                                </td>

                                <td class="product-name">
                                    <h3>{{$paket->nama_paket}}</h3>
                                    <p>{{substr($paket->deskripsi, 0, 50)}}[. .]</p>
                                </td>

                                <td class="price">Rp {{number_format($paket->modal,0)}}</td>

                                <td class="price">
                                    <span class="badge badge-success">{{$transaksi->status}}</span>
                                    <!-- <span class="badge badged-success"></span> -->
                                </td>



                                <td class="total">{{ date('d M Y - H:i:s', $transaksi->created_at->timestamp) }}</td>
                            </tr><!-- END TR-->
                            @endforeach
                            @endforeach
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
<!-- END nav -->

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