@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => 'TRUST team updates', 'pagesub' => 'Musings, happenings, and tidbits.'])
  <div class="container-fluid blog-card">
    <div class="container">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      @while (have_posts()) @php the_post() @endphp
        <div class="container pb-2 pt-1">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile

      <div class="pl-4 pb-4">{!! paginate_links() !!}</div>
    </div>
  </div>
@endsection
