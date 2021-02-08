@extends('layouts.app')

@section('content')
<div class="person-overlay container-fluid">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-12 order-lg-first order-last d-flex flex-column justify-content-center">
            <h1 class="person-name m-0"></h1>
            <h2 class="person-title"></h2>
            <div class="person-email"></div>
            <hr/>
            <div class="person-words"></div>
            <div class="person-overlay__close mt-3 mb-3">Click to go back.</div>
         </div>
         <div class="col-lg-6 col-12 order-lg-last order-first person-portrait"></div>
      </div>
   </div>
</div>

<div class="internal-banner person-banner container-fluid">
   <div class="container pt-4 pb-4">
      <h1 class="internal-header">Contact Us</h1>
      <div class="d-flex flex-wrap justify-content-around">
         <div class="p-lg-0 p-4">
            <h2 class="internal-sub">General</h2>
            <a class="link-dark no-underline" href="mailto:lellen@trust.org">ladellen@trust.org</a>
         </div>
        <div class="p-lg-0 p-4">
            <h2 class="internal-sub">Teaching</h2>
            <a class="link-dark no-underline" href="mailto:shhh@trust.org">shhh@trust.org</a>
         </div>
         <div class="p-lg-0 p-4">
            <h2 class="internal-sub">Booking</h2>
            <a class="link-dark no-underline" href="mailto:itsgina@trust.org">itsgina@trust.org</a>
         </div>
      </div>
   </div>
</div>

<div class="blog-card container-fluid">
   <div class="container">
      <div class="row" data-aos="fade-up">
         @while(have_posts())
          @php the_post() @endphp
            <div class="contact-person col-lg-3 col-12 mt-4 mb-4 d-flex justify-content-center" id="js-person-display-trigger-<?php the_id() ?>">
               <div class="contact-card d-flex justify-content-center flex-wrap border rounded">
                  <div class="p-4">
                     <?php the_post_thumbnail("headshot") ?>
                  </div>
                  <div class="pb-4 pl-4 pr-4">
                        <h4>{!! get_the_title() !!}</h4>
                        @php the_excerpt() @endphp
                        <a class="no-underline" id="email-link" href="mailto:@php echo get_field('email') @endphp">@php echo get_field("email") @endphp</a>
                  </div>
               </div>
            </div>
         @endwhile
      </div>
   </div>
</div>

@endsection

