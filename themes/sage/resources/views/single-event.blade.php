@extends('layouts.app')

@section('content')
  @php
    the_post();
    $event_date = new \DateTime(get_field('event_date'));
    $date_string = $event_date->format('M') . ' ' . $event_date->format('d');
  @endphp
  @include('partials.page-header', ['pagetitle' => $date_string . ': ' . get_the_title()])
  <div class="container-fluid blog-card">
    <div class="container">
    <div class="container pb-4">
      @include('partials.content-single-'.get_post_type())
    </div>

    <div class="pl-4 pb-4">{!! $get_archive_link !!}</div>
    </div>
  </div>
@endsection
