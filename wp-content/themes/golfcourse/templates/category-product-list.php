<?php
/*
 * Template Name: Category Product list
*/
?>

<?php get_header(); ?>
<!doctype html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<style type="text/css">
 #wrapper {
    margin-top: 0px !important;
}
	.pt_product-search-result .refinement h3.expanded:after{
		display: none;
	}

.pt_product-search-result .refinement h3{
  text-transform: capitalize !important;
}


	#slideshow{
    display: none !important;
  }
	
.header{
	     background-color: #242424 !important; 
}

/*.navbar-inverse{
	 background-color: #242424 !important; 
}*/

.navbar-nav{
	top: 8px;
}

.nav{

	padding: 0.5em 0 0;
}

</style>


<head>

<meta charset=UTF-8>

<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">




<title></title>




<link href="https://www.taylormadegolf.eu/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/76x76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/120x120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/152x152.png" />



<meta name="description" content=" "/>
<meta name="keywords" content=" "/>


<script>pageContext = {"title":"Catgory Search Results","type":"category-search","ns":"category-search"};</script>







<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/ui/jquery-ui.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri();?>/assets/maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/pdp-video/plyr.css"/>

<!--[if lt IE 9]>
<script src="/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/js/lib/html5.js"></script>
<![endif]-->

<script type="text/javascript">//<!--
/* <![CDATA[ (head-active_data.js) */
var dw = (window.dw || {});
dw.ac = {
    _analytics: null,
    _events: [],
    _category: "",
    _capture: function(configs) {
        if (Object.prototype.toString.call(configs) === "[object Array]") {
            configs.forEach(captureObject);
            return;
        }
        dw.ac._events.push(configs);
    },
  capture: function() { 
    dw.ac._capture(arguments);
    // send to CQ as well:
    if (window.CQuotient) {
      window.CQuotient.trackEventsFromAC(arguments);
    }
  },
    EV_PRD_SEARCHHIT: "searchhit",
    EV_PRD_DETAIL: "detail",
    EV_PRD_RECOMMENDATION: "recommendation",
    EV_PRD_SETPRODUCT: "setproduct",
    applyContext: function(context) {
        if (typeof context === "object" && context.hasOwnProperty("category")) {
          dw.ac._category = context.category;
        }
    },
    setDWAnalytics: function(analytics) {
        dw.ac._analytics = analytics;
    }
};
/* ]]> */
// -->






</script>


<script type="text/javascript">
  $(document).ready(function(){
  
  $('.product_type_simple').click(function(event){

 
   window.location.href = '<?php echo site_url('shop-now');?>'; 
   //event.preventDefault(); 
       
  });

  });

</script> 



<script type="text/javascript">
  
  $(document).ready(function () {
            $('#issue_no').on('change', function () {

            	
                var category_id = $(this).val();

                window.location.assign('category-product/?category='+category_id);
            });
        });

</script>









