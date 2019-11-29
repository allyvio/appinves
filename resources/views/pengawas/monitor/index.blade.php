@extends('admin.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-secondary text-light">
                <i class="fas fa-money-check-alt" aria-hidden="true"></i>
                <!-- <i class="fas fa-money-check-alt"></i> -->
                Monitoring
                <!-- <a href="" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a> -->
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <!-- PRODUCT -->
                @foreach($data as $transaksi)
                @foreach($transaksi['paket'] as $paket)

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="{{asset('storage/'.  $paket->foto)}}" alt="prewiew" width="120" height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>{{$paket->nama_paket}}</strong></h4>
                        <h4>
                            <!-- <small>Rp. {{number_format($paket->modal,0)}}</small> -->
                            <small>{{$transaksi->nama}}</small>
                            <br>
                            <p>
                                <span class="badge badge-success">{{$transaksi->status}}</span>
                                <!-- <span class="badge badge-success">Success</span> -->
                            </p>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <!-- <h6><strong>25.00 <span class="text-muted">x</span></strong></h6> -->
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <!-- <div class="quantity">
                                <input type="button" value="+" class="plus">
                                <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="-" class="minus">
                            </div> -->
                        </div>
                        <div class="col-2 col-sm-3 col-md-2 text-right">
                            <a href="{{url('monitor', $transaksi->id)}}" class="btn btn-outline-success btn-xs">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <hr>
                @endforeach
                @endforeach
                <!-- <hr> -->
                <!-- END PRODUCT -->
                <!-- PRODUCT -->
                <!-- <hr> -->
                <!-- END PRODUCT -->
                <!-- <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div> -->
            </div>
            <!-- <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-secondary pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>50.00€</b>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection