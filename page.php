<?php
/* 

*/

include( get_template_directory() . '/header-page.php');
?>


	  
      <div id="content" class="sb sib-content sb-nd-dH" style="height: 2143px;">
        <div class="ss-s ss-bg">
          <div class="sc" style="width:1200px;">
             <div data-sid="content_0" class="sie-content_0 se " style="transform: scale(1, 1) translate(0px, 0px);"> 
              <div class="se-t sie-content_0-text st-m-paragraph st-d-paragraph se-rc">
				  
				  <?php while ( have_posts() ) : the_post(); ?>
                        
                        
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                        
                    <?php endwhile; ?>
				  
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
				  
              <div class="seva-form formkit-form" data-version="5" min-width="400 500 600 700">
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
      {
        "mobile": {
          "w": 320,
          "background": {
            "type": "color",
            "color": "colors-7"
          }
        },
        "desktop": {
          "w": 1200,
          "background": {
            "type": "color",
            "color": "colors-7"
          }
        },
        "sid": "b1o1f-rvt4ikbrsb1_qvca",
        "break": 768,
        "assetURL": "//static.showit.co",
        "contactFormId": "90375/204880",
        "cfAction": "aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9jb250YWN0Zm9ybQ==",
        "blockData": [{
          "slug": "buy-now",
          "visible": "a",
          "states": [{
            "slug": "view-1",
            "m": {
              "background": {
                "type": "none"
              }
            },
            "d": {
              "background": {
                "type": "none"
              }
            }
          }, {
            "slug": "view-2",
            "m": {
              "background": {
                "type": "none"
              }
            },
            "d": {
              "background": {
                "type": "none"
              }
            }
          }],
          "m": {
            "w": 320,
            "h": 54,
            "background": {
              "type": "color",
              "color": "#ffffff"
            },
            "locking": {
              "side": "b"
            }
          },
          "d": {
            "w": 1200,
            "h": 1,
            "background": {
              "type": "color",
              "color": "colors-3"
            },
            "locking": {
              "side": "t"
            }
          },
          "stateTrans": [{
            "d": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            },
            "m": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            }
          }, {
            "d": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            },
            "m": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            }
          }]
        }, {
          "slug": "header-menu",
          "visible": "a",
          "states": [{
            "slug": "main-view",
            "m": {
              "background": {
                "type": "none"
              }
            },
            "d": {
              "background": {
                "type": "none"
              }
            }
          }, {
            "slug": "mobile-menu-view",
            "m": {
              "background": {
                "type": "none"
              }
            },
            "d": {
              "background": {
                "type": "none"
              }
            }
          }],
          "m": {
            "w": 320,
            "h": 1,
            "background": {
              "type": "color",
              "color": "colors-5"
            }
          },
          "d": {
            "w": 1200,
            "h": 1,
            "background": {
              "type": "color",
              "color": "colors-5"
            }
          },
          "stateTrans": [{
            "d": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            },
            "m": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            }
          }, {
            "d": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            },
            "m": {
              "in": {
                "cl": "fadeIn",
                "d": "0.5",
                "dl": "0",
                "od": "fadeIn"
              },
              "out": {
                "cl": "fadeOut",
                "d": "0.5",
                "dl": "0",
                "od": "fadeOut"
              }
            }
          }]
        }, {
          "slug": "mobile-menu",
          "visible": "m",
          "states": [],
          "m": {
            "w": 320,
            "h": 1,
            "background": {
              "type": "color",
              "color": "colors-5"
            }
          },
          "d": {
            "w": 1200,
            "h": 400,
            "background": {
              "type": "color",
              "color": "colors-7"
            }
          }
        }, {
          "slug": "privacy-header-image",
          "visible": "a",
          "states": [],
          "m": {
            "w": 320,
            "h": 150,
            "background": {
              "type": "image",
              "color": "colors-7",
              "image": {
                "key": "r_0Aja54TAe83HZ9jDPyYg/90375/header-3.jpg",
                "aspect_ratio": 2.24159,
                "title": "header-3",
                "type": "asset"
              }
            }
          },
          "d": {
            "w": 1200,
            "h": 300,
            "background": {
              "type": "image",
              "color": "colors-7",
              "image": {
                "key": "r_0Aja54TAe83HZ9jDPyYg/90375/header-3.jpg",
                "aspect_ratio": 2.24159,
                "title": "header-3",
                "type": "asset"
              }
            }
          }
        }, {
          "slug": "content",
          "visible": "a",
          "states": [],
          "m": {
            "w": 320,
            "h": 2796,
            "background": {
              "type": "color",
              "color": "colors-7"
            }
          },
          "d": {
            "w": 1200,
            "h": 2143,
            "background": {
              "type": "color",
              "color": "colors-7"
            },
            "nature": "dH"
          }
        }, {
          "slug": "email-subscribe",
          "visible": "a",
          "states": [],
          "m": {
            "w": 320,
            "h": 298,
            "background": {
              "type": "color",
              "color": "colors-3"
            }
          },
          "d": {
            "w": 1200,
            "h": 187,
            "background": {
              "type": "color",
              "color": "colors-3"
            }
          }
        }, {
          "slug": "footer-menu",
          "visible": "a",
          "states": [],
          "m": {
            "w": 320,
            "h": 407,
            "background": {
              "type": "color",
              "color": "colors-2"
            }
          },
          "d": {
            "w": 1200,
            "h": 194,
            "background": {
              "type": "color",
              "color": "colors-2"
            }
          }
        }],
        "elementData": [{
          "type": "simple",
          "visible": "a",
          "id": "buy-now_0",
          "blockId": "buy-now",
          "m": {
            "x": 8,
            "y": 8,
            "w": 114,
            "h": 38,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 165,
            "w": 38,
            "h": 177,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_1",
          "blockId": "buy-now",
          "m": {
            "x": 8,
            "y": 17,
            "w": 114,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": -52,
            "y": 240,
            "w": 138,
            "h": 26,
            "a": -90,
            "lockH": "l"
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "buy-now_2",
          "blockId": "buy-now",
          "m": {
            "x": 129,
            "y": 8,
            "w": 61,
            "h": 38,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 342,
            "w": 38,
            "h": 72,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_3",
          "blockId": "buy-now",
          "m": {
            "x": 135,
            "y": 15,
            "w": 49,
            "h": 26,
            "a": 0
          },
          "d": {
            "x": 4,
            "y": 357,
            "w": 29,
            "h": 43,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "buy-now_view-1_0",
          "blockId": "buy-now",
          "m": {
            "x": 197,
            "y": 8,
            "w": 115,
            "h": 38,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 414,
            "w": 38,
            "h": 87,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-1_1",
          "blockId": "buy-now",
          "m": {
            "x": 206,
            "y": 15,
            "w": 53,
            "h": 24,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 461,
            "w": 38,
            "h": 28,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "buy-now_view-1_2",
          "blockId": "buy-now",
          "m": {
            "x": 267,
            "y": 9,
            "w": 37,
            "h": 37,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 418,
            "w": 38,
            "h": 38,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "buy-now_view-2_0",
          "blockId": "buy-now",
          "m": {
            "x": 197,
            "y": 8,
            "w": 115,
            "h": 38,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 414,
            "w": 38,
            "h": 87,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_1",
          "blockId": "buy-now",
          "m": {
            "x": 206,
            "y": 15,
            "w": 53,
            "h": 24,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 461,
            "w": 38,
            "h": 28,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "buy-now_view-2_2",
          "blockId": "buy-now",
          "m": {
            "x": 267,
            "y": 9,
            "w": 37,
            "h": 37,
            "a": 0
          },
          "d": {
            "x": 0,
            "y": 418,
            "w": 38,
            "h": 38,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "buy-now_view-2_3",
          "blockId": "buy-now",
          "m": {
            "x": 8,
            "y": -290,
            "w": 304,
            "h": 290,
            "a": 0
          },
          "d": {
            "x": 44,
            "y": 165,
            "w": 298,
            "h": 336,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_4",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -235,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 235,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_5",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -235,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 235,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_6",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -206,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 265,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_7",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -206,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 265,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_8",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -177,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 295,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_9",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -177,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 295,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_10",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -148,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 326,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_11",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -148,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 326,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_12",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -119,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 356,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_13",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -119,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 356,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_14",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -90,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 386,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_15",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -90,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 386,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_16",
          "blockId": "buy-now",
          "m": {
            "x": 29,
            "y": -61,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 63,
            "y": 416,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_17",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -61,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 416,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_18",
          "blockId": "buy-now",
          "m": {
            "x": 170,
            "y": -33,
            "w": 130,
            "h": 13,
            "a": 0
          },
          "d": {
            "x": 203,
            "y": 446,
            "w": 116,
            "h": 15,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "buy-now_view-2_19",
          "blockId": "buy-now",
          "m": {
            "x": 28,
            "y": -275,
            "w": 266,
            "h": 21,
            "a": 0
          },
          "d": {
            "x": 60,
            "y": 180,
            "w": 261,
            "h": 25,
            "a": 0,
            "lockH": "l"
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "header-menu_main-view_0",
          "blockId": "header-menu",
          "m": {
            "x": 16,
            "y": 30,
            "w": 289,
            "h": 47,
            "a": 0
          },
          "d": {
            "x": 57,
            "y": 33,
            "w": 1086,
            "h": 65,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "header-menu_main-view_1",
          "blockId": "header-menu",
          "m": {
            "x": 23,
            "y": 14,
            "w": 87,
            "h": 63,
            "a": 0
          },
          "d": {
            "x": 529,
            "y": 8,
            "w": 143,
            "h": 111,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "m",
          "id": "header-menu_main-view_2",
          "blockId": "header-menu",
          "m": {
            "x": 246,
            "y": 34,
            "w": 40,
            "h": 40,
            "a": 0
          },
          "d": {
            "x": 550,
            "y": -49,
            "w": 100,
            "h": 100,
            "a": 0
          },
          "pc": [{
            "type": "show",
            "block": "mobile-menu"
          }]
        }, {
          "type": "text",
          "visible": "d",
          "id": "header-menu_main-view_3",
          "blockId": "header-menu",
          "m": {
            "x": 49,
            "y": 182,
            "w": 102,
            "h": 17,
            "a": 0
          },
          "d": {
            "x": 87,
            "y": 54,
            "w": 51,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "d",
          "id": "header-menu_main-view_4",
          "blockId": "header-menu",
          "m": {
            "x": 202,
            "y": 109,
            "w": 102,
            "h": 17,
            "a": 0
          },
          "d": {
            "x": 190,
            "y": 54,
            "w": 60,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "d",
          "id": "header-menu_main-view_5",
          "blockId": "header-menu",
          "m": {
            "x": 126,
            "y": 187,
            "w": 102,
            "h": 17,
            "a": 0
          },
          "d": {
            "x": 881,
            "y": 54,
            "w": 51,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "d",
          "id": "header-menu_main-view_6",
          "blockId": "header-menu",
          "m": {
            "x": 19,
            "y": 130,
            "w": 102,
            "h": 17,
            "a": 0
          },
          "d": {
            "x": 301,
            "y": 54,
            "w": 158,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "d",
          "id": "header-menu_main-view_7",
          "blockId": "header-menu",
          "m": {
            "x": 13,
            "y": 164,
            "w": 102,
            "h": 17,
            "a": 0
          },
          "d": {
            "x": 742,
            "y": 54,
            "w": 88,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "d",
          "id": "header-menu_main-view_8",
          "blockId": "header-menu",
          "m": {
            "x": 108,
            "y": 140,
            "w": 50,
            "h": 50,
            "a": 0
          },
          "d": {
            "x": 990,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "d",
          "id": "header-menu_main-view_9",
          "blockId": "header-menu",
          "m": {
            "x": 168,
            "y": 138,
            "w": 50,
            "h": 50,
            "a": 0
          },
          "d": {
            "x": 1036,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "d",
          "id": "header-menu_main-view_10",
          "blockId": "header-menu",
          "m": {
            "x": 226,
            "y": 136,
            "w": 50,
            "h": 50,
            "a": 0
          },
          "d": {
            "x": 1087,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "simple",
          "visible": "m",
          "id": "header-menu_mobile-menu-view_0",
          "blockId": "header-menu",
          "m": {
            "x": 16,
            "y": 30,
            "w": 289,
            "h": 47,
            "a": 0
          },
          "d": {
            "x": 67,
            "y": 43,
            "w": 1086,
            "h": 65,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "m",
          "id": "header-menu_mobile-menu-view_1",
          "blockId": "header-menu",
          "m": {
            "x": 23,
            "y": 14,
            "w": 87,
            "h": 63,
            "a": 0
          },
          "d": {
            "x": 539,
            "y": 18,
            "w": 143,
            "h": 111,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "m",
          "id": "header-menu_mobile-menu-view_2",
          "blockId": "header-menu",
          "m": {
            "x": 246,
            "y": 34,
            "w": 40,
            "h": 40,
            "a": 0
          },
          "d": {
            "x": 560,
            "y": -39,
            "w": 100,
            "h": 100,
            "a": 0
          },
          "pc": [{
            "type": "hide",
            "block": "mobile-menu"
          }]
        }, {
          "type": "simple",
          "visible": "a",
          "id": "mobile-menu_0",
          "blockId": "mobile-menu",
          "m": {
            "x": 16,
            "y": 79,
            "w": 289,
            "h": 320,
            "a": 0
          },
          "d": {
            "x": 360,
            "y": 120,
            "w": 480,
            "h": 160,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "mobile-menu_1",
          "blockId": "mobile-menu",
          "m": {
            "x": 128,
            "y": 110,
            "w": 65,
            "h": 21,
            "a": 0
          },
          "d": {
            "x": 87,
            "y": 54,
            "w": 51,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "mobile-menu_2",
          "blockId": "mobile-menu",
          "m": {
            "x": 128,
            "y": 282,
            "w": 64,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 881,
            "y": 54,
            "w": 51,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "mobile-menu_3",
          "blockId": "mobile-menu",
          "m": {
            "x": 122,
            "y": 153,
            "w": 76,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 198,
            "y": 54,
            "w": 51,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "mobile-menu_4",
          "blockId": "mobile-menu",
          "m": {
            "x": 80,
            "y": 196,
            "w": 160,
            "h": 23,
            "a": 0
          },
          "d": {
            "x": 308,
            "y": 54,
            "w": 151,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "mobile-menu_5",
          "blockId": "mobile-menu",
          "m": {
            "x": 117,
            "y": 239,
            "w": 86,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 742,
            "y": 54,
            "w": 88,
            "h": 23,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "mobile-menu_6",
          "blockId": "mobile-menu",
          "m": {
            "x": 91,
            "y": 336,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 990,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "mobile-menu_7",
          "blockId": "mobile-menu",
          "m": {
            "x": 145,
            "y": 336,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 1036,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "mobile-menu_8",
          "blockId": "mobile-menu",
          "m": {
            "x": 206,
            "y": 336,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 1087,
            "y": 55,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "mobile-menu_9",
          "blockId": "mobile-menu",
          "m": {
            "x": 16,
            "y": 382,
            "w": 289,
            "h": 1,
            "a": 0
          },
          "d": {
            "x": 360,
            "y": 120,
            "w": 480,
            "h": 160,
            "a": 0
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "mobile-menu_10",
          "blockId": "mobile-menu",
          "m": {
            "x": 16,
            "y": 387,
            "w": 289,
            "h": 3,
            "a": 0
          },
          "d": {
            "x": 370,
            "y": 130,
            "w": 480,
            "h": 160,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "content_0",
          "blockId": "content",
          "m": {
            "x": 20,
            "y": 85,
            "w": 280,
            "h": 2669,
            "a": 0
          },
          "d": {
            "x": 185,
            "y": 163,
            "w": 831,
            "h": 1898,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "content_1",
          "blockId": "content",
          "m": {
            "x": 53,
            "y": 35,
            "w": 214,
            "h": 21,
            "a": 0
          },
          "d": {
            "x": 391,
            "y": 71,
            "w": 419,
            "h": 36,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "email-subscribe_0",
          "blockId": "email-subscribe",
          "m": {
            "x": 25,
            "y": 28,
            "w": 271,
            "h": 95,
            "a": 0
          },
          "d": {
            "x": 97,
            "y": 34,
            "w": 1006,
            "h": 40,
            "a": 0
          }
        }, {
          "type": "iframe",
          "visible": "a",
          "id": "email-subscribe_1",
          "blockId": "email-subscribe",
          "m": {
            "x": 17,
            "y": 136,
            "w": 286,
            "h": 140,
            "a": 0
          },
          "d": {
            "x": 250,
            "y": 80,
            "w": 700,
            "h": 62,
            "a": 0
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "footer-menu_0",
          "blockId": "footer-menu",
          "m": {
            "x": 16,
            "y": 30,
            "w": 289,
            "h": 47,
            "a": 0
          },
          "d": {
            "x": 57,
            "y": 45,
            "w": 1086,
            "h": 65,
            "a": 0
          }
        }, {
          "type": "simple",
          "visible": "a",
          "id": "footer-menu_1",
          "blockId": "footer-menu",
          "m": {
            "x": 16,
            "y": 84,
            "w": 289,
            "h": 241,
            "a": 0
          },
          "d": {
            "x": 57,
            "y": 117,
            "w": 1086,
            "h": 30,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_2",
          "blockId": "footer-menu",
          "m": {
            "x": 23,
            "y": 14,
            "w": 87,
            "h": 63,
            "a": 0
          },
          "d": {
            "x": 529,
            "y": 18,
            "w": 143,
            "h": 111,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_3",
          "blockId": "footer-menu",
          "m": {
            "x": 40,
            "y": 356,
            "w": 240,
            "h": 25,
            "a": 0
          },
          "d": {
            "x": 87,
            "y": 68,
            "w": 375,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "footer-menu_4",
          "blockId": "footer-menu",
          "m": {
            "x": 160,
            "y": 39,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 990,
            "y": 66,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "footer-menu_5",
          "blockId": "footer-menu",
          "m": {
            "x": 208,
            "y": 39,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 1036,
            "y": 66,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "icon",
          "visible": "a",
          "id": "footer-menu_6",
          "blockId": "footer-menu",
          "m": {
            "x": 260,
            "y": 39,
            "w": 30,
            "h": 30,
            "a": 0
          },
          "d": {
            "x": 1087,
            "y": 66,
            "w": 24,
            "h": 22,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_7",
          "blockId": "footer-menu",
          "m": {
            "x": 164,
            "y": 283,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 881,
            "y": 68,
            "w": 51,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_8",
          "blockId": "footer-menu",
          "m": {
            "x": 55,
            "y": 283,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 774,
            "y": 68,
            "w": 68,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_9",
          "blockId": "footer-menu",
          "m": {
            "x": 55,
            "y": 147,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 87,
            "y": 122,
            "w": 60,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_10",
          "blockId": "footer-menu",
          "m": {
            "x": 164,
            "y": 147,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 178,
            "y": 122,
            "w": 62,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_11",
          "blockId": "footer-menu",
          "m": {
            "x": 63,
            "y": 192,
            "w": 195,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 277,
            "y": 122,
            "w": 161,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_12",
          "blockId": "footer-menu",
          "m": {
            "x": 55,
            "y": 238,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 789,
            "y": 122,
            "w": 55,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_13",
          "blockId": "footer-menu",
          "m": {
            "x": 164,
            "y": 238,
            "w": 102,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 877,
            "y": 122,
            "w": 78,
            "h": 19,
            "a": 0
          }
        }, {
          "type": "text",
          "visible": "a",
          "id": "footer-menu_14",
          "blockId": "footer-menu",
          "m": {
            "x": 103,
            "y": 107,
            "w": 114,
            "h": 22,
            "a": 0
          },
          "d": {
            "x": 999,
            "y": 122,
            "w": 133,
            "h": 19,
            "a": 0
          }
        }]
      }
    </script>

<?php get_footer(); ?>