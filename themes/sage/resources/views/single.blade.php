@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => get_the_title()])
  <div class="container-fluid blog-card">
    <div class="container class pb-3">
      @while (have_posts()) @php the_post() @endphp
        <div class="container">
          @include('partials.content-single-'.get_post_type())
        </div>
      @endwhile

      <a class="back-link link-dark" href="{!! site_url('/blog') !!}"><< Back to Blog</a>
    </div>
  </div>
@endsection
