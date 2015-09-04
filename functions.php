<?php

/* Admin menu */
function psmu_maintenance_menu() {  
    add_submenu_page('options-general.php', 'Maintenance', 'Maintenance', 'manage_options', 'psmu-maintenance', 'psmu_maintenance_panel');
}

/* Checkboxes */
function psmu_maintenance_is_checked($param){
    $param = sanitize_text_field($param);
    $submit = sanitize_text_field("psmu_maintenance_submit");
    if ( isset($_POST[$submit]) ) {
        if ( isset($_POST[$param]) )
            $check = 'checked';
        else
            $check = '';
            update_option($param, $check);
    }
}

/* Show maintain page to site users */
if (get_option("psmu_maintenance_check")=='checked') add_action('template_redirect', 'psmu_maintenance_mode_page');
function psmu_maintenance_mode_page() {
    if ( !current_user_can( 'manage_options' ) ) {   
    $protocol = "HTTP/1.0";
    if ( "HTTP/1.1" == $_SERVER["SERVER_PROTOCOL"] ) $protocol = "HTTP/1.1";
    @header("$protocol 503 Service Unavailable", true, 503);
    @header("Retry-After: 3600");     
    die("<html><head><title>Maintenance: 503 Service Temporarily Unavailable</title></head><body><center><div style='width:290px;background:#fafafa;border:1px solid #f7f7f7;padding-left:20px;padding-right:20px;padding-bottom:20px;text-align:justify'><center><h1>Maintenance Notice</h1></center>The website you are trying to visit has been placed into maintenance mode by it's owner. Please check back a little later. Thank you.</div></center></body></html>");
    }
}
