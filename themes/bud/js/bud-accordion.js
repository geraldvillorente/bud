(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.budAccordion = {
    attach: function (context, settings) {
    //* for eng FAQ */
    /*
    * Use heightStyle: "content" if you're using version 1.9 and higher
    * Use autoHeight: false for 1.8 and lower
    */
      $('#collapse-a-en').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-b-en').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-c-en').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-d-en').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-e-en').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
    //* for zh-trad FAQ */
      $('#collapse-a-zh-trad').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-b-zh-trad').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-c-zh-trad').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-d-zh-trad').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-e-zh-trad').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
    //* for zh-hans FAQ */
      $('#collapse-a-zh-hans').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-b-zh-hans').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-c-zh-hans').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-d-zh-hans').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
      $('#collapse-e-zh-hans').accordion({
        autoHeight: false,
        collapsible: true,
        active: false,
        icons: false
      });
    }
  };
})(jQuery, Drupal);
