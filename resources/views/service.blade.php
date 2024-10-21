<!-- Begin Services -->
<section id="services-section" class="page">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h1>Services</h1>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin services -->

    @foreach ($dataService as $item)
        @if ($loop->iteration % 2 == 0)
            {{-- ini buat dari kiri ke kanan --}}
            <div class="product wow fadeInLeft" data-wow-delay="0.4s">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Gambar untuk mobile (disembunyikan di desktop) -->
                        <div class="col-md-6 text-center visible-sm visible-xs">
                            <img class="image-product" src="{{ asset('assets/img/service/' . $item->image) }}"
                                alt="">
                        </div>

                        <div class="col-md-6">
                            <div class="product-form">
                                <h2>{{ $item->title }}</h2>
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>

                        <!-- Gambar untuk desktop (disembunyikan di mobile) -->
                        <div class="col-md-6 text-center hidden-sm hidden-xs">
                            <img class="image-product" src="{{ asset('assets/img/service/' . $item->image) }}"
                                alt="">
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div>
        @else
            {{-- ini buat dari kanan ke kiri --}}
            <div class="product wow fadeInRight" data-wow-delay="0.4s">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img class="image-product" src="{{ asset('assets/img/service/' . $item->image) }}"
                                alt="">
                        </div>

                        <div class="col-md-6">
                            <div class="product-form">
                                <h2>{{ $item->title }}</h2>
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div>
        @endif
    @endforeach
    <!-- End Services -->
</section>
