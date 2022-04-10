<?php
/* 
 * Template Name: Shop
*/

include( get_template_directory() . '/header-page.php');
?>


	  
      <div id="content" data-bid="content" class="sb sib-content sb-nd-dH" style="height: 2143px;">
        <div class="ss-s ss-bg">
          <div class="sc blog-page" style="width:1200px;">
            <div data-sid="content_0" class="sie-content_0 se " style="transform: scale(1, 1) translate(0px, 0px);">
              <div class="se-t sie-content_0-text st-m-paragraph st-d-paragraph se-rc">





    <?php


      $args = new WP_Query(array(
        'post_type' => 'post'
      ));
   
    $counter = get_the_ID();
    $query = new WP_Query($args);
      if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;
    ?>
    
    <?php  if( $counter % 2 == !0 ):?>
    

      <div class="blog-item left-item">
                    
        <div class="blog-item-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
        <div class="blog-item-text">
        
          <a href="<?php the_field('button_link'); ?>"><h3><?php the_title();?></h3></a>

			
          <h4><?php
				global $post;
				$categories = get_the_category($post->ID);
				foreach( $categories as $categorie )
				{
				   echo $categorie->name;
				}

			?></h4>

          <p><?php the_content();?></p>
			
				<?php if ( get_field( 'button_link' ) ): ?>

					<a class="button" href="<?php the_field('button_link'); ?>" target="_blank">
						
						 <?php

						  if(get_field('button_name')){
							the_field('button_name');
						  } else {
							echo 'read more';
						  }

						 ?>
						
					</a>

				<?php else: ?>

					<a class="button" href="<?php the_permalink(); ?>" target="_blank">
			
						
						<?php

						  if(get_field('button_name')){
							the_field('button_name');
						  } else {
							echo 'read more';
						  }

						 ?>
						
					</a>
			
				<?php endif; ?>

        </div>

      </div>


    <?php endif;?>

    <?php  if( $counter % 2 == 0 ):?>
    

      <div class="blog-item right-item">
                    
        <div class="blog-item-text">
        
        <a href="<?php the_field('button_link'); ?>"><h3><?php the_title();?></h3></a> 
          <h4><?php
				global $post;
				$categories = get_the_category($post->ID);
				foreach( $categories as $categorie )
				{
				   echo $categorie->name;
				}

			?></h4>

          <p><?php the_content();?></p>
			
			<?php if ( get_field( 'button_link' ) ): ?>

					<a class="button" href="<?php the_field('button_link'); ?>" target="_blank">
					
						 <?php

						  if(get_field('button_name')){
							the_field('button_name');
						  } else {
							echo 'read more';
						  }

						 ?>
					
					</a>

				<?php else: ?>

					<a class="button" href="<?php the_permalink(); ?>" target="_blank">
					 <?php

					  if(get_field('button_name')){
						the_field('button_name');
					  } else {
						echo 'read more';
					  }

					 ?>
			
					</a>
			
				<?php endif; ?>
			
			
			

        </div>

        
        <div class="blog-item-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>

      </div>

      <?php endif;?>

  <?php  endwhile; wp_reset_postdata(); ?>
