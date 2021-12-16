@include('partials.carousel-sponsors')

<footer>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
                <x-isite::logo name="logo1" imgClasses="header-logo-1" />
            </div>
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-1">
            </div>
        </div>
    
        <hr class="rounded">
    
        <div class="row">
            <div class="col-md-12">
                <x-isite::menu id="mainMenu" :withHome="false" layout="category-menu-layout-2" menuBefore="main" />
            </div>
        </div>
    
        <hr class="rounded">
    
        <div class="container pad2">
            <div class="row">
                <div class="col d-flex justify-content-start col-md-9 paintWhite">
                    @include('partials.logoimagina')
                    {{ trans('icustom::common.copyrightfooter') }}
                </div>
                <div class="col d-flex justify-content-end col-md-3 social-contact">
                    <x-isite::social />
                </div>
            </div>
        </div>
    </div>

</footer>
