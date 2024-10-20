<!-- Begin text carousel intro section -->
<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5">

    @foreach ($dataHome as $item)
        <div class="container">
            <div class="caption text-center text-white" data-stellar-ratio="0.7">
                <p>{{ $item->top_title }}</p>
                <h1>{{ $item->center_title }}</h1>
                <p>{{ $item->bottom_title }}</p>
                <div class="extra-space-l"></div>
                <a class="btn btn-blank" href="#" target="_blank" role="button">Explore
                    Our Investments</a>
            </div> <!-- /.caption -->
        </div> <!-- /.container -->
    @endforeach

</section>
<!-- End text carousel intro section -->
