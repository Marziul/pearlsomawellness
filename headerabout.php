<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 */

?>
<!DOCTYPE html>
<html class=" desktop portrait m" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    
	<!-- Favicon Icon -->
    <!--<link rel="icon" href="/images/favicon.png" type="image/png"> -->
	


  <link
    href="https://fonts.googleapis.com/css?family=Lato:regular|Lato:300|Nunito+Sans:regular|Oswald:regular|Cormorant:regular"
    rel="stylesheet" type="text/css" />
  <style>
    @font-face {
      font-family: Bird and Thorn;
      src: url('http://static.showit.co/file/EtxCC1PkSXeGCnUJtFGWFw/90375/birdandthorn-webfont.woff');
    }

    @font-face {
      font-family: Paris Sans;
      src: url('http://static.showit.co/file/Li6e7MoBRvS3mlf80Q3NyA/90375/parissans-regular.woff');
    }
  </style>
<script id="init_data" type="application/json">
      {"mobile":{"w":320,"background":{"type":"color","color":"colors-7"}},"desktop":{"w":1200,"background":{"type":"color","color":"colors-7"}},"sid":"b1o1f-rvt4ikbrsb1_qvca","break":768,"assetURL":"//static.showit.co","contactFormId":"90375/204880","cfAction":"aHR0cHM6Ly9jbGllbnRzZXJ2aWNlLnNob3dpdC5jby9jb250YWN0Zm9ybQ==","blockData":[{"slug":"buy-now","visible":"a","states":[{"slug":"view-1","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"view-2","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":54,"background":{"type":"color","color":"#ffffff"},"locking":{"side":"b"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-3"},"locking":{"side":"t"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"header-menu","visible":"a","states":[{"slug":"main-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"mobile-menu-view","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":1,"background":{"type":"color","color":"colors-5"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"mobile-menu","visible":"m","states":[],"m":{"w":320,"h":1,"background":{"type":"color","color":"colors-5"}},"d":{"w":1200,"h":400,"background":{"type":"color","color":"colors-7"}}},{"slug":"about-header","visible":"a","states":[],"m":{"w":320,"h":408,"background":{"type":"image","color":"colors-0","image":{"key":"dH9X9L0IR0eN0J1doXI89A/90375/wellness-4.jpg","aspect_ratio":1.5,"title":"wellness-4","type":"asset"},"opacity":75}},"d":{"w":1200,"h":600,"background":{"type":"image","color":"colors-0","image":{"key":"dH9X9L0IR0eN0J1doXI89A/90375/wellness-4.jpg","aspect_ratio":1.5,"title":"wellness-4","type":"asset"},"opacity":75}}},{"slug":"email-subscribe","visible":"a","states":[],"m":{"w":320,"h":298,"background":{"type":"color","color":"colors-3"}},"d":{"w":1200,"h":187,"background":{"type":"color","color":"colors-3"}}},{"slug":"why","visible":"a","states":[],"m":{"w":320,"h":856,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":569,"background":{"type":"color","color":"colors-2"}}},{"slug":"story","visible":"a","states":[{"slug":"view-1-my-story","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}},{"slug":"view-2-fun-facts","m":{"background":{"type":"none"}},"d":{"background":{"type":"none"}}}],"m":{"w":320,"h":933,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":613,"background":{"type":"color","color":"colors-7"}},"stateTrans":[{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}},{"d":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}},"m":{"in":{"cl":"fadeIn","d":"0.5","dl":"0","od":"fadeIn"},"out":{"cl":"fadeOut","d":"0.5","dl":"0","od":"fadeOut"}}}]},{"slug":"footer-book","visible":"a","states":[],"m":{"w":320,"h":320,"background":{"type":"image","color":"colors-0","image":{"key":"hAdH8GblTTuoIcj06B3VJg/90375/wellness-7.jpg","aspect_ratio":1.80905,"title":"wellness-7","type":"asset"},"opacity":75}},"d":{"w":1200,"h":400,"background":{"type":"image","color":"colors-0","image":{"key":"hAdH8GblTTuoIcj06B3VJg/90375/wellness-7.jpg","aspect_ratio":1.80905,"title":"wellness-7","type":"asset"},"opacity":75,"scroll":"x"}}},{"slug":"features","visible":"a","states":[],"m":{"w":320,"h":2208,"background":{"type":"color","color":"colors-7"}},"d":{"w":1200,"h":748,"background":{"type":"color","color":"colors-7"}}},{"slug":"footer-menu","visible":"a","states":[],"m":{"w":320,"h":407,"background":{"type":"color","color":"colors-2"}},"d":{"w":1200,"h":194,"background":{"type":"color","color":"colors-2"}}}],"elementData":[{"type":"simple","visible":"a","id":"buy-now_0","blockId":"buy-now","m":{"x":8,"y":8,"w":114,"h":38,"a":0},"d":{"x":0,"y":165,"w":38,"h":177,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_1","blockId":"buy-now","m":{"x":8,"y":17,"w":114,"h":22,"a":0},"d":{"x":-52,"y":240,"w":138,"h":26,"a":-90,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_2","blockId":"buy-now","m":{"x":129,"y":8,"w":61,"h":38,"a":0},"d":{"x":0,"y":342,"w":38,"h":72,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_3","blockId":"buy-now","m":{"x":135,"y":15,"w":49,"h":26,"a":0},"d":{"x":4,"y":357,"w":29,"h":43,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-1_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-1_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-1_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_0","blockId":"buy-now","m":{"x":197,"y":8,"w":115,"h":38,"a":0},"d":{"x":0,"y":414,"w":38,"h":87,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_1","blockId":"buy-now","m":{"x":206,"y":15,"w":53,"h":24,"a":0},"d":{"x":0,"y":461,"w":38,"h":28,"a":0,"lockH":"l"}},{"type":"icon","visible":"a","id":"buy-now_view-2_2","blockId":"buy-now","m":{"x":267,"y":9,"w":37,"h":37,"a":0},"d":{"x":0,"y":418,"w":38,"h":38,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"buy-now_view-2_3","blockId":"buy-now","m":{"x":8,"y":-290,"w":304,"h":290,"a":0},"d":{"x":44,"y":165,"w":298,"h":336,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_4","blockId":"buy-now","m":{"x":29,"y":-235,"w":130,"h":13,"a":0},"d":{"x":63,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_5","blockId":"buy-now","m":{"x":170,"y":-235,"w":130,"h":13,"a":0},"d":{"x":203,"y":235,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_6","blockId":"buy-now","m":{"x":29,"y":-206,"w":130,"h":13,"a":0},"d":{"x":63,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_7","blockId":"buy-now","m":{"x":170,"y":-206,"w":130,"h":13,"a":0},"d":{"x":203,"y":265,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_8","blockId":"buy-now","m":{"x":29,"y":-177,"w":130,"h":13,"a":0},"d":{"x":63,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_9","blockId":"buy-now","m":{"x":170,"y":-177,"w":130,"h":13,"a":0},"d":{"x":203,"y":295,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_10","blockId":"buy-now","m":{"x":29,"y":-148,"w":130,"h":13,"a":0},"d":{"x":63,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_11","blockId":"buy-now","m":{"x":170,"y":-148,"w":130,"h":13,"a":0},"d":{"x":203,"y":326,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_12","blockId":"buy-now","m":{"x":29,"y":-119,"w":130,"h":13,"a":0},"d":{"x":63,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_13","blockId":"buy-now","m":{"x":170,"y":-119,"w":130,"h":13,"a":0},"d":{"x":203,"y":356,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_14","blockId":"buy-now","m":{"x":29,"y":-90,"w":130,"h":13,"a":0},"d":{"x":63,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_15","blockId":"buy-now","m":{"x":170,"y":-90,"w":130,"h":13,"a":0},"d":{"x":203,"y":386,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_16","blockId":"buy-now","m":{"x":29,"y":-61,"w":130,"h":13,"a":0},"d":{"x":63,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_17","blockId":"buy-now","m":{"x":170,"y":-61,"w":130,"h":13,"a":0},"d":{"x":203,"y":416,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_18","blockId":"buy-now","m":{"x":170,"y":-33,"w":130,"h":13,"a":0},"d":{"x":203,"y":446,"w":116,"h":15,"a":0,"lockH":"l"}},{"type":"text","visible":"a","id":"buy-now_view-2_19","blockId":"buy-now","m":{"x":28,"y":-275,"w":266,"h":21,"a":0},"d":{"x":60,"y":180,"w":261,"h":25,"a":0,"lockH":"l"}},{"type":"simple","visible":"a","id":"header-menu_main-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":33,"w":1086,"h":65,"a":0}},{"type":"text","visible":"a","id":"header-menu_main-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":8,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_main-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":550,"y":-49,"w":100,"h":100,"a":0},"pc":[{"type":"show","block":"mobile-menu"}]},{"type":"text","visible":"d","id":"header-menu_main-view_3","blockId":"header-menu","m":{"x":49,"y":182,"w":102,"h":17,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_4","blockId":"header-menu","m":{"x":202,"y":109,"w":102,"h":17,"a":0},"d":{"x":190,"y":54,"w":60,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_5","blockId":"header-menu","m":{"x":126,"y":187,"w":102,"h":17,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_6","blockId":"header-menu","m":{"x":19,"y":130,"w":102,"h":17,"a":0},"d":{"x":301,"y":54,"w":158,"h":23,"a":0}},{"type":"text","visible":"d","id":"header-menu_main-view_7","blockId":"header-menu","m":{"x":13,"y":164,"w":102,"h":17,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_8","blockId":"header-menu","m":{"x":108,"y":140,"w":50,"h":50,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_9","blockId":"header-menu","m":{"x":168,"y":138,"w":50,"h":50,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"d","id":"header-menu_main-view_10","blockId":"header-menu","m":{"x":226,"y":136,"w":50,"h":50,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"m","id":"header-menu_mobile-menu-view_0","blockId":"header-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":67,"y":43,"w":1086,"h":65,"a":0}},{"type":"text","visible":"m","id":"header-menu_mobile-menu-view_1","blockId":"header-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":539,"y":18,"w":143,"h":111,"a":0}},{"type":"icon","visible":"m","id":"header-menu_mobile-menu-view_2","blockId":"header-menu","m":{"x":246,"y":34,"w":40,"h":40,"a":0},"d":{"x":560,"y":-39,"w":100,"h":100,"a":0},"pc":[{"type":"hide","block":"mobile-menu"}]},{"type":"simple","visible":"a","id":"mobile-menu_0","blockId":"mobile-menu","m":{"x":16,"y":79,"w":289,"h":320,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_1","blockId":"mobile-menu","m":{"x":128,"y":110,"w":65,"h":21,"a":0},"d":{"x":87,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_2","blockId":"mobile-menu","m":{"x":128,"y":282,"w":64,"h":22,"a":0},"d":{"x":881,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_3","blockId":"mobile-menu","m":{"x":122,"y":153,"w":76,"h":22,"a":0},"d":{"x":198,"y":54,"w":51,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_4","blockId":"mobile-menu","m":{"x":80,"y":196,"w":160,"h":23,"a":0},"d":{"x":308,"y":54,"w":151,"h":23,"a":0}},{"type":"text","visible":"a","id":"mobile-menu_5","blockId":"mobile-menu","m":{"x":117,"y":239,"w":86,"h":22,"a":0},"d":{"x":742,"y":54,"w":88,"h":23,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_6","blockId":"mobile-menu","m":{"x":91,"y":336,"w":30,"h":30,"a":0},"d":{"x":990,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_7","blockId":"mobile-menu","m":{"x":145,"y":336,"w":30,"h":30,"a":0},"d":{"x":1036,"y":55,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"mobile-menu_8","blockId":"mobile-menu","m":{"x":206,"y":336,"w":30,"h":30,"a":0},"d":{"x":1087,"y":55,"w":24,"h":22,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_9","blockId":"mobile-menu","m":{"x":16,"y":382,"w":289,"h":1,"a":0},"d":{"x":360,"y":120,"w":480,"h":160,"a":0}},{"type":"simple","visible":"a","id":"mobile-menu_10","blockId":"mobile-menu","m":{"x":16,"y":387,"w":289,"h":3,"a":0},"d":{"x":370,"y":130,"w":480,"h":160,"a":0}},{"type":"text","visible":"a","id":"about-header_0","blockId":"about-header","m":{"x":95,"y":229,"w":130,"h":68,"a":0},"d":{"x":579,"y":187,"w":558,"h":65,"a":0}},{"type":"text","visible":"a","id":"about-header_1","blockId":"about-header","m":{"x":34,"y":307,"w":252,"h":55,"a":0},"d":{"x":628,"y":275,"w":460,"h":64,"a":0}},{"type":"text","visible":"a","id":"email-subscribe_0","blockId":"email-subscribe","m":{"x":25,"y":28,"w":271,"h":95,"a":0},"d":{"x":97,"y":34,"w":1006,"h":40,"a":0}},{"type":"iframe","visible":"a","id":"email-subscribe_1","blockId":"email-subscribe","m":{"x":17,"y":136,"w":286,"h":140,"a":0},"d":{"x":250,"y":80,"w":700,"h":62,"a":0}},{"type":"graphic","visible":"a","id":"why_0","blockId":"why","m":{"x":0,"y":0,"w":320,"h":300,"a":0},"d":{"x":0,"y":0,"w":445,"h":569,"a":0,"lockH":"ls"},"c":{"key":"QhbFvcRmQ1OTrNULhzD8Kg/90375/wellness-5.jpg","aspect_ratio":0.66667}},{"type":"text","visible":"a","id":"why_1","blockId":"why","m":{"x":52,"y":344,"w":217,"h":63,"a":0},"d":{"x":298,"y":77,"w":880,"h":64,"a":0}},{"type":"text","visible":"a","id":"why_2","blockId":"why","m":{"x":81,"y":433,"w":158,"h":55,"a":0},"d":{"x":525,"y":163,"w":491,"h":36,"a":0}},{"type":"text","visible":"a","id":"why_3","blockId":"why","m":{"x":27,"y":505,"w":267,"h":312,"a":0},"d":{"x":525,"y":230,"w":515,"h":267,"a":0}},{"type":"graphic","visible":"a","id":"story_0","blockId":"story","m":{"x":0,"y":-1,"w":320,"h":345,"a":0},"d":{"x":743,"y":-1,"w":457,"h":614,"a":0,"lockH":"rs"},"c":{"key":"r5rNuJglQyS17Ys6dulvEg/90375/wellness-8.jpg","aspect_ratio":0.66667}},{"type":"text","visible":"a","id":"story_1","blockId":"story","m":{"x":212,"y":879,"w":84,"h":28,"a":0},"d":{"x":574,"y":531,"w":100,"h":37,"a":0}},{"type":"text","visible":"a","id":"story_view-1-my-story_0","blockId":"story","m":{"x":95,"y":371,"w":130,"h":31,"a":0},"d":{"x":184,"y":79,"w":365,"h":65,"a":0}},{"type":"text","visible":"a","id":"story_view-1-my-story_1","blockId":"story","m":{"x":27,"y":424,"w":267,"h":420,"a":0},"d":{"x":111,"y":162,"w":511,"h":367,"a":0}},{"type":"text","visible":"a","id":"story_view-2-fun-facts_0","blockId":"story","m":{"x":14,"y":371,"w":292,"h":31,"a":0},"d":{"x":81,"y":79,"w":574,"h":65,"a":0}},{"type":"text","visible":"a","id":"story_view-2-fun-facts_1","blockId":"story","m":{"x":53,"y":424,"w":241,"h":419,"a":0},"d":{"x":168,"y":162,"w":468,"h":333,"a":0}},{"type":"text","visible":"a","id":"story_view-2-fun-facts_2","blockId":"story","m":{"x":20,"y":415,"w":22,"h":382,"a":0},"d":{"x":104,"y":168,"w":42,"h":300,"a":0}},{"type":"text","visible":"a","id":"footer-book_0","blockId":"footer-book","m":{"x":51,"y":100,"w":218,"h":88,"a":0},"d":{"x":227,"y":168,"w":747,"h":65,"a":0}},{"type":"text","visible":"a","id":"footer-book_1","blockId":"footer-book","m":{"x":73,"y":57,"w":174,"h":39,"a":0},"d":{"x":412,"y":131,"w":377,"h":36,"a":0}},{"type":"simple","visible":"a","id":"footer-book_2","blockId":"footer-book","m":{"x":78,"y":208,"w":164,"h":64,"a":0},"d":{"x":508,"y":261,"w":184,"h":73,"a":0}},{"type":"text","visible":"a","id":"footer-book_3","blockId":"footer-book","m":{"x":109,"y":226,"w":102,"h":29,"a":0},"d":{"x":525,"y":279,"w":150,"h":38,"a":0}},{"type":"text","visible":"a","id":"features_0","blockId":"features","m":{"x":20,"y":59,"w":280,"h":61,"a":0},"d":{"x":182,"y":85,"w":836,"h":55,"a":0}},{"type":"graphic","visible":"a","id":"features_1","blockId":"features","m":{"x":48,"y":172,"w":224,"h":271,"a":0},"d":{"x":48,"y":203,"w":169,"h":205,"a":0},"c":{"key":"IAhiXiv5S-qFEyaIV4FejA/90375/878df0d6568718e42c251b6c3f28fb4a.jpg","aspect_ratio":0.82559}},{"type":"text","visible":"a","id":"features_2","blockId":"features","m":{"x":20,"y":512,"w":280,"h":21,"a":0},"d":{"x":248,"y":260,"w":326,"h":35,"a":0}},{"type":"text","visible":"a","id":"features_3","blockId":"features","m":{"x":20,"y":474,"w":280,"h":20,"a":0},"d":{"x":248,"y":221,"w":254,"h":22,"a":0}},{"type":"text","visible":"a","id":"features_4","blockId":"features","m":{"x":20,"y":554,"w":280,"h":67,"a":0},"d":{"x":248,"y":311,"w":326,"h":80,"a":0}},{"type":"graphic","visible":"a","id":"features_5","blockId":"features","m":{"x":48,"y":676,"w":224,"h":271,"a":0},"d":{"x":627,"y":203,"w":169,"h":205,"a":0},"c":{"key":"7M0reNBzQJSTw1y0E0tA-g/90375/goop-elle-dk.jpg","aspect_ratio":0.765}},{"type":"text","visible":"a","id":"features_6","blockId":"features","m":{"x":20,"y":1016,"w":280,"h":21,"a":0},"d":{"x":827,"y":260,"w":326,"h":35,"a":0}},{"type":"text","visible":"a","id":"features_7","blockId":"features","m":{"x":20,"y":978,"w":280,"h":20,"a":0},"d":{"x":827,"y":221,"w":254,"h":22,"a":0}},{"type":"text","visible":"a","id":"features_8","blockId":"features","m":{"x":20,"y":1058,"w":280,"h":67,"a":0},"d":{"x":827,"y":311,"w":326,"h":80,"a":0}},{"type":"graphic","visible":"a","id":"features_9","blockId":"features","m":{"x":48,"y":1192,"w":224,"h":271,"a":0},"d":{"x":627,"y":477,"w":169,"h":205,"a":0},"c":{"key":"l1EGER_pS82_Qckprhaflg/90375/http_i1_sndcdn_com_avatars-000193677676-c2wbkw-original.jpg","aspect_ratio":1}},{"type":"text","visible":"a","id":"features_10","blockId":"features","m":{"x":20,"y":1532,"w":280,"h":21,"a":0},"d":{"x":827,"y":534,"w":326,"h":35,"a":0}},{"type":"text","visible":"a","id":"features_11","blockId":"features","m":{"x":20,"y":1494,"w":280,"h":20,"a":0},"d":{"x":827,"y":495,"w":254,"h":22,"a":0}},{"type":"text","visible":"a","id":"features_12","blockId":"features","m":{"x":20,"y":1574,"w":280,"h":67,"a":0},"d":{"x":827,"y":585,"w":326,"h":80,"a":0}},{"type":"graphic","visible":"a","id":"features_13","blockId":"features","m":{"x":48,"y":1706,"w":224,"h":271,"a":0},"d":{"x":48,"y":477,"w":169,"h":205,"a":0},"c":{"key":"8ZfZWt2RSeyZKyZ4dti_Ww/90375/pinterest_caffeine.jpg","aspect_ratio":0.66815}},{"type":"text","visible":"a","id":"features_14","blockId":"features","m":{"x":20,"y":2046,"w":280,"h":21,"a":0},"d":{"x":248,"y":534,"w":326,"h":35,"a":0}},{"type":"text","visible":"a","id":"features_15","blockId":"features","m":{"x":20,"y":2008,"w":280,"h":20,"a":0},"d":{"x":248,"y":495,"w":254,"h":22,"a":0}},{"type":"text","visible":"a","id":"features_16","blockId":"features","m":{"x":20,"y":2088,"w":280,"h":67,"a":0},"d":{"x":248,"y":585,"w":326,"h":80,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_0","blockId":"footer-menu","m":{"x":16,"y":30,"w":289,"h":47,"a":0},"d":{"x":57,"y":45,"w":1086,"h":65,"a":0}},{"type":"simple","visible":"a","id":"footer-menu_1","blockId":"footer-menu","m":{"x":16,"y":84,"w":289,"h":241,"a":0},"d":{"x":57,"y":117,"w":1086,"h":30,"a":0}},{"type":"text","visible":"a","id":"footer-menu_2","blockId":"footer-menu","m":{"x":23,"y":14,"w":87,"h":63,"a":0},"d":{"x":529,"y":18,"w":143,"h":111,"a":0}},{"type":"text","visible":"a","id":"footer-menu_3","blockId":"footer-menu","m":{"x":40,"y":356,"w":240,"h":25,"a":0},"d":{"x":87,"y":68,"w":375,"h":19,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_4","blockId":"footer-menu","m":{"x":160,"y":39,"w":30,"h":30,"a":0},"d":{"x":990,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_5","blockId":"footer-menu","m":{"x":208,"y":39,"w":30,"h":30,"a":0},"d":{"x":1036,"y":66,"w":24,"h":22,"a":0}},{"type":"icon","visible":"a","id":"footer-menu_6","blockId":"footer-menu","m":{"x":260,"y":39,"w":30,"h":30,"a":0},"d":{"x":1087,"y":66,"w":24,"h":22,"a":0}},{"type":"text","visible":"a","id":"footer-menu_7","blockId":"footer-menu","m":{"x":164,"y":283,"w":102,"h":22,"a":0},"d":{"x":881,"y":68,"w":51,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_8","blockId":"footer-menu","m":{"x":55,"y":283,"w":102,"h":22,"a":0},"d":{"x":774,"y":68,"w":68,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_9","blockId":"footer-menu","m":{"x":55,"y":147,"w":102,"h":22,"a":0},"d":{"x":87,"y":122,"w":60,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_10","blockId":"footer-menu","m":{"x":164,"y":147,"w":102,"h":22,"a":0},"d":{"x":178,"y":122,"w":62,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_11","blockId":"footer-menu","m":{"x":63,"y":192,"w":195,"h":22,"a":0},"d":{"x":277,"y":122,"w":161,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_12","blockId":"footer-menu","m":{"x":55,"y":238,"w":102,"h":22,"a":0},"d":{"x":789,"y":122,"w":55,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_13","blockId":"footer-menu","m":{"x":164,"y":238,"w":102,"h":22,"a":0},"d":{"x":877,"y":122,"w":78,"h":19,"a":0}},{"type":"text","visible":"a","id":"footer-menu_14","blockId":"footer-menu","m":{"x":103,"y":107,"w":114,"h":22,"a":0},"d":{"x":999,"y":122,"w":133,"h":19,"a":0}}]}
    </script>
  
	

</head>

<?php wp_head(); ?>
	
<body <?php body_class(); ?> >

  <div id="si-sp" class="sp">
    
    <div id="header-menu" data-bid="header-menu" class="sb sib-header-menu">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;"></div>
      </div>
      <div id="header-menu_main-view" class="ss sis-header-menu_main-view sactive">
        <div class="sc">
          <div data-sid="header-menu_main-view_0" class="sie-header-menu_main-view_0 se ">
            <div class="se-simple"></div>
          </div><a href="<?php $url = site_url(); echo $url; ?>" target="_self" class="sie-header-menu_main-view_1 se " data-sid="header-menu_main-view_1">
            <h1 class="se-t sie-header-menu_main-view_1-text st-m-title st-d-title">
			
				<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
				
			</h1>
          </a><a href="#" target="_self" class="sie-header-menu_main-view_2 se  se-pc se-stl"
            data-sid="header-menu_main-view_2" data-state="header-menu|1|0|0">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M0 144h512v32H0zM0 240h512v32H0zM0 336h512v32H0z" /></svg></div>
          </a><a href="<?php the_field('first_menu_link', 'options');?>" target="_self" class="sie-header-menu_main-view_3 se " data-sid="header-menu_main-view_3">
            <h3 class="se-t sie-header-menu_main-view_3-text st-m-subheading st-d-subheading"> <?php the_field('first_menu_text', 'options');?> </h3>
          </a><a href="<?php the_field('2nd_menu_link', 'options');?>" target="_self" class="sie-header-menu_main-view_4 se"
            data-sid="header-menu_main-view_4">
            <h3 class="se-t sie-header-menu_main-view_4-text st-m-subheading st-d-subheading"><?php the_field('2nd_menu_text', 'options');?></h3>
          </a><a href="<?php the_field('3rd_menu_link', 'options');?>" target="_blank"
            class="sie-header-menu_main-view_5 se " data-sid="header-menu_main-view_5">
            <h3 class="se-t sie-header-menu_main-view_5-text st-m-subheading st-d-subheading"><?php the_field('3rd_menu_text', 'options');?></h3>
          </a><a href="<?php the_field('4th_menu_link', 'options');?>" target="_self" class="sie-header-menu_main-view_6 se "
            data-sid="header-menu_main-view_6">
            <h3 class="se-t sie-header-menu_main-view_6-text st-m-subheading st-d-subheading"><?php the_field('4th_menu_text', 'options');?></h3>
          </a><a href="<?php the_field('5th_menu_link', 'options');?>" target="_self" class="sie-header-menu_main-view_7 se "
            data-sid="header-menu_main-view_7">
            <h3 class="se-t sie-header-menu_main-view_7-text st-m-subheading st-d-subheading"><?php the_field('5th_menu_text', 'options');?></h3>
          </a><a href="" target="_blank" class="sie-header-menu_main-view_8 se " data-sid="header-menu_main-view_8">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z" />
                </svg></div>
          </a><a href="#" target="_blank" class="sie-header-menu_main-view_9 se " data-sid="header-menu_main-view_9">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M338,54.63H174c-62.72,0-114,51.32-114,114V343.33c0,62.72,51.32,114,114,114H338c62.72,0,114-51.32,114-114V168.67C452,105.94,400.68,54.63,338,54.63Zm83.91,288.71A84.24,84.24,0,0,1,338,427.24H174a84.24,84.24,0,0,1-83.91-83.91V168.67A84.24,84.24,0,0,1,174,84.76H338a84.24,84.24,0,0,1,83.91,83.91Z" />
                <path
                  d="M255.77,148.18A107.94,107.94,0,1,0,363.71,256.13,107.94,107.94,0,0,0,255.77,148.18Zm-.52,178.71a70.68,70.68,0,1,1,70.68-70.68A70.68,70.68,0,0,1,255.25,326.9Z" />
                <circle cx="365.44" cy="146.5" r="25.56" /></svg></div>
          </a><a href="#" target="_blank" class="sie-header-menu_main-view_10 se " data-sid="header-menu_main-view_10">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M256 32C132.3 32 32 132.3 32 256c0 91.7 55.2 170.5 134.1 205.2-.6-15.6-.1-34.4 3.9-51.4 4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58 20.4 0 30.2 15.3 30.2 33.6 0 20.5-13.1 51.1-19.8 79.5-5.6 23.8 11.9 43.1 35.4 43.1 42.4 0 71-54.5 71-119.1 0-49.1-33.1-85.8-93.2-85.8-67.9 0-110.3 50.7-110.3 107.3 0 19.5 5.8 33.3 14.8 43.9 4.1 4.9 4.7 6.9 3.2 12.5-1.1 4.1-3.5 14-4.6 18-1.5 5.7-6.1 7.7-11.2 5.6-31.3-12.8-45.9-47-45.9-85.6 0-63.6 53.7-139.9 160.1-139.9 85.5 0 141.8 61.9 141.8 128.3 0 87.9-48.9 153.5-120.9 153.5-24.2 0-46.9-13.1-54.7-27.9 0 0-13 51.6-15.8 61.6-4.7 17.3-14 34.5-22.5 48 20.1 5.9 41.4 9.2 63.5 9.2 123.7 0 224-100.3 224-224C480 132.3 379.7 32 256 32z" />
                </svg></div>
          </a>
			<a href="#" target="_blank" class="sie-header-menu_main-view_11 se " data-sid="header-menu_main-view_11">
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
253 -5 392 -8z"/>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"/>
                </svg>
				
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M2235 5105 c-462 -60 -885 -237 -1255 -523 -117 -91 -316 -287 -413
-407 -276 -342 -459 -746 -537 -1186 -28 -156 -39 -531 -21 -702 82 -766 505
-1455 1156 -1880 324 -211 689 -344 1085 -393 152 -19 472 -18 630 1 1160 144
2081 1065 2225 2225 20 162 20 478 0 640 -92 744 -509 1411 -1140 1826 -329
216 -695 350 -1085 399 -152 18 -501 18 -645 0z m812 -1440 c432 -9 694 -33
807 -75 69 -26 161 -108 199 -178 61 -111 87 -315 94 -736 8 -480 -22 -815
-86 -951 -61 -131 -171 -204 -346 -230 -422 -62 -1869 -63 -2296 0 -52 8 -121
24 -153 35 -77 29 -166 113 -206 193 -58 120 -90 414 -90 837 0 402 32 711 85
827 33 74 115 157 189 193 73 36 185 55 416 71 196 13 796 27 995 22 77 -1
253 -5 392 -8z"/>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"/>
</g>
</svg></div>
          </a>
        </div>
      </div>
      <div id="header-menu_mobile-menu-view" class="ss sis-header-menu_mobile-menu-view">
        <div class="sc">
          <div data-sid="header-menu_mobile-menu-view_0" class="sie-header-menu_mobile-menu-view_0 se ">
            <div class="se-simple"></div>
          </div>
          <div data-sid="header-menu_mobile-menu-view_1" class="sie-header-menu_mobile-menu-view_1 se ">
            <h1 class="se-t sie-header-menu_mobile-menu-view_1-text st-m-title st-d-title se-rc">
			  
			 <img width="858" height="208" src="https://pearlsomawellness.com/wp-content/uploads/2022/02/cropped-cropped-Pearl-Soma-Transparent-png.png" class="custom-logo" alt="Pearl Soma" srcset="https://pearlsomawellness.com/wp-content/uploads/2022/02/cropped-cropped-Pearl-Soma-Transparent-png.png 858w, https://pearlsomawellness.com/wp-content/uploads/2022/02/cropped-cropped-Pearl-Soma-Transparent-png-300x73.png 300w, https://pearlsomawellness.com/wp-content/uploads/2022/02/cropped-cropped-Pearl-Soma-Transparent-png-768x186.png 768w" sizes="(max-width: 858px) 100vw, 858px">
			  
			 </h1>
          </div><a href="#" target="_self" class="sie-header-menu_mobile-menu-view_2 se  se-pc se-stl"
            data-sid="header-menu_mobile-menu-view_2" data-state="header-menu|0|0|0">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M0 144h512v32H0zM0 240h512v32H0zM0 336h512v32H0z" /></svg></div>
          </a>
        </div>
      </div>
    </div>
    <div id="mobile-menu" data-bid="mobile-menu" class="sb sib-mobile-menu">
      <div class="ss-s ss-bg">
        <div class="sc" style="width:1200px;">
          <div data-sid="mobile-menu_0" class="sie-mobile-menu_0 se ">
            <div class="se-simple"></div>
          </div>
			
			<a href="https://pearlsomawellness.com/" target="_self" class="sie-mobile-menu_1 se " data-sid="mobile-menu_1">
            <h3 class="se-t sie-mobile-menu_1-text st-m-subheading st-d-subheading"><?php the_field('first_menu_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('3rd_menu_link', 'options');?>" target="_self" class="sie-mobile-menu_2 se "
            data-sid="mobile-menu_2">
            <h3 class="se-t sie-mobile-menu_2-text st-m-subheading st-d-subheading"><?php the_field('3rd_menu_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('2nd_menu_link', 'options');?>" target="_self" class="m2 sie-mobile-menu_3 se "
            data-sid="mobile-menu_3">
            <h3 class="se-t sie-mobile-menu_3-text st-m-subheading st-d-subheading"><?php the_field('2nd_menu_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('5th_menu_link', 'options');?>" target="_self" class="m3 sie-mobile-menu_4 se "
            data-sid="mobile-menu_4">
            <h3 class="se-t sie-mobile-menu_4-text st-m-subheading st-d-subheading"><?php the_field('5th_menu_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('4th_menu_link', 'options');?>" target="_self" class="m4 sie-mobile-menu_5 se "
            data-sid="mobile-menu_5">
            <h3 class="se-t sie-mobile-menu_5-text st-m-subheading st-d-subheading"><?php the_field('4th_menu_text', 'options');?></h3>
          </a>
			
			<a href="<?php the_field('facebook_link', 'options');?>" target="_blank" class="m5 sie-mobile-menu_6 se " data-sid="mobile-menu_6">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z" />
                </svg></div>
          </a>
			
			<a href="<?php the_field('instagram_link', 'options');?>" target="_blank" class="m6 sie-mobile-menu_7 se " data-sid="mobile-menu_7">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M338,54.63H174c-62.72,0-114,51.32-114,114V343.33c0,62.72,51.32,114,114,114H338c62.72,0,114-51.32,114-114V168.67C452,105.94,400.68,54.63,338,54.63Zm83.91,288.71A84.24,84.24,0,0,1,338,427.24H174a84.24,84.24,0,0,1-83.91-83.91V168.67A84.24,84.24,0,0,1,174,84.76H338a84.24,84.24,0,0,1,83.91,83.91Z" />
                <path
                  d="M255.77,148.18A107.94,107.94,0,1,0,363.71,256.13,107.94,107.94,0,0,0,255.77,148.18Zm-.52,178.71a70.68,70.68,0,1,1,70.68-70.68A70.68,70.68,0,0,1,255.25,326.9Z" />
                <circle cx="365.44" cy="146.5" r="25.56" /></svg></div>
          </a>

			<a href="<?php the_field('pinterest_link','options');?>" target="_blank" class="sie-mobile-menu_8 se " data-sid="mobile-menu_8">
            <div class="se-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M256 32C132.3 32 32 132.3 32 256c0 91.7 55.2 170.5 134.1 205.2-.6-15.6-.1-34.4 3.9-51.4 4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58 20.4 0 30.2 15.3 30.2 33.6 0 20.5-13.1 51.1-19.8 79.5-5.6 23.8 11.9 43.1 35.4 43.1 42.4 0 71-54.5 71-119.1 0-49.1-33.1-85.8-93.2-85.8-67.9 0-110.3 50.7-110.3 107.3 0 19.5 5.8 33.3 14.8 43.9 4.1 4.9 4.7 6.9 3.2 12.5-1.1 4.1-3.5 14-4.6 18-1.5 5.7-6.1 7.7-11.2 5.6-31.3-12.8-45.9-47-45.9-85.6 0-63.6 53.7-139.9 160.1-139.9 85.5 0 141.8 61.9 141.8 128.3 0 87.9-48.9 153.5-120.9 153.5-24.2 0-46.9-13.1-54.7-27.9 0 0-13 51.6-15.8 61.6-4.7 17.3-14 34.5-22.5 48 20.1 5.9 41.4 9.2 63.5 9.2 123.7 0 224-100.3 224-224C480 132.3 379.7 32 256 32z" />
                </svg></div>
          </a>
			
			
			<a href="<?php the_field('youtube_link','options');?>" target="_blank" class="sie-mobile-menu_8 se last_item" data-sid="mobile-menu_8">
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
			
			
			
          <div data-sid="mobile-menu_9" class="sie-mobile-menu_9 se ">
			  
			  <a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank" class=" youtube_btn_m se " data-sid="header-menu_main-view_11">
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
253 -5 392 -8z"/>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"/>
                </svg>
				
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M2235 5105 c-462 -60 -885 -237 -1255 -523 -117 -91 -316 -287 -413
-407 -276 -342 -459 -746 -537 -1186 -28 -156 -39 -531 -21 -702 82 -766 505
-1455 1156 -1880 324 -211 689 -344 1085 -393 152 -19 472 -18 630 1 1160 144
2081 1065 2225 2225 20 162 20 478 0 640 -92 744 -509 1411 -1140 1826 -329
216 -695 350 -1085 399 -152 18 -501 18 -645 0z m812 -1440 c432 -9 694 -33
807 -75 69 -26 161 -108 199 -178 61 -111 87 -315 94 -736 8 -480 -22 -815
-86 -951 -61 -131 -171 -204 -346 -230 -422 -62 -1869 -63 -2296 0 -52 8 -121
24 -153 35 -77 29 -166 113 -206 193 -58 120 -90 414 -90 837 0 402 32 711 85
827 33 74 115 157 189 193 73 36 185 55 416 71 196 13 796 27 995 22 77 -1
253 -5 392 -8z"/>
<path d="M2240 2560 c0 -264 3 -480 7 -480 10 0 833 474 833 480 0 6 -823 480
-833 480 -4 0 -7 -216 -7 -480z"/>
</g>
</svg></div>
          </a>
			  
            <div class="se-simple"></div>
          </div>
          <div data-sid="mobile-menu_10" class="sie-mobile-menu_10 se ">
            <div class="se-simple"></div>
          </div>
        </div>
      </div>
    </div>
	  <div id="about-header" data-bid="about-header" class="sb sib-about-header">
      <div class="ss-s ss-bg about_bg" style="background-image:url(<?php the_field('about_banner_image'); ?>); ">
        <div class="sb-m"></div>
        <div class="sc" style="width:1200px;">
          <div data-sid="about-header_0" class="sie-about-header_0 se ">
            <h2 class="se-t sie-about-header_0-text st-m-heading st-d-heading se-rc"><?php the_field('about_banner_title'); ?></h2>
          </div>
          <div data-sid="about-header_1" class="sie-about-header_1 se ">
            <h3 class="se-t sie-about-header_1-text st-m-subheading st-d-subheading se-rc"><?php the_field('about_banner_sub_title'); ?></h3>
          </div>
        </div>
		  
		  
		  
		  
      </div>
    </div>
	  