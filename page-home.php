<?php
/**
 * Template Name: Home
 */

get_header();

?>


			  

<div id="email-subscribe" data-bid="email-subscribe" class="sb sib-email-subscribe" style="height: 187px;">
        <div class="ss-s ss-bg">
          <div class="sc" style="width:1200px;">
			  
            <div data-sid="email-subscribe_0" class="sie-email-subscribe_0 se " style="transform: scale(1, 1) translate(0px, 0px);">
              <h3 class="se-t sie-email-subscribe_0-text st-m-subheading st-d-heading se-rc"> <?php the_field('banner_bottom_title'); ?><br>
              </h3>
            </div>
			  
			  
            <div data-sid="email-subscribe_1" class="sie-email-subscribe_1 se " style="transform: scale(1, 1) translate(0px, 0px);">
              
				
      <form class="seva-form formkit-form" method="post" data-sv-form="1135540" data-uid="fbb8314654" data-format="inline" data-version="5" data-options="" min-width="400 500 600 700"><div data-style="clean">
		  
		  <div data-element="fields" data-stacked="false" class="seva-fields formkit-fields">
		  
		  
		  
				<?php echo do_shortcode('[contact-form-7 id="1135" title="Subsribe"]'); ?>

		  
		  
		  </div>
		  
		
		
        </div>
            </form>
				
				
          </div>
        </div>
      </div>
