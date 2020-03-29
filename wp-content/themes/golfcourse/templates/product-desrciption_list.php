<?php
/*
 * Template Name: Product Desrciption List
*/
?>

<?php get_header(); ?>


<!doctype html>
 <html lang="en"> 




<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

 
	<style type="text/css">

		 #de{
		 	display: none;
		 }

	#style-7::-webkit-scrollbar-thumb{
    
    border-radius: 10px;
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.44, rgb(122,153,217)), color-stop(0.72, rgb(73,125,189)), color-stop(0.86, rgb(28,58,148)));
}


.btn-primary {
    color: #fff;
    background-color: none !important;
    border-color: none !important;
    padding: 0px;
    width: 250px;
}

#style-7::-webkit-scrollbar{
        height: 8px;
        
}	
    
/* The container */
.hello {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 21px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}




	</style>

<style type="text/css">

	 #wrapper {
    margin-top: 0px !important;
}

	.related .columns-4{
		    width: 1000px;
	}

	.button, .button-secondary{

		margin: 6px 19px 7px 19px !important;
		    padding: 13px 27px !important;
	}

	.onsale{
		display: none;
	}

	.woocommerce-product-gallery__image{
		display: none;
	}

	.entry-summary{
		display: none;
	}

	.wc-tabs-wrapper{
		display: none;
	}

	.size-woocommerce_thumbnail{
		display: none;
	}

	.zoomImg{

		width: 606px !important;
		height: 580px !important;
	}

	.pt_product-search-result .refinement h3.expanded:after{
		display: none;
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


<script>pageContext = {"title":"TP5 Golf Balls","type":"product","ns":"product"};</script>







<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/ui/jquery-ui.min.css" type="text/css" rel="stylesheet" />
 
<!-- <link href="<?php //echo get_template_directory_uri();?>/assets/maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

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
</script><script type="text/javascript">//<!--
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
  'pageType': 'product'
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





<link rel="canonical" href="DW-JJA27.html"/>






<!-- BRAND: taylormadegolf -->


<link rel="alternate" href="https://taylormadegolf.com/TP5-Golf-Balls/DW-JJA27.html" hreflang="x-default"/>
<link rel="alternate" href="https://taylormadegolf.com/TP5-Golf-Balls/DW-JJA27.html" hreflang="en"/>
<link rel="alternate" href="https://taylormadegolf.com/TP5-Golf-Balls/DW-JJA27.html" hreflang="en-us"/>








<link rel="alternate" href="https://taylormadegolf.com/taylormade/tp5-golf-balls/DW-JJA27.html" hreflang="ko-kr" />











<link rel="alternate" href="https://taylormadegolf.co.uk/TP5-Golf-Balls/DW-JJA27.html" hreflang="en-gb" />









<link rel="alternate" href="DW-JJA27.html" hreflang="en-de" />









<link rel="alternate" href="https://taylormadegolf.jp/taylormade-balls/TP5-Golf-Balls/DW-JJA27.html" hreflang="ja-jp" />









<link rel="alternate" href="https://taylormadegolf.ca/TP5-Golf-Balls/DW-JJA27.html?lang=en_CA" hreflang="en-ca" />




<link rel="alternate" href="https://taylormadegolf.ca/TP5-Golf-Balls/DW-JJA27.html?lang=fr_CA" hreflang="fr-ca" />








</head>
<body>




	
	





<div id="wrapper" class="pt_product-details non-commerce">








	<script type="text/javascript">
		if (allowedToTrack()) {
			var s_account="tm-taylormadegolfeuv2prod";
			var s_currencyCode = "EUR";
			document.write("<scr"+"ipt src='/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/omniture/s_code.js' type='text/javascript'></scr"+"ipt>");
		}
	</script>


<div class="header-bg"></div>


<div id="main" role="main" class="full-width clearfix">







<div class="breadcrumb">

<!-- <a class="breadcrumb-element home-breadcrumb" href="http://www.taylormadegolf.eu/" class="home" title="Home">Home</a> -->




<script type="text/javascript">//<!--
/* <![CDATA[ (viewCategory-active_data.js) */
dw.ac.applyContext({category: "taylormade-balls"});
/* ]]> */
// -->
</script>




<!-- <a class="breadcrumb-element" href="https://www.taylormadegolf.eu/taylormade-balls/" title="Go to GOLF BALLS">
GOLF BALLS
</a> -->


<!-- <span class="breadcrumb-element">TP5 Golf Balls</span> -->

</div>

<div id="primary" class="primary-content">
<div id="product-nav-container">

</div> <!-- /product-nav-container -->





<!-- CQuotient Activity Tracking (viewProduct-cquotient.js) -->
<script type="text/javascript">//<!--
/* <![CDATA[ */
(function(){
	try {
		if(window.CQuotient) {
			var product = {
				id: 'DW-JJA27',
				sku: '',
				type: '',
				alt_id: ''
			};
			window.CQuotient.trackViewProduct(product);
		}
	} catch(err) {}
})();
/* ]]> */
// -->
</script>
<script type="text/javascript">//<!--
/* <![CDATA[ (viewProduct-active_data.js) */
dw.ac._capture({id: "DW-JJA27", type: "detail"});
/* ]]> */
// -->
</script>
<div id="pdpMain" class="pdp-main" itemscope itemtype="http://schema.org/Product">










<div class=" product-top-content ">
<div class=" inner ">
<div class=" inner-row ">

<div class="mobile-details-wrapper"></div>
<div class="product-col-1 product-image-container">




<h2 class="visually-hidden">Images</h2>
<div class="product-primary-image">


<div class="primary-video">
</div>
<div class="primary-image-slider">
<?php $product_id = $_GET['id'];  ?>
<ul class="all-primary-images">


<?php  $golfcourseImages=$dynamic_featured_image->get_featured_images($product_id); ?>

<?php //echo "<pre>"; print_r($golfcourseImages); exit; ?>

<?php if (has_post_thumbnail( $product_id )) {?>
	

<?php for($i=0; $i<=4; $i++) { ?>
<li class="image">
<a href="<?php echo $golfcourseImages[$i]['full'] ; ?>" target=_blank class="product-image main-image <?php echo $i;?>" title="TP5 Golf Balls">
<img itemprop="image" <?php if($i==0){ ?> class="load-img primary-image" <?php } else { ?>class="load-img alt-image unloaded" <?php } ?> data-src="<?php echo $golfcourseImages[$i]['full'] ; ?>"/>
</a>


</li>

 

<?php } }?>

</ul>
</div>
</div>

<div class="pdp-gallery-wrapper">
<div id="pdp-wrapper">



<ul class="pdp-gallery">



<?php  $golfcourseImages=$dynamic_featured_image->get_featured_images($product_id); 

//echo "<pre>"; print_r($golfcourseImages); 

?>




<?php if (has_post_thumbnail( $product_id )) {?>


 <?php for($i=0; $i<=4; $i++) { ?>

<li class="item">
<a class="thumbnail-link">
<img alt="TP5 Golf Balls" src="<?php echo $golfcourseImages[$i]['full'] ; ?>" class="productthumbnail" data-lgimg='{"index": "<?php echo $i;?>", "url":"<?php echo $golfcourseImages[$i]['full'] ; ?>", "title":"TP5 Golf Balls", "alt":"TP5 Golf Balls", "hires":"<?php echo $golfcourseImages[$i]['full'] ; ?>"}'/>
</a>
</li>
</iselseif>

 

<?php }} ?>

</ul>
</div>

</div>






</div>
<div class="product-col-2 product-detail">
<?php $user_id = get_current_user_id(); ?>
<?php  $balance = get_user_meta($user_id, '_credit', true );   ?>
 
<div style="margin-bottom: 30px;">
<center> <label class="label label-default" style="font-size:14px; padding: 7px;"> Tauschen Sie Ihre S.E.A.Coins gegen Preisnachlässe! Verbleibende  =  <?php echo $balance; ?></label> </center>
</div>

<div id="product-content">



	<div class="details-wrapper">

		<?php $product_id = $_GET['id']; ?>


	
		<h1 class="product-name" itemprop="name"><?php echo get_the_title( $product_id ); ?></h1>
	
		<h2 class="visually-hidden">Details</h2>
		
		
		
	
					
			<div class="product-description-short">

				<?php $product_id = $_GET['id'];  ?>

<?php
$params = array(
 'p' => $product_id,
 'post_type' => 'product'
);
$wc_query = new WP_Query($params); 
?>
<?php if ($wc_query->have_posts()) :  ?>
<?php while ($wc_query->have_posts()) : $wc_query->the_post();  ?>

    <?php $product_id = $_GET['id'];
    $product_instance = wc_get_product($product_id); ?>
    <?php $product_full_description = $product_instance->get_description();?>
				
			<?php echo substr($product_full_description,0,450).'.....'; ?>
			
					<a class="product-description-read-more" href="#product-description-full">Read More</a>

					
				
			</div>

<?php $product_regularprice = $product_instance->get_regular_price(); ?>

<?php $product_saleprice = $product_instance->get_sale_price(); ?>

<p style="font-size: 18px;" id="nodiscount_price"> <a> NUR € <?php echo $product_regularprice;?></a></p>

<p style="font-size: 18px; display: none;" id="discount_price">€ <?php echo $product_saleprice;?> <a style="text-decoration: line-through;"> NUR € <?php echo $product_regularprice;?></a></p> 

         <?php $user_id = get_current_user_id(); ?>

         <?php  $balance = get_user_meta($user_id, '_credit', true );   ?>

         <?php if($balance > 0)
         {?>
          <p style="font-size: 16px;"><input id="checkbox" type="checkbox"/> Preis bei Verwendung einer S.E.A.Coin!</p>
       <?php  } ?>



	<?php endwhile; ?>
			<?php endif; ?>	
			
	</div>
	
	                  <?php $product_id = $_GET['id'];   ?>


    <!-- start fetch -->


<div> 


<?php

  $r=get_the_terms($product_id, 'product_cat');

  // echo "<pre>"; print_r($r);
     $flex= array();
     $loft = array();
   foreach ($r as $t){
      
      if($t->parent=='209')  // iron flex
      {
           $flex[]= $t->name;

      }

      if($t->parent=='193')  // iron loft
      {
      	   $loft[]= $t->name;
      }


      if($t->parent=='124')  // driver flex
      {
           $flex[]= $t->name;

      }

      if($t->parent=='246')  // driver loft
      {
      	   $loft[]= $t->name;
      }


      if($t->parent=='134')  // fairways flex
      {
           $flex[]= $t->name;

      }

      if($t->parent=='130')  // fairways loft
      {
      	   $loft[]= $t->name;
      }


      if($t->parent=='187')  // GAPR flex
      {
           $flex[]= $t->name;

      }

      if($t->parent=='179')  // GAPR loft
      {
      	   $loft[]= $t->name;
      }


      if($t->parent=='140')  // Hybrid flex
      {
           $flex[]= $t->name;

      }

      if($t->parent=='167')  // Hybrid loft
      {
      	   $loft[]= $t->name;
      }


      if($t->parent=='217')  // Wedges loft
      {
      	   $loft[]= $t->name;
      }


   }
    
    if(!empty($flex)){ ?>
        <p style="font-weight: 600; font-size: 16px;"> Flex</p>
    	<ul style="display:flex; overflow-y:-webkit-paged-x; width:455px; " id="style-7">
      <?php foreach($flex as $fle) { ?>
       
       <label class="container hello"><?php echo $fle; ?>
  <input type="radio" id="flex_new" name="radio" value="<?php echo $fle; ?>">
  <span class="checkmark"></span>
</label>


   <?php } } ?>

       </ul>
   <br>
  <?php 
           if(!empty($loft)){ ?>
         <p style="font-weight: 600; font-size: 16px;"> Loft </p>
    	<ul style="display:flex; overflow-y:-webkit-paged-x; width:455px;" id="style-7">
      <?php foreach($loft as $lo) { ?>

      	<label class="container hello"><?php echo $lo; ?>
  <input type="radio" name="radio1" value="<?php echo $lo; ?>">
  <span class="checkmark"></span>
</label>
 
   <?php } } ?>

  </ul>


</div>

<?php if(empty($flex) && empty($loft) ) { ?>
<!-- end fetch -->

<br><br>
 
						
			<a href="<?php
                $add_to_cart = do_shortcode('[add_to_cart_url id="'.$product_id.'"]');
                echo $add_to_cart;
?>" class="more1"><button class="btn btn-primary" id="de" style="/*background: black;*/
    color: #fff;
    display: block;
    /*padding: 11px 25px 11px 31px;*/
    font-size: 17px;
    font-weight: 600;"> <img src="<?php echo get_template_directory_uri();?>/assets/img/cartbutton.png)" style="width: 100%;"></button></a> 

     <?php } else {?>

    <a href="<?php
                $add_to_cart = do_shortcode('[add_to_cart_url id="'.$product_id.'"]');
                echo $add_to_cart;
?>" class="more"><button class="btn btn-primary" id="de" style="/*background: black;*/
    color: #fff;
    
    /*padding: 11px 25px 11px 31px;*/
    font-size: 17px;
    font-weight: 600;"> <img src="<?php echo get_template_directory_uri();?>/assets/img/cartbutton.png)" style="width: 100%;"></button></a>

    <button class="btn btn-primary" id="pe" style="    /*background: black;*/
    color: #fff;
   /* padding: 11px 25px 11px 31px;*/
    font-size: 17px;
    font-weight: 600;"> <img src="<?php echo get_template_directory_uri();?>/assets/img/cartbutton.png)" style="width: 100%;"></button>  

    					
