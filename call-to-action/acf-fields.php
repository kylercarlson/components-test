<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'call_to_action',
    'title' => 'Call To Action',
    'fields' => array (
        array (
            'key' => 'field_call_to_action_heading',
            'label' => 'Heading',
            'name' => 'call_to_action_heading',
            'type' => 'text',
        )
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    ),
));

endif;
