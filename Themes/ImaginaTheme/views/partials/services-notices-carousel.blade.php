{{--Category Notices--}}
<div id="Servicio">
    <div class="py-5">
        <x-isite::carousel.owl-carousel id="servicesp1Carousel"
            repository="Modules\Iblog\Repositories\PostRepository"
            :params="['take' => 8,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'categories' =>[11]]]"
            :margin="10" 
            itemLayout="item-list-layout-1" 
            :withSummary="true" 
            :withViewMoreButton="true"
            :autoplay="false" 
            :dots="false" 
            :loop="true" 
            title="Noticias" 
            subTitle="Información de tu Interes"
            :navText="['<i class=\'fa fa-angle-left\'></i>','<i class=\'fa fa fa-angle-right\'></i>']"
            :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 4]]" />    
    </div>
</div>