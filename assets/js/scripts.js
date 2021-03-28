jQuery("document").ready(function () {
  // Pages Overview Scripts
  if (jQuery("#pages-overview-wrapper").length) {
    jQuery("#pages-overview-wrapper .pages-navigation-wrap li").on(
      "mouseenter",
      function () {
        jQuery("#pages-overview-wrapper .pages-navigation-wrap li").removeClass(
          "active"
        );
        jQuery(this).addClass("active");
        var elementIndex = jQuery(this).index();
        jQuery("#pages-overview-wrapper .pages-content-wrap .item").removeClass(
          "active"
        );
        jQuery("#pages-overview-wrapper .pages-content-wrap .item")
          .eq(elementIndex)
          .addClass("active");
      }
    );
  }
});
