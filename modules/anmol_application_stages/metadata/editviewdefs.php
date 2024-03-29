<?php
$module_name = 'anmol_application_stages';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
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
          'file' => 'custom/modules/anmol_application_stages/validation.js',
        ),
        2 => 
        array (
          'file' => 'custom/modules/anmol_application_stages/js_scripts.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    0 => 
    array (
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'application_stage_c',
            'studio' => 'visible',
            'label' => 'LBL_APPLICATION_STAGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pendency_stage_0_subject_c',
            'label' => 'LBL_PENDENCY_STAGE_0_SUBJECT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pendency_stage_0_c',
            'studio' => 'visible',
            'label' => 'LBL_PENDENCY_STAGE_0',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pendency_stage_1_subject_c',
            'label' => 'LBL_PENDENCY_STAGE_1_SUBJECT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pendency_stage_1_c',
            'studio' => 'visible',
            'label' => 'LBL_PENDENCY_STAGE_1',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'label' => 'LBL_FILENAME',
          ),
          1 => 
          array (
            'name' => 'app_sent_to_uni_c',
            'studio' => 'visible',
            'label' => 'LBL_APP_SENT_TO_UNI',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'file_mime_type',
            'label' => 'LBL_FILE_MIME_TYPE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'uni_email_c',
            'label' => 'LBL_UNI_EMAIL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'email_subject_c',
            'label' => 'LBL_EMAIL_SUBJECT',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'email_body_c',
            'studio' => 'visible',
            'label' => 'LBL_EMAIL_BODY',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'email_subject_stage2_c',
            'label' => 'LBL_EMAIL_SUBJECT_STAGE2',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'email_body_stage2_c',
            'studio' => 'visible',
            'label' => 'LBL_EMAIL_BODY_STAGE2',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'application_stage_history_c',
            'studio' => 'visible',
            'label' => 'LBL_APPLICATION_STAGE_HISTORY',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'pendency_state_c',
            'label' => 'LBL_PENDENCY_STATE',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 'assigned_user_name',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'anmol_applicationss_anmol_application_stages_1_name',
          ),
          1 => 
          array (
            'name' => 'contacts_anmol_application_stages_1_name',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'unchecked_docs_c',
            'studio' => 'visible',
            'label' => 'LBL_UNCHECKED_DOCS',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
