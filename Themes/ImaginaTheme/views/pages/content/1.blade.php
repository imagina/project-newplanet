<div class="home page page-{{$page->id}}" data-icontenttype="page" data-icontentid="{{$page->id}}">
    <div class="container">
        <div class="col-md-12">
            <x-slider::slider.owl
                    id="1"
                    :autoplayTimeout="3000"
                    :margin="0"
                    dotsStyle="circle"
                    :autoplay="true"
                    :nav="true" />
                   </div>
        <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="servicesppCarousel"
                    repository="Modules\Iblog\Repositories\PostRepository"
                    :params="['take' => 8,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'categories' =>[10]]]"
                    :margin="10"
                    itemLayout="item-list-layout-1"
                    :withSummary="false"
                    :withViewMoreButton="true"
                    :autoplay="true"
                    :dots="false"
                    :loop="true"
                    title="Nuestros"
                    subTitle="Productos"
                    :navText="['<i class=\'fa fa-angle-left\'></i>','<i class=\'fa fa fa-angle-right\'></i>']"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 3]]"/>
        </div>
        <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="servicesp1Carousel"
                    repository="Modules\Iblog\Repositories\PostRepository"
                    :params="['take' => 8,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'categories' =>[11]]]"
                    :margin="10"
                    itemLayout="item-list-layout-1"
                    :withSummary="false"
                    :withViewMoreButton="true"
                    :autoplay="false"
                    :dots="false"
                    :loop="true"
                    title="Noticias"
                    subTitle="Informacion de tu Interes"
                    :navText="['<i class=\'fa fa-angle-left\'></i>','<i class=\'fa fa fa-angle-right\'></i>']"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 4]]"/>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>

