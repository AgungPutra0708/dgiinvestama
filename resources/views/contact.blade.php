<section id="contact-section" class="page parallax" data-stellar-background-ratio="0.5">

    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h1>Contacts</h1>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <div class="contact wow bounceInRight" data-wow-delay="0.4s">
        <div class="container-fluid">
            <div class="row">
                @foreach ($dataContact as $item)
                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h3>Our Address</h3>
                            <ul class="contact-address">
                                <li class="contact-item">
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    <p>{{ $item->location }}</p>
                                </li>
                                <li class="contact-item">
                                    <i class="fa fa-phone"></i>
                                    <p>{{ $item->phone }}</p>
                                </li>
                                <li class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <p>{{ $item->email }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-form">
                            <h3>Our Location</h3>
                            <div style="width: 100%">
                                <iframe width="100%" height="300" frameborder="0" scrolling="yes" marginheight="0"
                                    marginwidth="0" src="{!! $item->link_maps !!}"></iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div>
</section>
