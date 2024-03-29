<?php
$module_name = 'anmol_marketing_campaigns';
$viewdefs [$module_name] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    array(
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
                                'DEFAULT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'default' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'campaign_type_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CAMPAIGN_TYPE',
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'name_of_event_c',
                                                'label' => 'LBL_NAME_OF_EVENT',
                                            ),
                                        1 => 'assigned_user_name',
                                    ),
                                2 =>
                                    array(
                                        0 => 'description',
                                    ),
                            ),
                    ),
            ),
    );
?>
