<div class="post-item p-2">
<h2><a class="link-dark entry-title" href="{{ get_permalink() }}">
  @php
    $event_date = new \DateTime(get_field('event_date'));
    echo $event_date->format('M') . ' ' . $event_date->format('d');
  @endphp
  {!! get_the_title() !!}
</a></h2>
<div class="entry-summary">@php the_excerpt() @endphp </div>
</div>
