{{-- Products --}}
@extends('layouts.master')
@section('meta')
  @include('iblog::frontend.partials.post.metas')
@stop
@section('title')
  {{ $post->title }} | @parent
@stop
@section('content')
  {{-- @include('partials.car-line-top-banner') --}}

  <div class="page page-content blog single single-{{$category->slug}} single-{{$category->id}}">
    <div class="container py-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="row">
              <h1>{{ $post->title }}</h1>

              <div class="col-xs-12">
                <div class="bgimg">
                  <img class="image img-responsive" src="{{url($post->mainimage->path)}}"
                       alt="{{$post->title}}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="page-body">
              {!! $post->description !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    @include('iblog.gallery.viewline')

  </div>

@stop
@section('scripts')
  @parent
  @include('iblog::frontend.partials.post.script')
@stop