<?php } ?>

	<div class="product-actions">

	</div><!--  end details block -->
	
	


</div>
</div>




</div>
</div>
</div>

<div class="product-info">

<h2 class="visually-hidden">Additional Information</h2>

<h2 class="visually-hidden">Additional Information</h2>

<ul class="uikit-accordion uikit-box" id="pdpTabsDiv">

	<!-- TAB DESC -->
	
	
	
		<li class="uikit-acc " data-tabid="pdpTabDesc" id="product-description-full">
			<a class="uikit-acc-header" data-title="Description">
				<span>Description</span>
			</a>
			<!-- TAB DESC CONTENT -->
			
			<div id="pdpTabDesc" aria-labelledby="pdpTabDesc" class="uikit-acc-panel standard-description" role="tabpanel" aria-expanded="true" aria-hidden="false">
				<div class="uikit-tab-panel-container">
					
						<div class="uikit-row">
							<div class="uikit-col">
								

<p class="paragraph" style="margin:0in; margin-bottom:.0001pt; margin-right:0in; margin-left:0in"><span style="font-size:11pt"><span style="vertical-align:baseline"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">
	
<?php $product_id = $_GET['id'];  ?>

<?php
$params = array(
 'p' => $product_id,
 'post_type' => 'product'
);
$wc_query = new WP_Query($params); 
?>
<?php if ($wc_query->have_posts()) :  ?>
<?php while ($wc_query->have_posts()) : $wc_query->the_post();  ?>

    <?php $product_id = $_GET['id'];
    $product_instance = wc_get_product($product_id); ?>
    <?php $product_full_description = $product_instance->get_description();?>
				
			<?php echo $product_full_description ; ?>
			<?php endwhile; ?>
			<?php endif; ?>	


