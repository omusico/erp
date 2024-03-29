<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input type="button" name="save" id="save" onclick="this.form.action.value=\'Save\'; return customSaveFunction();" value="Save">',
          ),
          1 => 'CANCEL',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/Leads/validation.js',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'marketing_activity_type_c',
            'studio' => 'visible',
            'label' => 'LBL_MARKETING_ACTIVITY_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 'refered_by',
        ),
        2 => 
        array (
          0 => 'campaign_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lead_score_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SCORE',
          ),
        ),
      ),
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'email1',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'fp_event_locations_leads_1_name',
            'label' => 'LBL_FP_EVENT_LOCATIONS_LEADS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'last_qualification_c',
            'studio' => 'visible',
            'label' => 'LBL_LAST_QUALIFICATION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_qualification_name_c',
            'label' => 'LBL_LAST_QUALIFICATION_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_year_of_qualification_c',
            'studio' => 'visible',
            'label' => 'LBL_LAST_YEAR_OF_QUALIFICATION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'experience_in_years_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPERIENCE_IN_YEARS',
          ),
          1 => 
          array (
            'name' => 'experience_in_months_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPERIENCE_IN_MONTHS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'course_level_preference_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE_LEVEL_PREFERENCE',
          ),
          1 => 
          array (
            'name' => 'stream_interest_c',
            'studio' => 'visible',
            'label' => 'LBL_STREAM_INTEREST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'country_interested_in_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY_INTERESTED_IN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'intake_year_c',
            'studio' => 'visible',
            'label' => 'LBL_INTAKE_YEAR',
          ),
          1 => 
          array (
            'name' => 'intake_month_c',
            'studio' => 'visible',
            'label' => 'LBL_INTAKE_MONTH',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 're_assign_comment_c',
            'studio' => 'visible',
            'label' => 'LBL_RE_ASSIGN_COMMENT',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'follow_up_date_c',
            'label' => 'LBL_FOLLOW_UP_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_remark_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_REMARK',
          ),
          1 => 
          array (
            'name' => 'remark_history_c',
            'studio' => 'visible',
            'label' => 'LBL_REMARK_HISTORY',
            'displayParams' => 
            array (
              'field' => 
              array (
                'disabled' => 'true',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
