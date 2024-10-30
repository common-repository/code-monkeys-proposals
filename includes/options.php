<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 11/28/2017
 * Time: 5:57 PM
 */

/*** CREATE ADMIN SETTING MENU ITEM ***/
function code_monkeys_proposals_menu() {
    add_options_page('Code Monkeys Proposals Options', 'Proposals', 'administrator', __FILE__, 'code_monkeys_proposals_settings_page', '');
}
add_action( 'admin_menu', 'code_monkeys_proposals_menu' );

/*** REGISTER SETTINGS OPTIONS ***/
function register_code_monkeys_proposals_settings() {
    register_setting('code-monkeys-proposals-settings-group', 'proposals');
}
add_action( 'admin_init', 'register_code_monkeys_proposals_settings' );

/*** CREATE SETTINGS PAGE ***/
function code_monkeys_proposals_settings_page() {
    ?>
    <div class="wrap">
        <h1>CM Proposals Settings</h1>
        Nothing here...
    </div>
    <?php
}