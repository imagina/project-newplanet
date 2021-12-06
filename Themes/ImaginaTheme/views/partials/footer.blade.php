<footer class="container">
    <div class="row">
    <div class="col-md-12">
            <x-isite::carousel.owl-carousel
                    id="Service4Carousel"
                    repository="Modules\Slider\Repositories\SlideRepository"
                    :params="['take' => 20,'filter' => ['order' => ['field' => 'created_at', 'way' => 'desc'],'sliderId' =>6]]"
                    :margin="4"
                    itemLayout="item-list-layout-1"
                    :withSummary="false"
                    :withViewMoreButton="true"
                    :autoplay="true"
                    :dots="false"
                    :loop="true"
                    title="Marcas"
                    subTitle="Comerciales"
                    mediaImage="slideimage"
                    :responsive="[300 => ['items' =>  1],700 => ['items' =>  3], 1024 => ['items' => 6]]"/>
         </div>
   <div class="row">
     <div class="col-md-4">
       <x-isite::logo name="logo1" imgClasses="header-logo-1" />
     </div>
     <div class="col-md-4">
         <div class="row">
             <x-isite::contact.addresses/>
         </div>
         <div class="row">
             <x-isite::contact.phones/>
         </div>
         <div class="row">
             <x-isite::contact.emails/>
         </div>
     </div>
       <div class="col-md-4">
           <div class="row">
               <x-isite::contact.addresses :addresses="json_decode(setting('icustom::addresses',null,'[]'))" />
           </div>
           <div class="row">
               <x-isite::contact.phones :phones="json_decode(setting('icustom::phones',null,'[]'))"/>
           </div>
           <div class="row">
               <x-isite::contact.emails :emails="json_decode(setting('icustom::emails',null,'[]'))"/>
           </div>
       </div>
   </div>


      <div class="col-md-12">
          <div class="col-sm-9">

              <x-isite::menu
                      id="mainMenu"
                      :withHome="false"
                      layout="category-menu-layout-2"
                      menuBefore="main"/>
          </div>

    <div class="row">
    <div id="footer-bottom" class="row align-items-center mx-0">
      <div class="container">
        <div class="row">
          <div class="row justify-content-between">
            <div class="col-6">
              @include('partials.logoimagina')
              <p>Copyright 2021@ New Planet. Derechos Reservados </p>
            </div>
            <div class="col-6">
              <x-isite::social/>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</footer>
