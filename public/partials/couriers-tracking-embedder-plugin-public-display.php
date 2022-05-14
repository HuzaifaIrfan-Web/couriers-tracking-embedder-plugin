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


<style>
    .iframe-embed {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0;
}
.iframe-embed-wrapper {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
}
.iframe-embed-responsive-16by9 {
    padding-bottom: 56.25%;
}
</style>

<?php if (isset($_REQUEST["tnum"]) && !($_REQUEST["tnum"] == '')) : ?>


<div class="iframe-embed-wrapper iframe-embed-responsive-16by9">
<iframe class="iframe-embed" src="<?php echo $tracking_url; echo $_REQUEST["tnum"]; ?>"></iframe>
</div>


<?php else : ?>

<h2 align='center'>
    Please Enter a Valid Tracking Number
</h2>

<?php endif; ?>
