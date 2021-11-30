<footer class="container">
  <div class="row">
    <div class="col-md-12">
      <x-isite::carousel.owl-carousel
              id="servicesCarousel"
              repository="Modules\Slider\Repositories\SlideRepository"
              :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>6]]"
              :margin="10"
              itemLayout="item-list-layout-1"
              :withSummary="false"
              :withViewMoreButton="false"
              :autoplay="false"
              :dots="false"
              :loop="true"
              title="Marcas"
              subTitle="Comerciales"
              mediaImage="slideimage"

              :responsive="[300 => ['items' =>  2],700 => ['items' =>  4], 1024 => ['items' => 6]]" :carousel.owl-carousel></x-isite::carousel.owl-carousel>
      </div>
    </div>

  <div class="row">
    <div class="col-md-4">
      <x-isite::logo name="logo1" imgClasses="header-logo-1" />
    </div>
    <div class="col-md-4">
      <x-isite::logo name="logo1" imgClasses="header-logo-1" />
    </div>
    <div class="col-md-4">
      <x-isite::logo name="logo1" imgClasses="header-logo-1" />
    </div>
  </div>

    <div class="row">
      <div class="col-md-12">
      <x-isite::menu
              id="mainMenu"
              :withHome="false"
              layout="category-menu-layout-2"
              menuBefore="main"/>
      @livewire('isearch::search', ["layout" => "search-layout-1"])
     </div>
    </div>
    <div class="row">
    <div id="footer-bottom" class="row align-items-center mx-0">
      <div class="container">
        <div class="row">
          <div class="row justify-content-between">
            <div class="col-4">
              One of two columns
            </div>
            <div class="col-4">
              One of two columns
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</footer>
