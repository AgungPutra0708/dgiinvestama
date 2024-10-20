<!-- Begin contact section -->
<section id="contact-section" class="page2 parallax" data-stellar-background-ratio="0.5">

    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Contacts</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <div class="contact wow bounceInRight" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                @foreach ($dataContact as $item)
                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h4>Our Address</h4>
                            <ul class="contact-address">
                                <li>
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    {{ $item->location }}
                                </li>
                                <li><i class="fa fa-phone"></i>&nbsp; {{ $item->phone }}</li>
                                <li><i class="fa fa-envelope"></i> {{ $item->email }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-form">
                            <h4>Our Location</h4>
                            <div style="width: 100%">
                                <iframe width="100%" height="300" frameborder="0" scrolling="yes" marginheight="0"
                                    marginwidth="0" src="{!! $item->link_maps !!}">
                                </iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
</section>
<!-- End contact section -->
