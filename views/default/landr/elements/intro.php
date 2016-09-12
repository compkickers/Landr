<?php
$fa1 = elgg_get_plugin_setting('fa1', 'landr', 'mobile-phone');
$fa2 = elgg_get_plugin_setting('fa2', 'landr', 'cube');
$fa3 = elgg_get_plugin_setting('fa3', 'landr', 'code');
$intro_heading_1 = elgg_get_plugin_setting('intro_heading_1', 'landr', elgg_echo('landr:message:responsive'));
$intro_heading_2 = elgg_get_plugin_setting('intro_heading_2', 'landr', elgg_echo('landr:message:flatui'));
$intro_heading_3 = elgg_get_plugin_setting('intro_heading_3', 'landr', elgg_echo('landr:message:easycustomizations'));
$intro_heading_text1 = elgg_get_plugin_setting('intro_heading_text1', 'landr', elgg_echo('landr:lorem:ipsum'));
$intro_heading_text2 = elgg_get_plugin_setting('intro_heading_text2', 'landr', elgg_echo('landr:lorem:ipsum'));
$intro_heading_text3 = elgg_get_plugin_setting('intro_heading_text3', 'landr', elgg_echo('landr:lorem:ipsum'));
?>

<div class="landr-section row1">
    <div class="landr-container">
        <div class="landr-columns">
            <i class="fa fa-<?php echo $fa1; ?>"></i>
            <h2><?php echo $intro_heading_1 ?></h2>
            <?php echo $intro_heading_text1; ?>
        </div>
        <div class="landr-columns">
            <i class="fa fa-<?php echo $fa2; ?>"></i>
            <h2><?php echo $intro_heading_2; ?></h2>
            <?php echo $intro_heading_text2; ?>
        </div>
        <div class="landr-columns">
            <i class="fa fa-<?php echo $fa3 ?>"></i>
            <h2><?php echo $intro_heading_3; ?></h2>
            <?php echo $intro_heading_text3; ?>
        </div>
    </div>
</div>