</span>&nbsp;</span></span></span></p>

<p class="paragraph" style="margin:0in; margin-bottom:.0001pt; margin-right:0in; margin-left:0in">&nbsp;</p>




							</div>
						</div>
					
				</div>
			</div>
		</li>
	

	<!-- TAB SPECS -->
	
	 <li class="uikit-acc active" data-tabid="pdpTabSpecs">
		<a class="uikit-acc-header" data-title="Specifications">
			<span>Specifications</span>
		</a>
		<!-- TAB SPECS CONTENT -->
		<div id="pdpTabSpecs" aria-labelledby="pdpTabSpecs" class="uikit-acc-panel" role="tabpanel" aria-expanded="true" aria-hidden="false">
			<div class="uikit-tab-panel-container">
				<div class="uikit-row">
				<div class="uikit-col">
					
					
				 	
				 		<?php
$meta = get_post_meta($product_id);

				 		 $product_id = $_GET['id']; ?>

<?php  $loft = get_post_meta($product_id, 'Choose_rh loft', true ); 

//echo "<pre>"; print_r($meta);

?>
				 		
						
							<h3 class="js-spec-headline">Club Specifications</h3>
					 		<div class="responsive-table-container">
								<div class="responsive-table-content">
									<div class="border-right">




		<table>
	<thead>
		<tr class="no-color">
			<th>HEAD</th>
			<th>LOFT</th>
			<th>HAND</th>
			<th>LIE</th>
			<th>VOLUME</th>
			<th>LENGTH</th>
			<th>SWING WEIGHT</th>
			
		</tr>
	</thead>
	<tbody>

 
 <?php foreach($loft as $lo){ ?>

		<tr>
			<td><?php echo get_post_meta($product_id, 'head', true );?></td>
			<td><?php echo $lo; ?></td>
			<td><?php $r = get_post_meta($product_id, 'choose_hands', true );?>
				
				 <?php if(isset($r[0])) { echo $r[0]; } ?> /
				 <?php if(isset($r[1])) { echo $r[1]; } ?>


			</td>
			<td><?php echo get_post_meta($product_id, 'lie', true );?></td>
			<td><?php echo get_post_meta($product_id, 'volume', true );?></td>
			<td><?php echo get_post_meta($product_id, 'length', true );?></td>
			<td><?php echo get_post_meta($product_id, 'swing_weight', true );?></td>
			
		</tr>
	<?php }	 ?>
	</tbody>
