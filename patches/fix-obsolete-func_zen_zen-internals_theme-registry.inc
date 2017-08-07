diff --git a/themes/zen/zen-internals/theme-registry.inc b/themes/zen/zen-internals/theme-registry.inc
index dc4999c..b4e461c 100644
--- a/themes/zen/zen-internals/theme-registry.inc
+++ b/themes/zen/zen-internals/theme-registry.inc
@@ -24,7 +24,7 @@ function _zen_theme(&$existing, $type, $theme, $path) {
     && ($is_admin_route || \Drupal::flood()->isAllowed($flood_name, 3))
   ) {
     \Drupal::flood()->register($flood_name);
-    drupal_set_message(t('For easier theme development, the theme registry is being rebuilt on every page request. It is <em>extremely</em> important to <a href="!link">turn off this feature</a> on production websites.', array('!link' => url('admin/appearance/settings/' . $active_theme))), 'warning', FALSE);
+    drupal_set_message(t('For easier theme development, the theme registry is being rebuilt on every page request. It is <em>extremely</em> important to <a href=":link">turn off this feature</a> on production websites.', array(':link' => \Drupal\Core\Url::fromRoute('system.theme_settings_theme', ['theme' => $active_theme]))), 'warning', FALSE);
   }
 
   // hook_theme() expects an array, so return an empty one.
