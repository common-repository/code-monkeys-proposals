/**
 * Created by Spencer on 11/5/2016.
 *
 * Use cmProposalsAdminScript.pluginUrl for the plugin url path
 *
 */


jQuery(document).ready(function() {
    /*** TOGGLE DROP-DOWNS ***/
    jQuery(document).on('click', '.cm-proposals-dd-link', function () {
        var content = jQuery(this).parent().find('.cm-proposals-dd-content');
        jQuery('.cm-proposals-dd-content').each(function () {
            if(jQuery(this).is(content)) {
                content.slideToggle();
            } else {
                jQuery(this).slideUp();
            }
        });
    });

    /*** TABS ***/
    jQuery(document).on('click', '.cm-proposals-tour-tab-link', function() {
        // Variable Declarations
        var tabData = jQuery(this).attr('data');
        var activeTourTab = jQuery('.cm-proposals-active-tour-tab-link');
        var tourTabSections = jQuery('.cm-proposals-tour-tab-content');
        var sectionToOpen = jQuery(this).parent().parent().parent().find('.cm-proposals-tour-tab-content[data="' + tabData + '"]');

        if (!sectionToOpen.is(":visible")) {
            // Hide all tour tabs & display new tab
            tourTabSections.hide();
            sectionToOpen.fadeIn();

            // Set clicked link to active
            activeTourTab.removeClass('cm-proposals-active-tour-tab-link');
            jQuery(this).addClass('cm-proposals-active-tour-tab-link');
        }
    });

    jQuery(document).on('click', '.cm-proposals-accordian-tab-link', function() {
        // Variable Declarations
        var tabData = jQuery(this).attr('data');
        var activeTourTab = jQuery('.cm-proposals-active-accordian-tab-link');
        var tourTabSections = jQuery('.cm-proposals-tour-tab-content');
        var sectionToOpen = jQuery(this).next('.cm-proposals-tour-tab-content[data="' + tabData + '"]');

        if (!sectionToOpen.is(":visible")) {
            // Hide all tour tabs & display new tab
            tourTabSections.slideUp();
            sectionToOpen.slideDown();

            // Set clicked link to active
            activeTourTab.removeClass('cm-proposals-active-accordian-tab-link');
            jQuery(this).addClass('cm-proposals-active-accordian-tab-link');
        } else {
            tourTabSections.slideUp();
            activeTourTab.removeClass('cm-proposals-active-accordian-tab-link');
        }
    });

    /*** TEMPLATE/PROPOSAL TOGGLE SWITCH ***/
    jQuery(document).on('change', '.cm-proposals-switch input[type=checkbox]', function() {
        var parent = jQuery(this).parent().parent().parent().parent();

        if(jQuery(this).is(':checked')) {
            parent.find('.cm-proposals-template').fadeOut().promise().done(function() {
                parent.find('.cm-proposals-proposal').fadeIn()
            });
        } else {
            parent.find('.cm-proposals-proposal').fadeOut().promise().done(function() {
                parent.find('.cm-proposals-template').fadeIn()
            });
        }
    });

    /*** UPDATE PLACEHOLDER FIELDS ***/
    jQuery(document).on('keyup', '.cm-proposals-placeholder-input', function() {
        var placeholder = jQuery(this).attr('placeholder');
        var value = jQuery(this).val();
        var parentEle = jQuery(this).parent().parent().parent().parent();
        var proposal = parentEle.find('.cm-proposal-hidden-form');

        // MAKE SURE VALUE IS NOT EMPTY (THIS HAPPENS ON TAB)
        if(value) {
            // GET WYSIWYG EDITOR ID
            var wysiwygId = parentEle.find('textarea').attr('id');

            // GET CURRENT WYSIWYG VALUE
            var current = tinyMCE.get(wysiwygId).getContent();

            // UPDATE HIDDEN FORM
            proposal.html(current).promise().done(function() {
                // STRIP SPECIAL CHARACTERS AND SPACES FROM THE PLACEHOLDER STRING
                var strippedPlaceholder = placeholder.replace(/[^A-Z0-9]/ig, '').trim();

                // UPDATE PLACEHOLDERS WITH VALUE AND WRAP IN CLASS USING STRIPPED PLACEHOLDER
                proposal.html(proposal.html().split(placeholder).join('<span class="' + strippedPlaceholder + '" style="font-weight:bold;">' + value + '</span>'));

                // FIND ELEMENTS TO UPDATE USING STRIPPED PLACEHOLDER AS CLASS ATTRIBUTE
                var updateEls = proposal.find('[class="' + strippedPlaceholder + '"]');

                // LOOP THROUGH ELEMENTS USING STRIPPED PLACEHOLDER CLASS AND UPDATE
                updateEls.each(function() {
                    jQuery(this).html(value);
                });

                // ADD UPDATED CONTENT TO WYSIWYG EDITOR
                tinyMCE.get(wysiwygId).setContent(proposal.html());
                tinyMCE.triggerSave();
            });
        }
    });

    /*** GENERATE PDF ***/
    jQuery(document).on('click', '.cm-proposals-generate-pdf', function() {
        var parent = jQuery(this).parent().parent().parent();
        var tabParent = parent.parent().parent().parent().parent().parent();
        //var clientName = parent.find('.cm-proposals-form-client-name').val();
        //var projectName = parent.find('.cm-proposals-form-project-name').val(); TODO: FIND A WAY TO GET THIS DATA PASSED IN
        var templateName = tabParent.find('.cm-proposals-template-name').val();
        var wysiwygId = parent.find('textarea').attr('id');
        var proposal = tinyMCE.get(wysiwygId).getContent();
        var noticeEle = jQuery(this).parent().parent().find('.cm-proposals-pdf-notice');
        var nonce = cmProposalsAdminScript.nonce;

        // SHOW LOADING BAR
        noticeEle.html('<div class="cm-proposals-progress-wrapper"><div class="cm-proposals-progress"><div class="cm-proposals-progress-bar"><!--    <div class="cm-hipaa-forms-progress-label">10%</div>--></div></div></div>');
        cmProposalsProgress();

        // CREATE PDF
        jQuery.ajax({
            method: 'POST',
            url: ajax.ajax_url,
            data: {
                'action': 'code_monkeys_proposals_generate_pdf',
                'template_name': templateName,
                'proposal': proposal,
                'nonce': nonce
            },
            success: function (data) {
                noticeEle.html(data);
            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    /*** ADD NEW PROPOSAL TAB ***/
    jQuery(document).on('click', '#cm-proposals-add-proposal', function() {
        var curTabCount = jQuery('.cm-proposals-tour-tab-menu ul li').length;
        var newTabNum = curTabCount+1;
        var nonce = cmProposalsAdminScript.nonce;

        // APPEND NEW TAB
        jQuery('.cm-proposals-tour-tab-menu ul').append('<li data="tour-tab-' + newTabNum + '" class="cm-proposals-tour-tab-link"><div class="cm-proposals-tour-tab-link-inner"><i class="material-icons cm-proposals-delete-proposal" title="Delete Placeholder">delete_forever</i> <span class="cm-proposals-tab-name">NEW PROPOSAL</span></div></li>');

        // SET NEW TAB CONTENT
        jQuery.ajax({
            method: 'POST',
            url: ajax.ajax_url,
            data: {
                'action': 'code_monkeys_proposals_add_proposal',
                'new_tab_num': newTabNum,
                'nonce': nonce
            },
            success: function (data) {
                // APPEND NEW TAB CONTENT
                jQuery('.cm-proposals-tour-tab-content-wrapper').append(data);

                // UNSET NEW EDITORS
                tinymce.execCommand( 'mceRemoveEditor', false, 'cm_proposals_template_' + newTabNum );
                tinymce.execCommand( 'mceRemoveEditor', false, 'cm_proposals_proposal_' + newTabNum );

                // RESET NEW EDITORS
                tinymce.execCommand( 'mceAddEditor', false, 'cm_proposals_template_' + newTabNum );
                tinymce.execCommand( 'mceAddEditor', false, 'cm_proposals_proposal_' + newTabNum );

                // SHOW THE NEW TAB CONTENT
                jQuery('li[data=tour-tab-' + newTabNum + ']').trigger('click');

                jQuery('div[data=tour-tab-' + newTabNum + '] .cm-proposals-switch').trigger('click');
            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    /*** DELETE PROPOSAL ***/
    jQuery(document).on('click', '.cm-proposals-delete-proposal', function(e) {
        // PREVENT TAB FROM BECOMING ACTIVE
        e.stopPropagation();

        var tab = jQuery(this).parent().parent();
        var tabData = tab.attr('data');
        var accordionTab = jQuery('section[data="' + tabData + '"]');
        var tabContent = jQuery('div[data="' + tabData + '"]');
        var isActive;

        // CHECK IF THIS TAB IS ACTIVE
        if(tab.hasClass('cm-proposals-active-tour-tab-link')) {
            console.log('is active');
            isActive = 1;
        }

        tabContent.remove();
        accordionTab.remove();
        tab.remove();

        console.log(isActive);
        if(isActive === 1) {
            console.log('removing');
            jQuery('.cm-proposals-tour-tab-link').first().trigger('click');
        }
    });

    /*** ADD NEW PLACEHOLDER INPUT ***/
    jQuery(document).on('click', '.cm-proposals-add-placeholder-input', function() {
        var inputsWrapper = jQuery(this).parent().find('.cm-proposals-placeholder-inputs');

        // APPEND NEW PLACEHOLDER INPUT
        inputsWrapper.append('<div class="cm-proposals-placeholder-input-wrapper"><i class="material-icons cm-proposals-placeholder-toggle" title="Toggle Form">create</i> <i class="material-icons cm-proposals-placeholder-delete">delete_forever</i> <input type="text" class="cm-proposals-placeholder-input" placeholder="...Add Placeholder Below" /><div class="cm-proposals-placeholder-option"><input type="text" class="cm-proposals-placeholder-option-input" value="" placeholder="Set Placeholder" /></div></div>').promise().done(function() {
            // TRIGGER THE EDIT FIELD
            inputsWrapper.find('.cm-proposals-placeholder-toggle').last().trigger('click');
        });
    });

    /*** TOGGLE PLACEHOLDER OPTIONS ***/
    jQuery(document).on('click', '.cm-proposals-placeholder-toggle', function() {
        jQuery(this).parent().find('.cm-proposals-placeholder-option').slideToggle();
    });

    /*** UPDATE PLACEHOLDER ***/
    jQuery(document).on('keyup', '.cm-proposals-placeholder-option-input', function() {
        var input = jQuery(this).parent().parent().find('.cm-proposals-placeholder-input');

        input.attr('placeholder', jQuery(this).val());
    });

    /*** DELETE PLACEHOLDER ***/
    jQuery(document).on('click', '.cm-proposals-placeholder-delete', function() {
        jQuery(this).parent().remove();
    });

    /*** UPDATE TEMPLATE/TAB NAME ***/
    jQuery(document).on('keyup', '.cm-proposals-template-name', function() {
        var data = jQuery(this).parent().parent().parent().attr('data');
        var tabNameEle = jQuery('.cm-proposals-tour-tab-menu li[data=' + data + '] .cm-proposals-tab-name');
        var accordionEle = jQuery('section[data=' + data + ']');

        // UPDATE TAB NAME
        tabNameEle.html(jQuery(this).val());

        // UPDATE ACCORDION NAME
        accordionEle.html(jQuery(this).val());
    });

    /*** RESET PROPOSAL ***/
    jQuery(document).on('click', '.cm-proposals-reset-proposal', function() {
        var parentTab = jQuery(this).parent().parent().parent().parent().parent().parent();
        var templateWrapper = parentTab.find('.cm-proposals-template');
        var proposalWrapper = parentTab.find('.cm-proposals-proposal');
        var placeholders = proposalWrapper.find('input[class=cm-proposals-placeholder-input]');

        // GET TEMPLATE WYSIWYG EDITOR ID
        var templateWysiwygId = templateWrapper.find('textarea').attr('id');

        // GET TEMPLATE WYSIWYG VALUE
        var templateWysiwyg = tinyMCE.get(templateWysiwygId).getContent();

        // GET PROPOSAL WYSIWYG EDITOR ID
        var proposalWysiwygId = proposalWrapper.find('textarea').attr('id');

        // ADD TEMPLATE CONTENT TO WYSIWYG EDITOR
        tinyMCE.get(proposalWysiwygId).setContent(templateWysiwyg);
        tinyMCE.triggerSave();

        // RESET PLACEHOLDER INPUTS
        placeholders.val('');
    });

    /*** SAVE TABS, TEMPLATES, PLACEHOLDERS AND PROPOSALS ***/
    jQuery(document).on('click', '.cm-proposals-save', function() {
        cmProposalsSave();
    });

    /*** GET GENERATED PDF'S ***/
    jQuery('#cm-proposals-view-pdfs').click(function() {
        var nonce = cmProposalsAdminScript.nonce;

        jQuery.ajax({
            method: 'POST',
            url: ajax.ajax_url,
            data: {
                'action': 'code_monkeys_proposals_get_pdfs',
                'nonce': nonce
            },
            success: function (data) {
                // CREATE THE MODAL
                jQuery('body').append('<div class="cm-proposals-modal"><div class="cm-proposals-modal-inner"><div class="cm-proposals-modal-inner-top"><div class="cm-proposals-modal-close"><i class="fa fa-times-circle" aria-hidden="true"></i></div></div><div class="cm-proposals-modal-inner-body">' + data + '</div></div></div>');

                // FADE IN MODAL
                jQuery('.cm-proposals-modal').fadeIn();
            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    /*** CLOSE MODAL ***/
    jQuery(document).on('click', '.cm-proposals-modal-close', function() {
        var modal = jQuery(this).parent().parent().parent();

        // REMOVE MODAL WINDOW
        modal.fadeOut().promise().done(function() {
            modal.remove();
        });
    });

    /*** DELETE GENERATED PDF ***/
    jQuery(document).on('click', '.cm-proposals-pdf-delete', function() {
        var file = jQuery(this).attr('data');
        var linkWrapper = jQuery(this).parent();
        var nonce = cmProposalsAdminScript.nonce;

        jQuery.ajax({
            method: 'POST',
            url: ajax.ajax_url,
            data: {
                'action': 'code_monkeys_proposals_delete_pdf',
                'file': file,
                'nonce': nonce
            },
            success: function (data) {
                // REMOVE FILE FROM LIST
                linkWrapper.remove();
            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});

//Custom progress bar
function cmProposalsProgress() {
    var elem = jQuery(".cm-proposals-progress-bar");
    var width = 10;
    var id = setInterval(frame, 25);
    function frame() {
        if (width >= 100) {
            width = 10;
        } else {
            width++;
            elem.css('width', width + '%');
            jQuery(".cm-proposals-progress-label").html( width + '%');
        }
    }
}

// SAVE FUNCTION
function cmProposalsSave() {
    var tabs = jQuery('.cm-proposals-tour-tab-menu li');
    var noticeEle = jQuery('#cm-proposals-notice');

    // LOOP THROUGH TABS
    var valueArr = [];
    tabs.each(function() {
        // GET WRAPPING ELEMENTS
        var tabData = jQuery(this).attr('data');
        var tabContentWrapper = jQuery('.cm-proposals-tour-tab-content[data=' + tabData + ']');
        var templateWrapper = tabContentWrapper.find('.cm-proposals-template');
        var proposalWrapper = tabContentWrapper.find('.cm-proposals-proposal');
        var templateWysiwygId = templateWrapper.find('textarea').attr('id');
        var proposalWysiwygId = proposalWrapper.find('textarea').attr('id');

        // GET TEMPLATE VALUES
        var templateName = templateWrapper.find('.cm-proposals-template-name').val();
        var templateWysiwyg = tinyMCE.get(templateWysiwygId).getContent();


        // GET PROPOSAL VALUES
        var proposalWysiwyg = tinyMCE.get(proposalWysiwygId).getContent();
        var placeholders = proposalWrapper.find('input[class=cm-proposals-placeholder-input]');

        // LOOP THROUGH PLACEHOLDER INPUTS
        var placeholderArr = [];
        placeholders.each(function() {
            // PUSH PLACEHOLDER VALUE TO ARRAY
            placeholderArr.push({
                'value': jQuery(this).val(),
                'placeholder': jQuery(this).attr('placeholder')
            });
        });

        // PUSH OBJECTS TO ARRAY
        valueArr.push({
            'tab': tabData,
            'template_name': templateName,
            'template_wysiwyg': templateWysiwyg,
            'proposal_wysiwyg': proposalWysiwyg,
            'placeholders': placeholderArr
        });
    });

    // ADD JSON STRING OF VALUES TO FORM PROPOSALS INPUT
    jQuery('#cm_proposals_forms_options_proposals').val(JSON.stringify(valueArr));

    // SHOW LOADING BAR
    noticeEle.html('<div class="cm-proposals-progress-wrapper"><div class="cm-proposals-progress"><div class="cm-proposals-progress-bar"><!--    <div class="cm-hipaa-forms-progress-label">10%</div>--></div></div></div>');
    cmProposalsProgress();

    // SUBMIT THE OPTIONS FORM
    jQuery('form#code_monkeys_proposals_forms_options').ajaxSubmit({
        success: function(){
            // SHOW SUCCESS MESSAGE
            noticeEle.html('<span class="cm-proposals-temp-message">Everything Has Been Saved...</span>');

            // CLEAR NOTICE MESSAGE AFTER 5 SECONDS
            setTimeout(function() {
                jQuery('.cm-proposals-temp-message').fadeOut().promise().done(function() {
                    noticeEle.html('');
                });
            }, 5000);
        },
        error: function (errorThrown) {
            console.log('error');
            console.log(errorThrown);
            jQuery('#cm-proposals-notice').html(errorThrown);
        }
    });
}