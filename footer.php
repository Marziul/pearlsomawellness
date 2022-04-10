<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */

?>
<div id="footer-menu" data-bid="footer-menu" class="sb sib-footer-menu">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="footer-menu_0" class="sie-footer-menu_0 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="footer-menu_1" class="sie-footer-menu_1 se ">
            <div class="se-simple"></div>
			  
			  
			  <a href="<?php the_field('7th_menu_linkf', 'options'); ?>" target="_blank" class="last_menu" data-sid="footer-menu_13" style="transform: scale(1, 1) translate(0px, 0px);">
				<h3 class="se-t sie-footer-menu_13-text st-m-subheading st-d-subheading"><?php the_field('7th_menu_name', 'options');?></h3>
			  </a>
			  
			  
          </div><a href="#/" target="_self" class="sie-footer-menu_2 se " data-sid="footer-menu_2">
            <h1 class="se-t sie-footer-menu_2-text st-m-title st-d-title">
				
				<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
				
			</h1>
          </a><a href="<?php the_field('copy_right_link', 'options');?>" target="_self" class="sie-footer-menu_3 se " data-sid="footer-menu_3">
            <h3 class="se-t sie-footer-menu_3-text st-m-subheading st-d-subheading"><?php the_field('copy_right_text', 'options');?></h3>
          </a><a href="<?php the_field('facebook_link', 'options');?>" target="_blank" class="sie-footer-menu_4 se " data-sid="footer-menu_4">
            <div class="se-icon"><svg xmlns="<?php the_field('facebook_link', 'options');?>" viewBox="0 0 512 512">
                <path
                  d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z" />
                </svg></div>
          </a><a href="<?php the_field('instagram_link','options');?>" target="_blank" class="sie-footer-menu_5 se " data-sid="footer-menu_5">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M338,54.63H174c-62.72,0-114,51.32-114,114V343.33c0,62.72,51.32,114,114,114H338c62.72,0,114-51.32,114-114V168.67C452,105.94,400.68,54.63,338,54.63Zm83.91,288.71A84.24,84.24,0,0,1,338,427.24H174a84.24,84.24,0,0,1-83.91-83.91V168.67A84.24,84.24,0,0,1,174,84.76H338a84.24,84.24,0,0,1,83.91,83.91Z" />
                <path
                  d="M255.77,148.18A107.94,107.94,0,1,0,363.71,256.13,107.94,107.94,0,0,0,255.77,148.18Zm-.52,178.71a70.68,70.68,0,1,1,70.68-70.68A70.68,70.68,0,0,1,255.25,326.9Z" />
                <circle cx="365.44" cy="146.5" r="25.56" /></svg></div>
          </a>
		<a href="<?php the_field('pinterest_link','options');?>" target="_blank" class="sie-footer-menu_6 se " data-sid="footer-menu_6">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M256 32C132.3 32 32 132.3 32 256c0 91.7 55.2 170.5 134.1 205.2-.6-15.6-.1-34.4 3.9-51.4 4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58 20.4 0 30.2 15.3 30.2 33.6 0 20.5-13.1 51.1-19.8 79.5-5.6 23.8 11.9 43.1 35.4 43.1 42.4 0 71-54.5 71-119.1 0-49.1-33.1-85.8-93.2-85.8-67.9 0-110.3 50.7-110.3 107.3 0 19.5 5.8 33.3 14.8 43.9 4.1 4.9 4.7 6.9 3.2 12.5-1.1 4.1-3.5 14-4.6 18-1.5 5.7-6.1 7.7-11.2 5.6-31.3-12.8-45.9-47-45.9-85.6 0-63.6 53.7-139.9 160.1-139.9 85.5 0 141.8 61.9 141.8 128.3 0 87.9-48.9 153.5-120.9 153.5-24.2 0-46.9-13.1-54.7-27.9 0 0-13 51.6-15.8 61.6-4.7 17.3-14 34.5-22.5 48 20.1 5.9 41.4 9.2 63.5 9.2 123.7 0 224-100.3 224-224C480 132.3 379.7 32 256 32z" />
                </svg></div>
          </a>
			
			<a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank" class="sie-footer-menu_7 se " data-sid="footer-menu_6" style="transform: scale(1, 1) translate(0px, 0px);">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M2235 5105 c-462 -60 -885 -237 -1255 -523 -117 -91 -316 -287 -413
