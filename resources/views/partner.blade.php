<!-- Begin partners -->
<section id="partners-section" class="page bg-style1">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Our Partners</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->
    <div class="container">
        <div id="owl-partners" class="owl-carousel">
            @foreach ($dataPartner as $item)
                <a href="{!! $item->link !!}" target="_blank">
                    <img src="{{ asset('assets/img/partners/' . $item->image) }}" alt="img">
                </a>
            @endforeach
        </div>
    </div>
</section>
<!-- End partners -->
