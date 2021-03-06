{{--Category Sponsors--}}
<div id="section-marcas-comerciales" class="py-5">
    <x-isite::carousel.owl-carousel
        id="carousel-sponsors"
        repository="Modules\Slider\Repositories\SlideRepository"
        :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>6]]"
        :margin="4"
        itemLayout="item-list-layout-1"
        :withSummary="false"
        :withViewMoreButton="false"
        :autoplay="false"
        :dots="false"
        :loop="false"
        title="Marcas"
        subTitle="Comerciales"
        mediaImage="slideimage"
        :navText="['<i class=\'fa fa-chevron-left\'></i>', '<i class=\'fa fa-chevron-right\'></i>']"
        :responsive="[300 => ['items' =>  1],700 => ['items' =>  3], 1024 => ['items' => 6]]"/>
</div>