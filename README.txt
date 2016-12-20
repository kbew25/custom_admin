//-- LOGO CODE TO PLACE IN YOUR PAGE TEMPLATE FOR SVG LOGOS

<?php if ($logo_svg || $logo_png || $logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo" class="logo">
    <?php if ($logo_svg && $logo_png): ?>
      <img src="<?php print $logo_svg; ?>" data-fallback="<?php print $logo_png; ?>" alt="<?php print $site_name; ?>" width="200" />
    <?php elseif ($logo_svg): ?>
      <img src="<?php print $logo_svg; ?>" data-fallback="<?php print $logo; ?>" alt="<?php print $site_name; ?>" width="200" />
    <?php elseif ($logo_png): ?>
      <img src="<?php print $logo_png; ?>" alt="<?php print $site_name; ?>" width="200" />
    <?php else: ?>
      <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" width="200" />
    <?php endif; ?>
  </a>
<?php endif; ?>


//-- USE MONDERNIZR FOR SVG DATA FALLBACK AND ADD THIS TO YOUR SCRIPTS

Drupal.behaviors.svgFallback = {
  attach: function (context, settings) {
    if (typeof(Modernizr) != 'undefined' && !Modernizr.svg) {
      $("img[src$='.svg']").each(function() {
        $(this).attr("src", $(this).attr("data-fallback"));
      });
    }
  }
};
