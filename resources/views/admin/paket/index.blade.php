@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('vege/images/sawit_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Paket Investasi</span>
                </p>
                <h1 class="mb-0 bread">Investasi</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-right">
                <ul class="product-category">
                    <li><a href="{{route('investasi.create')}}" class="active">Tambah</a></li>
                    <li>
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span>
                                    <button class="btn text-dark icon ion-ios-search"></button>
                                </span>
                                <!-- <button class="btn btn-primary"></button> -->
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
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
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
@include('layouts._script')

</body>

</html>