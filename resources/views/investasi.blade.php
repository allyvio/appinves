@include('layouts._header')
@include('layouts._contact')

@include('layouts._navbar')
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('vege/images/sawit_2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Paket</span></p>
                <h1 class="mb-0 bread">Paket</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <div class="row">
                    @foreach($paket as $data)
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('storage/'.  $data->foto)}}');">
                            </a>
                            <div class="text d-block pl-md-4">
                                <div class="meta mb-3">
                                    <div><a href="#">{{ date('d M Y - H:i:s', $data->created_at->timestamp) }}
                                        </a></div>
                                    <!-- <div><a href="#">Admin</a></div> -->
                                    <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                </div>
                                <h3 class="heading">
                                    <a>{{$data->nama_paket}}</a>
                                    <br>
                                    <a>Rp. {{number_format($data->modal, 0)}}</a>
                                </h3>

                                <p>{{substr($data->deskripsi, 0, 100)}}[. .]</p>
                                <p>
                                    <a href="{{url('package', $data->id)}}" class="btn btn-primary py-2 px-3">Detail</a>
                                    <a href="{{url('komen', $data->id)}}" class="btn btn-primary py-2 px-3">Coment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <ul class="product-category float-left">
                    <li><a href="{{url('myinvestasi')}}" class="active">Investasi Saya</a></li>
                </ul>
                <div class="sidebar-box">

                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Vegetables <span>(12)</span></a></li>
                        <li><a href="#">Fruits <span>(22)</span></a></li>
                        <li><a href="#">Juice <span>(37)</span></a></li>
                        <li><a href="#">Dries <span>(42)</span></a></li>
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind
                                    texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">fruits</a>
                        <a href="#" class="tag-cloud-link">tomatoe</a>
                        <a href="#" class="tag-cloud-link">mango</a>
                        <a href="#" class="tag-cloud-link">apple</a>
                        <a href="#" class="tag-cloud-link">carrots</a>
                        <a href="#" class="tag-cloud-link">orange</a>
                        <a href="#" class="tag-cloud-link">pepper</a>
                        <a href="#" class="tag-cloud-link">eggplant</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
                        quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos
                        fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->

@include('layouts._footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


@include('layouts._script')
</body>

</html>