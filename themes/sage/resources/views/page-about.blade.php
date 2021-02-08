@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['pagetitle' => 'About Us'])
  <div class="container-fluid blog-card">
    <div class="container">
      @while (have_posts()) @php the_post() @endphp
        <div class="container pb-2 pt-1">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile

      <div class="p-4 border-top">
        <h3>Where We Work</h3>
        <p>Click on a pin to learn more:</p>
        @php $query = $get_locations_query; @endphp
        <div class="acf-map">
          @while($query->have_posts())
            @php
              $query->the_post();
              $map_location = get_field('map_location');
            @endphp
            <div class="marker" data-lat="@php echo $map_location['lat'] @endphp" data-lng="@php echo $map_location['lng'] @endphp">
              <h3>{!! get_the_title(); !!}</h3>
              @php echo $map_location['address'] @endphp
              @php the_excerpt() @endphp
            </div>
          @endwhile
          @php wp_reset_postdata(); @endphp
        </div>
      </div>
    </div>
  </div>
@endsection
