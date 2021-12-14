<header >
    <div class="container">
      <div class="row no-gutters align-items-center text-center px-lg-3">
  
        <div class="col-sm-3">
            <x-isite::logo name="logo1" imgClasses="header-logo-1" />
        </div>
            
        <div class="col-sm-9 justify-content-end">
            <x-isite::menu
            id="mainMenu"
            :withHome="false"
            layout="category-menu-layout-2"
            menuBefore="main"/>
            @livewire('isearch::search', ["layout" => "search-layout-4"])
        </div>
          
          
      </div>
    </div>
  </header>

<div id="social-lateral"><x-isite::social/></div> 
