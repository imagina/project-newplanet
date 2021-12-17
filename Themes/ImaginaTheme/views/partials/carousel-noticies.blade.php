{{--Category Notices--}}
<div id="section-noticias" class="py-5">
    <x-isite::carousel.owl-carousel 
        id="carousel-noticies"
        repository="Modules\Iblog\Repositories\PostRepository"
        :params="['take' => 8,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'categories' =>[11]]]"
        :margin="20" 
        itemLayout="item-list-layout-1" 
        :withSummary="true" 
        :withViewMoreButton="true"
        :autoplay="false" 
        :dots="false" 
        :loop="false" 
        title="Noticias" 
        subTitle="Información de tu Interes"
        :navText="['<i class=\'fa fa-angle-left\'></i>','<i class=\'fa fa fa-angle-right\'></i>']"
        :responsive="[300 => ['items' =>  1],700 => ['items' =>  2], 1024 => ['items' => 4]]" />    
</div>