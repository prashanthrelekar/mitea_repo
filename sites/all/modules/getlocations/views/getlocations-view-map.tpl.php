<?php
/**
 * @file getlocations-view-map.tpl.php
 * @author Bob Hutchinson http://drupal.org/user/52366
 * @copyright GNU GPL
 *
 * Default simple view template to display a list of rows.
 * Derived from views-view-unformatted.tpl.php
 *
 * @ingroup views_templates
 */
?>
<!-- getlocations-view-map.tpl -->
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="getlocations_map_wrapper">
<?php print $map; ?>
</div>
<!-- /getlocations-view-map.tpl -->
