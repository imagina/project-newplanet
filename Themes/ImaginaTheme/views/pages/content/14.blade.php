<div class="page page-{{ $page->id }}">

    <div class="page-content">
        <div class="container">
            
            <div class="row">
                <h1>{{ $page->title }}</h1>
            </div>

            <x-media::single-image :isMedia="true" :mediaFiles="$page->mediaFiles()" />

            <div class="row">

                <div class="page-body">
                    {!! $page->body !!}
                </div>

                <div class="col-md-12">
                    <x-iforms::form id="1" />
                </div>

            </div>

        </div>
    </div>
</div>