</div>


    <div id="about-section" data-bid="about-section" class="sb sib-about-section">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="about-section_0" class="sie-about-section_0 se about-sec-0 ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="about-section_1" class="sie-about-section_1 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="about-section_2" class="sie-about-section_2 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="about-section_3" class="sie-about-section_3 se ">
            <div style="width:100%;height:100%; background-size: cover; background-image: url(<?php the_field('about_image_three'); ?>);" class="se-img se-gr slzy"></div>
          </div>
          <div data-sid="about-section_4" class="sie-about-section_4 se ">
            <div style="width:100%;height:100%; background-size: cover; background-image: url(<?php the_field('about_image_two'); ?>);" class="se-img se-gr slzy"></div>
          </div>
          <div data-sid="about-section_5" class="sie-about-section_5 se ">
            <div style="width:100%;height:100%; background-size: cover; background-image: url(<?php the_field('about_image_one'); ?>);" class="se-img se-gr slzy"></div>
          </div>
          <div data-sid="about-section_6" class="sie-about-section_6 se about-sec-6 ">
            <h2 class="se-t sie-about-section_6-text st-m-heading st-d-heading se-rc"><?php the_field('about_left_top_heading'); ?></h2>
          </div>
          <div data-sid="about-section_7" class="sie-about-section_7 se ">
            <h3 class="se-t sie-about-section_7-text st-m-subheading st-d-subheading se-rc"><?php the_field('about_left_top_author'); ?></h3>
          </div>
          <div data-sid="about-section_8" class="sie-about-section_8 se ">
            <h2 class="se-t sie-about-section_8-text st-m-heading st-d-heading se-rc"><?php the_field('about_left_title'); ?></h2>
          </div>
			
			
			<?php
			
			$abtactive = 9;
			
			if(have_rows('about_left_menu')):?>
			<?php while(have_rows('about_left_menu')):  the_row(); ?>
				 <div data-sid="about-section_<?php echo $abtactive; ?>" class="sie-about-section_<?php echo $abtactive; ?> se ">
					<h3 class="se-t sie-about-section_<?php echo $abtactive; ?>-text st-m-subheading st-d-subheading se-rc"><?php the_sub_field('about_left_menu_item');?></h3>
				 </div>
			<?php $abtactive++; endwhile; ?>
			<?php endif; ?>
		
          <div data-sid="about-section_13" class="sie-about-section_13 se " style="transform: scale(0.919167, 0.919167) translate(-84.2484px, -36.2761px);">
            <div class="se-t sie-about-section_13-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('about_right_text'); ?></div>
          </div>
			
		<a href="<?php the_field('about_button_link'); ?>" target="_self" class="sie-about-section_14 se about-us-btn-bg "
            data-sid="about-section_14">
            <div class="se-simple"></div>
          </a>
			
			<a href="<?php the_field('about_button_link'); ?>" target="_self" class="sie-about-section_15 se a about-us-btn">
            <h3 class="se-t sie-about-section_15-text st-m-subheading st-d-subheading"><?php the_field('about_button_text'); ?></h3>
          </a>
        </div>
      </div>
    </div>
    <div id="services-section" data-bid="services-section" class="sb sib-services-section">
      <div class="ss-s ss-bg">
        <div class="sc" style="width: 1160px;">
				<div data-sid="services-section_0" class="sie-services-section_0 se "
					style="transform: scale(0.966667, 0.966667) translate(-18.4828px, -3.98276px);">
					<h3 class="se-t sie-services-section_0-text st-m-heading st-d-heading se-rc"><?php the_field('work_post_sectioin_title'); ?></h3>
				</div>
				<div data-sid="services-section_1" class="sie-services-section_1 se services-sec-1 "
					style="transform: scale(0.966667, 0.966667) translate(-10.8966px, -11.7586px);">
					<div class="se-simple"></div>
				</div>
				
			
				<div data-sid="services-section_2" class="sie-services-section_2 se "
					style="transform: scale(0.966667, 0.966667) translate(-11.5862px, -12.4483px);">
					<div style="width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; background-size: cover; background-image: url(<?php the_field('left_post_image'); ?>);"></div>
				</div>
				<div data-sid="services-section_3" class="sie-services-section_3 se "
					style="transform: scale(0.966667, 0.966667) translate(-11.5862px, -18.6724px);">
					<h3 class="se-t sie-services-section_3-text st-m-subheading st-d-subheading se-rc"><?php the_field('left_post_title'); ?></h3>
				</div>
				<div data-sid="services-section_4" class="sie-services-section_4 se services-sec-4 "
					style="transform: scale(0.966667, 0.966667) translate(-11.5862px, -22.1724px);">
					<div class="se-t sie-services-section_4-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('left_post_description'); ?></div>
				</div>
			
			
			
			
				<div data-sid="services-section_5" class="sie-services-section_5 se services-sec-5 "
					style="transform: scale(0.966667, 0.966667) translate(-30.5172px, -11.7586px);">
					<div class="se-simple"></div>
				</div>
				<div data-sid="services-section_6" class="sie-services-section_6 se services-sec-6 "
					style="transform: scale(0.966667, 0.966667) translate(-29.8276px, -12.4483px);">
					<div style="width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; background-size: cover; background-image: url(<?php the_field('right_post_image'); ?>);"></div>
				</div>
				<div data-sid="services-section_7" class="sie-services-section_7 se "
					style="transform: scale(0.966667, 0.966667) translate(-29.8276px, -18.6724px);">
					<h3 class="se-t sie-services-section_7-text st-m-subheading st-d-subheading se-rc"><?php the_field('right_post_title'); ?></h3>
				</div><a href="/services" target="_self" class="sie-services-section_8 se services-btn-bg " data-sid="services-section_8"
					style="transform: scale(0.966667, 0.966667) translate(-20.6897px, -27.9483px);">
					<div class="se-simple"></div>
				</a><a href="<?php the_field('work_post_button_link'); ?>" target="_self" class="sie-services-section_9 se services-btn " data-sid="services-section_9"
					style="transform: scale(0.966667, 0.966667) translate(-20.7069px, -27.9483px);">
					<h3 class="se-t sie-services-section_9-text st-m-subheading st-d-subheading"><?php the_field('work_post_button_text'); ?></h3>
				</a>
				<div data-sid="services-section_10" class="sie-services-section_10 se "
					style="transform: scale(0.966667, 0.966667) translate(-29.8276px, -22.1724px);">
					<div class="se-t sie-services-section_10-text st-m-paragraph st-d-paragraph se-rc se-t sie-services-section_10-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('right_post_description'); ?></div>
				</div>
			</div>
			
			
        </div>
      </div>
    
    <div class="story-section">
            <div class="story_left_bg" style="background-image: url(<?php the_field('success_stories_background_image'); ?>);">
               <div class="story_title">
                  <h2 class="title"><?php the_field('success_stories_title'); ?></h2>
               </div>
            </div>
            <div class="story-active wl10_section">
               
              
				
				<?php
		
			$story = 1;
			
			if(have_rows('success_stories_description')):?>
			<?php while(have_rows('success_stories_description')):  the_row();?>
				
				<div class="story-item">
                  <div class="story_text"><?php the_sub_field('stories');?></div>
                     <div class="author">
                        <img src="<?php the_sub_field('stories_author_pic');?>" alt="">
                        <h3 class="story_author"><?php the_sub_field('stories_author');?></h3>
                     </div>
               </div>
			
		
			<?php $story++; endwhile; ?>
			<?php endif; ?>
     
               
            </div>
           
         </div>
    
    
    <div id="free-value-section" data-bid="free-value-section" class="sb sib-free-value-section">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="free-value-section_0" class="sie-free-value-section_0 se ">
            <div class="se-simple free-value-bg"></div>
          </div>
          <div data-sid="free-value-section_1" class="sie-free-value-section_1 se ">
            <div style="width:100%;height:100%; background-image: url(<?php the_field('first_category_image'); ?>);"  class="se-img se-gr slzy"></div>
            
          </div>
          <div data-sid="free-value-section_2" class="sie-free-value-section_2 se ">
            <div class="se-simple free-value-bg"></div>
          </div>
          <div data-sid="free-value-section_3" class="sie-free-value-section_3 se ">
            <div style="width:100%;height:100%; background-image: url(<?php the_field('second_category_image'); ?>);" class="se-img dfor se-gr slzy"></div>
            <div style="width:100%;height:100%; background-image: url(<?php the_field('third_category_image'); ?>);" class="se-img mfor se-gr slzy"></div>
          </div>
          <div data-sid="free-value-section_4" class="sie-free-value-section_4 se ">
            <div class="se-simple free-value-bg"></div>
          </div>
          <div data-sid="free-value-section_5" class="sie-free-value-section_5 se ">
            <div style="width:100%;height:100%; background-image: url(<?php the_field('third_category_image'); ?>);" class="se-img se-gr slzy"></div>
            <div  style="width:100%;height:100%; background-image: url(<?php the_field('second_category_image'); ?>);" class="se-img mfor se-gr slzy"></div>
          </div>
          <div data-sid="free-value-section_6" class="sie-free-value-section_6 se free-sec-6 ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="free-value-section_7" class="sie-free-value-section_7 se ">
            <a href="<?php the_field('first_category_link'); ?>" target="_blank" style="text-decoration: none;"><h3 class="se-t sie-free-value-section_7-text st-m-subheading st-d-subheading se-rc"><?php the_field('first_category_name'); ?></h3></a>
          </div>
          <div data-sid="free-value-section_8" class="sie-free-value-section_8 se free-sec-8 ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="free-value-section_9" class="sie-free-value-section_9 se free-sec-9 ">
			  <a href="<?php the_field('second_category_link'); ?>" target="_blank" style="text-decoration: none;"><h3 class="se-t sie-free-value-section_9-text st-m-subheading st-d-subheading se-rc"><?php the_field('second_category_name'); ?></h3></a>
          </div>
          <div data-sid="free-value-section_10" class="sie-free-value-section_10 se free-sec-10 ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="free-value-section_11" class="sie-free-value-section_11 se ">
			  <a href="<?php the_field('third_category_link'); ?>" target="_blank" style="text-decoration: none;"><h3 class="se-t sie-free-value-section_11-text st-m-subheading st-d-subheading se-rc"><?php the_field('third_category_name'); ?><br></h3></a>
          </div>
          <div data-sid="free-value-section_12" class="sie-free-value-section_12 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="free-value-section_13" class="sie-free-value-section_13 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="free-value-section_14" class="sie-free-value-section_14 se ">
            <h3 class="se-t sie-free-value-section_14-text st-m-subheading sub_head st-d-subheading se-rc"><?php the_field('popular_sub_heading'); ?></h3>
          </div>
          <div data-sid="free-value-section_15" class="sie-free-value-section_15 se ">
            <h2 class="se-t sie-free-value-section_15-text st-m-heading st-d-heading se-rc"><?php the_field('popular_heading'); ?></h2>
          </div>
        </div>
      </div>
    </div>

    <div id="call-to-action" data-bid="call-to-action" class="sb sib-call-to-action">
      <div class="ss-s ss-bg">
        <div class="sb-m ssp-d" style="background-repeat: no-repeat; background-size: cover; background-image: url(<?php the_field('lets_talk_background_image'); ?>);"></div>
        <div class="sc custome-css" style="width:1200px;">
          <div data-sid="call-to-action_0" class="sie-call-to-action_0 se ">
            <h2 class="se-t sie-call-to-action_0-text st-m-heading st-d-heading se-rc"><?php the_field('lets_talk_main_title'); ?></h2>
          </div>
          <div data-sid="call-to-action_1" class="sie-call-to-action_1 se  ">
            <h3 class="se-t sie-call-to-action_1-text st-m-subheading st-d-subheading se-rc"><?php the_field('lets_talk_top_title'); ?></h3>
          </div>
			
		  <a href="<?php the_field('lets_talk_button_link'); ?>" target="_self" class="sie-call-to-action_3 se "><?php the_field('lets_talk_button_text'); ?> </a>
			
        </div>
      </div>
    </div>

    
