<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 11/29/2017
 * Time: 12:36 PM
 */

//* ENQUEUE ADMIN SCRIPTS AND STYLES
function code_monkeys_proposals_enqueue_admin_scripts() {
    // ENQUEUE CSS
    $gFonts = array(
        "Roboto+Condensed:300,300i,400,400i,700,700i",
        "Roboto:100,100i,200,200i,300,300i,400,400i,500,500i,700,700i,900,900i"
    );

    $gf_args = array(
        'family' => urlencode(implode("|",$gFonts)),
        'subset' => 'latin,latin-ext'
    );
    wp_enqueue_style('google_fonts', add_query_arg($gf_args, "//fonts.googleapis.com/css"), array(), null);

    // ENQUEUE GOOGLE MATERIAL.IO ICONS
    wp_enqueue_style( 'materialIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

    // ENQUEUE MAIN PLUGIN CSS
    wp_enqueue_style( 'cmProposalsAdminStyle', plugin_dir_url(__FILE__) . '/css/admin-style.css' );

    // ENQUEUE SCRIPT
    wp_enqueue_script( 'jquery-form' );
    wp_enqueue_script( 'cmProposalsAdminScript', plugin_dir_url(__FILE__) . '/js/admin-script.js', array('jquery'), '2.0', true );

    // PASS PHP DATA TO SCRIPT FILE
    global $post;
    wp_localize_script('cmProposalsAdminScript', 'cmProposalsAdminScript', array(
        'pluginUrl' => plugin_dir_url(__FILE__),
        'siteUrl' =>  get_site_url(),
        'nonce' => wp_create_nonce( "cm-proposals-nonce" )
    ));

    // LOCALIZE CUSTOM JS FILE TO USE WITH AJAX
    wp_localize_script( 'cmProposalsAdminScript', 'ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
}
add_action( 'admin_enqueue_scripts', 'code_monkeys_proposals_enqueue_admin_scripts' );