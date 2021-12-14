<div class="home page page-{{ $page->id }}" data-icontenttype="page" data-icontentid="{{ $page->id }}">

    @include('partials.slider-home')

    @include('partials.services-products-carousel')

    @include('partials.services-notices-carousel')

    <div class="container">
        <hr class="rounded">
    </div>

</div>
