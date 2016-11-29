<?php
$welcome_message = elgg_get_plugin_setting('welcome_message', 'landr');
?>

<div class="landr-slider">
    <div class="landr-slider-content">
    <?php if ($welcome_message) { echo $welcome_message; } else { ?>
        <h1><?php echo elgg_echo('landr:message:welcome'); ?></h1>
        <p><?php echo elgg_echo('landr:lorem:ipsum'); ?></p>
    <?php } ?>
        <div class="landr-buttons">
            <a href="#login"><?php echo elgg_echo('landr:button:login'); ?></a>
            <a href="#register"><?php echo elgg_echo('landr:button:register'); ?></a>
        </div>
    </div>
</div>
