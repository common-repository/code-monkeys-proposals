<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 1/6/2018
 * Time: 8:07 PM
 */

/*** ADD A PROPOSAL ***/
function code_monkeys_proposals_add_proposal() {
    if(isset($_REQUEST)) {
        $newTabNum = sanitize_text_field($_REQUEST['new_tab_num']);
        $nonce = sanitize_text_field($_REQUEST['nonce']);

        if(!wp_verify_nonce($nonce, 'cm-proposals-nonce')) {
            echo 'Nonce invalid';
        } else {
            // SET TEMPLATE WYSIWYG SETTING
            $templateWysiwygSettings = array(
                'teeny' => true,
                'textarea_rows' => 30,
                'textarea_name' => 'template_' . $newTabNum,
                'tabindex' => 1
            );

            ob_start(); // Start output buffer

            // Print the editor
            wp_editor( '', 'cm_proposals_template_' . $newTabNum, $templateWysiwygSettings );

            // Store the printed data in $editor variable
            $templateEditor = ob_get_clean();

            // SET PROPOSAL WYSIWYG SETTINGS
            $proposalWysiwygSettings = array(
                'teeny' => true,
                'textarea_rows' => 30,
                'textarea_name' => 'proposal_' . $newTabNum,
                'tabindex' => 1
            );

            ob_start(); // Start output buffer

            // Print the editor
            wp_editor( '', 'cm_proposals_proposal_' . $newTabNum, $proposalWysiwygSettings );

            // Store the printed data in $editor variable
            $proposalEditor = ob_get_clean();

            $tabContent = '
                <section data="tour-tab-' . $newTabNum . '" class="cm-proposals-accordian-tab-link">
                    NEW PROPOSAL
                </section>
                <div data="tour-tab-' . $newTabNum . '" class="cm-proposals-tour-tab-content">
                    <div class="cm-proposals-tab-content-top">
                        <div class="cm-proposals-toggle-button">
                            <label class="cm-proposals-switch">
                                <input type="checkbox" checked="checked">
                                <span class="cm-proposals-slider"></span>
                            </label>
                        </div>
                    </div>
                    <div class="cm-proposals-template">
                        <div class="cm-proposals-template-top">
                            <input type="text" class="cm-proposals-template-name" placeholder="TEMPLATE NAME" />
                        </div>
                        <div id="cm-proposals-template-wysiwyg-wrapper-' . $newTabNum . '">
                            ' . $templateEditor . '
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="cm-proposals-proposal">
                        <div class="cm-proposals-form-wrapper">
                            <div class="cm_proposals_grid_row">
                                <div class="cm_proposals_col_25">
                                    <div class="cm-proposals-placeholder-inputs">
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="Add Placeholder Below" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm-proposals-add-placeholder-input">
                                        <i class="material-icons">library_add</i> <span class="cm-proposals-button-text">NEW PLACEHOLDER</span>
                                    </div>
                                </div>
                                <div class="cm_proposals_col_75">
                                    <div class="cm-proposals-form">
                                        <div id="cm-proposals-proposal-wysiwyg-wrapper-' . $newTabNum . '">
                                            ' . $proposalEditor . '
                                        </div>
                                        <div class="cm-proposal-hidden-form-wrapper" style="display:none;">
                                            <div class="cm-proposal-hidden-form"></div>
                                        </div>
                                        <div class="cm-proposals-reset-proposal cm-proposals-button">
                                            <div class="cm-proposals-button-inner">
                                                <i class="material-icons">autorenew</i> <span class="cm-proposals-button-text">RESET</span>
                                            </div>
                                        </div>
                                        <div class="cm-proposals-generate-pdf cm-proposals-button">
                                            <div class="cm-proposals-button-inner">
                                                <i class="material-icons">picture_as_pdf</i> GENERATE PDF
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div class="cm-proposals-pdf-notice"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';

            echo $tabContent;
        }
    }

    die();
}
add_action( 'wp_ajax_code_monkeys_proposals_add_proposal', 'code_monkeys_proposals_add_proposal' );
add_action( 'wp_ajax_nopriv_code_monkeys_proposals_add_proposal', 'code_monkeys_proposals_add_proposal' );

