@extends('layouts.app')

@section('content')
<div class="welcome-card">
   <div class="container">
      <div class="row">
         <div class="order-lg-first order-last col-12 col-lg-6 d-flex flex-column justify-content-center">
          <div data-aos="fade-up">
            <div class="brand-phrase">
               <span class="brand-letter">T</span>elling
               <span class="brand-letter">R</span>eal
               <span class="brand-letter">U</span>nplanned
               <span class="brand-letter">S</span>tories
               <span class="brand-letter">T</span>ogether
            </div>
            <p> Trust Community Arts is a nonprofit working in the Madison, WI area to build positive relationships between police, at-risk students, and the broader community. Read more about our recent work and sign up for an upcoming workshop below!</p>
          </div>
         </div>
         <div class="order-lg-last order-first col-12 col-lg-6">
            <img class="img-fluid" src="@asset('images/pop1.png')" width=600px height=450px>
         </div>
      </div>
   </div>
</div>

@include('partials.carousel', ['images' => $get_carousel_images])

<div class="blog-card">
   <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6 p-4">
            <h1> RECENT POSTS </h1>
            @php $query = $get_post_query; @endphp
            @while($query->have_posts())
              @php $query->the_post() @endphp
              @include('partials.content')
            @endwhile
            @php wp_reset_postdata() @endphp
         </div>
         <div class="container d-lg-none card-break"></div>
         <div class="col-12 col-lg-6 p-4">
            <h1> UPCOMING EVENTS </h1>
            @php $query = $get_event_query; @endphp
            @while($query->have_posts())
              @php $query->the_post() @endphp
              @include('partials.content-event')
            @endwhile
            @php wp_reset_postdata() @endphp
         </div>
      </div>
   </div>
</div>

@include('partials/signup-card')

@endsection
