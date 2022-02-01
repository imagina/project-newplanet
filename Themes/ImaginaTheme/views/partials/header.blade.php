<header class="sticky-top">
  <div class="container-fluid">
    <div class="container">
      <div class="row no-gutters align-items-center text-center px-lg-3">

        <div class="col-auto text-center text-lg-left">
          <div class="content-logo d-none d-xl-block">
            <x-isite::logo name="logo1" />
          </div>
          <div class="content-logo d-block d-xl-none">
            <x-isite::logo name="logo1" />
          </div>
        </div>

        <div class="col text-right">
          @include('partials.navigation')
        </div>

        <div class="col-auto">
          @livewire('isearch::search', ["layout" => "search-layout-1"])
        </div>

      </div>
    </div>
  </div>
</header>
<div id="social-lateral"><x-isite::social/></div>