<script type="text/javascript">//<!--
/* <![CDATA[ (head-cquotient.js) */
var CQuotient = window.CQuotient = {};
CQuotient.clientId = 'aais-TMaG-EU';
CQuotient.activities = [];
CQuotient.cqcid='';
CQuotient.cquid='';
CQuotient.initFromCookies = function () {
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf('cqcid=') == 0) {
      CQuotient.cqcid=c.substring('cqcid='.length,c.length);
    } else if (c.indexOf('cquid=') == 0) {
      CQuotient.cquid=c.substring('cquid='.length,c.length);
      break;
    }
  }
}
CQuotient.getCQCookieId = function () {
  if(window.CQuotient.cqcid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cqcid;
};
CQuotient.getCQUserId = function () {
  if(window.CQuotient.cquid == '')
    window.CQuotient.initFromCookies();
  return window.CQuotient.cquid;
};
CQuotient.trackEventsFromAC = function (/* Object or Array */ events) {
try {
  if (Object.prototype.toString.call(events) === "[object Array]") {
    events.forEach(_trackASingleCQEvent);
  } else {
    CQuotient._trackASingleCQEvent(events);
  }
} catch(err) {}
};
CQuotient._trackASingleCQEvent = function ( /* Object */ event) {
  if (event && event.id) {
    if (event.type === dw.ac.EV_PRD_DETAIL) {
      CQuotient.trackViewProduct( {id:'', alt_id: event.id, type: 'raw_sku'} );
    } // not handling the other dw.ac.* events currently
  }
};
CQuotient.trackViewProduct = function(/* Object */ productData){
  var cq_params = {};
  cq_params.cookieId = CQuotient.getCQCookieId();
  cq_params.userId = CQuotient.getCQUserId();
  cq_params.product = productData;
  if(CQuotient.sendActivity) {
    CQuotient.sendActivity(CQuotient.clientId, 'viewProduct', cq_params);
  } else {
    CQuotient.activities.push({activityType: 'viewProduct', parameters: cq_params});
  }
};
/* ]]> */
// -->
</script>




<!-- UI -->
<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/css/icomoon/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/css/style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/css/ss-social-regular.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/magnificpopup/magnific-popup.css" />

<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/css/site-specific.css" type="text/css" rel="stylesheet" />

<!--[if gte IE 9 | !IE]><!-->
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<!--<![endif]-->
<!--[if lte IE 8]>
<script src="/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="//cdn.rawgit.com/weblinc/media-match/master/media.match.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-shim.min.js"></script>
<![endif]-->
<!--[if IE 9]>
<script src="//cdn.rawgit.com/paulirish/matchMedia.js/master/matchMedia.js" type="text/javascript"></script>
<script src="//cdn.rawgit.com/paulirish/matchMedia.js/master/matchMedia.addListener.js" type="text/javascript"></script>
<![endif]-->

<!--[if lte IE 8]>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/chuckcarpenter/REM-unit-polyfill/master/js/rem.min.js" type="text/javascript"></script>
<![endif]-->




<script>
var allowedToTrack = function() {
var _GDPR = true;
var cookie_name = ("taylormade_CONSENT").toUpperCase();
var results = document.cookie.match( '(^|; ?)' + cookie_name + '=([^;]*)(;|$)' );
if (results || !_GDPR) return true;
return false;
};
</script>

<script>var dataLayer = [];</script>




<script>
dataLayer.push({
'event': 'page.content.taxonomies',
'page.content.taxonomies': {
  'pageType': 'category-search'
}});
</script>










<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/css/taylormade/style.css" type="text/css" rel="stylesheet" />



<script type="text/javascript">
if (window.jQuery) {
jQuery(document).ready(function(){
if(screen.width < 768){
jQuery('#footer').append('<a href="/home" class="full-site-link">View Full Site</a>');
jQuery('.full-site-link')
.attr('href', '/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Home-FullSite')
.click(function(e) {
e.preventDefault();
jQuery.ajax({
url: '/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Home-FullSite',
success: function(){
window.location.reload();
}
});
}
);
}
});
}
</script>








<link href="<?php echo get_template_directory_uri();?>/assets/fast.fonts.net/cssapi/a5f58faf-dd1c-4aad-98ce-5b8f3d99e641.css" rel="stylesheet" type="text/css" />







<link rel="canonical" href="index.html" />





<!-- BRAND: taylormadegolf -->


<link rel="alternate" href="https://taylormadegolf.com/taylormade-balls/" hreflang="x-default"/>
<link rel="alternate" href="https://taylormadegolf.com/taylormade-balls/" hreflang="en"/>
<link rel="alternate" href="https://taylormadegolf.com/taylormade-balls/" hreflang="en-us"/>








<link rel="alternate" href="https://taylormadegolf.com/balls/" hreflang="ko-kr" />











<link rel="alternate" href="https://taylormadegolf.co.uk/taylormade-balls/" hreflang="en-gb" />









<link rel="alternate" href="index.html" hreflang="en-de" />









<link rel="alternate" href="https://taylormadegolf.jp/taylormade-balls/" hreflang="ja-jp" />









<link rel="alternate" href="https://taylormadegolf.ca/taylormade-balls/?lang=en_CA" hreflang="en-ca" />




<link rel="alternate" href="https://taylormadegolf.ca/taylormade-balls/?lang=fr_CA" hreflang="fr-ca" />










</head>

<body>




	
	



<div id="wrapper" class="pt_product-search-result non-commerce">








	<script type="text/javascript">
		if (allowedToTrack()) {
			var s_account="tm-taylormadegolfeuv2prod";
			var s_currencyCode = "EUR";
			document.write("<scr"+"ipt src='/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/omniture/s_code.js' type='text/javascript'></scr"+"ipt>");
		}
	</script>
	

<div class="header-bg"></div>


<div id="main" role="main" class="clearfix">

<?php $category_id = $_GET['category']; ?>

<?php if( $term = get_term_by( 'id', $category_id, 'product_cat' ) ){
    
    $name_category = $term->name;
} ?>





<div class="grid-wrap">






<div id="secondary" class="refinements">




<div class="breadcrumb">


<a class="breadcrumb-element home-breadcrumb" href="<?php echo site_url(''); ?>" class="home" title="Home">Home</a>









<!-- <a class="breadcrumb-element" href="index.html" title="Go to GOLF BALLS">GOLF BALLS</a> -->


</div><!-- END: breadcrumb -->

<div class="grid-refinements">
<div class="grid-refinements-content">



<h2 class="visually-hidden">Refine Your Results By:</h2>


	<div class="uikit-form-group uikit-form-select">
		<div class="uikit-form-input-wrap">
			<label for="category-selection">Kategorie</label>
			<select name="category-selection" id='issue_no' class="uikit-form-control cat" >
				 
				
					
					
					<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );

 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        ?>	
							
				 <?php $category_id = $_GET['category']; ?>		
					
					<option value="<?php echo $cat->term_id; ?>" <?php if ($category_id == $cat->term_id) { echo "selected"; } ?>><?php echo $cat->name ; ?></option>
				
					
					
				<?php } } ?>	
				
			</select>
		</div>
	</div>
	

	
	 <div class="refinement category-refinement category-level-2 first">
		<h3 class="expanded"><span><?php if( $term = get_term_by( 'id', $category_id, 'product_cat' ) ){
    echo $term->name; 
} ?></span> <span class="glyphicon glyphicon-menu-down" style="float: right;     margin-top: -18px;"></span>
			
		</h3>
		<ul class="selected-refinement">
			
				<?php $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $category_id,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);?>



  <?php

 
  if(empty($subcats)){

  } else {

 foreach ($subcats as $sc) {
 	$category_id = $_GET['category'];
        $link = get_term_link( $sc->slug, $sc->taxonomy );

  	?>



   

				<li class="">
					
					<a class="refinement-link non-ajax not-selected" title="<?php echo $sc->name; ?>" href="<?php echo site_url('subcategory-product/?category='.$category_id.'&subcategory='.$sc->term_id);?>"><?php echo $sc->name; ?></a>
				</li>

			<?php } } ?>
			
				
		</ul>
	</div> 
	

