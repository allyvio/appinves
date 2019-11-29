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

@include('layouts._navbar')
<!-- END nav -->

<section class="ftco-section">
    @foreach($data as $monitor)
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/product-1.jpg" class="image-popup"><img src="{{asset('storage/'.$monitor->foto)}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$monitor->tanaman}}</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <!-- <a href="#" class="mr-2">5.0</a> -->
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
                <p class="price"><span>{{$monitor->proses}}</span></p>
                <p>
                    <span class="badge badge-dark">Status</span>
                    <br>
                    {{$monitor->penyakit}}
                    <br>
                    {{$monitor->kondisi_tumbuhan}}
                    <br>
                    {{$monitor->kondisi_lahan}}
                    <br>
                    {{$monitor->kondisi_hama}}
                </p>
                <span class="badge badge-dark">Keterangan</span>
                <br>
                {{$monitor->keterangan}}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>


@include('layouts._footer')



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