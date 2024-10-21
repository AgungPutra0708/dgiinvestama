<!-- Begin contact section -->
<section id="faq-section" class="page2 parallax" data-stellar-background-ratio="0.5">

    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>FAQ</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <div class="contact" data-wow-delay="0.4s">
        <!-- Dropdown Section -->
        <div class="container-fluid">
            @foreach ($dataFaq as $item)
                @php
                    // Generate a unique ID for each FAQ item
                    $faqId = 'faq-' . $loop->index;
                @endphp

                <div class="card card-faq wow bounceInRight">
                    <!-- Trigger for the collapse -->
                    <div class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse"
                        data-target="#{{ $faqId }}" aria-expanded="false" aria-controls="{{ $faqId }}">
                        <h3>{{ $item->title }}</h3>
                        <span class="caret"></span>
                    </div>

                    <!-- Collapsible content -->
                    <div id="{{ $faqId }}" class="collapse">
                        <ul style="padding: 15px;">
                            <li>
                                <p>{!! $item->description !!}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End contact section -->
