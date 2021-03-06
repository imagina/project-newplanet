{{--Category Products--}}
<div id="section-nuestros-productos" class="pb-2">
    <x-isite::carousel.owl-carousel 
        id="carousel-us-products"
        repository="Modules\Iblog\Repositories\PostRepository"
        :params="['take' => 8,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'categories' =>[10]]]"
        :margin="20" 
        itemLayout="item-list-layout-1" 
        :withViewMoreButton="true"
        :withSummary="true"
        owlBlockStyle="owl-style-4"
        :autoplay="false" 
        :dots="false" 
        :loop="false" 
        title="Nuestros" 
        subTitle="Productos"
        :navText="['<i class=\'fa fa-angle-left\'></i>','<i class=\'fa fa fa-angle-right\'></i>']"
        :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 3]]" />
</div>