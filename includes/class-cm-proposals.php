<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 1/6/2018
 * Time: 4:24 PM
 */

class codeMonkeysProposals {
    public function getTabs() {
        // GET JSON OBJECT ARRAY
        $savedProposals = json_decode(get_option('proposals'));

        $tabs = array();
        $i = 1;
        if(empty($savedProposals)) {
            $tabs[] = '
                <li data="tour-tab-1" class="cm-proposals-tour-tab-link cm-proposals-active-tour-tab-link">
                    <div class="cm-proposals-tour-tab-link-inner">
                        <i class="material-icons cm-proposals-delete-proposal" title="Delete Placeholder">delete_forever</i> <span class="cm-proposals-tab-name">SUBSCRIPTION WEBSITE</span>
                    </div>
                </li>
            ';
        } else {
            foreach($savedProposals as $savedProposal) {
                if($i == 1) {
                    $activeClass = ' cm-proposals-active-tour-tab-link';
                } else {
                    $activeClass = '';
                }

                if(!$savedProposal->template_name) {
                    $templateName = 'NEW PROPOSAL';
                } else {
                    $templateName = $savedProposal->template_name;
                }

                $tabs[] = '
                <li data="' . $savedProposal->tab . '" class="cm-proposals-tour-tab-link' . $activeClass . '">
                    <div class="cm-proposals-tour-tab-link-inner">
                        <i class="material-icons cm-proposals-delete-proposal" title="Delete Placeholder">delete_forever</i> <span class="cm-proposals-tab-name">' . $templateName . '</span>
                    </div>
                </li>
            ';

                $i++;
            }
        }

        return implode('', $tabs);
    }

