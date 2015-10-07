<?php
/**
 * Implements hook_preprocess().
 * Oh yeah
 */
function gulp_preprocess_page(&$vars, $hook) {
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}
function gulp_preprocess(&$variables, $hook) {
    $variables['logo'] = "logo";
    $variables['mainmenu'] = "mainmenu";
    $variables['languages'] = "languages";
    $variables['contentTop'] = "contentTop";
    $variables['contentBottom'] = "contentBottom";
    $variables['bottomBlock1'] = "bottomBlock1";
    $variables['bottomBlock2'] = "bottomBlock2";
    $variables['bottomBlock3'] = "bottomBlock3";
    $variables['copyright'] = "copyright";
}
?>