<div class="refinement category-refinement category-level-2 second" style="display: none;">
		<h3 class="expanded"><span><?php if( $term = get_term_by( 'id', $category_id, 'product_cat' ) ){
    echo $term->name;
} ?></span><span class="glyphicon glyphicon-menu-up" style="float: right;     margin-top: -17px;"></span> 
			
		</h3>

	</div>









<!-- PRICE REFINEMENTS -->





</div>
</div>
<p style="margin-top: 100px; font-size:20px; font-weight: bold; ">Sicher bezahlen <br/> mit PayPal©</p>
</div>
<div id="primary" class="primary-content">
<!-- -->


<div class="content-slot slot-grid-header">


	 

	

</div>


<div class="grid-content-header">
<!-- <h1 class="search-results-header">


GOLF BALLS


</h1> -->


</div><!-- /grid-content-header -->
<div class="search-result-content">




<ul id="search-result-items" class="search-result-items tiles-container clearfix show-compare ">

<?php
        $args = array( 'post_type' => 'product',  'product_cat' => $name_category , 'posts_per_page' => '100', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );

        if($loop->post_count == '0'){

        //echo "<pre>"; print_r($loop);
     
        echo ' <div class="alert alert-info">
                <p style="font-size:16px; margin-top:0px">
                   Derzeit befinden sich in dieser Kategorie keine Produkte. Durchstöbern Sie doch eine andere Kategorie!</p>
            </div>'; 
          }   
 

        $i=1;
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>