</table>
				 					</div>
			 					</div>





	<h3 class="js-spec-headline">STOCK SHAFTS</h3>
					 		<div class="responsive-table-container">
								<div class="responsive-table-content">
									<div class="border-right">


<img src="<?php echo get_template_directory_uri();?>/assets/img/TenseiOG60.jpg)" style="width: 100%;">

		<table>
	<thead>
		<tr class="no-color">
			<th>FLEX</th>
			<th>WEIGHT</th>
			<th>TORQUE</th>
<?php if(get_post_meta($product_id, 'tip_size', true )=='') { ?>
			
		<?php } else { ?>
    <th>TIP SIZE</th>
		<?php } ?>
			<th>LAUNCH</th>
			<th>SPIN</th>
		</tr>
	</thead>
	<tbody>

 <?php  $choose_flex1 = get_post_meta($product_id, 'Flex', true ); 

//echo "<pre>"; print_r($meta);

?>
 <?php foreach($choose_flex1 as $fl){ ?>

		<tr>
		<td><?php echo $fl;?></td>
		<td><?php echo get_post_meta($product_id, 'weight', true );?></td>
			
		<td><?php echo get_post_meta($product_id, 'torque', true );?></td>
<?php if (get_post_meta($product_id, 'tip_size', true )=='') { ?>
		
	<?php } else { ?>
<td><?php echo get_post_meta($product_id, 'tip_size', true );?></td>
	<?php } ?>
		<td><?php echo get_post_meta($product_id, 'launch', true );?></td>
		
		<td><?php echo get_post_meta($product_id, 'spin', true );?></td>
			
		</tr>
	<?php }	 ?>
	</tbody>
</table>
				 					</div>
			 					</div>



<h3 class="js-spec-headline">STOCK GRIP</h3>
					 		<div class="responsive-table-container">
								<div class="responsive-table-content">
									<div class="border-right">

<img src="<?php echo get_template_directory_uri();?>/assets/img/DecadeGryOr.jpg)" style="width: 100%;">


		<table>
	<thead>
		<tr class="no-color">
			<th>MODEL</th>
			<th>COLOR</th>
			<th>SIZE</th>
			<th>WEIGHT</th>
			<th>TYPE</th>
			<th>BUTT SIZE</th>
			<th>FEEL</th>
		</tr>
	</thead>
	<tbody>

 

		<tr>
		
		<td><?php echo get_post_meta($product_id, 'model', true );?></td>
			
		<td><?php echo get_post_meta($product_id, 'color', true );?></td>
		<td><?php echo get_post_meta($product_id, 'size', true );?></td>
		<td><?php echo get_post_meta($product_id, 'stock_grip_weight', true );?></td>
		
		<td><?php echo get_post_meta($product_id, 'type', true );?></td>
		<td><?php echo get_post_meta($product_id, 'butt_size', true );?></td>
		<td><?php echo get_post_meta($product_id, 'feel', true );?></td>
			
		</tr>
	
	</tbody>
</table>
				 					</div>
			 					</div>





			 				</div>	
					 					 
					 	
					 	
						
					 		
							
						 	
						 	
						 	
						 		
					 	 
					 	
					 		
					 		
					 		
					 	
					 	
					 	
				 						
				</div>
				</div>
			</div>
		</div>
	</li> 
	
	
	
	
	
	
	
	<!-- TAB OVERVIEW -->
	

	
	<!-- TAB SIZES -->
	
		
</ul>

	
	
	




</div>


<script type="text/javascript">
	

$(document).ready(function () {
    var ckbox = $('#checkbox');

    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
        	$('#discount_price').css("display","block");
        	$('#nodiscount_price').css("display","none");

        	var product_id = <?php echo $_GET['id'] ?>;
        	var user_id = '<?php echo get_current_user_id()?>';

        	jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{product_id:product_id,user_id:user_id,action:'product_user_discount' },
    async:'true',
    datatype:'json',
    success:function(resp) {
     //alert(resp);
   },         
  });
            
        } else {

        	var product_id = <?php echo $_GET['id'] ?>;
        	var user_id = '<?php echo get_current_user_id()?>';
        	$('#discount_price').css("display","none");
        	$('#nodiscount_price').css("display","block");

        	jQuery.ajax({
			    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
			    type:"POST",
			    data:{product_id:product_id,user_id:user_id,action:'product_user_discount_delete' },
			    async:'true',
			    datatype:'json',
			    success:function(resp) {
			     //alert(resp);
			   },         
			  });
            
        }
    });
});

</script>



<script type="text/javascript">
	
  $(".more").on('click',function(e){

    e.preventDefault();
var product_type_name = $("input[name='radio']:checked").val();
var product_type_name1 = $("input[name='radio1']:checked").val();

         var product_type = 'flex';
         var product_type1 = 'loft';
         var product_id = <?php echo $_GET['id'] ?>;
         var product_name = '<?php echo get_the_title($product_id)?>';
         var user_id = '<?php echo get_current_user_id()?>';

         jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{ product_type_name:product_type_name,product_type_name1:product_type_name1,product_type:product_type,product_type1:product_type1,product_id:product_id,product_name:product_name,user_id:user_id,action:'product_addon' },
    async:'true',
    datatype:'json',
    success:function(resp) {
     
    alert(resp);

   var pageNum = $(".more").attr("href");
     window.location.href = pageNum;

  
                 
    
     },         
  });


  });


</script>


