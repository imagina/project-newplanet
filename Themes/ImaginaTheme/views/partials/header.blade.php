<header>

    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <x-isite::logo name="logo1" imgClasses="header-logo-1" />
                </div>
                <div class="col-sm-9">

                    <x-isite::menu
                            id="mainMenu"
                            :withHome="false"
                            layout="category-menu-layout-2"
                            menuBefore="main"/>
                    @livewire('isearch::search', ["layout" => "search-layout-1"])
                </div>
            </div>
        </div>
    </div>

</header>