-407 -276 -342 -459 -746 -537 -1186 -28 -156 -39 -531 -21 -702 82 -766 505
-1455 1156 -1880 324 -211 689 -344 1085 -393 152 -19 472 -18 630 1 1160 144
2081 1065 2225 2225 20 162 20 478 0 640 -92 744 -509 1411 -1140 1826 -329
216 -695 350 -1085 399 -152 18 -501 18 -645 0z m812 -1440 c432 -9 694 -33
807 -75 69 -26 161 -108 199 -178 61 -111 87 -315 94 -736 8 -480 -22 -815
-86 -951 -61 -131 -171 -204 -346 -230 -422 -62 -1869 -63 -2296 0 -52 8 -121
24 -153 35 -77 29 -166 113 -206 193 -58 120 -90 414 -90 837 0 402 32 711 85
827 33 74 115 157 189 193 73 36 185 55 416 71 196 13 796 27 995 22 77 -1
253 -5 392 -8z"></path>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"></path>
                </svg>
				
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M2235 5105 c-462 -60 -885 -237 -1255 -523 -117 -91 -316 -287 -413
-407 -276 -342 -459 -746 -537 -1186 -28 -156 -39 -531 -21 -702 82 -766 505
-1455 1156 -1880 324 -211 689 -344 1085 -393 152 -19 472 -18 630 1 1160 144
2081 1065 2225 2225 20 162 20 478 0 640 -92 744 -509 1411 -1140 1826 -329
216 -695 350 -1085 399 -152 18 -501 18 -645 0z m812 -1440 c432 -9 694 -33
807 -75 69 -26 161 -108 199 -178 61 -111 87 -315 94 -736 8 -480 -22 -815
-86 -951 -61 -131 -171 -204 -346 -230 -422 -62 -1869 -63 -2296 0 -52 8 -121
24 -153 35 -77 29 -166 113 -206 193 -58 120 -90 414 -90 837 0 402 32 711 85
827 33 74 115 157 189 193 73 36 185 55 416 71 196 13 796 27 995 22 77 -1
253 -5 392 -8z"></path>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"></path>
</g>
</svg></div>
          </a>
			
			  <a href="<?php the_field('terms_link', 'options');?>" target="_self" class="sie-footer-menu_7 se "
				data-sid="footer-menu_7">
				<h3 class="se-t sie-footer-menu_7-text st-m-subheading st-d-subheading"><?php the_field('terms_text', 'options');?></h3>
			  </a>
			
		  <a href="<?php the_field('privacy_link', 'options');?>" target="_self" class="sie-footer-menu_8 se "
            data-sid="footer-menu_8">
            <h3 class="se-t sie-footer-menu_8-text st-m-subheading st-d-subheading"><?php the_field('privacy_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('1st_menu_linkf', 'options');?>" target="_self" class="sie-footer-menu_9 se " data-sid="footer-menu_9">
            <h3 class="se-t sie-footer-menu_9-text st-m-subheading st-d-subheading"><?php the_field('1st_menu_name', 'options');?> </h3>
          </a>
          
        <a href="<?php the_field('2nd_menu_linkf', 'options'); ?>" target="_self" class="sie-footer-menu_10 se "
            data-sid="footer-menu_10">
            <h3 class="se-t sie-footer-menu_10-text st-m-subheading st-d-subheading"><?php the_field('2nd_menu_name', 'options');?> </h3>
          </a>
			
			<a href="<?php the_field('3rd_menu_linkf', 'options');?>" target="_self" class="sie-footer-menu_11 se "
            data-sid="footer-menu_11">
            <h3 class="se-t sie-footer-menu_11-text st-m-subheading st-d-subheading"><?php the_field('3rd_menu_name', 'options');?> </h3>
          </a>
			
		  <a href="<?php the_field('5th_menu_linkf', 'options');?>" target="_self" class="sie-footer-menu_12 se"
            data-sid="footer-menu_11a">
            <h3 class="se-t sie-footer-menu_11a-text st-m-subheading st-d-subheading"><?php the_field('5th_menu_name', 'options');?> </h3>
          </a>
			
	      <a href="<?php the_field('4th_menu_linkf', 'options');?>" target="_self" class="sie-footer-menu_12 footer_11b se"
            data-sid="footer-menu_11b">
            <h3 class="se-t sie-footer-menu_11b-text st-m-subheading st-d-subheading"><?php the_field('4th_menu_name', 'options');?></h3>
          </a>
			
		
			<a href="<?php the_field('7th_menu_linkf', 'options');?>" target="_blank" class="sie-footer-menu_13 se "
            data-sid="footer-menu_13">
            <h3 class="se-t sie-footer-menu_13-text st-m-subheading st-d-subheading"><?php the_field('6th_menu_name', 'options');?></h3>
				
				
          </a><a href="#si-sp" target="_self" class="sie-footer-menu_14 se  se-sl" data-sid="footer-menu_14" style="transform: scale(1, 1) translate(0px, 0px);">
			<h3 class="se-t sie-footer-menu_14-text st-m-subheading st-d-subheading">back to top ^</h3></a>
			
			
        </div>
      </div>
    </div>


	<section class="prsm_footer">
        <div class="logo_social">
            <div class="f_logo">
                    <?php
					if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>
            </div>
            <div class="f_social">
                <ul>
					<li>
						<a href="<?php the_field('facebook_link', 'options');?>" target="_blank" class="sie-footer-menu_4 se " data-sid="footer-menu_4">
							<svg xmlns="<?php the_field('facebook_link', 'options');?>" viewBox="0 0 512 512">
								 <path d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('instagram_link', 'options');?>" target="_blank" class="sie-footer-menu_5 se " data-sid="footer-menu_4">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M338,54.63H174c-62.72,0-114,51.32-114,114V343.33c0,62.72,51.32,114,114,114H338c62.72,0,114-51.32,114-114V168.67C452,105.94,400.68,54.63,338,54.63Zm83.91,288.71A84.24,84.24,0,0,1,338,427.24H174a84.24,84.24,0,0,1-83.91-83.91V168.67A84.24,84.24,0,0,1,174,84.76H338a84.24,84.24,0,0,1,83.91,83.91Z"></path>
                <path d="M255.77,148.18A107.94,107.94,0,1,0,363.71,256.13,107.94,107.94,0,0,0,255.77,148.18Zm-.52,178.71a70.68,70.68,0,1,1,70.68-70.68A70.68,70.68,0,0,1,255.25,326.9Z"></path>
                <circle cx="365.44" cy="146.5" r="25.56"></circle></svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('pinterest_link', 'options');?>" target="_blank" class="sie-footer-menu_6 se " data-sid="footer-menu_4">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M256 32C132.3 32 32 132.3 32 256c0 91.7 55.2 170.5 134.1 205.2-.6-15.6-.1-34.4 3.9-51.4 4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58 20.4 0 30.2 15.3 30.2 33.6 0 20.5-13.1 51.1-19.8 79.5-5.6 23.8 11.9 43.1 35.4 43.1 42.4 0 71-54.5 71-119.1 0-49.1-33.1-85.8-93.2-85.8-67.9 0-110.3 50.7-110.3 107.3 0 19.5 5.8 33.3 14.8 43.9 4.1 4.9 4.7 6.9 3.2 12.5-1.1 4.1-3.5 14-4.6 18-1.5 5.7-6.1 7.7-11.2 5.6-31.3-12.8-45.9-47-45.9-85.6 0-63.6 53.7-139.9 160.1-139.9 85.5 0 141.8 61.9 141.8 128.3 0 87.9-48.9 153.5-120.9 153.5-24.2 0-46.9-13.1-54.7-27.9 0 0-13 51.6-15.8 61.6-4.7 17.3-14 34.5-22.5 48 20.1 5.9 41.4 9.2 63.5 9.2 123.7 0 224-100.3 224-224C480 132.3 379.7 32 256 32z"></path>
                </svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank" class="sie-footer-menu_7 se " data-sid="footer-menu_6" style="transform: scale(1, 1) translate(0px, 0px);">
            <div class="se-icon">				
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M2235 5105 c-462 -60 -885 -237 -1255 -523 -117 -91 -316 -287 -413
-407 -276 -342 -459 -746 -537 -1186 -28 -156 -39 -531 -21 -702 82 -766 505
-1455 1156 -1880 324 -211 689 -344 1085 -393 152 -19 472 -18 630 1 1160 144
2081 1065 2225 2225 20 162 20 478 0 640 -92 744 -509 1411 -1140 1826 -329
216 -695 350 -1085 399 -152 18 -501 18 -645 0z m812 -1440 c432 -9 694 -33
807 -75 69 -26 161 -108 199 -178 61 -111 87 -315 94 -736 8 -480 -22 -815
-86 -951 -61 -131 -171 -204 -346 -230 -422 -62 -1869 -63 -2296 0 -52 8 -121
24 -153 35 -77 29 -166 113 -206 193 -58 120 -90 414 -90 837 0 402 32 711 85
827 33 74 115 157 189 193 73 36 185 55 416 71 196 13 796 27 995 22 77 -1
253 -5 392 -8z"></path>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"></path>
</g>
</svg></div>
          </a>
					</li>
				</ul>
            </div>
        </div>
        <div class="f_menu">
			
			<div class="scrl_btn_m">
					<a href="#si-sp" target="_self" class=" se  se-sl" style="transform: scale(1, 1) translate(0px, 0px);">
						<h3 class="">back to top ^</h3>
					</a>
            </div>
			
            <ul>
                <li><a href="<?php the_field('1st_menu_linkf', 'options');?>"><?php the_field('1st_menu_name', 'options');?></a></li>
                <li><a href="<?php the_field('2nd_menu_linkf', 'options'); ?>"><?php the_field('2nd_menu_name', 'options');?></a></li>
            </ul>

            <ul class="join_btn">
                <li><a href="<?php the_field('3rd_menu_linkf', 'options');?>"><?php the_field('3rd_menu_name', 'options');?></a></li>
            </ul>
            <ul>
                <li><a href="<?php the_field('5th_menu_linkf', 'options');?>"><?php the_field('5th_menu_name', 'options');?></a></li>
                <li><a href="<?php the_field('6th_menu_linkf', 'options');?>"><?php the_field('6th_menu_name', 'options');?></a></li>
				

            </ul>
            <ul class="privacy_menu">
                <li><a href="<?php the_field('7th_menu_linkf', 'options');?>"><?php the_field('7th_menu_name', 'options');?></a></li>
                <li><a href="<?php the_field('privacy_link', 'options');?>"><?php the_field('privacy_text', 'options');?></a></li>
                <li><a href="<?php the_field('4th_menu_linkf', 'options');?>"><?php the_field('4th_menu_name', 'options');?></a></li>
            </ul>
            <ul class="scrl_btn">
                <li><a href="#si-sp" target="_self" class="sie-footer-menu_14 se  se-sl" data-sid="footer-menu_14" style="transform: scale(1, 1) translate(0px, 0px);"><h3 class="se-t sie-footer-menu_14-text st-m-subheading st-d-subheading">back to top ^</h3></a></li>
            </ul>
            <ul class="cop_rt">
                <li><a href="<?php the_field('copy_right_link', 'options');?>"><?php the_field('copy_right_text', 'options');?></a></li>
            </ul>
        </div>
    </section>
</div>


<?php wp_footer(); ?>


</body>
</html>