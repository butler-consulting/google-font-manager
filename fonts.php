<?php

/**
 * @author Thomas S. Butler
 * @link http://butlerconsulting.com
 * @copyright 2013-2014 All Rights Reserved. Google Font Manager - A WordPress Plugin.
 * @abstract: This file contains the google font library tools.
 */
 
//exit if accessed directly
if(!defined('ABSPATH')) exit;

?>
                    
<div id="font_filters">
    <div id="font_head">
        <h3>Google Font Manager</h3>
    </div>
    <div id="template_reset">
        <div id="mainbar" class="mainbar">
            <div id="mainbar_apply" class="mainbar-button subdued persist" title="Apply to Text Elements">
                <img src="<?php echo plugins_url( 'css/images/mainbar_text.png' , plugin_basename(__FILE__) ); ?>" />
            </div>
            <div id="mainbar_help" class="mainbar-button subdued persist" title="Help Files">
                <img src="<?php echo plugins_url( 'css/images/mainbar_help.png' , plugin_basename(__FILE__) ); ?>" />
            </div>
            <div id="mainbar_info" class="mainbar-button subdued" title="Author Info">
                <img src="<?php echo plugins_url( 'css/images/mainbar_info.png' , plugin_basename(__FILE__) ); ?>" />
            </div>
            <div class="mainbar_seperator"></div>
            <div id="mainbar_nukeit" class="mainbar-button subdued" title="Nuke All Fonts">
                <img src="<?php echo plugins_url( 'css/images/mainbar_nukeit.png' , plugin_basename(__FILE__) ); ?>" />
            </div>
            <div id="mainbar_settings" class="mainbar-button subdued" title="Settings &amp; Options">
                <img src="<?php echo plugins_url( 'css/images/mainbar_settings.png' , plugin_basename(__FILE__) ); ?>" />
            </div>
        </div>
    </div>
</div>

<div id="fonts_container">
    
    <div id="font_content">
    
        <br />
        
        <div id="font_data_container">
            
            <?php include dirname( __FILE__ ) .'/ajax/google_fonts.php'; ?>
            
        </div>
    
    </div>
    
</div>