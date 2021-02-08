<article @php post_class() @endphp>
  <header class='pb-3 pt-3 font-italic'>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>

</article>