/*** GENERATE PDF ***/
function code_monkeys_proposals_generate_pdf() {
    if(isset($_REQUEST)) {
        //$clientName = sanitize_text_field($_REQUEST['client_name']);
        //$clientName = str_replace(" ","-",$clientName);
        //$projectName = sanitize_text_field($_REQUEST['project_name']);
        //$projectName = str_replace(" ","-",$projectName); TODO: FIND A WAY TO PASS THESE VALUES
        $templateName = sanitize_text_field($_REQUEST['template_name']);
        $templateName = str_replace(" ","-",$templateName);
        $proposal = $_REQUEST['proposal'];
        $nonce = sanitize_text_field($_REQUEST['nonce']);

        // REPLACE [PAGEBREAK] PLACEHOLDER WITH <pagebreak /> - NEEDED BECAUSE WYSIWYG STRIPS NON-STANDARD HTML TAGS
        $proposal = str_replace("[PAGEBREAK]", "<pagebreak />", $proposal);

        if(!wp_verify_nonce($nonce, 'cm-proposals-nonce')) {
            echo 'Nonce invalid';
        } else {
            // Require composer autoload
            require_once plugin_dir_path(__FILE__) . 'includes/vendor/autoload.php';

            // Write some HTML code:
            ob_start();

            ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <title><?php echo $templateName; ?></title>
                <!--Add your CSS here-->
                <style>
                    body {
                        font-size: 10px;
                    }

                    .pdf-body {
                        margin-top: 15px;
                    }

                    table {
                        border-collapse: collapse;
                    }

                    table, th, td {
                        border: 1px solid #444;
                    }

                    td {
                        padding: 15px;
                    }
                </style>
            </head>
            <body>
            <div class="pdf-body">
                <?php echo stripslashes($proposal); ?>
            </div>
            </body>
            </html>
            <?php

            $HTMLoutput = ob_get_contents();
            ob_end_clean();

            $save = $HTMLoutput;

            $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
            $fontDirs = $defaultConfig['fontDir'];

            $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
            $fontData = $defaultFontConfig['fontdata'];

            $mpdf = new \Mpdf\Mpdf([
                'fontDir' => array_merge($fontDirs, [
                    get_stylesheet_directory() . 'custom_fonts',
                ]),
                'fontdata' => $fontData + [
                        'aldrich' => [
                            'R' => 'Aldrich-Regular.ttf',
                        ],
                        'opensans' => [
                            'R' => 'OpenSans-Regular.ttf',
                            'B' => 'OpenSans-Bold.ttf',
                            'I' => 'OpenSans-Italic.ttf'
                        ],
                    ],
                'default_font' => 'opensans'
            ]);

            $filePath = plugin_dir_path(__FILE__) . 'proposals/';
            $urlPath = plugin_dir_url( __FILE__ ) . '/proposals/';
            $fileName = $templateName . '-' . time() . '.pdf';

            $mpdf->WriteHTML($HTMLoutput);
            $mpdf->Output($filePath . $fileName, 'F');

            echo '<a href="' . $urlPath . $fileName . '" target="_blank">OPEN PDF</a>';
        }
    }

    die();
}
add_action( 'wp_ajax_code_monkeys_proposals_generate_pdf', 'code_monkeys_proposals_generate_pdf' );
add_action( 'wp_ajax_nopriv_code_monkeys_proposals_generate_pdf', 'code_monkeys_proposals_generate_pdf' );

/*** GENERATE PDF ***/
function code_monkeys_proposals_get_pdfs() {
    if(isset($_REQUEST)) {
        $nonce = sanitize_text_field($_REQUEST['nonce']);

        if(!wp_verify_nonce($nonce, 'cm-proposals-nonce')) {
            echo 'Nonce invalid';
        } else {
            $filesPath    = plugin_dir_path(__FILE__) . 'proposals/';
            $urlPath = plugin_dir_url( __FILE__ ) . '/proposals/';
            //$files = scandir($filesPath);
            $files = array_diff(scandir($filesPath), array('.', '..'));

            $links = array();
            foreach($files as $file) {
                $links[] = '
                    <li class="cm-proposals-pdf-link">
                        <i class="material-icons cm-proposals-pdf-delete" title="Delete PDF" data="' . $file . '">delete_forever</i> <a href="' . $urlPath . $file . '" target="_blank">' . $file . '</a>
                    </li>
                ';
            }

            $proposals = '
                <ul>
                    ' . implode('', $links) . '
                </ul>
            ';

            echo $proposals;
        }
    }

    die();
}
add_action( 'wp_ajax_code_monkeys_proposals_get_pdfs', 'code_monkeys_proposals_get_pdfs' );
add_action( 'wp_ajax_nopriv_code_monkeys_proposals_get_pdfs', 'code_monkeys_proposals_get_pdfs' );

/*** DELETE PDF ***/
function code_monkeys_proposals_delete_pdf() {
    if(isset($_REQUEST)) {
        $file = sanitize_text_field($_REQUEST['file']);
        $nonce = sanitize_text_field($_REQUEST['nonce']);
        $filesPath = plugin_dir_path(__FILE__) . 'proposals/';

        if(!wp_verify_nonce($nonce, 'cm-proposals-nonce')) {
            echo 'Nonce invalid';
        } else {
            unlink($filesPath . $file);

            echo 'File Deleted';
        }
    }

    die();
}
add_action( 'wp_ajax_code_monkeys_proposals_delete_pdf', 'code_monkeys_proposals_delete_pdf' );
add_action( 'wp_ajax_nopriv_code_monkeys_proposals_delete_pdf', 'code_monkeys_proposals_delete_pdf' );