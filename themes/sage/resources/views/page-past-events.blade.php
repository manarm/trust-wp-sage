@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => 'Past Events'])
  <div class="container-fluid blog-card">
    <div class="container">
      @php $query = $get_past_event_query; @endphp
      @while($query->have_posts())
        @php $query->the_post() @endphp
        <div class="container pb-2 pt-1">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile
      @php wp_reset_postdata() @endphp

      <div class="pl-4 pb-4">
        {!! paginate_links() !!}
        <a class="link-dark back-link" href="<?php echo site_url("/events")?>"><< Upcoming Events</a><br/>
      </div>
    </div>
  </div>
@endsection