<li class="grid-tile  new-row" data-colors-to-show="">
<div class="product-tile" data-uuid="3b04dc9996966610e4b3b57e30" data-itemid="DW-JJA27">
<div class="product-image">
 <a href="<?php echo site_url('product-desrciption/?') ?>id=<?php echo $loop->post->ID;?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

 	<?php  $golfcourseImages=$dynamic_featured_image->get_featured_images($loop->post->ID); ?>
 	 <?php if (has_post_thumbnail( $loop->post->ID )) 
                            
                        if(isset($golfcourseImages[1]['full'])){ ?>

<img class="first-thumb-img" src="<?php echo $golfcourseImages[0]['full'];?>" alt=""/>
<img class="second-thumb-img" src="<?php echo $golfcourseImages[1]['full'];?>" alt=""/>

<?php } ?>
<div class="product-flags brand-taylormade">

<div class="new-tile">
<span class="new-tile-alt"></span>
<span class="flag-label">
NEW!
</span>
</div>


</div>
</a>
</div>

<div class="product-name">
<span class="icon-ap-3-line-rule"></span>
<a class="name-link" href="<?php echo site_url('product-desrciption/?') ?>id=<?php echo $loop->post->ID;?>" title="">
<?php the_title(); ?>
</a>
</div>



<div class="product-promo">

</div>


<div class="grid-info-block">
</div>


<div class="product-compare label-inline">
<label for="cc-3b04dc9996966610e4b3b57e30">Compare <span class="visually-hidden">TP5 Golf Balls DW-JJA27</span></label>
<div class="field-wrapper">
<input type="checkbox" class="compare-check" id="cc-3b04dc9996966610e4b3b57e30" />
</div>
</div>

</div>

</li>

<?php $i++; endwhile; ?>
    <?php wp_reset_query(); ?>



</ul>




</div>

<!-- <div class="back-to-top">
<a href="https://www.taylormadegolf.eu/taylormade/">Back to Top</a>
</div>
 -->









	
	







<div class="search-promo">
	 

	</div>


<!-- <script language="javascript" type="text/javascript">
s.eVar4 = jQuery('.breadcrumb-element').slice(1).text();
</script> -->


<div class="search-promo">
	 

	</div>













<script type="text/javascript">
if(jQuery('.refinements-wrap').find('li').length) {
s.linkTrackVars = 'eVar22,prop4,prop5';
s.prop5 = '13';
s.eVar22 = jQuery('.refinements-wrap').find('span.refinement-value').map(function(){ return jQuery.trim(jQuery(this).text()) }).get().join(',');
s.tl(this,'o','refinement');
}
</script>







</div>
</div>

</div>

















































































<div id="newslettersubscription"></div>

<div class="cookieWarningBox">











