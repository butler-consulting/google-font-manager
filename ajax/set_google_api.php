<?php

/**
 * @author Thomas S. Butler
 * @link http://butlerconsulting.com
 * @copyright 2013-2014 All Rights Reserved. Google Font Manager - A WordPress Plugin.
 * @abstract: This file contains sets the google api key.
 */
 
//exit if accessed directly
if(!defined('ABSPATH')) exit;

//validate the google api key
function check_api_key($google_api_key){
	
	$message = "";
    $option_name = 'wp_googlefontmgr_apikey';
    $api_url = "https://www.googleapis.com/webfonts/v1/webfonts?key=";
	$api_data = wp_remote_get($api_url . $google_api_key);
  
	//return codes if valid or not
    if(200 === $api_data['response']['code']){
        update_option($option_name, $google_api_key);
		echo "<div class='updated message'><p><strong>Success!</strong> Valid Google API Key...</p></div>";
        return true;
    } else {
        $body = json_decode($api_data['body'], true);
		$response = $api_data['response'];
		$headers = $api_data['headers'];
		foreach($body['error']['errors'] as $error){
			if("keyInvalid" == $error['reason']){
				$message = "<div class='error message'><p><strong>ERROR:</strong> Invalid Google API Key</p></div>";
			}
		}
        if($message){
            delete_option($option_name);
            echo $message;
            return false;
        } 
    }
		
}

?>

<script type="text/javascript">
    
    var apiresult = "<?php check_api_key($_POST["wp_googlefontmgr_apikey"]); ?>";
    
    //set class and visibility
    jQuery("#wp_googlefontmgr_options").hide(); 
    jQuery("#wp_googlefontmgr_settings").fadeIn();
    jQuery("#template_image_gallery").hide();
    jQuery("#wp_googlefontmgr_manager").fadeIn("slow");
    jQuery("#mainbar_settings").addClass("active");
    //prepend the result message
    jQuery("#side-sortables").prepend(apiresult);
    //if success... fade out message
    if(apiresult.toLowerCase().indexOf("updated") >= 0) {
        jQuery("#fontfinder").prop("disabled",false);
        var timerId = setTimeout(function() { jQuery(".message").fadeOut("slow"); }, 3500);
    } else {
        jQuery("#fontfinder").prop("disabled",true);
        jQuery("#wp_googlefontmgr_apikey").select();
    } 
    //get the google fonts selector
    var data = { action: 'wp_googlefontmgr_getfonts' };
	jQuery.post(ajaxurl, data, function(response) {
		jQuery("#font_data_container").html(response);
	});
    
</script>