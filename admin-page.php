<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 1/6/2018
 * Time: 1:40 PM
 */

//* ADD MENU ITEM
function code_monkeys_proposals_admin_menu() {
    add_menu_page( 'Code Monkeys Proposals', 'Proposals', 'administrator', 'cm-proposals.php', 'code_monkeys_proposals_admin_page', 'dashicons-analytics', 6  );
}
add_action('admin_menu', 'code_monkeys_proposals_admin_menu');

//* CREATE ADMIN PAGE
function code_monkeys_proposals_admin_page(){
    // INSTANTIATE THE CLASS
    $cmProposals = new codeMonkeysProposals;
    ?>
    <div class="wrap code-monkeys-proposals">
        <h2 class="cm-proposals-page-title">Code Monkeys Proposals</h2>
        <div class="cm_proposals_grid_row_nogap">
            <div class="cm-proposals-tour-tab-menu cm_proposals_col_25">
                <ul>
                    <?php
                    echo $cmProposals->getTabs();
                    ?>
                </ul>
                <div id="cm-proposals-add-proposal">
                    <i class="material-icons">library_add</i> <span class="cm-proposals-button-text">NEW PROPOSAL</span>
                </div>
                <form id="code_monkeys_proposals_forms_options" method="post" action="options.php">
                    <?php
                    settings_fields('code-monkeys-proposals-settings-group');
                    do_settings_sections('code-monkeys-proposals-settings-group');
                    ?>
                    <input id="cm_proposals_forms_options_proposals" type="hidden" name="proposals" value="" />
                    <div class="cm-proposals-save cm-proposals-button">
                        <div class="cm-proposals-button-inner">
                            <i class="material-icons">save</i> <span class="cm-proposals-button-text">SAVE ALL</span>
                        </div>
                    </div>
                </form>
                <div id="cm-proposals-notice"></div>
                <div id="cm-proposals-view-pdfs" class="cm-proposals-ghost-button">
                    <div class="cm-proposals-button-inner">
                        VIEW GENERATED PROPOSALS
                    </div>
                </div>
                <div class="cm-proposals-codemonkeys-box grid_row">
                    <div class="cm-proposals-codemonkeys-help">
                        <p>
                            NEED DEVELOPMENT HELP?
                        </p>
                        <p>
                            CALL CODE MONKEYS!
                        </p>
                        <p>
                            <a href="https://www.codemonkeysllc.com" target="_blank" class="cm-proposals-ghost-button">
                                <span class="cm-proposals-button-inner">CLICK HERE FOR DETAILS</span>
                            </a>
                        </p>
                    </div>
                    <div class="cm-proposals-height-100"></div>
                </div>
                <div class="cm-proposals-plugin-instructions">
                    <i class="material-icons">help_outline</i> <a href="https://www.codemonkeysllc.com/wordpress-plugins/proposals/how-to.html" target="_blank">HOW TO USE THIS PLUGIN</a>
                </div>
            </div>
            <div class="cm-proposals-tour-tab-content-wrapper cm_proposals_col_75">
                <?php
                echo $cmProposals->getTabContent();
                ?>
            </div>
        </div>
    </div>
    <?php
}