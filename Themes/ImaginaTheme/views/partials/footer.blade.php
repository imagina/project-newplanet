@include('partials.carousel-sponsors')

<footer>

    <div class="container-fluid">
        <div class="container">

            <div class="row data">
                <div class="col-sm-4">
                    <x-isite::logo name="logo1" imgClasses="header-logo-1" />
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <div class="row">
                        <x-isite::contact.addresses />
                    </div>
                    <div class="row">
                        <x-isite::contact.phones />
                    </div>
                    <div class="row">
                        <x-isite::contact.emails />
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <div class="row">
                        <x-isite::contact.addresses :addresses="json_decode(setting('icustom::addresses',null,'[]'))" />
                    </div>
                    <div class="row">
                        <x-isite::contact.phones :phones="json_decode(setting('icustom::phones',null,'[]'))" />
                    </div>
                    <div class="row">
                        <x-isite::contact.emails :emails="json_decode(setting('icustom::emails',null,'[]'))" />
                    </div>
                </div>
            </div>

            <hr class="solid">

            <div class="row">
                <div class="col-sm-12">
                    <x-isite::menu id="mainMenu" :withHome="false" layout="category-menu-layout-2" menuBefore="main" />
                </div>
            </div>
            
            <hr class="solid">

            <div class="row bottom-footer">
                <div class="col-sm-8">
                    @include('partials.logoimagina')
                    <p>{{ trans('icustom::common.copyrightfooter') }}</p>
                </div>
                <div class="col-6 col-sm-4 social-contact">
                    <x-isite::social />
                </div>
            </div>

      </div>
    </div>

</footer>
