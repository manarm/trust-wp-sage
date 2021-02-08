/* global trustThemeData */

import $ from 'jquery';

class PersonDisplay {
   constructor(){
      this.openButtons = $('[id^=js-person-display-trigger-]');
      this.closeButton = $('.person-overlay__close');
      if(this.closeButton) {
        this.events();
      }
   }

   events() {
    this.openButtons.each(function() {
      $(this).on('click', function() {
        const id = $(this).attr('id').replace('js-person-display-trigger-','');

        $('.person-name').html('');
        $('.person-title').html('');
        $('.person-email').html('');
        $('.person-words').html('');
        $('.person-portrait').html('');

        $.getJSON(trustThemeData.root_url + '/wp-json/wp/v2/person/' + id, function(postdata) {
          $('.person-name').html(postdata['title']['rendered']);
          $('.person-title').html(postdata['excerpt']['rendered']);
          const email = postdata['email'];
          const email_snippet = '<a class="link-dark no-underline" href="mailto:' + email + '">' + email + '</a>';
          $('.person-email').html(email_snippet);
          $('.person-words').html(postdata['content']['rendered']);
          const portrait_url = postdata['portrait_url'];
          const img_snippet = '<img class="img-fluid p-3" width=500 height=675 src="' + portrait_url + '">';
          $('.person-portrait').html(img_snippet);
        });

        $('.person-overlay').addClass('person-overlay--active');
        $('.person-banner').addClass('person-banner--hidden');
        window.scrollTo(0, 0);
      });
    });

    this.closeButton.on('click', function() {
      $('.person-overlay').removeClass('person-overlay--active');
      $('.person-banner').removeClass('person-banner--hidden');
    });
   }
}

export default PersonDisplay;
