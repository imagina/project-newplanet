{{--Category Products--}}
<div id="servicesppCarousel">
    <div class="py-5">
        <x-isite::carousel.owl-carousel id="servicesppCarousel"
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
            :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 3]]" />
    </div>
</div>