<div class="content-asset"><!-- dwMarker="content" dwContentID="bcX0siaagkrnUaaadgC23rx25K" -->
<button id="hide-cookie-policy" style="apperance: none;background: transparent; border:none; position: absolute;top:10px;right:10px;color:#333;font-size: 16px;" title="Close"><i class="fa fa-times"></i></button>
<div class="uikit-box">
<h2>Cookie Policy Notification</h2>
<p>www.taylormadegolf.eu uses cookies in order to improve the experience for our users. Find out more and set your cookie preferences <a href="https://www.taylormadegolf.eu/cookiepolicy.html">here</a>. By continuing to use our site you consent to use of cookies.</p>
<button class="uikit-btn uikit-btn-thin" id="acceptCookies">OK</button> &nbsp; 
<!--<button class="uikit-btn uikit-btn-thin uikit-btn-outline" id="rejectCookies">Reject</button>-->
</div>
<script>
$(function() {
  $('#hide-cookie-policy').click(function() {
    $('.cookieWarningBox').hide();
  });
});
</script>
</div> <!-- End content-asset -->





</div>










<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/ui/jquery-ui.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/magnificpopup/jquery.magnific-popup.min.js" ></script>
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery-ui-switch-button.js" ></script>
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.zoom.min.js" ></script>

<script type="text/javascript">

(function(){
window.SessionAttributes = {"SHOW_CAPTCHA":null,"SHOW_SIGNUP_OVERLAY":false,"SIGNUP_OVERLAY_COOKIE_NAME":null,"PAGES_WITHOUT_SIGNUP_POPUP":null,"COOKIE_WARNING_COOKIE_NAME":"taylormade_cookie_status_v2","SHOW_ABANDONEDCART_OVERLAY":false,"BRAND":"taylormade","GOLFPASS_STATE":""};
window.User = {"zip":null,"storeId":null};
window.AmazonOrder = {"orderReferenceID":null};
}());
</script>
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/js/app.js"></script>

<script>
// OVERRIDE: remove newlines in meta
var meta = "";
var keywords = "";
</script>


<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/pdp-video/plyr.min.js"></script>











	
<script type="text/javascript">
  
 $('.glyphicon-menu-down').click(function(){

 	

  $('.first').css("display","none");

  $('.second').css("display","block");

 });

</script>


<script type="text/javascript">
  
 $('.glyphicon-menu-up').click(function(){

  $('.first').css("display","block");

  $('.second').css("display","none");

 });

</script>
	


<script language="javascript" type="text/javascript">
if (allowedToTrack()) {
	// initialize s_code
	var s=s_gi(s_account);
	
    /* categorization-related variables */   
	s.pageName = "taylormade:grid:GOLF BALLS";
	s.channel="taylormade";
	s.prop1 = "grid";
	s.prop2 = "taylormade:grid";
	s.prop3 = "taylormade:grid:GOLF BALLS";

	// eVar15 -- brand
	s.eVar15 = "taylormade";
	// eVar36 -- logged-in status
	s.eVar36 = "logged out";
	
	jQuery(document).ready(function() {
		// bind additional events
		jQuery(".omniture_cross_selling_link").bind("click", function() {
			s_crossSell(this);
			return false;
		});
		jQuery(".content-asset .ui-accordion-header").bind("click", function() {
			s.linkTrackVars='eVar16';
			s.eVar16 = jQuery(this).text();
			s.tl(this, 'o', 'module interaction');
		})
		
		// eVar27 - rendered experience (desktop, tablet or mobile)
		if (app.omniture) {
			s.eVar27 = app.omniture.getRenderedExperience();
		}
		
		// perform an actual Omniture call
		s.t();
	});
}
</script>










	<!-- Google Tag Manager -->
	<script>
	if (allowedToTrack()) {
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TBZWX9');
	}</script>
	<!-- End Google Tag Manager -->

<div id="site-fixes">


	 


	

<div class="html-slot-container">


<style>
/* 2019 NEW FLAG */

