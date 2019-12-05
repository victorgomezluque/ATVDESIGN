<?php
/*
Element Description: VC Imagen + Texto
*/

vc_map( 
    array(
        'name' => __('VC serviciosofrecidos', 'ATVDESIGN'),
        'base' => 'vc_servicios_ofrecidos',
        'description' => __('Another simple VC box', 'ATgVDESIGN'), 
        'category' => __('Victor Widgets', 'ATVDESIGN'),             
        'params' => array(   
                 
            array(
                'type' => 'textfield',
                'holder' => 'h3',
                'class' => 'title-class',
                'heading' => __( 'Title', 'ATVDESIGN' ),
                'param_name' => 'title',
                'value' => __( 'Default value', 'ATVDESIGN' ),
                'description' => __( 'Box Title', 'ATVDESIGN' ),
                'admin_label' => false,
                'weight' => 0,
                'group' => 'Custom Group',
            ),  
             
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => 'text-class',
                'heading' => __( 'Subtitulo', 'ATVDESIGN' ),
                'param_name' => 'subtitle',
                'value' => __( 'Default value', 'ATVDESIGN' ),
                'description' => __( 'Box Text', 'ATVDESIGN' ),
                'admin_label' => false,
                'weight' => 0,
                'group' => 'Custom Group',
            ),                      
                
        ),
    )
); 