    public function getTabContent() {
        // GET JSON OBJECT ARRAY
        $savedProposals = json_decode(get_option('proposals'));

        $tabContent = array();
        $i = 1;

        if(empty($savedProposals)) {
            //* REQUIRE STARTER PROPOSAL
            require(plugin_dir_path(__FILE__) . '../forms/starter-proposal.php');

            // SET TEMPLATE WYSIWYG SETTING
            $templateWysiwygSettings = array(
                'teeny' => true,
                'textarea_rows' => 30,
                'textarea_name' => 'template_1',
                'tabindex' => 1
            );

            ob_start(); // Start output buffer

            // Print the editor
            wp_editor($starterProposal, 'cm_proposals_template_1', $templateWysiwygSettings);

            // Store the printed data in $editor variable
            $templateEditor = ob_get_clean();

            // SET PROPOSAL WYSIWYG SETTINGS
            $proposalWysiwygSettings = array(
                'teeny' => true,
                'textarea_rows' => 30,
                'textarea_name' => 'proposal_1',
                'tabindex' => 1
            );

            ob_start(); // Start output buffer

            // Print the editor
            wp_editor($starterProposal, 'cm_proposals_proposal_1', $proposalWysiwygSettings);

            // Store the printed data in $editor variable
            $proposalEditor = ob_get_clean();

            $tabContent[] = '
                <section data="tour-tab-1" class="cm-proposals-accordian-tab-link cm-proposals-active-accordian-tab-link">
                    SUBSCRIPTION WEBSITE
                </section>
                <div data="tour-tab-1" class="cm-proposals-tour-tab-content">
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
                            <input type="text" class="cm-proposals-template-name" placeholder="TEMPLATE NAME" value="SUBSCRIPTION WEBSITE" />
                        </div>
                        <div class="cm-proposals-template-wysiwyg-wrapper">
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
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[PROJECT NAME]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[PROJECT NAME]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT COMPANY NAME]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT COMPANY NAME]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT FIRST NAME]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT FIRST NAME]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT LAST NAME]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT LAST NAME]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT PHONE]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT PHONE]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT EMAIL]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT EMAIL]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT STREET ADDRESS]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT STREET ADDRESS]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT CITY]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT CITY]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT STATE]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT STATE]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[CLIENT ZIP CODE]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[CLIENT ZIP CODE]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[OUR COMPANY NAME]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[OUR COMPANY NAME]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[OUR PHONE]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[OUR PHONE]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[OUR EMAIL]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[OUR EMAIL]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[OUR WEBSITE]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[OUR WEBSITE]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                        <div class="cm-proposals-placeholder-input-wrapper">
                                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="[OUR PROJECT MANAGER]" />
                                            <div class="cm-proposals-placeholder-option">
                                                <input type="text" class="cm-proposals-placeholder-option-input" value="[OUR PROJECT MANAGER]" placeholder="Set Placeholder" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm-proposals-add-placeholder-input">
                                        <i class="material-icons">library_add</i> <span class="cm-proposals-button-text">NEW PLACEHOLDER</span>
                                    </div>
                                    <div class="cm-proposals-placeholder-key">
                                        <div class="cm-proposals-placeholder-key-title">
                                            PDF PLACEHOLDERS:
                                        </div>
                                        <div class="cm-proposals-placeholder-key-keys">
                                            [PAGEBREAK] - Adds a new page in the PDF
                                        </div>
                                    </div>
                                </div>
                                <div class="cm_proposals_col_75">
                                    <div class="cm-proposals-form">
                                        <div class="cm-proposals-proposal-wysiwyg-wrapper">
                                            ' . $proposalEditor . '
                                        </div>
                                        <div class="cm-proposal-hidden-form-wrapper" style="display:none;">
                                            <div class="cm-proposal-hidden-form">
                                            </div>
                                        </div>
                                        <div class="cm-proposals-reset-proposal cm-proposals-button">
                                            <div class="cm-proposals-button-inner">
                                                <i class="material-icons">autorenew</i> <span class="cm-proposals-button-text">RESET</span>
                                            </div>
                                        </div>
                                        <div class="cm-proposals-generate-pdf cm-proposals-button">
                                            <div class="cm-proposals-button-inner">
                                                <i class="material-icons">picture_as_pdf</i> <span class="cm-proposals-button-text">GENERATE PDF</span>
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
        } else {
            foreach ($savedProposals as $savedProposal) {
                if ($i == 1) {
                    $activeClass = ' cm-proposals-active-accordian-tab-link';
                } else {
                    $activeClass = '';
                }

                if (!$savedProposal->template_name) {
                    $templateName = 'No Name';
                } else {
                    $templateName = $savedProposal->template_name;
                }

                $placeholdersArr = $savedProposal->placeholders;

                // LOOP PLACEHOLDERS
                $placeholders = array();
                foreach ($placeholdersArr as $placeholder) {
                    $placeholders[] = '
                        <div class="cm-proposals-placeholder-input-wrapper">
                            <i class="material-icons cm-proposals-placeholder-toggle" title="Edit Placeholder">create</i> <i class="material-icons cm-proposals-placeholder-delete" title="Delete Placeholder">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="' . $placeholder->placeholder . '" value="' . $placeholder->value . '" />
                            <div class="cm-proposals-placeholder-option">
                                <input type="text" class="cm-proposals-placeholder-option-input" value="' . $placeholder->placeholder . '" placeholder="...Placeholder" />
                            </div>
                        </div>
                    ';
                }

                // SET TEMPLATE WYSIWYG SETTING
                $templateWysiwygSettings = array(
                    'teeny' => true,
                    'textarea_rows' => 30,
                    'textarea_name' => 'template_' . $i,
                    'tabindex' => 1
                );

                ob_start(); // Start output buffer

                // Print the editor
                wp_editor($savedProposal->template_wysiwyg, 'cm_proposals_template_' . $i, $templateWysiwygSettings);

                // Store the printed data in $editor variable
                $templateEditor = ob_get_clean();

                // SET PROPOSAL WYSIWYG SETTINGS
                $proposalWysiwygSettings = array(
                    'teeny' => true,
                    'textarea_rows' => 30,
                    'textarea_name' => 'proposal_' . $i,
                    'tabindex' => 1
                );

                ob_start(); // Start output buffer

                // Print the editor
                wp_editor($savedProposal->proposal_wysiwyg, 'cm_proposals_proposal_' . $i, $proposalWysiwygSettings);

                // Store the printed data in $editor variable
                $proposalEditor = ob_get_clean();

                $tabContent[] = '
                    <section data="tour-tab-' . $i . '" class="cm-proposals-accordian-tab-link' . $activeClass . '">
                        ' . $templateName . '
                    </section>
                    <div data="tour-tab-' . $i . '" class="cm-proposals-tour-tab-content">
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
                                <input type="text" class="cm-proposals-template-name" placeholder="TEMPLATE NAME" value="' . $templateName . '" />
                            </div>
                            <div class="cm-proposals-template-wysiwyg-wrapper">
                                ' . $templateEditor . '
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="cm-proposals-proposal">
                            <div class="cm-proposals-form-wrapper">
                                <div class="cm_proposals_grid_row">
                                    <div class="cm_proposals_col_25">
                                        <div class="cm-proposals-placeholder-inputs">
                                            ' . implode('', $placeholders) . '
                                        </div>
                                        <div class="cm-proposals-add-placeholder-input">
                                            <i class="material-icons">library_add</i> <span class="cm-proposals-button-text">NEW PLACEHOLDER</span>
                                        </div>
                                        <div class="cm-proposals-placeholder-key">
                                            <div class="cm-proposals-placeholder-key-title">
                                                PDF PLACEHOLDERS:
                                            </div>
                                            <div class="cm-proposals-placeholder-key-keys">
                                                [PAGEBREAK] - Adds a new page in the PDF
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cm_proposals_col_75">
                                        <div class="cm-proposals-form">
                                            <div class="cm-proposals-proposal-wysiwyg-wrapper">
                                                ' . $proposalEditor . '
                                            </div>
                                            <div class="cm-proposal-hidden-form-wrapper" style="display:none;">
                                                <div class="cm-proposal-hidden-form">
                                                </div>
                                            </div>
                                            <div class="cm-proposals-reset-proposal cm-proposals-button">
                                                <div class="cm-proposals-button-inner">
                                                    <i class="material-icons">autorenew</i> <span class="cm-proposals-button-text">RESET</span>
                                                </div>
                                            </div>
                                            <div class="cm-proposals-generate-pdf cm-proposals-button">
                                                <div class="cm-proposals-button-inner">
                                                    <i class="material-icons">picture_as_pdf</i> <span class="cm-proposals-button-text">GENERATE PDF</span>
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

                $i++;
            }
        }

        return implode('', $tabContent);
    }
}