<?php endif;?>


				  
            </div>
            </div>
           
          </div>
        </div>
      </div>
	  
	  
      <div id="email-subscribe" data-bid="email-subscribe" class="sb sib-email-subscribe" style="height: 187px;">
        <div class="ss-s ss-bg">
          <div class="sc" style="width:1200px;">
            <div data-sid="email-subscribe_0" class="sie-email-subscribe_0 se " style="transform: scale(1, 1) translate(0px, 0px);">
              <h3 class="se-t sie-email-subscribe_0-text st-m-subheading st-d-heading se-rc">  <?php the_field('footer_top_title'); ?> <br>
              </h3>
            </div>
            <div data-sid="email-subscribe_1" class="sie-email-subscribe_1 se " style="transform: scale(1, 1) translate(0px, 0px);">
              <div class="si-embed">
                <div action="" class="seva-form formkit-form" >
                  <div data-style="clean">
                    <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                    <div data-element="fields" data-stacked="false" class="seva-fields formkit-fields">
                    
						
						<?php echo do_shortcode('[contact-form-7 id="1135" title="Subsribe"]'); ?>
						
                    </div>
					  
					  
					  
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <script id="init_data" type="application/json">
      {"mobile":{"w":320,"background":{"type":"color","color":"colors-7"}},"desktop":{"w":1200,"background":{"type":"color","color":"colors-7"}},"sid":"b1o1f-rvt4ikbrsb1_qvca","break":768,"assetURL":"//static.showit.co","contactFormId":"90375/204880","cfAction":"aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9jb250YWN0Zm9ybQ==","blockData":[{"slug":"buy-now","visible":"a","states":[{"slug":"view-1","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"view-2","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":54,"background":{"type":"color","color":"#ffffff"},"locking":{"side":"b"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-3"},"locking":{"side":"t"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"header-menu","visible":"a","states":[{"slug":"main-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"mobile-menu-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-5"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"mobile-menu","visible":"m","states":[],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":400,"background":{"type":"color","color":"colors-7"}}},{"slug":"header-section","visible":"a","states":[],"m":{"w":320,"h":408,"background":{"type":"image","color":"colors-0","image":{"key":"SdLI7_LMQDa2A1lOrWzi8w/90375/coach-header.jpg","aspect_ratio":1.5,"title":"coach-header","type":"asset"},"opacity":80}},"d":{"w":1200,"h":500,"background":{"type":"image","color":"colors-0","image":{"key":"SdLI7_LMQDa2A1lOrWzi8w/90375/coach-header.jpg","aspect_ratio":1.5,"title":"coach-header","type":"asset"},"opacity":80}}},{"slug":"pain-point-value-section","visible":"a","states":[],"m":{"w":320,"h":843,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":633,"background":{"type":"color","color":"colors-7"}}},{"slug":"offers-section","visible":"a","states":[],"m":{"w":320,"h":800,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":500,"background":{"type":"color","color":"colors-2"}}},{"slug":"offers-section-2","visible":"a","states":[],"m":{"w":320,"h":800,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":500,"background":{"type":"color","color":"colors-4"}}},{"slug":"faq","visible":"a","states":[],"m":{"w":320,"h":1435,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":924,"background":{"type":"color","color":"colors-7"}}},{"slug":"footer-menu","visible":"a","states":[],"m":{"w":320,"h":407,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":194,"background":{"type":"color","color":"colors-2"}}}],"elementData":[{"type":"simple","visible":"a","id":"buy-now_0","blockId":"buy-now","m":{"x":8,"y":8,"w":114,"h":38,"a":0},"d":{"x":0,"y":165,"w":38,"h":177,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_1","blockId":"buy-now","m":{"x":8,"y":17,"w":114,"h":22,"a":0},"d":{"x":-52,"y":240,"w":138,"h":26,"a":-90,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_2","blockId":"buy-now","m":{"x":129,"y":8,"w":61,"h":38,"a":0},"d":{"x":0,"y":342,"w":38,"h":72,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_3","blockId":"buy-now","m":{"x":135,"y":15,"w":49,"h":26,"a":0},"d":{"x":4,"y":357,"w":29,"h":43,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-1_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-1_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-1_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-2_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_3","blockId":"buy-now","m":{"x":8,"y":-290,"w":304,"h":290,"a":0},"d":{"x":44,"y":165,"w":298,"h":336,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_4","blockId":"buy-now","m":{"x":29,"y":-235,"w":130,"h":13,"a":0},"d":{"x":63,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_5","blockId":"buy-now","m":{"x":170,"y":-235,"w":130,"h":13,"a":0},"d":{"x":203,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_6","blockId":"buy-now","m":{"x":29,"y":-206,"w":130,"h":13,"a":0},"d":{"x":63,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_7","blockId":"buy-now","m":{"x":170,"y":-206,"w":130,"h":13,"a":0},"d":{"x":203,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_8","blockId":"buy-now","m":{"x":29,"y":-177,"w":130,"h":13,"a":0},"d":{"x":63,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_9","blockId":"buy-now","m":{"x":170,"y":-177,"w":130,"h":13,"a":0},"d":{"x":203,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_10","blockId":"buy-now","m":{"x":29,"y":-148,"w":130,"h":13,"a":0},"d":{"x":63,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_11","blockId":"buy-now","m":{"x":170,"y":-148,"w":130,"h":13,"a":0},"d":{"x":203,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_12","blockId":"buy-now","m":{"x":29,"y":-119,"w":130,"h":13,"a":0},"d":{"x":63,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_13","blockId":"buy-now","m":{"x":170,"y":-119,"w":130,"h":13,"a":0},"d":{"x":203,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_14","blockId":"buy-now","m":{"x":29,"y":-90,"w":130,"h":13,"a":0},"d":{"x":63,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_15","blockId":"buy-now","m":{"x":170,"y":-90,"w":130,"h":13,"a":0},"d":{"x":203,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_16","blockId":"buy-now","m":{"x":29,"y":-61,"w":130,"h":13,"a":0},"d":{"x":63,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_17","blockId":"buy-now","m":{"x":170,"y":-61,"w":130,"h":13,"a":0},"d":{"x":203,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_18","blockId":"buy-now","m":{"x":170,"y":-33,"w":130,"h":13,"a":0},"d":{"x":203,"y":446,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_19","blockId":"buy-now","m":{"x":28,"y":-275,"w":266,"h":21,"a":0},"d":{"x":60,"y":180,"w":261,"h":25,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"header-menu_main-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":33,"w":1086,"h":65,"a":0}},{"type":"text","visible":"a","id":"header-menu_main-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":8,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_main-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":550,"y":-49,"w":100,"h":100,"a":0},"pc":[{"type":"show","block":"mobile-menu"}]},{"type":"text","visible":"d","id":"header-menu_main-view_3","blockId":"header-menu","m":{"x":49,"y":182,"w":102,"h":17,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_4","blockId":"header-menu","m":{"x":202,"y":109,"w":102,"h":17,"a":0},"d":{"x":190,"y":54,"w":60,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_5","blockId":"header-menu","m":{"x":126,"y":187,"w":102,"h":17,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_6","blockId":"header-menu","m":{"x":19,"y":130,"w":102,"h":17,"a":0},"d":{"x":301,"y":54,"w":158,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_7","blockId":"header-menu","m":{"x":13,"y":164,"w":102,"h":17,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_8","blockId":"header-menu","m":{"x":108,"y":140,"w":50,"h":50,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_9","blockId":"header-menu","m":{"x":168,"y":138,"w":50,"h":50,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_10","blockId":"header-menu","m":{"x":226,"y":136,"w":50,"h":50,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"m","id":"header-menu_mobile-menu-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":67,"y":43,"w":1086,"h":65,"a":0}},{"type":"text","visible":"m","id":"header-menu_mobile-menu-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":539,"y":18,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_mobile-menu-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":560,"y":-39,"w":100,"h":100,"a":0},"pc":[{"type":"hide","block":"mobile-menu"}]},{"type":"simple","visible":"a","id":"mobile-menu_0","blockId":"mobile-menu","m":{"x":16,"y":79,"w":289,"h":320,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_1","blockId":"mobile-menu","m":{"x":128,"y":110,"w":65,"h":21,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_2","blockId":"mobile-menu","m":{"x":128,"y":282,"w":64,"h":22,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_3","blockId":"mobile-menu","m":{"x":122,"y":153,"w":76,"h":22,"a":0},"d":{"x":198,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_4","blockId":"mobile-menu","m":{"x":80,"y":196,"w":160,"h":23,"a":0},"d":{"x":308,"y":54,"w":151,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_5","blockId":"mobile-menu","m":{"x":117,"y":239,"w":86,"h":22,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_6","blockId":"mobile-menu","m":{"x":91,"y":336,"w":30,"h":30,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_7","blockId":"mobile-menu","m":{"x":145,"y":336,"w":30,"h":30,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_8","blockId":"mobile-menu","m":{"x":206,"y":336,"w":30,"h":30,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_9","blockId":"mobile-menu","m":{"x":16,"y":382,"w":289,"h":1,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_10","blockId":"mobile-menu","m":{"x":16,"y":387,"w":289,"h":3,"a":0},"d":{"x":370,"y":130,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"header-section_0","blockId":"header-section","m":{"x":26,"y":187,"w":268,"h":43,"a":0},"d":{"x":335,"y":266,"w":531,"h":69,"a":0}},{"type":"text","visible":"a","id":"header-section_1","blockId":"header-section","m":{"x":46,"y":235,"w":228,"h":27,"a":0},"d":{"x":332,"y":330,"w":537,"h":36,"a":0}},{"type":"text","visible":"a","id":"pain-point-value-section_0","blockId":"pain-point-value-section","m":{"x":20,"y":68,"w":280,"h":66,"a":0},"d":{"x":211,"y":69,"w":779,"h":126,"a":0}},{"type":"text","visible":"a","id":"pain-point-value-section_1","blockId":"pain-point-value-section","m":{"x":20,"y":159,"w":280,"h":55,"a":0},"d":{"x":269,"y":235,"w":662,"h":37,"a":0}},{"type":"text","visible":"a","id":"pain-point-value-section_2","blockId":"pain-point-value-section","m":{"x":20,"y":244,"w":280,"h":247,"a":0},"d":{"x":135,"y":305,"w":412,"h":240,"a":0}},{"type":"text","visible":"a","id":"pain-point-value-section_3","blockId":"pain-point-value-section","m":{"x":20,"y":523,"w":280,"h":248,"a":0},"d":{"x":653,"y":305,"w":412,"h":240,"a":0}},{"type":"graphic","visible":"a","id":"offers-section_0","blockId":"offers-section","m":{"x":0,"y":1,"w":320,"h":300,"a":0},"d":{"x":0,"y":0,"w":500,"h":500,"a":0,"lockH":"ls"},"c":{"key":"HWWwf_YITY6XdzHRY1GtVw/90375/coach-2.jpg","aspect_ratio":1}},{"type":"simple","visible":"a","id":"offers-section_1","blockId":"offers-section","m":{"x":0,"y":0,"w":320,"h":300,"a":0},"d":{"x":0,"y":0,"w":500,"h":500,"a":0,"lockH":"ls"}},{"type":"text","visible":"a","id":"offers-section_2","blockId":"offers-section","m":{"x":33,"y":342,"w":254,"h":37,"a":0},"d":{"x":550,"y":54,"w":521,"h":64,"a":0}},{"type":"text","visible":"a","id":"offers-section_3","blockId":"offers-section","m":{"x":52,"y":393,"w":212,"h":55,"a":0},"d":{"x":550,"y":141,"w":575,"h":36,"a":0}},{"type":"text","visible":"a","id":"offers-section_4","blockId":"offers-section","m":{"x":28,"y":467,"w":260,"h":200,"a":0},"d":{"x":550,"y":209,"w":575,"h":133,"a":0}},{"type":"simple","visible":"a","id":"offers-section_5","blockId":"offers-section","m":{"x":78,"y":694,"w":164,"h":64,"a":0},"d":{"x":550,"y":373,"w":184,"h":73,"a":0}},{"type":"text","visible":"a","id":"offers-section_6","blockId":"offers-section","m":{"x":109,"y":712,"w":102,"h":29,"a":0},"d":{"x":567,"y":392,"w":150,"h":37,"a":0}},{"type":"graphic","visible":"a","id":"offers-section-2_0","blockId":"offers-section-2","m":{"x":0,"y":0,"w":320,"h":300,"a":0},"d":{"x":700,"y":0,"w":500,"h":500,"a":0,"lockH":"rs"},"c":{"key":"tvsCrBvpRr6DSXQsGYunFQ/90375/coach-1.jpg","aspect_ratio":1}},{"type":"simple","visible":"a","id":"offers-section-2_1","blockId":"offers-section-2","m":{"x":0,"y":0,"w":320,"h":300,"a":0},"d":{"x":700,"y":0,"w":500,"h":500,"a":0,"lockH":"rs"}},{"type":"text","visible":"a","id":"offers-section-2_2","blockId":"offers-section-2","m":{"x":25,"y":342,"w":270,"h":40,"a":0},"d":{"x":50,"y":54,"w":567,"h":64,"a":0}},{"type":"text","visible":"a","id":"offers-section-2_3","blockId":"offers-section-2","m":{"x":59,"y":393,"w":202,"h":55,"a":0},"d":{"x":50,"y":141,"w":567,"h":36,"a":0}},{"type":"text","visible":"a","id":"offers-section-2_4","blockId":"offers-section-2","m":{"x":34,"y":467,"w":260,"h":204,"a":0},"d":{"x":50,"y":209,"w":575,"h":133,"a":0}},{"type":"simple","visible":"a","id":"offers-section-2_5","blockId":"offers-section-2","m":{"x":78,"y":694,"w":164,"h":64,"a":0},"d":{"x":50,"y":373,"w":184,"h":73,"a":0}},{"type":"text","visible":"a","id":"offers-section-2_6","blockId":"offers-section-2","m":{"x":109,"y":712,"w":102,"h":29,"a":0},"d":{"x":67,"y":392,"w":150,"h":37,"a":0}},{"type":"simple","visible":"a","id":"faq_0","blockId":"faq","m":{"x":0,"y":0,"w":320,"h":200,"a":0},"d":{"x":0,"y":0,"w":480,"h":400,"a":0}},{"type":"text","visible":"a","id":"faq_1","blockId":"faq","m":{"x":65,"y":53,"w":190,"h":95,"a":0},"d":{"x":96,"y":106,"w":289,"h":188,"a":0}},{"type":"text","visible":"a","id":"faq_2","blockId":"faq","m":{"x":20,"y":237,"w":280,"h":40,"a":0},"d":{"x":525,"y":52,"w":625,"h":33,"a":0}},{"type":"text","visible":"a","id":"faq_3","blockId":"faq","m":{"x":20,"y":299,"w":280,"h":132,"a":0},"d":{"x":525,"y":93,"w":625,"h":82,"a":0}},{"type":"text","visible":"a","id":"faq_4","blockId":"faq","m":{"x":20,"y":473,"w":280,"h":42,"a":0},"d":{"x":525,"y":226,"w":625,"h":33,"a":0}},{"type":"text","visible":"a","id":"faq_5","blockId":"faq","m":{"x":20,"y":531,"w":280,"h":136,"a":0},"d":{"x":525,"y":267,"w":625,"h":82,"a":0}},{"type":"text","visible":"a","id":"faq_6","blockId":"faq","m":{"x":20,"y":712,"w":280,"h":40,"a":0},"d":{"x":525,"y":399,"w":625,"h":33,"a":0}},{"type":"text","visible":"a","id":"faq_7","blockId":"faq","m":{"x":20,"y":774,"w":280,"h":132,"a":0},"d":{"x":525,"y":440,"w":625,"h":82,"a":0}},{"type":"text","visible":"a","id":"faq_8","blockId":"faq","m":{"x":20,"y":948,"w":280,"h":42,"a":0},"d":{"x":525,"y":573,"w":625,"h":33,"a":0}},{"type":"text","visible":"a","id":"faq_9","blockId":"faq","m":{"x":20,"y":1006,"w":280,"h":136,"a":0},"d":{"x":525,"y":614,"w":625,"h":82,"a":0}},{"type":"text","visible":"a","id":"faq_10","blockId":"faq","m":{"x":20,"y":1186,"w":280,"h":42,"a":0},"d":{"x":525,"y":747,"w":625,"h":33,"a":0}},{"type":"text","visible":"a","id":"faq_11","blockId":"faq","m":{"x":20,"y":1244,"w":280,"h":136,"a":0},"d":{"x":525,"y":788,"w":625,"h":82,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_0","blockId":"footer-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":45,"w":1086,"h":65,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_1","blockId":"footer-menu","m":{"x":16,"y":84,"w":289,"h":241,"a":0},"d":{"x":57,"y":117,"w":1086,"h":30,"a":0}},{"type":"text","visible":"a","id":"footer-menu_2","blockId":"footer-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":18,"w":143,"h":111,"a":0}},{"type":"text","visible":"a","id":"footer-menu_3","blockId":"footer-menu","m":{"x":40,"y":356,"w":240,"h":25,"a":0},"d":{"x":87,"y":68,"w":375,"h":19,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_4","blockId":"footer-menu","m":{"x":160,"y":39,"w":30,"h":30,"a":0},"d":{"x":990,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_5","blockId":"footer-menu","m":{"x":208,"y":39,"w":30,"h":30,"a":0},"d":{"x":1036,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_6","blockId":"footer-menu","m":{"x":260,"y":39,"w":30,"h":30,"a":0},"d":{"x":1087,"y":66,"w":24,"h":22,"a":0}},{"type":"text","visible":"a","id":"footer-menu_7","blockId":"footer-menu","m":{"x":164,"y":283,"w":102,"h":22,"a":0},"d":{"x":881,"y":68,"w":51,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_8","blockId":"footer-menu","m":{"x":55,"y":283,"w":102,"h":22,"a":0},"d":{"x":774,"y":68,"w":68,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_9","blockId":"footer-menu","m":{"x":55,"y":147,"w":102,"h":22,"a":0},"d":{"x":87,"y":122,"w":60,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_10","blockId":"footer-menu","m":{"x":164,"y":147,"w":102,"h":22,"a":0},"d":{"x":178,"y":122,"w":62,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_11","blockId":"footer-menu","m":{"x":63,"y":192,"w":195,"h":22,"a":0},"d":{"x":277,"y":122,"w":161,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_12","blockId":"footer-menu","m":{"x":55,"y":238,"w":102,"h":22,"a":0},"d":{"x":789,"y":122,"w":55,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_13","blockId":"footer-menu","m":{"x":164,"y":238,"w":102,"h":22,"a":0},"d":{"x":877,"y":122,"w":78,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_14","blockId":"footer-menu","m":{"x":103,"y":107,"w":114,"h":22,"a":0},"d":{"x":999,"y":122,"w":133,"h":19,"a":0}}]}
    </script>

<?php get_footer(); ?>