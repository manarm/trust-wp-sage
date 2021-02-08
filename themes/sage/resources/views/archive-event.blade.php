@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => 'Upcoming Events', 'pagesub' => 'Many open to the public - click an event to learn more.'])
  <div class="container-fluid blog-card">
    <div class="container">
      @while (have_posts())
        @php the_post() @endphp
        <div class="container pb-2 pt-1">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile

      <div class="pl-4 pb-4">
        {!! paginate_links() !!}
        <a class="link-dark back-link" href="<?php echo site_url("/past-events")?>"><< Past Events</a><br/>
      </div>
    </div>
  </div>
@endsection
