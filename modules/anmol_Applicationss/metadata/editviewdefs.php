<?php
$module_name = 'anmol_Applicationss';
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
          'file' => 'custom/modules/anmol_Applicationss/validation.js',
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
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'anmol_course_search_anmol_applicationss_2_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'conditional_offer_c',
            'label' => 'LBL_CONDITIONAL_OFFER',
          ),
          1 => 
          array (
            'name' => 'unchecked_docs_c',
            'studio' => 'visible',
            'label' => 'LBL_UNCHECKED_DOCS',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'contacts_anmol_applicationss_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'label' => 'LBL_FILENAME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'testf_c',
            'label' => 'LBL_TESTF',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
