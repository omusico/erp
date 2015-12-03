<?php
$module_name = 'anmol_course_search';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'anmol_university_list_anmol_course_search_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'course_intake_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE_INTAKE',
          ),
          1 => 
          array (
            'name' => 'course_duration_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE_DURATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'course_level_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE_LEVEL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ielts_required_c',
            'studio' => 'visible',
            'label' => 'LBL_IELTS_REQUIRED',
          ),
          1 => 
          array (
            'name' => 'min_ielts_requirement_c',
            'studio' => 'visible',
            'label' => 'LBL_MIN_IELTS_REQUIREMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'min_academin_requirement_c',
            'studio' => 'visible',
            'label' => 'LBL_MIN_ACADEMIN_REQUIREMENT',
          ),
          1 => 
          array (
            'name' => 'total_fee_c',
            'label' => 'LBL_TOTAL_FEE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'represented_by_us_c',
            'studio' => 'visible',
            'label' => 'LBL_REPRESENTED_BY_US',
          ),
          1 => 
          array (
            'name' => 'location_c',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'course_link_c',
            'label' => 'LBL_COURSE_LINK',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'document_1_name_c',
            'label' => 'LBL_DOCUMENT_1_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'document_2_name_c',
            'label' => 'LBL_DOCUMENT_2_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'document_3_name_c',
            'label' => 'LBL_DOCUMENT_3_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'document_4_name_c',
            'label' => 'LBL_DOCUMENT_4_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'document_5_name_c',
            'label' => 'LBL_DOCUMENT_5_NAME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'document_6_name_c',
            'label' => 'LBL_DOCUMENT_6_NAME',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'document_7_name_c',
            'label' => 'LBL_DOCUMENT_7_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'document_8_name_c',
            'label' => 'LBL_DOCUMENT_8_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'document_9_name_c',
            'label' => 'LBL_DOCUMENT_9_NAME',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'document_10_name_c',
            'label' => 'LBL_DOCUMENT_10_NAME',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'document_11_name_c',
            'label' => 'LBL_DOCUMENT_11_NAME',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'document_12_name_c',
            'label' => 'LBL_DOCUMENT_12_NAME',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'document_13_name_c',
            'label' => 'LBL_DOCUMENT_13_NAME',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'document_14_name_c',
            'label' => 'LBL_DOCUMENT_14_NAME',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'document_15_name_c',
            'label' => 'LBL_DOCUMENT_15_NAME',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'document_16_name_c',
            'label' => 'LBL_DOCUMENT_16_NAME',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'document_17_name_c',
            'label' => 'LBL_DOCUMENT_17_NAME',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'document_18_name_c',
            'label' => 'LBL_DOCUMENT_18_NAME',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'document_19_name_c',
            'label' => 'LBL_DOCUMENT_19_NAME',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'document_20_name_c',
            'label' => 'LBL_DOCUMENT_20_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
