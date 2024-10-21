<!-- Begin about section -->
<section id="about-section" class="page bg-style1">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h1>About</h1>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin rotate box-1 -->
    <div class="rotate-box-1-wrapper">
        <div class="container-fluid">
            <div class="row">
                @foreach ($dataAbout as $item)
                    <div class="col-lg-12">
                        <div class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                            <span class="rotate-box-icon">
                                <i class="fa fa-2x fa-users"></i>
                            </span>
                            <div class="rotate-box-info">
                                <h3>{{ $item->title }}</h3>
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div>
    <!-- End rotate box-1 -->
</section>
<!-- End about section -->
