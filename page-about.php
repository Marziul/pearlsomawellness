<?php
/**
 * Template Name: About
 */
include( get_template_directory() . '/headerabout.php');


 ?>
<div class="yoututbe_thumb">
			<div class="yoututbe_thumb">
				 
				<div class="yoututbe_img_thumb" style="background-image: url(<?php the_field('video_background_image')?>);">
					
					<img src="<?php the_field('video_image')?>" >
					
					<?php
								$yshort = get_field('video_shortcode');	
								echo do_shortcode($yshort); ?>

				</div>
			</div>
		</div>

    <div id="email-subscribe" data-bid="email-subscribe " class="sb top_sub sib-email-subscribe">
		
		
		
      <div class="ss-s ss-bg">
		  
		  
		  
		  
        <div class="sc" style="width:1200px;">
			
			
			
          <div data-sid="email-subscribe_0" class="sie-email-subscribe_0 se ">
			  
          <div class="mark_text">
			  <h2>
				  <?php the_field('text_title'); ?>
			  </h2>
			  
			  <p>
				  
				  <?php the_field('text_info'); ?>
				  
			  </p>
			  
		   </div>
			  
            <h3 class="se-t sie-email-subscribe_0-text text_title st-m-subheading st-d-heading se-rc"><?php the_field('second_section_text')?><br></h3>
          </div>
          <div data-sid="email-subscribe_1" class="sie-email-subscribe_1 se ">
            <div class="si-embed">
				
              <div class="seva-form formkit-form"
                method="post" data-sv-form="1135540" data-uid="fbb8314654" data-format="inline" data-version="5"
                data-options=""
                min-width="400 500 600 700 800">
                <div data-style="clean">
					
                  <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                  <div data-element="fields" data-stacked="false" class="seva-fields formkit-fields about-page-form">
                   
						<?php echo do_shortcode('[contact-form-7 id="1135" title="Subsribe"]'); ?>
					  
                  </div>
                </div>
              </div>
            </div>
          </div>
			
		
		  
		
			
        </div>
      </div>
		
		
		
    </div>








<div class="about-sec">
	
	<div class="about-sec-three">
		<h1 class="sec-three-heading">
			<?php the_field('wellness_section_title')?>
			
		</h1>
		
			<?php the_field('wellness_section_info')?>
		
	</div>
	<div class="sec-three-button-div">
		<button class="sec-three-button">
			<a href="#" class="sec-three-button-link">Start Now</a>
		</button>
	</div>
</div>
    <div id="why" data-bid="why" class="sb sib-why">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
			
			
          <div data-sid="why_0" class="sie-why_0 se ">
            <div class="about__bg" style="width:100%;height:100%; background-size: cover; background-image: url(<?php the_field('coach_section_left_image'); ?>);" class="se-img se-gr slzy"></div>
          </div>
          <div data-sid="why_1" class="sie-why_1 se ">
            <h2 class="se-t sie-why_1-text st-m-heading st-d-heading se-rc"><?php the_field('coach_section_title'); ?></h2>
          </div>
          <div data-sid="why_3" class="sie-why_3 se ">
            <div class="se-t sie-why_3-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('coach_section_text__'); ?>
			  
				<div class="about_active wl10_section about_active ">

					
					
					<?php if( have_rows('coach_section_texts') ): ?>
    <?php while( have_rows('coach_section_texts') ): the_row();  ?>
					
					
						  <div class="story-item">
							  <div class="story_text">
							  <?php the_sub_field('coach_description'); ?>
							  
							  </div>
							  <div class="author">
							  </div>
						  </div>
					
        
    <?php endwhile; ?>
<?php endif; ?>
					
					
					
					
					



						 


						  
			  
			  
					  </div>
			  
			  </div>
          </div>
			
			
			
			
        </div>
      </div>

    </div>
<div class="new-sec">
	<div class="new-sec-para">
		<?php the_field('coach_section_bottom_text'); ?>
		
		
		
	</div>
