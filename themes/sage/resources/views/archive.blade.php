@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => get_the_archive_title(), 'pagesub' => get_the_archive_description()])
  <div class="container-fluid blog-card">
    <div class="container">
      @while (have_posts()) @php the_post() @endphp
        <div class="container pb-2 pt-1">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile

      <div class="pl-4 pb-4">{!! paginate_links() !!}</div>
    </div>
  </div>
@endsection