<script type="text/javascript">
	
  $(".more1").on('click',function(e){

    e.preventDefault();
var product_type_name2 = "none"
var product_type_name3 ="none"

         var product_type2 = 'jeetu1';
         var product_type3 = 'jeetu2';
         var product_id = <?php echo $_GET['id'] ?>;
         var product_name = '<?php echo get_the_title($product_id)?>';
         var user_id = '<?php echo get_current_user_id()?>';

         jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{ product_type_name2:product_type_name2,product_type_name3:product_type_name3,product_type2:product_type2,product_type3:product_type3,product_id:product_id,product_name:product_name,user_id:user_id,action:'product_addon1' },
    async:'true',
    datatype:'json',
    success:function(resp) {
     
    alert(resp);

   var pageNum = $(".more1").attr("href");
     window.location.href = pageNum;

  
                 
    
     },         
  });


  });


</script>











<script>
/*
null
 */
(function(w) {
w.TM_PRODUCT_TRACK = {
  'id': 'DW-JJA27',
  'sku': 'M7152701',   
  'name': 'TP5 Golf Balls',
  'originalPrice': 0.0,
  'price': 0.0,
  'brand': ('TaylorMade').toLowerCase(),
  'category': 'GOLF BALLS'
  ,'variant': 'M7152701'
}})(window);
dataLayer.push({
  'event' : 'ecommerce.detail',
  'ecommerce.detail' : {
    'v':5,
    'actionField.list': 'Product Page',
    'products' : [
		{
		  'v': 3,
		  'id': TM_PRODUCT_TRACK.id,
		  'sku': TM_PRODUCT_TRACK.sku,
		  'name': TM_PRODUCT_TRACK.name,
		  'originalPrice': TM_PRODUCT_TRACK.originalPrice,
		  'price': TM_PRODUCT_TRACK.price,
		  'brand': TM_PRODUCT_TRACK.brand,
		  'category': TM_PRODUCT_TRACK.category
		  ,'variant': TM_PRODUCT_TRACK.variant
		}
    	]
}});
</script>
</div><!--/pdpMain -->


	 

	


</div><!-- /primary-content -->
</div> <!-- /main -->


<div id="newslettersubscription"></div>












<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/ui/jquery-ui.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/magnificpopup/jquery.magnific-popup.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery-ui-switch-button.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/jquery.zoom.min.js" ></script>
<script type="text/javascript">


