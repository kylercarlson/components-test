<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'hero_banner',
    'title' => 'Hero Banner',
    'fields' => array (
        array (
            'key' => 'field_hero_banner_heading',
            'label' => 'Heading',
            'name' => 'hero_banner_heading',
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
