<!-- Begin testimonials -->
<section id="testimonial-section" class="page2 bg-style1">
    <div id="testimonial-trigger" class="testimonial parallax">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>Trusted by Leading Businesses</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
        <!-- End page header-->
        <div class="container">
            <div class="testimonial-inner center-block text-center">
                <div id="owl-testimonial" class="owl-carousel">
                    @foreach ($dataTesti as $item)
                        <div class="item">
                            <blockquote>
                                <p>{!! $item->testimoni !!}</p>
                                <footer>
                                    {{ $item->name }}
                                </footer>
                            </blockquote>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonials -->
