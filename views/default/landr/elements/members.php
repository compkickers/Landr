<?php

$member_heading = elgg_get_plugin_setting('member_heading', 'landr', elgg_echo('landr:message:members'));
$member_heading_font_weight = elgg_get_plugin_setting('member_heading_font_weight', 'landr');
?>

<div class="landr-section row2">
    <h1><?php echo $member_heading ?></h1>
    <div class="landr-container">
        <?php
    		$newest_members = elgg_get_entities_from_metadata(array(
    			'metadata_names' => 'icontime',
    			'type' => 'user',
    			'limit' =>  3,
    			'full_view' => false,
    			'pagination' => false,
    		));

        	echo '<ul>';
        		foreach ($newest_members as $m) {
        			$image = $m->getIconURL('master');
                	echo '<li class="landr-columns"><a href="profile/' . $m->username .'"><div class="landr-member-img" style="background: url(' . $image . ');background-size:cover"></div>' . '<h3>' . $m->name . '</h3>' . '</a></li>';
                }
        	echo '</ul>';

    	?>
    </div>
</div>
