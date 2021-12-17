@if(count($post->gallery) > 0)
    <div class="gallery">
        <div class="owl-carousel owl-theme">
            @foreach($post->gallery as $image)

                <div class="item">

                    <a href="{{$image->path}}" data-fancybox="gallery">
                        <img src="{{$image->path}}" alt="Gallery Image">
                    </a>

                </div>

            @endforeach
        </div>
    </div>
@endif

@section('scripts')
    <script>
        $(document).ready(function(){
            var owl = $('.gallery .owl-carousel');

            owl.owlCarousel({
                margin: 0,
                loop: true,
                lazyContent: true,
                autoplay: true,
                nav: false,
                dots: true,
                autoplayHoverPause: true,
                navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });

        });
    </script>

    @parent

@stop