</div>







    <div id="story" data-bid="story" class="sb sib-story">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="story_0" class="sie-story_0 se ">
            <div style="width:100%;height:100%; background-image: url(<?php the_field('about_section_image');?>);"  class="se-img se-gr slzy"></div>
          </div><a href="#" target="_self" class="sie-story_1 se  se-stl" data-sid="story_1"
            data-state="story|next|0|0">
            <h3 class="se-t sie-story_1-text st-m-subheading st-d-subheading"><?php the_field('abut_story_button_text');?></h3>
          </a>
        </div>
      </div>
		
		
		
		
		
			
				<div id="story_view-1-my-story" class="ss sis-story_view-1-my-story sactive">
				<div class="sc">
				  <div data-sid="story_view-1-my-story_0" class="sie-story_view-1-my-story_0 se ">
					<h2 class="se-t sie-story_view-1-my-story_0-text st-m-heading st-d-heading se-rc"><?php the_field('about_story_title_one');?></h2>
				  </div>
					
					
					
					
				  <div data-sid="story_view-1-my-story_1" class="sie-story_view-1-my-story_1 se ">
					  
					  
					  
					<div class="se-t sie-story_view-1-my-story_1-text st-m-paragraph st-d-paragraph se-rc"> 
					<?php echo do_shortcode('[textsliders]'); ?>  <?php the_field('about_story_text_one__');?></div>
				  </div>
				</div>
			  </div>
		
		
		
      <div id="story_view-2-fun-facts" class="ss sis-story_view-2-fun-facts">
        <div class="sc">
          <div data-sid="story_view-2-fun-facts_0" class="sie-story_view-2-fun-facts_0 se ">
            <h2 class="se-t sie-story_view-2-fun-facts_0-text st-m-heading st-d-heading se-rc"><?php the_field('about_story_title_two');?></h2>
          </div>
          <div data-sid="story_view-2-fun-facts_1" class="sie-story_view-2-fun-facts_1 se ">
            <div class="se-t about-list sie-story_view-2-fun-facts_1-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('about_story_text_two');?></div>
          </div>
        </div>
      </div>
		
		
    </div>
    <div id="footer-book" data-bid="footer-book" class="sb sib-footer-book">
      <div class="ss-s ss-bg">
        <div class="sb-m ssp-d" style=" background-image: url(<?php the_field('about_talk_background_image'); ?>)"></div>
        <div class="sc" style="width:1200px;">
          <div data-sid="footer-book_0" class="sie-footer-book_0 se ">
            <h2 class="se-t sie-footer-book_0-text st-m-heading se-rc"><?php the_field('about_talk_title');?></h2>
          </div>
          <div data-sid="footer-book_1" class="sie-footer-book_1 se ">
            <h3 class="se-t sie-footer-book_1-text st-m-subheading st-d-subheading se-rc"><?php the_field('about_talk_sub_title');?></h3>
          </div>
			
			<a href="<?php the_field('about_talk_button_link');?>" target="_self" class="sie-footer-book_3 se about_btn_btm"
            data-sid="footer-book_3">
            <?php the_field('abut_talk_button_text');?>
          </a>
        </div>
      </div>
    </div>
    <div id="features" data-bid="features" class="sb sib-features">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="features_0" class="sie-features_0 se ">
            <h2 class="se-t sie-features_0-text st-m-heading st-d-heading se-rc">Places I've been featured</h2>
          </div>
          <div data-sid="features_1" class="sie-features_1 se ">
            <div style="width:100%;height:100%;" data-img="features_1" class="se-img se-gr slzy"></div><noscript><img
                src="../static.showit.co/200/IAhiXiv5S-qFEyaIV4FejA/90375/878df0d6568718e42c251b6c3f28fb4a.jpg"
                class="se-img" alt="878df0d6568718e42c251b6c3f28fb4a"
                title="878df0d6568718e42c251b6c3f28fb4a"></noscript>
          </div>
          <div data-sid="features_2" class="sie-features_2 se ">
            <h3 class="se-t sie-features_2-text st-m-subheading st-d-subheading se-rc">Title of article</h3>
          </div>
          <div data-sid="features_3" class="sie-features_3 se ">
            <p class="se-t sie-features_3-text st-m-paragraph st-d-paragraph se-rc">The Oprah Magazine</p>
          </div>
          <div data-sid="features_4" class="sie-features_4 se ">
            <p class="se-t sie-features_4-text st-m-paragraph st-d-paragraph se-rc">Overview of the article topic. Give
              a quick description so people know whether it's something they want to read.</p>
          </div>
          <div data-sid="features_5" class="sie-features_5 se ">
            <div style="width:100%;height:100%;" data-img="features_5" class="se-img se-gr slzy"></div><noscript><img
                src="../static.showit.co/200/7M0reNBzQJSTw1y0E0tA-g/90375/goop-elle-dk.jpg" class="se-img"
                alt="goop-elle-dk" title="goop-elle-dk"></noscript>
          </div>
          <div data-sid="features_6" class="sie-features_6 se ">
            <h3 class="se-t sie-features_6-text st-m-subheading st-d-subheading se-rc">Title of article</h3>
          </div>
          <div data-sid="features_7" class="sie-features_7 se ">
            <p class="se-t sie-features_7-text st-m-paragraph st-d-paragraph se-rc">goop Magazine</p>
          </div>
          <div data-sid="features_8" class="sie-features_8 se ">
            <p class="se-t sie-features_8-text st-m-paragraph st-d-paragraph se-rc">Overview of the article topic. Give
              a quick description so people know whether it's something they want to read.</p>
          </div>
          <div data-sid="features_9" class="sie-features_9 se ">
            <div style="width:100%;height:100%;" data-img="features_9" class="se-img se-gr slzy"></div><noscript><img
                src="../static.showit.co/200/l1EGER_pS82_Qckprhaflg/90375/http_i1_sndcdn_com_avatars-000193677676-c2wbkw-original.jpg"
                class="se-img" alt="http _i1.sndcdn.com_avatars-000193677676-c2wbkw-original"
                title="http _i1.sndcdn.com_avatars-000193677676-c2wbkw-original"></noscript>
          </div>
          <div data-sid="features_10" class="sie-features_10 se ">
            <h3 class="se-t sie-features_10-text st-m-subheading st-d-subheading se-rc">Title of article</h3>
          </div>
          <div data-sid="features_11" class="sie-features_11 se ">
            <p class="se-t sie-features_11-text st-m-paragraph st-d-paragraph se-rc">The mindful podcast</p>
          </div>
          <div data-sid="features_12" class="sie-features_12 se ">
            <p class="se-t sie-features_12-text st-m-paragraph st-d-paragraph se-rc">Overview of the article topic. Give
              a quick description so people know whether it's something they want to read.</p>
          </div>
          <div data-sid="features_13" class="sie-features_13 se ">
            <div style="width:100%;height:100%;" data-img="features_13" class="se-img se-gr slzy"></div><noscript><img
                src="../static.showit.co/200/8ZfZWt2RSeyZKyZ4dti_Ww/90375/pinterest_caffeine.jpg" class="se-img"
                alt="Pinterest_Caffeine" title="Pinterest_Caffeine"></noscript>
          </div>
          <div data-sid="features_14" class="sie-features_14 se ">
            <h3 class="se-t sie-features_14-text st-m-subheading st-d-subheading se-rc">Title of article</h3>
          </div>
          <div data-sid="features_15" class="sie-features_15 se ">
            <p class="se-t sie-features_15-text st-m-paragraph st-d-paragraph se-rc">Healthline</p>
          </div>
          <div data-sid="features_16" class="sie-features_16 se ">
            <p class="se-t sie-features_16-text st-m-paragraph st-d-paragraph se-rc">Overview of the article topic. Give
              a quick description so people know whether it's something they want to read.</p>
          </div>
        </div>
      </div>
    </div>



<?php get_footer(); ?>