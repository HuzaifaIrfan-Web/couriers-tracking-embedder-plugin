<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://huzaifairfan.com/
 * @since      1.0.0
 *
 * @package    Couriers_Tracking_Embedder_Plugin
 * @subpackage Couriers_Tracking_Embedder_Plugin/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->



<form method='get' action='<?php echo $action; ?>'>

	<div style='display:flex;  justify-content:center;'>

			<input name='tnum' type='text' style='width: 75%;margin-right: 2%; border-radius:3px;'  placeholder='<?php echo $placeholder; ?>' value='<?php echo isset($_REQUEST["tnum"]) ? $_REQUEST["tnum"] : ""; ?>' />
		<input style='width:22%; color: #ffffff; background: #ff9900; font-weight:bold; text-transform:uppercase; border-radius:3px;'  type='submit' value='Track' />

	</div>
</form>