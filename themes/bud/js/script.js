/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function (Drupal, $) {

  'use strict';

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.my_custom_behavior = {
    attach: function (context, settings) {

      // Place your code here.

      // Create the dropdown base.
      $("<select />").appendTo("#language-switcher");

      // Add class.
      $("#language-switcher select").addClass("lang-dropdown");

      // Create default option "Switch language..."
      $("<option />", {
        "selected": "selected",
        "value"   : "",
        "text"    : "Switch language..."
      }).appendTo("#language-switcher select");

      // Populate dropdown with menu items.
      $("#language-switcher a").each(function() {
        var el = $(this);
        $("<option />", {
          "value"   : el.attr("href"),
          "text"    : el.text()
        }).appendTo("#language-switcher select");
      });

      // Go the link on change.
      $("#language-switcher select").change(function() {
        window.location = $(this).find("option:selected").val();
      });

      // Remove all empty `p` tags.
      $('p').each(function() {
        var $this = $(this);
        if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
          $this.remove();
      });

      // Main menu parent item, to remain in hovered state when child items are
      // hovered.
      $("#superfish-main .sf-depth-2").hover(
        function() {
          $(this).parent().prev().addClass("sf-child-is-hovered");
        }, function() {
          $(this).parent().prev().removeClass("sf-child-is-hovered");
        }
      );

      // Add lang class to the body.
      var first = $(location).attr('pathname');
      first.indexOf(1);
      first.toLowerCase();
      first = first.split("/")[1];
      if(first === "en") {
        $("body").addClass("lang-en");
      }
      else if(first === "zh-hans"){
        $("body").addClass("lang-ch lang-zhh");
      }
      else {
        $("body").addClass("lang-ch lang-tch");
      }

      // Video churva.
      var base = $(".bud-youtube-item");
      $(base).each(function(index) {
        var $this = $(this);
        var video = $(this).find("a").attr("href");
        if($(this).find(".cb").length == 0) {
          $(this).append("<div class='cb cb-" + index + "'></div>");
          $(this).find(".cb").append("<iframe class='cb-embed' src='" + video + "' scrolling='no'></iframe>");
          $(this).find(".bud-youtube-image a, .bud-youtube-desc a").attr("data-colorbox-inline", ".cb.cb-" + index);
          $(this).find(".bud-youtube-image a, .bud-youtube-desc a").attr("data-width", "650px");
          $(this).find(".bud-youtube-image a, .bud-youtube-desc a").attr("data-height", "450px");
        }
      });

      $('[data-colorbox-inline]', context).once().click(function () {
        var $link = $(this);
        var settings = $.extend(drupalSettings.colorbox, {
          href: false,
          inline: true
        }, {
          href: $link.data('colorbox-inline'),
          width: $link.data('width'),
          height: $link.data('height')
        });
        $link.colorbox(settings);
      });
    }
  };

  // We pass the parameters of this anonymous function are the global variables
  // that this script depend on. For example, if the above script requires
  // jQuery, you should change (Drupal) to (Drupal, jQuery) in the line below
  // and, in this file's first line of JS, change function (Drupal) to
  // (Drupal, $)
})(Drupal, jQuery);
