<article @php post_class() @endphp>
<div class="post-item p-2">
  <header>
    <h2><a class="link-dark entry-title" href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</div>
</article>
