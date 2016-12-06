<?php
/**
 * Landr custom index
 *
 */

$menu_style = elgg_get_plugin_setting('menu_style', 'landr');

// Necessary Elgg functions executed only on Landr custom page
elgg_unextend_view('page/elements/header', 'search/header');
elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');
elgg_unregister_menu_item('footer', 'powered');
elgg_extend_view('page/elements/footer', 'landr/footer');

if ($menu_style == '' || $menu_style == 'mobile') {
    elgg_extend_view('page/elements/header', 'landr/menu');
}
else {
    elgg_extend_view('page/elements/header', 'landr/menu_horizontal');
}

// Remodal
elgg_register_css('remodal', 'mod/landr/lib/jquery.remodal.css');
elgg_load_css('remodal');
elgg_register_js('remodal', 'mod/landr/lib/jquery.remodal.js');
elgg_load_js('remodal');

// Landr CSS & JS
elgg_extend_view('page/elements/head', 'landr/css');
elgg_require_js('landr/landr');

echo elgg_view('landr/elements/slider');
echo elgg_view('landr/elements/intro');
echo elgg_view('landr/elements/members');
?>

<div class="remodal landr-login" data-remodal-id="login">
	<?php echo elgg_view('core/account/login_box'); ?>
</div>

<div class="remodal landr-register" data-remodal-id="register">
	<?php echo elgg_view_form('register'); ?>
</div>