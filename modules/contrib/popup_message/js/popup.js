/**
 * @file
 * jQuery code.
 * Based on code: Adrian "yEnS" Mato Gondelle, twitter: @adrianmg
 * Modifications for Drupal: Grzegorz Bartman grzegorz.bartman@openbit.pl
 *                           Pawel Gorski gp@gorskipawel.pl
 */
(function ($, Drupal, drupalSettings) {
  'use strict';

  let popupStatus = 0;

  /**
   * Loading popup with jQuery.
   */
  function popup_message_load_popup() {
    // Loads json with modal settings
    $.getJSON('/popup_message/status?popup_path=' + window.location.pathname, function (json) {
      if (json.status === 1) {
        jQuery('#popup-message-background').css({
          opacity: '0.7'
        });
        jQuery('#popup-message-background').fadeIn('slow');
        jQuery('#popup-message-window').fadeIn('slow');
        popupStatus = 1;

        // Set cookie
        var timestamp = (+new Date());
        jQuery.cookie('popup_message_displayed', timestamp, {popup_path: '/'});
      }
    });
  }

  /**
   * Disabling popup with jQuery.
   */
  function popup_message_disable_popup() {
    // Disables popup only if it is enabled.
    if (popupStatus === 1) {
      jQuery('#popup-message-background').fadeOut('slow');
      jQuery('#popup-message-window').fadeOut('slow');
      jQuery('#popup-message-content').empty().remove();
      popupStatus = 0;
    }
  }

  /**
   * Centering popup
   *
   * @param {number} width
   *   Width css attribute.
   * @param {number} height
   *   Height css attribute.
   */
  function popup_message_center_popup(width, height) {
    // Request data for centering.
    let windowWidth = document.documentElement.clientWidth;
    let windowHeight = document.documentElement.clientHeight;

    var popupWidth = 0;
    if (typeof width === 'undefined') {
      popupWidth = $('#popup-message-window').width();
    }
    else {
      popupWidth = width;
    }
    var popupHeight = 0;
    if (typeof width === 'undefined') {
      popupHeight = $('#popup-message-window').height();
    }
    else {
      popupHeight = height;
    }

    // Centering.
    jQuery('#popup-message-window').css({
      position: 'absolute',
      width: popupWidth + 'px',
      height: popupHeight + 'px',
      top: windowHeight / 2 - popupHeight / 2,
      left: windowWidth / 2 - popupWidth / 2
    });
    // Only need force for IE6.
    jQuery('#popup-message-background').css({
      height: windowHeight
    });

  }

  /**
   * Display popup message.
   *
   * @param {string} popup_message_title
   *   Message title.
   * @param {string} popup_message_body
   *   Message body.
   * @param {number} width
   *   Message box width.
   * @param {number} height
   *   Message box height.
   */
  function popup_message_display_popup(popup_message_title, popup_message_body, width, height) {

    jQuery('body')
      .append("<div id='popup-message-window'><a id='popup-message-close'>X</a><br /><h1 class='popup-message-title'>" + popup_message_title + "</h1><div id='popup-message-content'>" + popup_message_body + "</div></div><div id='popup-message-background'></div>");

    // Loading popup.
    popup_message_center_popup(width, height);
    popup_message_load_popup();

    // Closing popup.
    // Click the x event!
    jQuery('#popup-message-close').click(function () {
      popup_message_disable_popup();
    });
    // Click out event!
    jQuery('#popup-message-background').click(function () {
      popup_message_disable_popup();
    });
    // Press Escape event!
    jQuery(document).keypress(function (e) {
      if (e.keyCode === 27 && popupStatus === 1) {
        popup_message_disable_popup();
      }
    });
  }

  /**
   * Helper function for get last element from object.
   * Used if on page is loaded more than one message.
   *
   * @param {Object} variable_data
   *   Check_cookie data.
   *
   * @return {*}
   *   Last object item.
   */
  function popup_message_get_last_object_item(variable_data) {
    if (typeof (variable_data) === 'object') {
      variable_data = variable_data[(variable_data.length - 1)];
    }
    return variable_data;
  }

  Drupal.behaviors.popupMessage = {
    attach: function () {
      let timestamp = (+new Date());
      let check_cookie = drupalSettings.popupMessage.check_cookie;
      check_cookie = popup_message_get_last_object_item(check_cookie);
      let popup_message_cookie = jQuery.cookie('popup_message_displayed');
      let delay = drupalSettings.popupMessage.delay * 1000;
      let show_popup = true;
      if (!popup_message_cookie || check_cookie === 0) {
        show_popup = true;
      }
      else {
        popup_message_cookie = parseInt(popup_message_cookie, 10);
        show_popup = timestamp < popup_message_cookie + delay;
      }
      if (show_popup) {
        let run_popup = function () {
          // Get variables.
          let popup_message_title = drupalSettings.popupMessage.title;
          let popup_message_body = drupalSettings.popupMessage.body;
          let popup_message_width = drupalSettings.popupMessage.width;
          let popup_message_height = drupalSettings.popupMessage.height;

          popup_message_title = popup_message_get_last_object_item(popup_message_title);
          popup_message_body = popup_message_get_last_object_item(popup_message_body);
          popup_message_width = popup_message_get_last_object_item(popup_message_width);
          popup_message_height = popup_message_get_last_object_item(popup_message_height);
          popup_message_display_popup(
            popup_message_title,
            popup_message_body,
            popup_message_width,
            popup_message_height);
        };

        let trigger_time = delay;

        setTimeout(run_popup, trigger_time);
      }
    }
  };
})(jQuery, Drupal, drupalSettings);