<script id="init_data" type="application/json">
         {"mobile":{"w":320,"background":{"type":"color","color":"colors-7"}},"desktop":{"w":1200,"background":{"type":"color","color":"colors-7"}},"sid":"b1o1f-rvt4ikbrsb1_qvca","break":768,"assetURL":"//static.showit.co","contactFormId":"90375/204880","cfAction":"aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9jb250YWN0Zm9ybQ==","blockData":[{"slug":"buy-now","visible":"a","states":[{"slug":"view-1","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"view-2","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":54,"background":{"type":"color","color":"#ffffff"},"locking":{"side":"b"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-3"},"locking":{"side":"t"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"header-menu","visible":"a","states":[{"slug":"main-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"mobile-menu-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-5"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"mobile-menu","visible":"m","states":[],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":400,"background":{"type":"color","color":"colors-7"}}},{"slug":"header-section","visible":"a","states":[],"m":{"w":320,"h":566,"background":{"type":"image","color":"colors-0","image":{"key":"Lv_cOA6wTT23FKJmx21QcA/90375/wellness-home-1.jpg","aspect_ratio":1.5,"title":"wellness-home-1","type":"asset"},"opacity":85},"nature":"wH"},"d":{"w":1200,"h":693,"background":{"type":"image","color":"colors-0","image":{"key":"Lv_cOA6wTT23FKJmx21QcA/90375/wellness-home-1.jpg","aspect_ratio":1.5,"title":"wellness-home-1","type":"asset"},"opacity":85},"nature":"wH"}},{"slug":"as-seen-on","visible":"a","states":[],"m":{"w":320,"h":153,"background":{"type":"color","color":"colors-3"}},"d":{"w":1200,"h":159,"background":{"type":"color","color":"colors-3"}}},{"slug":"about-section","visible":"a","states":[],"m":{"w":320,"h":1012,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":812,"background":{"type":"color","color":"colors-2"}}},{"slug":"services-section","visible":"a","states":[],"m":{"w":320,"h":1213,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":935,"background":{"type":"color","color":"colors-7"}}},{"slug":"testimonials","visible":"a","states":[{"slug":"view-1","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"view-2","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":878,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":537,"background":{"type":"color","color":"colors-7"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"free-value-section","visible":"a","states":[],"m":{"w":320,"h":1214,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":772,"background":{"type":"color","color":"colors-2"}}},{"slug":"email-subscribe","visible":"a","states":[],"m":{"w":320,"h":298,"background":{"type":"color","color":"colors-3"}},"d":{"w":1200,"h":187,"background":{"type":"color","color":"colors-3"}}},{"slug":"call-to-action","visible":"a","states":[],"m":{"w":320,"h":320,"background":{"type":"image","color":"colors-0","image":{"key":"DowcWAtGRaK6_uuTPRpNng/90375/wellness-2.jpg","aspect_ratio":1.49875,"title":"wellness-2","type":"asset"},"opacity":75}},"d":{"w":1200,"h":400,"background":{"type":"image","color":"colors-0","image":{"key":"DowcWAtGRaK6_uuTPRpNng/90375/wellness-2.jpg","aspect_ratio":1.49875,"title":"wellness-2","type":"asset"},"opacity":75,"scroll":"x"}}},{"slug":"footer-menu","visible":"a","states":[],"m":{"w":320,"h":407,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":194,"background":{"type":"color","color":"colors-2"}}}],"elementData":[{"type":"simple","visible":"a","id":"buy-now_0","blockId":"buy-now","m":{"x":8,"y":8,"w":114,"h":38,"a":0},"d":{"x":0,"y":165,"w":38,"h":177,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_1","blockId":"buy-now","m":{"x":8,"y":17,"w":114,"h":22,"a":0},"d":{"x":-52,"y":240,"w":138,"h":26,"a":-90,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_2","blockId":"buy-now","m":{"x":129,"y":8,"w":61,"h":38,"a":0},"d":{"x":0,"y":342,"w":38,"h":72,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_3","blockId":"buy-now","m":{"x":135,"y":15,"w":49,"h":26,"a":0},"d":{"x":4,"y":357,"w":29,"h":43,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-1_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-1_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-1_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-2_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_3","blockId":"buy-now","m":{"x":8,"y":-290,"w":304,"h":290,"a":0},"d":{"x":44,"y":165,"w":298,"h":336,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_4","blockId":"buy-now","m":{"x":29,"y":-235,"w":130,"h":13,"a":0},"d":{"x":63,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_5","blockId":"buy-now","m":{"x":170,"y":-235,"w":130,"h":13,"a":0},"d":{"x":203,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_6","blockId":"buy-now","m":{"x":29,"y":-206,"w":130,"h":13,"a":0},"d":{"x":63,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_7","blockId":"buy-now","m":{"x":170,"y":-206,"w":130,"h":13,"a":0},"d":{"x":203,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_8","blockId":"buy-now","m":{"x":29,"y":-177,"w":130,"h":13,"a":0},"d":{"x":63,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_9","blockId":"buy-now","m":{"x":170,"y":-177,"w":130,"h":13,"a":0},"d":{"x":203,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_10","blockId":"buy-now","m":{"x":29,"y":-148,"w":130,"h":13,"a":0},"d":{"x":63,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_11","blockId":"buy-now","m":{"x":170,"y":-148,"w":130,"h":13,"a":0},"d":{"x":203,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_12","blockId":"buy-now","m":{"x":29,"y":-119,"w":130,"h":13,"a":0},"d":{"x":63,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_13","blockId":"buy-now","m":{"x":170,"y":-119,"w":130,"h":13,"a":0},"d":{"x":203,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_14","blockId":"buy-now","m":{"x":29,"y":-90,"w":130,"h":13,"a":0},"d":{"x":63,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_15","blockId":"buy-now","m":{"x":170,"y":-90,"w":130,"h":13,"a":0},"d":{"x":203,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_16","blockId":"buy-now","m":{"x":29,"y":-61,"w":130,"h":13,"a":0},"d":{"x":63,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_17","blockId":"buy-now","m":{"x":170,"y":-61,"w":130,"h":13,"a":0},"d":{"x":203,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_18","blockId":"buy-now","m":{"x":170,"y":-33,"w":130,"h":13,"a":0},"d":{"x":203,"y":446,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_19","blockId":"buy-now","m":{"x":28,"y":-275,"w":266,"h":21,"a":0},"d":{"x":60,"y":180,"w":261,"h":25,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"header-menu_main-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":33,"w":1086,"h":65,"a":0}},{"type":"text","visible":"a","id":"header-menu_main-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":8,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_main-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":550,"y":-49,"w":100,"h":100,"a":0},"pc":[{"type":"show","block":"mobile-menu"}]},{"type":"text","visible":"d","id":"header-menu_main-view_3","blockId":"header-menu","m":{"x":49,"y":182,"w":102,"h":17,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_4","blockId":"header-menu","m":{"x":202,"y":109,"w":102,"h":17,"a":0},"d":{"x":190,"y":54,"w":60,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_5","blockId":"header-menu","m":{"x":126,"y":187,"w":102,"h":17,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_6","blockId":"header-menu","m":{"x":19,"y":130,"w":102,"h":17,"a":0},"d":{"x":301,"y":54,"w":158,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_7","blockId":"header-menu","m":{"x":13,"y":164,"w":102,"h":17,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_8","blockId":"header-menu","m":{"x":108,"y":140,"w":50,"h":50,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_9","blockId":"header-menu","m":{"x":168,"y":138,"w":50,"h":50,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_10","blockId":"header-menu","m":{"x":226,"y":136,"w":50,"h":50,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"m","id":"header-menu_mobile-menu-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":67,"y":43,"w":1086,"h":65,"a":0}},{"type":"text","visible":"m","id":"header-menu_mobile-menu-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":539,"y":18,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_mobile-menu-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":560,"y":-39,"w":100,"h":100,"a":0},"pc":[{"type":"hide","block":"mobile-menu"}]},{"type":"simple","visible":"a","id":"mobile-menu_0","blockId":"mobile-menu","m":{"x":16,"y":79,"w":289,"h":320,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_1","blockId":"mobile-menu","m":{"x":128,"y":110,"w":65,"h":21,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_2","blockId":"mobile-menu","m":{"x":128,"y":282,"w":64,"h":22,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_3","blockId":"mobile-menu","m":{"x":122,"y":153,"w":76,"h":22,"a":0},"d":{"x":198,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_4","blockId":"mobile-menu","m":{"x":80,"y":196,"w":160,"h":23,"a":0},"d":{"x":308,"y":54,"w":151,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_5","blockId":"mobile-menu","m":{"x":117,"y":239,"w":86,"h":22,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_6","blockId":"mobile-menu","m":{"x":91,"y":336,"w":30,"h":30,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_7","blockId":"mobile-menu","m":{"x":145,"y":336,"w":30,"h":30,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_8","blockId":"mobile-menu","m":{"x":206,"y":336,"w":30,"h":30,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_9","blockId":"mobile-menu","m":{"x":16,"y":382,"w":289,"h":1,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_10","blockId":"mobile-menu","m":{"x":16,"y":387,"w":289,"h":3,"a":0},"d":{"x":370,"y":130,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"header-section_0","blockId":"header-section","m":{"x":24,"y":159,"w":273,"h":125,"a":0},"d":{"x":121,"y":217,"w":463,"h":249,"a":0}},{"type":"simple","visible":"a","id":"header-section_1","blockId":"header-section","m":{"x":78,"y":314,"w":164,"h":64,"a":0},"d":{"x":261,"y":499,"w":184,"h":73,"a":0}},{"type":"text","visible":"a","id":"header-section_2","blockId":"header-section","m":{"x":109,"y":332,"w":102,"h":29,"a":0},"d":{"x":278,"y":518,"w":150,"h":37,"a":0}},{"type":"text","visible":"a","id":"as-seen-on_0","blockId":"as-seen-on","m":{"x":21,"y":27,"w":278,"h":37,"a":0},"d":{"x":55,"y":25,"w":104,"h":110,"a":0,"lockH":"l"}},{"type":"graphic","visible":"a","id":"as-seen-on_1","blockId":"as-seen-on","m":{"x":137,"y":77,"w":46,"h":56,"a":0},"d":{"x":573,"y":24,"w":90,"h":111,"a":0},"c":{"key":"6Wo_mYjmSN-3jS8seyb0EQ/90375/oprah-1.png","aspect_ratio":0.81333}},{"type":"graphic","visible":"a","id":"as-seen-on_2","blockId":"as-seen-on","m":{"x":35,"y":89,"w":65,"h":26,"a":0},"d":{"x":325,"y":59,"w":105,"h":42,"a":0},"c":{"key":"TUrH9kfES2e_2LJUJgneYQ/90375/goop.png","aspect_ratio":2.5}},{"type":"graphic","visible":"a","id":"as-seen-on_3","blockId":"as-seen-on","m":{"x":211,"y":94,"w":90,"h":22,"a":0},"d":{"x":805,"y":56,"w":188,"h":47,"a":0},"c":{"key":"gWn9CuljRSWyts71Y7C8GQ/90375/belong.png","aspect_ratio":4}},{"type":"simple","visible":"a","id":"about-section_0","blockId":"about-section","m":{"x":16,"y":508,"w":289,"h":440,"a":0},"d":{"x":596,"y":132,"w":540,"h":557,"a":0}},{"type":"simple","visible":"a","id":"about-section_1","blockId":"about-section","m":{"x":16,"y":531,"w":289,"h":1,"a":0},"d":{"x":656,"y":162,"w":480,"h":2,"a":0}},{"type":"simple","visible":"a","id":"about-section_2","blockId":"about-section","m":{"x":16,"y":536,"w":289,"h":3,"a":0},"d":{"x":656,"y":172,"w":480,"h":4,"a":0}},{"type":"graphic","visible":"a","id":"about-section_3","blockId":"about-section","m":{"x":83,"y":89,"w":224,"h":149,"a":0},"d":{"x":424,"y":533,"w":353,"h":235,"a":0},"c":{"key":"Sit4jnxMQl-fpkciqYykPw/90375/mom3.jpg","aspect_ratio":1.5}},{"type":"graphic","visible":"d","id":"about-section_4","blockId":"about-section","m":{"x":17,"y":199,"w":224,"h":149,"a":0},"d":{"x":424,"y":289,"w":353,"h":235,"a":0},"c":{"key":"9DjFW-7RQn6LIdBN4a4ODA/90375/mom1.jpg","aspect_ratio":1.5}},{"type":"graphic","visible":"d","id":"about-section_5","blockId":"about-section","m":{"x":18,"y":344,"w":224,"h":149,"a":0},"d":{"x":424,"y":45,"w":353,"h":235,"a":0},"c":{"key":"bA3rxyG2T8WCNkEDndQC8A/90375/mom2.jpg","aspect_ratio":1.5}},{"type":"text","visible":"a","id":"about-section_6","blockId":"about-section","m":{"x":25,"y":36,"w":257,"h":81,"a":351},"d":{"x":45,"y":187,"w":519,"h":162,"a":-9}},{"type":"text","visible":"a","id":"about-section_7","blockId":"about-section","m":{"x":34,"y":115,"w":126,"h":21,"a":0},"d":{"x":133,"y":323,"w":183,"h":39,"a":0}},{"type":"text","visible":"a","id":"about-section_8","blockId":"about-section","m":{"x":20,"y":267,"w":280,"h":42,"a":0},"d":{"x":62,"y":435,"w":565,"h":65,"a":0}},{"type":"text","visible":"a","id":"about-section_9","blockId":"about-section","m":{"x":69,"y":330,"w":183,"h":28,"a":0},"d":{"x":91,"y":515,"w":276,"h":39,"a":0}},{"type":"text","visible":"a","id":"about-section_10","blockId":"about-section","m":{"x":67,"y":366,"w":186,"h":28,"a":0},"d":{"x":91,"y":558,"w":276,"h":39,"a":0}},{"type":"text","visible":"a","id":"about-section_11","blockId":"about-section","m":{"x":97,"y":403,"w":126,"h":27,"a":0},"d":{"x":91,"y":602,"w":276,"h":39,"a":0}},{"type":"text","visible":"a","id":"about-section_12","blockId":"about-section","m":{"x":52,"y":438,"w":217,"h":29,"a":0},"d":{"x":91,"y":645,"w":276,"h":39,"a":0}},{"type":"text","visible":"a","id":"about-section_13","blockId":"about-section","m":{"x":37,"y":563,"w":246,"h":331,"a":0},"d":{"x":814,"y":201,"w":288,"h":423,"a":0}},{"type":"simple","visible":"a","id":"about-section_14","blockId":"about-section","m":{"x":78,"y":916,"w":164,"h":64,"a":0},"d":{"x":863,"y":651,"w":194,"h":73,"a":0}},{"type":"text","visible":"a","id":"about-section_15","blockId":"about-section","m":{"x":98,"y":934,"w":125,"h":29,"a":0},"d":{"x":882,"y":670,"w":157,"h":35,"a":0}},{"type":"text","visible":"a","id":"services-section_0","blockId":"services-section","m":{"x":16,"y":47,"w":289,"h":92,"a":0},"d":{"x":65,"y":88,"w":942,"h":55,"a":0}},{"type":"simple","visible":"a","id":"services-section_1","blockId":"services-section","m":{"x":10,"y":166,"w":280,"h":202,"a":0},"d":{"x":116,"y":211,"w":400,"h":260,"a":0}},{"type":"graphic","visible":"a","id":"services-section_2","blockId":"services-section","m":{"x":30,"y":186,"w":280,"h":202,"a":0},"d":{"x":136,"y":231,"w":400,"h":260,"a":0},"c":{"key":"HWWwf_YITY6XdzHRY1GtVw/90375/coach-2.jpg","aspect_ratio":1}},{"type":"text","visible":"a","id":"services-section_3","blockId":"services-section","m":{"x":20,"y":406,"w":280,"h":28,"a":0},"d":{"x":136,"y":523,"w":400,"h":37,"a":0}},{"type":"text","visible":"a","id":"services-section_4","blockId":"services-section","m":{"x":20,"y":444,"w":280,"h":135,"a":0},"d":{"x":136,"y":575,"w":400,"h":136,"a":0}},{"type":"simple","visible":"a","id":"services-section_5","blockId":"services-section","m":{"x":10,"y":627,"w":280,"h":202,"a":0},"d":{"x":685,"y":211,"w":400,"h":260,"a":0}},{"type":"graphic","visible":"a","id":"services-section_6","blockId":"services-section","m":{"x":30,"y":647,"w":280,"h":202,"a":0},"d":{"x":665,"y":231,"w":400,"h":260,"a":0},"c":{"key":"tvsCrBvpRr6DSXQsGYunFQ/90375/coach-1.jpg","aspect_ratio":1}},{"type":"text","visible":"a","id":"services-section_7","blockId":"services-section","m":{"x":20,"y":870,"w":280,"h":29,"a":0},"d":{"x":665,"y":523,"w":400,"h":37,"a":0}},{"type":"simple","visible":"a","id":"services-section_8","blockId":"services-section","m":{"x":78,"y":1088,"w":164,"h":64,"a":0},"d":{"x":503,"y":774,"w":194,"h":73,"a":0}},{"type":"text","visible":"a","id":"services-section_9","blockId":"services-section","m":{"x":98,"y":1106,"w":125,"h":29,"a":0},"d":{"x":522,"y":793,"w":157,"h":35,"a":0}},{"type":"text","visible":"a","id":"services-section_10","blockId":"services-section","m":{"x":20,"y":909,"w":280,"h":132,"a":0},"d":{"x":665,"y":575,"w":400,"h":136,"a":0}},{"type":"graphic","visible":"a","id":"testimonials_0","blockId":"testimonials","m":{"x":0,"y":0,"w":320,"h":321,"a":0,"gs":{"s":30}},"d":{"x":0,"y":0,"w":495,"h":537,"a":0,"lockH":"ls"},"c":{"key":"xfHGpa98TYaz45HhiVfqyQ/90375/wellness-3.jpg","aspect_ratio":0.66667}},{"type":"text","visible":"a","id":"testimonials_1","blockId":"testimonials","m":{"x":41,"y":352,"w":239,"h":65,"a":0},"d":{"x":438,"y":72,"w":727,"h":64,"a":0}},{"type":"text","visible":"a","id":"testimonials_2","blockId":"testimonials","m":{"x":212,"y":822,"w":84,"h":28,"a":0},"d":{"x":1014,"y":464,"w":100,"h":37,"a":0}},{"type":"text","visible":"a","id":"testimonials_view-1_0","blockId":"testimonials","m":{"x":27,"y":432,"w":267,"h":312,"a":0},"d":{"x":553,"y":174,"w":523,"h":231,"a":0}},{"type":"text","visible":"a","id":"testimonials_view-1_1","blockId":"testimonials","m":{"x":79,"y":769,"w":163,"h":33,"a":0},"d":{"x":707,"y":417,"w":216,"h":36,"a":0}},{"type":"text","visible":"a","id":"testimonials_view-2_0","blockId":"testimonials","m":{"x":27,"y":432,"w":267,"h":252,"a":0},"d":{"x":553,"y":174,"w":523,"h":185,"a":0}},{"type":"text","visible":"a","id":"testimonials_view-2_1","blockId":"testimonials","m":{"x":64,"y":769,"w":192,"h":30,"a":0},"d":{"x":707,"y":417,"w":216,"h":36,"a":0}},{"type":"simple","visible":"a","id":"free-value-section_0","blockId":"free-value-section","m":{"x":30,"y":144,"w":260,"h":200,"a":0},"d":{"x":53,"y":55,"w":344,"h":494,"a":0}},{"type":"graphic","visible":"a","id":"free-value-section_1","blockId":"free-value-section","m":{"x":50,"y":164,"w":220,"h":160,"a":0},"d":{"x":75,"y":77,"w":300,"h":450,"a":0},"c":{"key":"1YUdK4G0RdOUdMWJI8Nd0Q/90375/blog4.jpg","aspect_ratio":0.66667}},{"type":"simple","visible":"a","id":"free-value-section_2","blockId":"free-value-section","m":{"x":30,"y":823,"w":260,"h":200,"a":0},"d":{"x":428,"y":267,"w":344,"h":282,"a":0}},{"type":"graphic","visible":"a","id":"free-value-section_3","blockId":"free-value-section","m":{"x":50,"y":843,"w":220,"h":160,"a":0},"d":{"x":450,"y":290,"w":300,"h":237,"a":0,"gs":{"s":82}},"c":{"key":"OLjpiIoRT0mgRfvt8WpyYA/90375/blog3.jpg","aspect_ratio":0.66667}},{"type":"simple","visible":"a","id":"free-value-section_4","blockId":"free-value-section","m":{"x":30,"y":482,"w":260,"h":200,"a":0},"d":{"x":803,"y":140,"w":344,"h":409,"a":0}},{"type":"graphic","visible":"a","id":"free-value-section_5","blockId":"free-value-section","m":{"x":50,"y":502,"w":220,"h":160,"a":0},"d":{"x":825,"y":163,"w":300,"h":364,"a":0},"c":{"key":"NWkG1kudR0-XA8aOUC5tsw/90375/blog1.jpg","aspect_ratio":0.66667}},{"type":"simple","visible":"a","id":"free-value-section_6","blockId":"free-value-section","m":{"x":78,"y":369,"w":164,"h":64,"a":0},"d":{"x":128,"y":569,"w":194,"h":73,"a":0}},{"type":"text","visible":"a","id":"free-value-section_7","blockId":"free-value-section","m":{"x":98,"y":387,"w":125,"h":29,"a":0},"d":{"x":147,"y":588,"w":157,"h":35,"a":0}},{"type":"simple","visible":"a","id":"free-value-section_8","blockId":"free-value-section","m":{"x":78,"y":707,"w":164,"h":64,"a":0},"d":{"x":503,"y":569,"w":194,"h":73,"a":0}},{"type":"text","visible":"a","id":"free-value-section_9","blockId":"free-value-section","m":{"x":98,"y":725,"w":125,"h":29,"a":0},"d":{"x":522,"y":588,"w":157,"h":35,"a":0}},{"type":"simple","visible":"a","id":"free-value-section_10","blockId":"free-value-section","m":{"x":78,"y":1048,"w":164,"h":64,"a":0},"d":{"x":878,"y":569,"w":194,"h":73,"a":0}},{"type":"text","visible":"a","id":"free-value-section_11","blockId":"free-value-section","m":{"x":98,"y":1066,"w":125,"h":29,"a":0},"d":{"x":897,"y":588,"w":157,"h":35,"a":0}},{"type":"simple","visible":"a","id":"free-value-section_12","blockId":"free-value-section","m":{"x":16,"y":1156,"w":289,"h":1,"a":0},"d":{"x":57,"y":693,"w":1086,"h":2,"a":0}},{"type":"simple","visible":"a","id":"free-value-section_13","blockId":"free-value-section","m":{"x":16,"y":1161,"w":289,"h":3,"a":0},"d":{"x":57,"y":703,"w":1086,"h":4,"a":0}},{"type":"text","visible":"a","id":"free-value-section_14","blockId":"free-value-section","m":{"x":54,"y":80,"w":213,"h":31,"a":0},"d":{"x":409,"y":182,"w":382,"h":39,"a":0}},{"type":"text","visible":"a","id":"free-value-section_15","blockId":"free-value-section","m":{"x":96,"y":45,"w":130,"h":31,"a":0},"d":{"x":446,"y":115,"w":308,"h":55,"a":0}},{"type":"text","visible":"a","id":"email-subscribe_0","blockId":"email-subscribe","m":{"x":25,"y":28,"w":271,"h":95,"a":0},"d":{"x":97,"y":34,"w":1006,"h":40,"a":0}},{"type":"iframe","visible":"a","id":"email-subscribe_1","blockId":"email-subscribe","m":{"x":17,"y":136,"w":286,"h":140,"a":0},"d":{"x":250,"y":80,"w":700,"h":62,"a":0}},{"type":"text","visible":"a","id":"call-to-action_0","blockId":"call-to-action","m":{"x":51,"y":100,"w":218,"h":88,"a":0},"d":{"x":253,"y":168,"w":694,"h":65,"a":0}},{"type":"text","visible":"a","id":"call-to-action_1","blockId":"call-to-action","m":{"x":73,"y":57,"w":174,"h":39,"a":0},"d":{"x":357,"y":131,"w":486,"h":36,"a":0}},{"type":"simple","visible":"a","id":"call-to-action_2","blockId":"call-to-action","m":{"x":78,"y":208,"w":164,"h":64,"a":0},"d":{"x":508,"y":261,"w":184,"h":73,"a":0}},{"type":"text","visible":"a","id":"call-to-action_3","blockId":"call-to-action","m":{"x":109,"y":226,"w":102,"h":29,"a":0},"d":{"x":525,"y":279,"w":150,"h":38,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_0","blockId":"footer-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":45,"w":1086,"h":65,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_1","blockId":"footer-menu","m":{"x":16,"y":84,"w":289,"h":241,"a":0},"d":{"x":57,"y":117,"w":1086,"h":30,"a":0}},{"type":"text","visible":"a","id":"footer-menu_2","blockId":"footer-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":18,"w":143,"h":111,"a":0}},{"type":"text","visible":"a","id":"footer-menu_3","blockId":"footer-menu","m":{"x":40,"y":356,"w":240,"h":25,"a":0},"d":{"x":87,"y":68,"w":375,"h":19,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_4","blockId":"footer-menu","m":{"x":160,"y":39,"w":30,"h":30,"a":0},"d":{"x":990,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_5","blockId":"footer-menu","m":{"x":208,"y":39,"w":30,"h":30,"a":0},"d":{"x":1036,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_6","blockId":"footer-menu","m":{"x":260,"y":39,"w":30,"h":30,"a":0},"d":{"x":1087,"y":66,"w":24,"h":22,"a":0}},{"type":"text","visible":"a","id":"footer-menu_7","blockId":"footer-menu","m":{"x":164,"y":283,"w":102,"h":22,"a":0},"d":{"x":881,"y":68,"w":51,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_8","blockId":"footer-menu","m":{"x":55,"y":283,"w":102,"h":22,"a":0},"d":{"x":774,"y":68,"w":68,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_9","blockId":"footer-menu","m":{"x":55,"y":147,"w":102,"h":22,"a":0},"d":{"x":87,"y":122,"w":60,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_10","blockId":"footer-menu","m":{"x":164,"y":147,"w":102,"h":22,"a":0},"d":{"x":178,"y":122,"w":62,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_11","blockId":"footer-menu","m":{"x":63,"y":192,"w":195,"h":22,"a":0},"d":{"x":277,"y":122,"w":161,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_12","blockId":"footer-menu","m":{"x":55,"y":238,"w":102,"h":22,"a":0},"d":{"x":789,"y":122,"w":55,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_13","blockId":"footer-menu","m":{"x":164,"y":238,"w":102,"h":22,"a":0},"d":{"x":877,"y":122,"w":78,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_14","blockId":"footer-menu","m":{"x":103,"y":107,"w":114,"h":22,"a":0},"d":{"x":999,"y":122,"w":133,"h":19,"a":0}}]}
      </script>

<?php get_footer(); ?>