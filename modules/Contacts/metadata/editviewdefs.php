<?php
$viewdefs ['Contacts'] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    array(
                        'form' =>
                            array(
                                'hidden' =>
                                    array(
                                        0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
                                        1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
                                        2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
                                        3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
                                        4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
                                    ),
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_EDITVIEW_PANEL9' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL10' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL6' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_CONTACT_INFORMATION' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL2' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL5' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL4' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL1' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL7' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL8' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'syncDetailEditViews' => false,
                    ),
                'panels' =>
                    array(
                        'lbl_editview_panel9' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'passport_number_c',
                                                'label' => 'LBL_PASSPORT_NUMBER',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'passport_expiry_date_c',
                                                'label' => 'LBL_PASSPORT_EXPIRY_DATE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel10' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'photo',
                                                'label' => 'LBL_PHOTO',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'contact_address_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CONTACT_ADDRESS',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'state_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_STATE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'city_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CITY',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel6' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'marketing_activity_type_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_MARKETING_ACTIVITY_TYPE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 => 'campaign_name',
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'lead_score_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LEAD_SCORE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_contact_information' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'first_name',
                                                'customCode' => '{html_options disabled="true" name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}" disabled="true">',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'last_name',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'phone_mobile',
                                                'comment' => 'Mobile phone number of the contact',
                                                'label' => 'LBL_MOBILE_PHONE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'email1',
                                                'studio' => 'false',
                                                'label' => 'LBL_EMAIL_ADDRESS',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                3 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'birthdate',
                                                'comment' => 'The birthdate of the contact',
                                                'label' => 'LBL_BIRTHDATE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel2' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_qualification_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LAST_QUALIFICATION',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_qualification_name_c',
                                                'label' => 'LBL_LAST_QUALIFICATION_NAME',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_year_of_qualification_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LAST_YEAR_OF_QUALIFICATION',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel5' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'experience_in_years_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_EXPERIENCE_IN_YEARS',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'experience_in_months_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_EXPERIENCE_IN_MONTHS',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel4' =>
                            array(
                                0 =>
                                    array(
                                        0 => '',
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel1' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'course_level_preference_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_COURSE_LEVEL_PREFERENCE',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'stream_interest_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_STREAM_INTEREST',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'country_interested_in_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_COUNTRY_INTERESTED_IN',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'intake_year_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_INTAKE_YEAR',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'intake_month_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_INTAKE_MONTH',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel7' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel8' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'remark_history_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_REMARK_HISTORY',
                                                'displayParams' =>
                                                    array(
                                                        'field' =>
                                                            array(
                                                                'disabled' => 'true',
                                                            ),
                                                    ),
                                            ),
                                        1 => '',
                                    ),
                            ),
                    ),
            ),
    );
?>
<script>
    (function ($) {
        $(document).ready(function () {


            //    alert("hello");

            $("#campaign_name,#Contacts0emailAddress0").attr("disabled", "true");
            $("#btn_campaign_name,#btn_clr_campaign_name,#birthdate_trigger,#btn_assigned_user_name,#btn_clr_assigned_user_name").css("display", "none");

            /*$('#lead_conv_ac_op').css("display","none");        // Hide the Copy Activities to panel while converting

             $('#newContacts').css("display","none");
             $("#btn_campaign_name,#btn_report_to_name,#btn_clr_report_to_name").css("display","none");
             $( "td:contains('Create Contact')" ).css("display","none");
             $( "td:contains('Select Contact')" ).css("display","none");*/


        })
    })(jQuery)
</script>