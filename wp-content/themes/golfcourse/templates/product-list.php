<?php
/*
 * Template Name: Product list
*/
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">

 body{
  margin:0px;
  padding: 0px;
 }

 

 

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 88%;
      


}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

 


</style>
 
<?php get_header(); ?>


 
   
 
 

<script type="text/javascript">
  
 jQuery(document).ready(function(){
    jQuery('.customer-logos').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});


</script>


<!doctype html>


<style type="text/css">






   #wrapper {
    margin-top: 0px !important;
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






<title>Golfcente</title>




<link href="https://www.taylormadegolf.eu/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/76x76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/120x120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/images/taylormade/152x152.png" />




<script>pageContext = {"title":"Catgory Search Results","type":"category-search","ns":"category-search"};</script>







<link href="<?php echo get_template_directory_uri();?>/assets/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/jquery/ui/jquery-ui.min.css" type="text/css" rel="stylesheet" />
<!-- <link href="<?php// echo get_template_directory_uri();?>/assets/maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->


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

<div class="row">
  <div class="col-md-12">

  
   <section class="customer-logos slider" style="margin-top: -20px; margin-bottom:0px;">

           <div class="slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slider_5_new.png); background-repeat: no-repeat; background-size: contain; background-position: center;"> 
          <a href="https://golfcenter.at/subcategory-product/?category=23&subcategory=41" class="btn btn-primary" id="button1" style="margin-top:163px; margin-left:118px; background-color: white; color: black; border:none; height:30px; " >View P•7TW</a> 
          <a href="https://golfcenter.at/category-product/?category=23" class="btn btn-primary" id="button2" style="margin-top:190px; margin-right:174px; float: right; background-color: white; color: black; border:none;     border: 2px solid black; height:40px; width: 120px; padding: 10px; " >Learn More</a>     
           </div>

          

           <div class="slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slider_6_new.png); background-repeat: no-repeat; background-size: contain;background-position: center;">
            <div class="row">
            <a href="https://golfcenter.at/subcategory-product/?category=44&subcategory=51" class="btn btn-primary" id="button1" style="margin-top:280px; margin-left:390px; height:30px; " >Putter</a> </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4 hover_1"  style=" height: 100%; margin-top: 25px; background-color: rgba(0,0,0,.4)"  >
                  <a href="https://golfcenter.at/subcategory-product/?category=44&subcategory=50"  id="button1" style="margin-top:18%; left:20%; background-color: rgba(0,0,0,.8);position: absolute; padding: 10px; font-size: 20px; text-align: center;text-decoration: none;color: white"  ><i><b>MILLED GRIND WEDGES</b></i> <br/> The new marks of precision</a>
                </div>

                <div class="col-md-4 hover_1" style=" height: 100%; margin-top: 25px ;background-color: rgba(0,0,0,.4);"  >
                  <a href="https://golfcenter.at/category-product/?category=23"  id="button1" style="margin-top:18%; left:20%; background-color: rgba(0,0,0,.8);position: absolute; padding: 10px; font-size: 20px; text-align: center;text-decoration: none;color: white"  ><i><b>P700 Series</b></i> <br/>Purist Performance</a>
                </div>

                <div class="col-md-4 hover_1" style=" height: 100%; margin-top: 25px; background-color: rgba(0,0,0,.4)"  >
                  <a href="https://golfcenter.at/subcategory-product/?category=17&subcategory=26"  id="button1" style="margin-top:18%; left:20%; background-color: rgba(0,0,0,.8);position: absolute; padding: 10px; font-size: 20px; text-align: center;text-decoration: none;color: white"  ><i><b>TP5 & TP5X GOLF BALLS</b></i> <br/>The Most Complete Tour Ball.</a>
                </div>

              </div>
            </div>
              
           </div>

       
     
      
   </section>
</div></div>

 


  <script type="text/javascript">
    if (allowedToTrack()) {
      var s_account="tm-taylormadegolfeuv2prod";
      var s_currencyCode = "EUR";
      document.write("<scr"+"ipt src='/on/demandware.static/Sites-TMaG-EU-Site/-/en_DE/v1557130537565/lib/omniture/s_code.js' type='text/javascript'></scr"+"ipt>");
    }
  </script>
  



<script type="text/javascript">
  
$(document).ready(function(){

  $(".hover_1").hover(function(){
    $(this).css('background', 'none');
  },

  function(){

    $(this).css('background', 'rgba(0,0,0,.5)');


  })


});

</script>
















































































<div class="header-bg"></div>


<div id="main" role="main" class="clearfix">







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
        <option>Select...</option>
        
          
          
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
              
            
          
          <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name ; ?></option>
        
          
          
        <?php } } ?>  
        
      </select>
    </div>
  </div>
  

  
  <!-- <div class="refinement category-refinement category-level-2">
    <h3 class="expanded"><span>GOLF BALLS</span>
      
    </h3>
    <ul class="selected-refinement">
      
        
        <li class="">
          
          
            
              
            
          
          
          
          
          <a class="refinement-link non-ajax not-selected" title="TP5/TP5X" href="https://www.taylormadegolf.eu/taylormade-balls-TP5-TP5X/?view=grid">TP5/TP5X</a>
        </li>
      
        
        <li class="">
          
          
            
              
            
          
          
          
          
          <a class="refinement-link non-ajax not-selected" title="Project (a)" href="https://www.taylormadegolf.eu/taylormade-balls-ProjectA/?view=grid">Project &#40;a&#41;</a>
        </li>
      
        
        <li class="">
          
          
            
              
            
          
          
          
          
          <a class="refinement-link non-ajax not-selected" title="Project (s)" href="https://www.taylormadegolf.eu/taylormade-balls-ProjectS/?view=grid">Project &#40;s&#41;</a>
        </li>
      
        
        <li class="">
          
          
            
              
            
          
          
          
          
          <a class="refinement-link non-ajax not-selected" title="Kalea" href="https://www.taylormadegolf.eu/taylormade-balls-kalea/?view=grid">Kalea</a>
        </li>
      
        
        <li class="">
          
          
            
              
            
          
          
          
          
          <a class="refinement-link non-ajax not-selected" title="RBZ" href="https://www.taylormadegolf.eu/taylormade-balls-rbz/?view=grid">RBZ</a>
        </li>
      
    </ul>
  </div> -->
  











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
        $args = array( 'post_type' => 'product', 'posts_per_page' => '100', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
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