header#header_v18 .header-main .company-logo h1.primary-logo .lg {
  width: 150px !important;
}
@media (min-width: 1200px) {
  .main-nav_content_asset .content-asset { 
    width: 296px;
  }
  .main-nav_content_asset .content-asset img {
    width: 296px !important;
  }
  header#header_v18 .main-nav .main-nav_level_1 .main-nav_content .main-nav_content_asset {
    width: auto !important;
    background: #fff;
  }
}
@media (max-width: 1199px) {
  header#header_v18 .secondary-nav ul { width: auto; }
}
</style>
<script>
$(function() {
  $('.type-shopablecategory .main-nav_content_shop h3').text('Products');
  $('.nav-cat_taylormade-holiday .type-shopablecategory .main-nav_content_shop h3').text('Explore');
});
</script>
<style>
.utility-nav_help, .utility-nav_account { display: none !important; }

.long-form ul {
    list-style: disc outside none;
}
.long-form ol {
    list-style: decimal outside none;
}
.long-form li  {
    margin-left: 40px;
    padding-left: 20px;
    margin-bottom: 1em;
    font-size:  17px;
}


.pt_category #category-landing > .uikit-row h1 { display: block; width: 100% }
</style>
<style>
@media (min-width: 900px) {
  #plp-container {
    margin-top: 85px;
  }
}
</style>

<script>
$(function() {
  $('a').each(function(){ 
try {
    if ($(this).text() == 'Terms and Conditions' && $(this).attr('href').match('https://www.taylormadegolf.eu/shared-customer-service-customer-legal/privacy.html')) {
      $(this).attr('href', 'https://www.taylormadegolf.eu/terms-and-conditions.html');
    }
} catch(e) {}
  });
});
</script>


</div> 
	

</div>







</div>



