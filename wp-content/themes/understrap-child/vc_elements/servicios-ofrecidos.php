<?php 
/*
Element Description: VC CasosExito
*/
 
// Element Class 
class vcCasosExito extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_servicios_ofrecidos_mapping' ) );
        add_shortcode( 'vc_servicios_ofrecidos', array( $this, 'vc_servicios_ofrecidos_html' ) );
    }
     
    // Element Mapping
    public function vc_servicios_ofrecidos_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('VC ServiciosOfrecidos', 'ATVDESIGN'),
                'base' => 'vc_servicios_ofrecidos',
                'description' => __('Another simple VC box', 'ATVDESIGN'), 
                'category' => __('Emfasi Widgets', 'ATVDESIGN'),             
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
        
    }
     
     
    // Element HTML
    public function vc_servicios_ofrecidos_html( $atts ) {
         
        // Params extraction
        extract(
            shortcode_atts(
                array(
                    'title'   => '',
                    'subtitle' => '',
                ), 
                $atts
            )
        );
         
        // Fill $html var with data
        $html = '
        <section class="grid-servicios-ofrecidos grid-container grid-servicios-ofrecidos-first-level">
            <div class="container">
                <div class="row">';


            $args = array(
                'post_type' => 'servicio_ofrecido',
                'post_parent' => 0,
                'order_by' => 'menu_order'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                // The Loop
                while ( $query->have_posts() ) {
                    $query->the_post();
            
                    $html.='<div class="col-12 col-lg-4 grid-servicios-ofrecidos-item"> <a href="'.get_permalink().'">';


                     $icon = get_the_post_thumbnail();

                        if( !empty($icon) ): 

                            $html.='<div class="servicios-ofrecidos-img">'.$icon.'</div>';

                        endif; 
                     
                    $html.= '<h5>'.get_the_title().'</h5>'; 
                    $html.= '<div class="content-grid">'.get_the_excerpt().'</div>'; 
                    $html.='</a></div>';
                };

                wp_reset_postdata();
            }



        $html.= '</div>
            </div>
        </section>';  



 
         
        return $html;
         
    }
     
} // End Element Class
 
 
// Element Class Init
new vcCasosExito();    