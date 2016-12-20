<?php
/**
* @file
* custom_social_links.tpl.php
*
*/
?>

<ul class="ca-social-links inline">
  <?php if($facebook_url): ?>
    <li><a href="<?php print $facebook_url; ?>" target="_blank">
      <?php if($facebook_class):  ?>
        <span class="<?php print $facebook_class; ?>"></span>
      <?php endif; ?>
      <span class="element-invisible">Facebook</span>
    </a></li>
  <?php endif; ?>

  <?php if($twitter_url): ?>
    <li><a href="<?php print $twitter_url; ?>" target="_blank">
      <?php if($twitter_class):  ?>
        <span class="<?php print $twitter_class; ?>"></span>
      <?php endif; ?>
      <span class="element-invisible">Twitter</span>
    </a></li>
  <?php endif; ?>

  <?php if($linkedin_url): ?>
    <li><a href="<?php print $linkedin_url; ?>" target="_blank">
      <?php if($linkedin_class):  ?>
        <span class="<?php print $linkedin_class; ?>"></span>
      <?php endif; ?>
      <span class="element-invisible">Linkedin</span>
    </a></li>
  <?php endif; ?>

  <?php if($instagram_url): ?>
    <li><a href="<?php print $instagram_url; ?>" target="_blank">
      <?php if($instagram_class):  ?>
        <span class="<?php print $instagram_class; ?>"></span>
      <?php endif; ?>
      <span class="element-invisible">Instagram</span>
    </a></li>
  <?php endif; ?>

  <?php if($youtube_url): ?>
    <li><a href="<?php print $youtube_url; ?>" target="_blank">
      <?php if($youtube_class):  ?>
        <span class="<?php print $youtube_class; ?>"></span>
      <?php endif; ?>
      <span class="element-invisible">Youtube</span>
    </a></li>
  <?php endif; ?>
</ul>
