@extends('admin.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container float-right">
        @if(Auth::user()->hasAnyRole('admin'))
        <div class="row text-center">
            <div class="col-xl-5 col-md-6 mb-6">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Investasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Paket</div>
                            </div>
                            <div class="col-auto">
                                <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                <a href="{{url('paket')}}">
                                    <i class="fas fa-archive fa-2x text-gray-300"></i>
                                </a>

                                <!-- <i class="fas fa-hand-holding-heart fa-2x text-gray-300"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 mb-6">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Task`</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Transaksi</div>
                            </div>
                            <div class="col-auto">

                                <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                                <a href="{{url('transaksi')}}">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hasil</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Bagi Hasil</div>
                            </div>
                            <div class="col-auto">
                                <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                                <a href="/maintenance">
                                    <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Profile</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Manage User</div>
                            </div>
                            <div class="col-auto">
                                <a href="maintenance">
                                    <i class="fas fa-cogs fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Data Barang</div>
                            </div>
                            <div class="col-auto">

                                <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                                <a href="/task">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Monitor</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Monitoring Lahan</div>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('monitor')}}">
                                    <i class="fas fa-tv fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endif
        @if(Auth::user()->hasAnyRole('pengawas'))
        <div class="row text-center">
            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Barang Investasi</div>
                            </div>
                            <div class="col-auto">
                                <a href="/task">
                                    <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 mb-6 mt-3">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Monitor</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Monitoring Lahan</div>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('monitor')}}">
                                    <i class="fas fa-tv fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        @endif
    </div>

</div>
@endsection