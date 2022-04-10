<?php
/**
 * Template Name: JOIN THE CHALLENGE
 */
include( get_template_directory() . '/header-contact.php');
 ?>

    <div class="sec-bg">
      <div class="first-sec">
          <div class="f-img-div">
              <img src="http://static.showit.co/800/kRf-iuJvQlea9Ci5rd56Qw/90375/c5.jpg" alt="" class="img-shape first-img">
          </div>
          <div class="s-img-div">
              <img src="http://static.showit.co/800/goboPXrCQB6MFqa_su0Aeg/90375/c2.jpg" alt="" class="img-shape second-img"> 
          </div>
          <div class="t-img-div">
              <img src="http://static.showit.co/800/xm6GmdYzRtG_DgfLPtSpOA/90375/c1.jpg" alt="" class="img-shape third-img">
          </div>
      </div>
      <div class="second-sec">
          <div class="first-div"></div>
          <div class="second-div"></div>
          <div class="text-div">
              <h1 class="first-heading"><?php the_field('contact_form_title'); ?></h1>
              <p class="first-para"><?php the_field('contact_form_info'); ?></p>
          </div>
		  
		<div class="ct-form">
		   <?php 

				if ( get_field('contact_form_shortcode') ) {
					echo do_shortcode( get_field('contact_form_shortcode') );
				}
		  ?>   
	
       </div>    

      </div>
    </div>


    <div id="contact-info" data-bid="contact-info" class="sb sib-contact-info">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="contact-info_0" class="sie-contact-info_0 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_1" class="sie-contact-info_1 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_2" class="sie-contact-info_2 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_3" class="sie-contact-info_3 se ">
            <h3 class="se-t sie-contact-info_3-text st-m-subheading st-d-subheading se-rc"><?php the_field('left_contact_bottom_title') ?></h3>
          </div>
          <div data-sid="contact-info_4" class="sie-contact-info_4 se ">
            <p class="se-t sie-contact-info_4-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('left_contact_bottom_description') ?></p>
          </div>
          <div data-sid="contact-info_5" class="sie-contact-info_5 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_6" class="sie-contact-info_6 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_7" class="sie-contact-info_7 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="contact-info_8" class="sie-contact-info_8 se ">
            <h3 class="se-t sie-contact-info_8-text st-m-subheading st-d-subheading se-rc"><?php the_field('right_contact_bottom_title') ?></h3>
          </div>
          <div data-sid="contact-info_9" class="sie-contact-info_9 se ">
            <p class="se-t sie-contact-info_9-text st-m-paragraph st-d-paragraph se-rc"><?php the_field('right_contact_bottom_description') ?></p>
          </div>
        </div>
      </div>
    </div>
    <div id="email-subscribe" data-bid="email-subscribe" class="sb sib-email-subscribe">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="email-subscribe_0" class="sie-email-subscribe_0 se ">
            <h3 class="se-t sie-email-subscribe_0-text st-m-subheading st-d-heading se-rc">download my top 10 wellness
              tips for entrepreneurs<br></h3>
          </div>
          <div data-sid="email-subscribe_1" class="sie-email-subscribe_1 se ">
            <div class="si-embed">
              <script src="../f.convertkit.com/ckjs/ck.5.js"></script>
              <form action="https://app.convertkit.com/forms/1135540/subscriptions" class="seva-form formkit-form"
                method="post" data-sv-form="1135540" data-uid="fbb8314654" data-format="inline" data-version="5"
                data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:null,&quot;redirect_url&quot;:&quot;&quot;},&quot;analytics&quot;:{&quot;google&quot;:null,&quot;facebook&quot;:null,&quot;segment&quot;:null,&quot;pinterest&quot;:null},&quot;modal&quot;:{&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null},&quot;powered_by&quot;:{&quot;show&quot;:false,&quot;url&quot;:&quot;http://mbsy.co/convertkit/lovelyimpact&quot;},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:null},&quot;slide_in&quot;:{&quot;display_in&quot;:null,&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null},&quot;sticky_bar&quot;:{&quot;display_in&quot;:null,&quot;trigger&quot;:null,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:null,&quot;devices&quot;:null,&quot;show_once_every&quot;:null},&quot;incentive_email&quot;:{&quot;from_email_address_id&quot;:1396951,&quot;action&quot;:&quot;url&quot;,&quot;auto_confirm&quot;:false,&quot;send_email&quot;:true,&quot;url&quot;:&quot;https://app.convertkit.com/confirm-subscription&quot;,&quot;button_text&quot;:&quot;Confirm your subscription&quot;,&quot;content_one&quot;:&quot;Thanks for signing up. Click the link below to confirm your subscription and you'll be on your way.&quot;,&quot;content_two&quot;:&quot;It's good to have you!&quot;,&quot;subject&quot;:&quot;Important: confirm your subscription&quot;},&quot;custom_css&quot;:{},&quot;thank_you_page&quot;:{}},&quot;version&quot;:&quot;5&quot;}"
                min-width="400 500 600 700 800">
                <div data-style="clean">
                  <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                  <div data-element="fields" data-stacked="false" class="seva-fields formkit-fields">
                    <div class="formkit-field"><input class="formkit-input" name="email_address"
                        style="color: rgb(0, 0, 0); border-color: rgb(227, 227, 227); border-radius: 0px; font-weight: 400;"
                        placeholder="Email Address" required="" type="email"></div><button data-element="submit"
                      class="formkit-submit formkit-submit"
                      style="color: rgb(0, 0, 0); background-color: rgb(255, 224, 213); border-radius: 0px; font-weight: 700;">
                      <div class="formkit-spinner">
                        <div></div>
                        <div></div>
                        <div></div>
                      </div><span>DOWNLOAD</span>
                    </button>
                  </div>
                </div>
                <style>
                  .formkit-form[data-uid="fbb8314654"] * {
                    box-sizing: border-box;
                  }

                  .formkit-form[data-uid="fbb8314654"] {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                  }

                  .formkit-form[data-uid="fbb8314654"] legend {
                    border: none;
                    font-size: inherit;
                    margin-bottom: 10px;
                    padding: 0;
                    position: relative;
                    display: table;
                  }

                  .formkit-form[data-uid="fbb8314654"] fieldset {
                    border: 0;
                    padding: 0.01em 0 0 0;
                    margin: 0;
                    min-width: 0;
                  }

                  .formkit-form[data-uid="fbb8314654"] body:not(:-moz-handler-blocked) fieldset {
                    display: table-cell;
                  }

                  .formkit-form[data-uid="fbb8314654"] h1,
                  .formkit-form[data-uid="fbb8314654"] h2,
                  .formkit-form[data-uid="fbb8314654"] h3,
                  .formkit-form[data-uid="fbb8314654"] h4,
                  .formkit-form[data-uid="fbb8314654"] h5,
                  .formkit-form[data-uid="fbb8314654"] h6 {
                    color: inherit;
                    font-size: inherit;
                    font-weight: inherit;
                  }

                  .formkit-form[data-uid="fbb8314654"] p {
                    color: inherit;
                    font-size: inherit;
                    font-weight: inherit;
                  }

                  .formkit-form[data-uid="fbb8314654"] ol:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] ul:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] blockquote:not([template-default]) {
                    text-align: left;
                  }

                  .formkit-form[data-uid="fbb8314654"] p:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] hr:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] blockquote:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] ol:not([template-default]),
                  .formkit-form[data-uid="fbb8314654"] ul:not([template-default]) {
                    color: inherit;
                    font-style: initial;
                  }

                  .formkit-form[data-uid="fbb8314654"][data-format="modal"] {
                    display: none;
                  }

                  .formkit-form[data-uid="fbb8314654"][data-format="slide in"] {
                    display: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input,
                  .formkit-form[data-uid="fbb8314654"] .formkit-select,
                  .formkit-form[data-uid="fbb8314654"] .formkit-checkboxes {
                    width: 100%;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-button,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit {
                    border: 0;
                    border-radius: 5px;
                    color: #ffffff;
                    cursor: pointer;
                    display: inline-block;
                    text-align: center;
                    font-size: 15px;
                    font-weight: 500;
                    cursor: pointer;
                    margin-bottom: 15px;
                    overflow: hidden;
                    padding: 0;
                    position: relative;
                    vertical-align: middle;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-button:hover,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit:hover,
                  .formkit-form[data-uid="fbb8314654"] .formkit-button:focus,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit:focus {
                    outline: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-button:hover>span,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit:hover>span,
                  .formkit-form[data-uid="fbb8314654"] .formkit-button:focus>span,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit:focus>span {
                    background-color: rgba(0, 0, 0, 0.1);
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-button>span,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit>span {
                    display: block;
                    -webkit-transition: all 300ms ease-in-out;
                    transition: all 300ms ease-in-out;
                    padding: 12px 24px;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input {
                    background: #ffffff;
                    font-size: 15px;
                    padding: 12px;
                    border: 1px solid #e3e3e3;
                    -webkit-flex: 1 0 auto;
                    -ms-flex: 1 0 auto;
                    flex: 1 0 auto;
                    line-height: 1.4;
                    margin: 0;
                    -webkit-transition: border-color ease-out 300ms;
                    transition: border-color ease-out 300ms;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input:focus {
                    outline: none;
                    border-color: #1677be;
                    -webkit-transition: border-color ease 300ms;
                    transition: border-color ease 300ms;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input::-webkit-input-placeholder {
                    color: inherit;
                    opacity: 0.8;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input::-moz-placeholder {
                    color: inherit;
                    opacity: 0.8;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input:-ms-input-placeholder {
                    color: inherit;
                    opacity: 0.8;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-input::placeholder {
                    color: inherit;
                    opacity: 0.8;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="dropdown"] {
                    position: relative;
                    display: inline-block;
                    width: 100%;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="dropdown"]::before {
                    content: "";
                    top: calc(50% - 2.5px);
                    right: 10px;
                    position: absolute;
                    pointer-events: none;
                    border-color: #4f4f4f transparent transparent transparent;
                    border-style: solid;
                    border-width: 6px 6px 0 6px;
                    height: 0;
                    width: 0;
                    z-index: 999;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="dropdown"] select {
                    height: auto;
                    width: 100%;
                    cursor: pointer;
                    color: #333333;
                    line-height: 1.4;
                    margin-bottom: 0;
                    padding: 0 6px;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    font-size: 15px;
                    padding: 12px;
                    padding-right: 25px;
                    border: 1px solid #e3e3e3;
                    background: #ffffff;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="dropdown"] select:focus {
                    outline: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] {
                    text-align: left;
                    margin: 0;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] {
                    margin-bottom: 10px;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] * {
                    cursor: pointer;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"]:last-of-type {
                    margin-bottom: 0;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"] {
                    display: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]+label::after {
                    content: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]:checked+label::after {
                    border-color: #ffffff;
                    content: "";
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]:checked+label::before {
                    background: #10bf7a;
                    border-color: #10bf7a;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] label {
                    position: relative;
                    display: inline-block;
                    padding-left: 28px;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] label::before,
                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] label::after {
                    position: absolute;
                    content: "";
                    display: inline-block;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] label::before {
                    height: 16px;
                    width: 16px;
                    border: 1px solid #e3e3e3;
                    background: #ffffff;
                    left: 0px;
                    top: 3px;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-group="checkboxes"] [data-group="checkbox"] label::after {
                    height: 4px;
                    width: 8px;
                    border-left: 2px solid #4d4d4d;
                    border-bottom: 2px solid #4d4d4d;
                    -webkit-transform: rotate(-45deg);
                    -ms-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                    left: 4px;
                    top: 8px;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-alert {
                    background: #f9fafb;
                    border: 1px solid #e3e3e3;
                    border-radius: 5px;
                    -webkit-flex: 1 0 auto;
                    -ms-flex: 1 0 auto;
                    flex: 1 0 auto;
                    list-style: none;
                    margin: 25px auto;
                    padding: 12px;
                    text-align: center;
                    width: 100%;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-alert:empty {
                    display: none;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-alert-success {
                    background: #d3fbeb;
                    border-color: #10bf7a;
                    color: #0c905c;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-alert-error {
                    background: #fde8e2;
                    border-color: #f2643b;
                    color: #ea4110;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-spinner {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    height: 0px;
                    width: 0px;
                    margin: 0 auto;
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    width: 0px;
                    overflow: hidden;
                    text-align: center;
                    -webkit-transition: all 300ms ease-in-out;
                    transition: all 300ms ease-in-out;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-spinner>div {
                    margin: auto;
                    width: 12px;
                    height: 12px;
                    background-color: #fff;
                    opacity: 0.3;
                    border-radius: 100%;
                    display: inline-block;
                    -webkit-animation: formkit-bouncedelay-formkit-form-data-uid-fbb8314654- 1.4s infinite ease-in-out both;
                    animation: formkit-bouncedelay-formkit-form-data-uid-fbb8314654- 1.4s infinite ease-in-out both;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-spinner>div:nth-child(1) {
                    -webkit-animation-delay: -0.32s;
                    animation-delay: -0.32s;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-spinner>div:nth-child(2) {
                    -webkit-animation-delay: -0.16s;
                    animation-delay: -0.16s;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-submit[data-active] .formkit-spinner {
                    opacity: 1;
                    height: 100%;
                    width: 50px;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-submit[data-active] .formkit-spinner~span {
                    opacity: 0;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-powered-by[data-active="false"] {
                    opacity: 0.35;
                  }

                  @-webkit-keyframes formkit-bouncedelay-formkit-form-data-uid-fbb8314654- {

                    0%,
                    80%,
                    100% {
                      -webkit-transform: scale(0);
                      -ms-transform: scale(0);
                      transform: scale(0);
                    }

                    40% {
                      -webkit-transform: scale(1);
                      -ms-transform: scale(1);
                      transform: scale(1);
                    }
                  }

                  @keyframes formkit-bouncedelay-formkit-form-data-uid-fbb8314654- {

                    0%,
                    80%,
                    100% {
                      -webkit-transform: scale(0);
                      -ms-transform: scale(0);
                      transform: scale(0);
                    }

                    40% {
                      -webkit-transform: scale(1);
                      -ms-transform: scale(1);
                      transform: scale(1);
                    }
                  }

                  .formkit-form[data-uid="fbb8314654"] blockquote {
                    padding: 10px 20px;
                    margin: 0 0 20px;
                    border-left: 5px solid #e1e1e1;
                  }

                  .formkit-form[data-uid="fbb8314654"] {
                    max-width: 700px;
                  }

                  .formkit-form[data-uid="fbb8314654"] [data-style="clean"] {
                    width: 100%;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-fields {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    margin: 0 auto;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-field,
                  .formkit-form[data-uid="fbb8314654"] .formkit-submit {
                    margin: 0 0 15px 0;
                    -webkit-flex: 1 0 100%;
                    -ms-flex: 1 0 100%;
                    flex: 1 0 100%;
                  }

                  .formkit-form[data-uid="fbb8314654"] .formkit-powered-by {
                    color: #7d7d7d;
                    display: block;
                    font-size: 12px;
                    margin: 0;
                    text-align: center;
                  }

                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] [data-style="clean"],
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] [data-style="clean"] {
                    padding: 10px;
                  }

                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] .formkit-fields[data-stacked="false"],
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] .formkit-fields[data-stacked="false"] {
                    margin-left: -5px;
                    margin-right: -5px;
                  }

                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-field,
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-field,
                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-submit,
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-submit {
                    margin: 0 5px 15px 5px;
                  }

                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-field,
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-field {
                    -webkit-flex: 100 1 auto;
                    -ms-flex: 100 1 auto;
                    flex: 100 1 auto;
                  }

                  .formkit-form[data-uid="fbb8314654"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-submit,
                  .formkit-form[data-uid="fbb8314654"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-submit {
                    -webkit-flex: 1 1 auto;
                    -ms-flex: 1 1 auto;
                    flex: 1 1 auto;
                  }
                </style>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php get_footer(); ?>