(function(){
window.Constants = {"AVAIL_STATUS_IN_STOCK":"IN_STOCK","AVAIL_STATUS_PREORDER":"PREORDER","AVAIL_STATUS_BACKORDER":"BACKORDER","AVAIL_STATUS_NOT_AVAILABLE":"NOT_AVAILABLE"};
window.Resources = {"I_AGREE":"I Agree","CLOSE":"Close","NO_THANKS":"No Thanks","OK":"OK","ARE_YOU_HUMAN":"Are you a Human Being?","SHIP_QualifiesFor":"This shipment qualifies for","CC_LOAD_ERROR":"Couldn't load credit card!","COULD_NOT_SAVE_ADDRESS":"Could not save address. Please check your entries and try again.","REG_ADDR_ERROR":"Couldn't Load Address","BONUS_PRODUCT":"Bonus Product","BONUS_PRODUCTS":"Bonus Product(s)","SELECT_BONUS_PRODUCTS":"Select {0} Bonus Product(s)","SELECT_BONUS_PRODUCT":"Select","BONUS_PRODUCT_MAX":"The maximum number of bonus products have been selected.  Please remove one in order to add additional bonus products.","BONUS_PRODUCT_TOOMANY":"You have selected too many bonus products. Please change the quantity.","SIMPLE_SEARCH":"Search...","SUBSCRIBE_EMAIL_DEFAULT":"Email Address","CURRENCY_SYMBOL":"€","MISSINGVAL":"Please Enter {0}","SERVER_ERROR":"Server connection failed!","MISSING_LIB":"jQuery is undefined.","BAD_RESPONSE":"Bad response, Parser error","INVALID_PHONE":"Please specify a valid phone number.","REMOVE":"Remove","QTY":"Qty","EMPTY_IMG_ALT":"Remove","COMPARE_BUTTON_LABEL":"Compare Items","COMPARE_CONFIRMATION":"This will remove the first product added to compare.  Is that OK?","COMPARE_REMOVE_FAIL":"Unable to remove item from list","COMPARE_ADD_FAIL":"Unable to add item to list","ADD_TO_CART_FAIL":"Unable to add item '{0}' to cart ","REGISTRY_SEARCH_ADVANCED_CLOSE":"Close Advanced Search","GIFT_CERT_INVALID":"Invalid TaylorMade Golf Certificate Code","GIFT_CERT_BALANCE":"Your current TaylorMade Golf certificate balance is","GIFT_CERT_AMOUNT_INVALID":"Gift Certificate can only be purchased with a minimum of $5 and maximum of $5000","GIFT_CERT_MISSING":"Please enter a TaylorMade Golf certificate code.","INVALID_OWNER":"This appears to be a credit card number. Please enter the name of the card holder.","COUPON_CODE_MISSING":"Please Enter a Coupon Code","COUPON_CODE_APPLIED":"Promo Code applied to your order.","COOKIES_DISABLED":"Your browser is currently not set to accept cookies. Please turn this functionality on or check if you have another program set to block cookies.","BML_AGREE_TO_TERMS":"You must agree to the terms and conditions","CHAR_LIMIT_MSG":"You have {0} characters left out of {1}","CONFIRM_DELETE":"Do you want to remove this {0}?","TITLE_GIFTREGISTRY":"gift registry","TITLE_ADDRESS":"address","TITLE_CREDITCARD":"credit card","SERVER_CONNECTION_ERROR":"Server connection failed!","IN_STOCK_DATE":"The expected in-stock date is {0}.","ITEM_STATUS_NOTAVAILABLE":"This item is currently not available.","LOW_STOCK":"Low Stock","INIFINITESCROLL":"Show All","STORE_NEAR_YOU":"What's available at a store near you","SELECT_STORE":"Select Store","SELECTED_STORE":"Selected Store","PREFERRED_STORE":"Preferred Store","SET_PREFERRED_STORE":"Set Preferred Store","ENTER_ZIP":"Enter ZIP Code","INVALID_ZIP":"Please enter a valid ZIP Code","SEARCH":"Search","CHANGE_LOCATION":"Change Location","CONTINUE_WITH_STORE":"Continue with preferred store","CONTINUE":"Continue","SEE_MORE":"See More Stores","SEE_LESS":"See Fewer Stores","QUICK_VIEW":"Quick view","QUICK_VIEW_POPUP":"Product Quick View","TLS_WARNING":"We value your security!<br/>We detected that you are using an outdated browser.<br/>Update you browser to continue a secure shopping experience.","VALIDATE_REQUIRED":"This field is required.","VALIDATE_REMOTE":"Please fix this field.","VALIDATE_EMAIL":"Please enter a valid email address.","VALIDATE_URL":"Please enter a valid URL.","VALIDATE_DATE":"Please enter a valid date.","VALIDATE_DATEISO":"Please enter a valid date ( ISO ).","VALIDATE_NUMBER":"Please enter a valid number.","VALIDATE_DIGITS":"Please enter only digits.","VALIDATE_CREDITCARD":"Please enter a valid credit card number.","VALIDATE_EQUALTO":"Please enter the same value again.","VALIDATE_MAXLENGTH":"Please enter no more than {0} characters.","VALIDATE_MINLENGTH":"Please enter at least {0} characters.","VALIDATE_RANGELENGTH":"Please enter a value between {0} and {1} characters long.","VALIDATE_RANGE":"Please enter a value between {0} and {1}.","VALIDATE_MAX":"Please enter a value less than or equal to {0}.","VALIDATE_MIN":"Please enter a value greater than or equal to {0}.","VALIDATE_MINDATE":"Please enter a date greater than {0}","VALIDATE_MAXDATE":"Please enter a date less than {0}","INVALID_POSTAL":"validate.postal","BUTTON_BACK_LABEL":"Back","CUSTOMCONFIGURATOR_ERROR":"customconfig.serviceerror","GENERAL_CUSTOMIZER_ERROR":"customizer.generalerror","SESSION_CUSTOMIZER_ERROR":"customizer.sessionerror","ZEROPRICE_CUSTOMIZER_ERROR":"customizer.zeroprice","CUSTOMIZER_RECONFIG_CONFIRM":"storefront.reconfigureconfirm","CUSTOMIZER_LEAVE_PAGE":"storefront.leavepage","customizer_clear_shaft":"customizer.clearshaft","customizer_clear_grip":"customizer.cleargrip","customizer_clear":"customizer.clear","customizer_select":"customizer.select","TM_DRIVER_MODEL":"customizer.ato.TM_DRIVER_MODEL","TM_FAIRWAY_MODEL":"customizer.ato.TM_FAIRWAY_MODEL","TM_RESCUE_MODEL":"customizer.ato.TM_RESCUE_MODEL","TM_GAPR_MODEL":"customizer.ato.TM_GAPR_MODEL","TM_COMBO_MODEL":"customizer.ato.TM_COMBO_MODEL","TM_IRONS_MODEL":"customizer.ato.TM_IRONS_MODEL","TM_WEDGES_MODEL":"customizer.ato.TM_WEDGES_MODEL","TM_PUTTER_MODEL":"customizer.ato.TM_PUTTER_MODEL","LOADING_MORE":"LOADING...","GC_AMOUNT_INVALID":"Custom Amounts must be between $25-$2,500.","GC_BILLING_INVALID":"Invalid Gift Card Code","BAG_PRODUCT_UPDATED":"Your item was successfully added","BAG_PRODUCT_REMOVED":"Your item was successfully removed","BAG_PRODUCT_ERROR":"An error has occurred, please try again.","INVALID_VALUE":"Please enter a valid value","INVALID_PASSWORD":"8 - 20 characters, at least 1 letter and number","CS_NOT_FOUND":"no results found","DOWNLOAD_BUTTON":"Download","LOGIN_MSG":"You are now logged in","AMAZON_LOGIN_ERROR":"Please log in with your current account    ","GOLFPASS_LOGIN":"account.subheading","IN_STOCK":"In Stock","QTY_IN_STOCK":"{0} Item(s) In Stock","PREORDER":"Pre-Order","QTY_PREORDER":"{0} item(s) are available for pre-order.","REMAIN_PREORDER":"The remaining items are available for pre-order.","BACKORDER":"Back Order","QTY_BACKORDER":"Back Order {0} item(s)","REMAIN_BACKORDER":"The remaining items are available on back order.","NOT_AVAILABLE":"This item is currently not available.","REMAIN_NOT_AVAILABLE":"The quantity you chose is not available, please adjust."};
window.Urls = {"appResources":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Resources-Load","pageInclude":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Page-Include","continueUrl":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-Show/C2027381039","staticPath":"/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/","addGiftCert":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GiftCert-Purchase","minicartGC":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GiftCert-ShowMiniCart","addProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-AddProduct","minicart":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-MiniAddProduct","minicartShow":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-MiniCart","cartShow":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-Show","giftRegAdd":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Address-GetAddressDetails?addressID=","paymentsList":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/PaymentInstruments-List","addressesList":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Address-List","wishlistAddress":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Wishlist-SetShippingAddress","deleteAddress":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Address-Delete","getProductUrl":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-Show","getBonusProducts":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-GetBonusProducts","addBonusProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-AddBonusProduct","getSetItem":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-GetSetItem","productDetail":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-Detail","getAvailability":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-GetAvailability","removeImg":"/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/icon_remove.gif","searchsuggest":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Search-GetSuggestions","productNav":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Product-Productnav","summaryRefreshURL":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-UpdateSummary","billingSelectCC":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-SelectCreditCard","updateAddressDetails":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShipping-UpdateAddressDetails","updateAddressDetailsBilling":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-UpdateAddressDetails","shippingMethodsJSON":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShipping-GetApplicableShippingMethodsJSON","shippingMethodsList":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShipping-UpdateShippingMethodList","selectShippingMethodsList":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShipping-SelectShippingMethod","resetPaymentForms":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-ResetPaymentForms","compareShow":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Compare-Show","writeReview":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/PowerReviews-WriteReview","getReviews":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/PowerReviews-GetReviews","compareAdd":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Compare-AddProduct","compareRemove":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Compare-RemoveProduct","compareEmptyImage":"/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/comparewidgetempty.png","giftCardCheckBalance":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-GetGiftCertificateBalance","redeemGiftCert":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-RedeemGiftCertificateJson","addCoupon":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-AddCouponJson","storesInventory":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-Inventory","setPreferredStore":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-SetPreferredStore","getPreferredStore":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-GetPreferredStore","setStorePickup":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-SetStore","setZipCode":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-SetZipCode","getZipCode":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/StoreInventory-GetZipCode","billing":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-Start","setSessionCurrency":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Currency-SetSessionCurrency","addEditAddress":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShippingMultiple-AddEditAddressJSON","cookieHint":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Page-Show?cid=cookie_hint","rateLimiterReset":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/RateLimiter-HideCaptcha","csrffailed":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CSRF-Failed","sendFormToResponsys":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomerService-SendFormToResponsys","configureOption":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-Configure","closeConfiguration":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-Close","saveConfiguration":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-AddProduct","previewConfiguration":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-Preview","getPartSpecs":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-GetPartSpecs","fluidAddProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/FluidProduct-AddProduct","applyGiftCard":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GiftCards-ApplyGiftCard","removeAppliedGiftCard":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GiftCards-RemoveAppliedGiftCard","paymentMethodsUpdate":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COBilling-RefreshPaymentMethods","signupOverlayContent":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomerService-SignUpOverlayContent?format=ajax","submitEmail":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomerService-SubmitEmail?format=ajax","bagList":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-List","customerProducts":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-CustomerProducts","bagTradeInControls":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-TradeInControls","bagAddToBag":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-AddToBag","bagGetCDMBrands":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-GetCDMBrands","bagGetCDMModels":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-GetCDMModels","bagAddCDMIDsToProductJSON":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-AddCDMIDsToProductJSON","bagAddProductToCDM":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Bag-AddProductToCDM","autocompleteAddress":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COShipping-AutocompleteAddress","tradeInPDPPopup":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/TradeIn-TradeInDlg?format=ajax","getTradeInModels":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/TradeIn-GetModelList","getTradeInItemData":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/TradeIn-GetReviewItemDetails","tradeInSummaryRefresh":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/TradeIn-Summary","favoriteAddProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Favorite-AddProduct","favoriteRemoveProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Favorite-RemoveProduct","welcomeback":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-WelcomeBack","calculateTaxesAjax":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-CalculateTaxesAjax","updatePersonalization":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Cart-UpdatePersonalization","uploadWarrantyPhotos":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Warranty-UploadPicture","cdmUpdateCustomer":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CDM-UpdateCustomer","cdmUpdateAddress":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CDM-UpdateAddress","getOrderReferenceDetails":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-GetOrderReferenceDetails","getBillingAgreementDetails":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-GetBillingAgreementDetails","getOrderReferenceBillingDetails":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-GetOrderReferenceBillingDetails","getBillingAgreementBillingDetails":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-GetBillingAgreementBillingDetails","setOrderReferenceID":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-SetOrderReferenceID","setConsentStatus":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-SetConsentStatus","editButtonRedirect":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/AmazonPayments-EditButtonRedirect","getCashOnDeliveryFeeJSON":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CashOnDelivery-GetCashOnDeliveryJSON","deleteCashOnDeliveryFeeJSON":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CashOnDelivery-DeleteCashOnDeliveryJSON","acSyncCustomerProfile":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Annex-CustomerProfileJSON","acGiveCustomerPoints":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Annex-CustomerPointsJSON","acGetProductPoints":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Annex-ProductPointsJSON","acCompleteOrderPoints":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/Annex-CompleteOrderJSON","sendOrderConfirmationEmail":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/COPlaceOrder-SendOrderConfirmationEmailJSON","addEccubeCustomProduct":"/on/demandware.store/Sites-TMaG-EU-Site/en_DE/CustomizerUI-AddEccubeProduct","golfPassCallback":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GOLFPASS-Callback","golfPassConnected":"https://www.taylormadegolf.eu/on/demandware.store/Sites-TMaG-EU-Site/en_DE/GOLFPASS-Connected"};
window.SitePreferences = {"LISTING_INFINITE_SCROLL":false,"LISTING_REFINE_SORT":true,"STORE_PICKUP":null,"COOKIE_HINT":false,"CHECK_TLS":null,"GC_MAX_PRICE":"2500","GC_MIN_PRICE":"25","SHIPPING_ADDRESS_AUTOCOMPLETE_ENABLED":false,"BILLING_ADDRESS_AUTOCOMPLETE_ENABLED":false,"PDP_FIRSTTAB":null,"ZMAGS_CREATOR_ENABLED":false,"PERSONALIZATION_ENABLED":false,"PERSONALIZATION_VERSION":"","PERSONALIZATION_URL":"","AMAZON_MERCHANT_ID":null,"AMAZON_LOGIN_BUTTON_TYPE":"LwA","AMAZON_LOGIN_BUTTON_COLOR":"Gold","AMAZON_LOGIN_BUTTON_SIZE":"small","AMAZON_LOGIN_REDIRECT_URL":null,"AMAZON_PAY_REDIRECT_URL":null,"AMAZON_SCOPE":"profile postal_code payments:widget payments:shipping_address","AMAZON_PAY_BUTTON_TYPE":"PwA","AMAZON_PAY_BUTTON_COLOR":"Gold","AMAZON_PAY_BUTTON_SIZE":"small","GMO_ENABLED":false,"GOLFPASS_OAUTH_URL":""};
}());
</script>
<script type="text/javascript">

(function(){
window.SessionAttributes = {"SHOW_CAPTCHA":null,"SHOW_SIGNUP_OVERLAY":false,"SIGNUP_OVERLAY_COOKIE_NAME":null,"PAGES_WITHOUT_SIGNUP_POPUP":null,"COOKIE_WARNING_COOKIE_NAME":"taylormade_cookie_status_v2","SHOW_ABANDONEDCART_OVERLAY":false,"BRAND":"taylormade","GOLFPASS_STATE":""};
window.User = {"zip":null,"storeId":null};
window.AmazonOrder = {"orderReferenceID":null};
}());
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/js/app.js"></script>

<script>
// OVERRIDE: remove newlines in meta
var meta = "&lt;p&gt;Packed with new technologies, TP5/TP5x just got even faster with a greater rebound effect and optimized spin rates.&lt;/p&gt;";
var keywords = "TP5 Golf Balls";
</script>


<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/pdp-video/plyr.min.js"></script>











	

	


<script language="javascript" type="text/javascript">
if (allowedToTrack()) {
	// initialize s_code
	var s=s_gi(s_account);
	
    /* categorization-related variables */   
	s.pageName = "taylormade: product details: TP5 Golf Balls";
	s.channel="taylormade";
	s.prop1 = "product details";
	s.prop2 = "taylormade: product details";
	s.prop3 = "taylormade: product details: TP5 Golf Balls";

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





</div> <!-- /pt_product-details -->





<script>
jQuery(function() {
var buildLdJson = function(){
var el = document.createElement('script');
var imageSrc = jQuery('#pdpMain').find('.primary-image').attr('src');
var jsonld = {
"@context": "http://schema.org",
"@type": "Product",
"name": "TP5 Golf Balls",
"image": "http://" + window.location.hostname + imageSrc,
"description": ("&lt;p&gt;Packed with new technologies, TP5/TP5x just got even faster with a greater rebound effect and optimized spin rates.&lt;/p&gt;").replace(/(&.*?&gt;)/g, " "),
"brand": {
"@type": "Thing",
"name": "TaylorMade"
}
}
if (0 != 0) {
jsonld["aggregateRating"] = {
"@type": "AggregateRating",
"ratingValue": "0.0",
"ratingCount": "0",
"bestRating": "5",
"worstRating": "1"
}
}
el.type = 'application/ld+json';
el.text = JSON.stringify(jsonld);
document.querySelector('body').appendChild(el);
};
buildLdJson();
});
</script>







<!-- Start: certona/product_include -->
<!-- Copyright 2013 Certona Corporation www.certona.com. All rights reserved. -->




<!-- Start: certona/resonance_include -->
<!-- Copyright 2013 Certona Corporation www.certona.com. All rights reserved. -->

<script type="text/javascript">
if(resx===undefined) {
var resx = new Object();
}
resx.appid = 'null';
resx.top1 = 100000;
resx.top2 = 100000;


</script>
<!-- Resonance -->

<!-- End: certona/resonance_include -->

<script type="text/javascript">
if(resx===undefined) {
var resx = new Object();
}
resx.links = jQuery('.certona_product_ids').text().substring(1);
resx.event="product";
resx.itemid = "DW-JJA27";
</script>



<script type="text/javascript">
	
	

		jQuery("input[name='radio']").click(function(){
					
	var second = jQuery("input[name='radio1']:checked").val();

	

	if(typeof second === "undefined"){

		
      
                $('#de').css('display', 'none');
				$('#pe').css('display', 'block');

	}else{

                 

		        $('#de').css('display', 'block');
				$('#pe').css('display', 'none');
	}

			
				
			

		});

	


</script>




<script type="text/javascript">
	
	

		jQuery("input[name='radio1']").click(function(){
					
	var second1 = jQuery("input[name='radio']:checked").val();

	

	if(typeof second1 === "undefined"){

		
      
                $('#de').css('display', 'none');
				$('#pe').css('display', 'block');

	}else{

                 

		        $('#de').css('display', 'block');
				$('#pe').css('display', 'none');
	}

			
				
			

		});

	


</script>


<script type="text/javascript">
	jQuery('#pe').click(function(){
					alert('*Please select at least one Flex and Loft!');
				});

</script>



<!-- End: certona/product_include -->




<script language="javascript" type="text/javascript">
// PDP. Send data about product ID and events - productView
s.products=";DW-JJA27";
s.events="prodView,event3";

s.prop8 = "Overview";

</script>


	
	<script>window.dataLayer=window.dataLayer||[];</script>
	

		<script type="text/javascript">
		/*google tag manager data layer*/

			//Older DataLayer Element
			dataLayer.push({
				"ecommerce": {
					"detail": {
						"products": [{"name":"TP5 Golf Balls","id":"DW-JJA27"}]
					}
				}
			});
			
			dataLayer.push({
				'event': 'ProductPage',
				'productid':  'DW-JJA27'
			});
		
		</script>
	
	
		
				
				<script language="javascript" type="text/javascript">
					jQuery(document).ready(function () {
						app.tagmanager.pushDRTags('product', 'DW-JJA27', 'null');
					});
				</script>
			 

	 
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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/internal/jscript/dwanalytics-18.3.js" async="async" onload="trackPage()"></script>
<!-- Demandware Active Data (body_end-active_data.js) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/internal/jscript/dwac-18.10.4.js" type="text/javascript" async="async"></script><!-- CQuotient Activity Tracking (body_end-cquotient.js) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/cdn.cquotient.com/js/v2/gretel.min.js" type="text/javascript" async="async"></script>
</body>


</html>

<!-- <?php // get_footer(); ?> -->


