<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-08-28 22:42:45
$layout_defs["anmol_University_list"]["subpanel_setup"]['anmol_university_list_anmol_applications_1'] = array(
    'order' => 100,
    'module' => 'anmol_Applications',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_FROM_ANMOL_APPLICATIONS_TITLE',
    'get_subpanel_data' => 'anmol_university_list_anmol_applications_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);


// created: 2015-01-06 02:00:25
$layout_defs["anmol_University_list"]["subpanel_setup"]['anmol_university_list_anmol_course_search_1'] = array(
    'order' => 100,
    'module' => 'anmol_course_search',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'get_subpanel_data' => 'anmol_university_list_anmol_course_search_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);

?>