<script type="text/javascript">
if (allowedToTrack()) {

}
</script>







	
	<script>window.dataLayer=window.dataLayer||[];</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
	
		<script type="text/javascript">
		/*google tag manager data layer*/

		dataLayer.push({
			'event': 'ListingPage',
			'productid': ["DW-JJA27","DW-JJA28","DW-JJA01","DW-JJA02","DW-JJA03","DW-JJA04","DW-JJA15","DW-WZ902","DW-JJA34","DW-JJA38","DW-JJA35","DW-JJA48","DW-JJA49"],
		});
		
		// Older DayaLayer Element
		dataLayer.push({
			'ecommerce': {
				'impressions': [{"id":"DW-JJA27","sku":"DW-JJA27","name":"TP5 Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":0,"brand":"taylormade"},{"id":"DW-JJA28","sku":"DW-JJA28","name":"TP5x Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":1,"brand":"taylormade"},{"id":"DW-JJA01","sku":"DW-JJA01","name":"Project (a) Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":2,"brand":"taylormade"},{"id":"DW-JJA02","sku":"DW-JJA02","name":"Project (a) Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":3,"brand":"taylormade"},{"id":"DW-JJA03","sku":"DW-JJA03","name":"Project (s)","category":"GOLF BALLS","list":"Grid Page","order":4,"brand":"taylormade"},{"id":"DW-JJA04","sku":"DW-JJA04","name":"Project (s) Matte Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":5,"brand":"taylormade"},{"id":"DW-JJA15","sku":"DW-JJA15","name":"Project (s) Matte Orange Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":6,"brand":"taylormade"},{"id":"DW-WZ902","sku":"DW-WZ902","name":"Project (s) Matte Red Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":7,"brand":"taylormade"},{"id":"DW-JJA34","sku":"DW-JJA34","name":"Kalea Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":8,"brand":"taylormade"},{"id":"DW-JJA38","sku":"DW-JJA38","name":"Kalea Matte Purple Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":9,"brand":"taylormade"},{"id":"DW-JJA35","sku":"DW-JJA35","name":"Kalea Matte Peach Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":10,"brand":"taylormade"},{"id":"DW-JJA48","sku":"DW-JJA48","name":"RBZ Soft Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":11,"brand":"taylormade"},{"id":"DW-JJA49","sku":"DW-JJA49","name":"RBZ Soft Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":12,"brand":"taylormade"}]
			}
		});
		
		dataLayer.push({
			'event' : 'ecommerce.impressions',
			 'ecommerce.impressions' : {
			    'v':4,
			    'name': 'GOLF BALLS',
				'products': [{"id":"DW-JJA27","sku":"DW-JJA27","name":"TP5 Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":0,"brand":"taylormade"},{"id":"DW-JJA28","sku":"DW-JJA28","name":"TP5x Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":1,"brand":"taylormade"},{"id":"DW-JJA01","sku":"DW-JJA01","name":"Project (a) Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":2,"brand":"taylormade"},{"id":"DW-JJA02","sku":"DW-JJA02","name":"Project (a) Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":3,"brand":"taylormade"},{"id":"DW-JJA03","sku":"DW-JJA03","name":"Project (s)","category":"GOLF BALLS","list":"Grid Page","order":4,"brand":"taylormade"},{"id":"DW-JJA04","sku":"DW-JJA04","name":"Project (s) Matte Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":5,"brand":"taylormade"},{"id":"DW-JJA15","sku":"DW-JJA15","name":"Project (s) Matte Orange Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":6,"brand":"taylormade"},{"id":"DW-WZ902","sku":"DW-WZ902","name":"Project (s) Matte Red Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":7,"brand":"taylormade"},{"id":"DW-JJA34","sku":"DW-JJA34","name":"Kalea Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":8,"brand":"taylormade"},{"id":"DW-JJA38","sku":"DW-JJA38","name":"Kalea Matte Purple Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":9,"brand":"taylormade"},{"id":"DW-JJA35","sku":"DW-JJA35","name":"Kalea Matte Peach Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":10,"brand":"taylormade"},{"id":"DW-JJA48","sku":"DW-JJA48","name":"RBZ Soft Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":11,"brand":"taylormade"},{"id":"DW-JJA49","sku":"DW-JJA49","name":"RBZ Soft Yellow Golf Balls","category":"GOLF BALLS","list":"Grid Page","order":12,"brand":"taylormade"}],
				'productCount': 13,
				'pageNumber': 1.0,
				'maxPerPage': 40
			}
		});
		
		</script>
	
	
	






	
		
			
			
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
			<script language="javascript" type="text/javascript">
				jQuery(document).ready(function () {
					app.tagmanager.pushDRTags('category', ['DW-JJA27','DW-JJA28','DW-JJA01','DW-JJA02','DW-JJA03','DW-JJA04','DW-JJA15','DW-WZ902','DW-JJA34','DW-JJA38','DW-JJA35','DW-JJA48','DW-JJA49']);
				});
			</script>
		
	


















"
<!-- Demandware Analytics code 1.0 (body_end-analytics-tracking-asynch.js) -->
<script type="text/javascript">//<!--
/* <![CDATA[ */
function trackPage() {
    try{
        var trackingUrl = "https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/__Analytics-Start";
        var dwAnalytics = dw.__dwAnalytics.getTracker(trackingUrl);
        if (typeof dw.ac == "undefined") {
            dwAnalytics.trackPageView();
        } else {
            dw.ac.setDWAnalytics(dwAnalytics);
        }
    }catch(err) {};
}
/* ]]> */
// -->
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/internal/jscript/dwanalytics-18.3.js" async="async" onload="trackPage()"></script>
<!-- Demandware Active Data (body_end-active_data.js) -->
<script src="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/internal/jscript/dwac-18.10.4.js" type="text/javascript" async="async"></script><!-- CQuotient Activity Tracking (body_end-cquotient.js) -->
<script src="<?php echo get_template_directory_uri();?>/assets/cdn.cquotient.com/js/v2/gretel.min.js" type="text/javascript" async="async"></script>
</body>

<!-- Mirrored from www.taylormadegolf.eu/taylormade-balls/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 12:38:45 GMT -->
</html>


<!-- <?php //get_footer(); ?> -->

