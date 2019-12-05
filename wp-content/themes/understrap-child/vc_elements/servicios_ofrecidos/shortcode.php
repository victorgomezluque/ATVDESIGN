<?php

add_shortcode('vc_servicios_ofrecidos', 'vc_servicios_ofrecidos');
function vc_servicios_ofrecidos($atts, $content)
{
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
  <section class="grid-servicios_ofrecidos grid-container grid-servicios_ofrecidos-first-level">
      <div class="container">
          <div class="row">';


      $args = array(
          'post_type' => 'servicios_ofrecidos',
          'post_parent' => 0,
          'order_by' => 'menu_order'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
          // The Loop
          while ( $query->have_posts() ) {
              $query->the_post();
      
              $html.='<div class="col-12 col-lg-4 grid-servicios_ofrecidos-item"> <a href="'.get_permalink().'">';


              $icon = get_the_post_thumbnail();

                  if( !empty($icon) ): 

                      $html.='<div class="servicios_ofrecidos-img">'.$icon.'</div>';

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
