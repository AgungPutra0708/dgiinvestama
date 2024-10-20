<!-- Begin about section -->
<section id="about-section" class="page bg-style1">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>About</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin rotate box-1 -->
    <div class="rotate-box-1-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($dataAbout as $item)
                    <div class="col-md-12">
                        <div class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                            <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                            <div class="rotate-box-info">
                                <h4>{{ $item->title }}</h4>
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- End rotate box-1 -->
</section>
<!-- End about section -->
