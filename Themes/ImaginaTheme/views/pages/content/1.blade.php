<div class="home page page-{{$page->id}}" data-icontenttype="page" data-icontentid="{{$page->id}}">
    <div class="container">
        <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="servicesCarousel"
                    repository="Modules\Slider\Repositories\SlideRepository"
                    :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>1]]"
                    :margin="10"
                    itemLayout="item-list-layout-1"
                    :withSummary="false"
                    :withTitle="false"
                    :withViewMoreButton="true"
                    :autoplay="true"
                    :dots="false"
                    :loop="true"
                    mediaImage="slideimage"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  1], 1024 => ['items' => 1]]"/>
        </div>
        <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="Service2Carousel"
                    repository="Modules\Slider\Repositories\SlideRepository"
                    :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>8]]"
                    :margin="4"
                    itemLayout="item-list-layout-1"
                    :withSummary="false"
                    :withViewMoreButton="true"
                    :autoplay="true"
                    :dots="false"
                    :loop="true"
                    title="Nuestros"
                    subTitle="Productos"
                    mediaImage="slideimage"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  3], 1024 => ['items' => 3]]"/>
        </div>
        <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="Service3Carousel"
                    repository="Modules\Slider\Repositories\SlideRepository"
                    :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>9]]"
                    :margin="4"
                    itemLayout="item-list-layout-1"
                    :withSummary="true"
                    :withViewMoreButton="true"
                    :autoplay="false"
                    :dots="false"
                    :loop="true"
                    title="Noticias"
                    subTitle="Informacion de tu Interes"
                    mediaImage="slideimage"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  4], 1024 => ['items' => 4]]"/>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>

