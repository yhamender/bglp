<?php
/*
 * Template Name: Golfcourse-Details
 * 
 */
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">

@media screen and (max-width: 768px) {
body{

    width: 100% !important;
    margin: 0px 0px 0px 10px !important;
 }

  .navbar-nav{
    display: none;
  }


  .btncourse:nth-child(1) {
    position: relative;
    left: -22px !important;
    top: -66px;
}

.btncourse:nth-child(3) {
    position: relative;
    left: -83px !important;
    top: -100px !important;
}

.navbar-toggle{
  float: left !important;
    padding: 9px 10px;
    margin-top: -41px !important;
}

.pull-right{
  margin-right: -35px!important;
}

.collapse{
  display: none!important;
}

  } 

  
 /* Slider */



.slick-slide {

  
    
}

.slick-slide img {
    
    height: 500px;
    width: 633px;
    padding:93px;
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
    /*height: 100%;*/
    min-height: 1px;

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

<style type="text/css">
  p{

    font-family:helvetica-w01-light,helvetica-w02-light,sans-serif !important;
  }
  .btn{
    background-color: rgba(153, 153, 151, 1) !important;
    border: solid rgba(43, 104, 156, 1) 0px !important;
    cursor: pointer !important;
    padding: 10px !important;
    
    color: #FFFFFF !important;
    margin-right: 50px !important;
    min-width: 300px !important;
    font-family: 'open sans condensed',sans-serif !important;

  }

  .btn-default{
    border-radius: 0px !important;

  }

#comp-je401d9q {
    position: relative;
    margin: 0px 0px 18px calc((100% - 980px) * 0.5);
    left: 0px;
    grid-area: 7 / 1 / 8 / 2;
    justify-self: start;
    align-self: start;
}
#comp-je401db2 {
    position: relative;
    margin: 1px 0px 16px calc((100% - 980px) * 0.5);
    left: 0px;
    grid-area: 7 / 1 / 8 / 2;
    justify-self: start;
    align-self: start;
}
.style-je401dbc {
    box-sizing: border-box;
    border-top: 6px solid rgba(0, 0, 0, 0.8);
    height: 0;
}

.style-je401d9zline {
    min-height: 2px;
    height: 1px;
    border-radius: 7px;
    background-color: rgba(0, 0, 0, 0.8);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), inset 0 1px 0 rgba(0, 0, 0, 0.25);
}

</style>

<?php get_header(); ?>



    
   <section class="customer-logos slider">

      <?php 
         if(!empty($_GET['golfcourseId'])){
         $golfcourseId=$_GET['golfcourseId'];
         $golfcourseImages=$dynamic_featured_image->get_featured_images($golfcourseId);
         for($i=0;$i<sizeof($golfcourseImages);++$i){
         ?>

           <div class="slide">
              <img src="<?php echo $golfcourseImages[$i]['full']; ?>">
           </div>
           

         
          <?php  
            }

            
           }
         ?>

     
      
   </section>
   


     
   
<div class="container">
  <div class="row">
    <?php 
	     if(!empty($_GET['golfcourseId'])){
		   $golfcourseId=$_GET['golfcourseId'];
	     $golfCoursePost=get_post($golfcourseId);
	  ?>
    <div class="col-md-12 spacer">
      <h3 style="font-size: 24px; margin-left: 50px; margin-top: 30px"><?php echo $golfCoursePost->post_title; ?>
   
    <?php $my_meta1 = get_post_meta($golfcourseId, 'logo_of_golf', true ); 
          $size = 'thumbnail';
   
    ?>

    <?php if( $my_meta1 ) { ?>
    <img src="<?php echo wp_get_attachment_image( $my_meta1, $size );?>

   <?php   }  ?>

        <div class="pull-right">
          <div style="width: 85%;height: 5px;visibility: inherit; margin-top: 0px; margin-left: 0px" class="style-je401d9z" id="comp-je401d9q"><div id="comp-je401d9qline" class="style-je401d9zline"></div></div>

      <div style="width: 35%; height: 6px; margin-left: 0px; margin-top: -22px; visibility: inherit;" class="style-je401dbc" id="comp-je401db2"></div>
      <?php $my_meta = get_post_meta($golfcourseId, 'golf_website_url', true ); ?>

         <a href="<?php echo $my_meta; ?>" class="btn btn-default">Website des Golfplatzes </a> <span style="display:block; position:relative; top:-12px">

          <a href="<?php echo site_url('book-a-tee-time');?>" class="btn btn-default">Jetzt Golfrunde buchen</a></span></div>
      </h3>
      <h5 style="font-size: 24px; margin-left: 50px; font-weight: bold; margin-top: 30px"><strong><?php echo $golfCoursePost->location; ?></strong></h5>

      <div style="width: 55%;height: 5px;visibility: inherit; margin-top: 50px; margin-left: 50px" class="style-je401d9z" id="comp-je401d9q"><div id="comp-je401d9qline" class="style-je401d9zline"></div></div>

      <div style="width: 10%; height: 6px; margin-left: 50px; margin-top: -22px; visibility: inherit;" class="style-je401dbc" id="comp-je401db2"></div>
    
      <p class="col-md-12" style="padding: 0px 50px 0px 50px;font-size:17px; font:normal normal normal 16px/1.4em proxima-n-w01-reg,sans-serif; color:#414141; line-height:1.9em; text-align:justify;"><?php echo $golfCoursePost->post_content; ?></p>
    </div>

    </div>
</div>
    
       <div class="container" style="background-color: #fafafa;>
        <div class="row" style="background-color: #fafafa;">
          
      <div class="col-md-4">
      <h5 class="bars"><strong>Course Information</strong> </h5>
      <div style="width: 85%;height: 5px;visibility: inherit; margin-top: 0px; margin-left: 0px" class="style-je401d9z" id="comp-je401d9q"><div id="comp-je401d9qline" class="style-je401d9zline"></div></div>

      <div style="width: 35%; height: 6px; margin-left: 0px; margin-top: -22px; visibility: inherit;" class="style-je401dbc" id="comp-je401db2"></div>
    </div>
    <div class="col-md-8">
      <h5 class="bars"><strong>Facilities</strong> </h5>
      <div style="width: 85%;height: 5px;visibility: inherit; margin-top: 0px; margin-left: 0px" class="style-je401d9z" id="comp-je401d9q"><div id="comp-je401d9qline" class="style-je401d9zline"></div></div>

      <div style="width: 35%; height: 6px; margin-left: 0px; margin-top: -22px; visibility: inherit;" class="style-je401dbc" id="comp-je401db2"></div>
    </div>


    <div class="col-md-4">
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/holes.webp" /></strong> <span class="sectiondetials"><?php echo $golfCoursePost->golf_course_hole." Holes"; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/par.webp" /></strong> <span class="sectiondetials">Par: <?php echo $golfCoursePost->golf_course_par; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/length.webp" /></strong> <span class="sectiondetials">Length: <?php echo $golfCoursePost->golf_course_length." Meters"; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/designer.webp" /></strong> <span class="sectiondetials">Designer: <?php echo $golfCoursePost->golf_course_designer; ?></span></p>
    </div>
    <div class="col-md-4">
      <?php if($golfCoursePost->golf_academy==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/golfacademy.webp" /></strong> <span class="sectiondetials">Golf Academy</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_rental==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clubrental.webp" /></strong> <span class="sectiondetials"> Club Rental</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_driving_range==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/drivingrange.webp" /></strong> <span class="sectiondetials"> Driving Range</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_carts==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/golfcarts.webp" /></strong> <span class="sectiondetials"> Golf Carts</span></p>
      <?php } ?>
    </div>
    <div class="col-md-4">
      <?php if($golfCoursePost->golf_dining==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dining.webp" /></strong> <span class="sectiondetials">Dining</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_accommodation==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/accommodation.webp" /></strong> <span class="sectiondetials">Accommodation</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_pga_instructor==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/PGAInstructor.webp" /></strong> <span class="sectiondetials">PGA Instructor</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_pro_shop==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ProShop.webp" /></strong> <span class="sectiondetials">Pro Shop</span></p>
      <?php } ?>
    </div>
   


    <div class="spacer">&nbsp;</div>
    <div class="col-md-12 text-center"> <a href="<?php if(!empty($golfCoursePost->golf_website_url)){ echo $golfCoursePost->golf_website_url; }else{ echo "#"; } ?>" class="btn btn-default" target="_blank">Zur Website der Golfanlage</a>
      <ul class="list-inline">
        <li><a href="<?php if(!empty($golfCoursePost->facebook_url)){ echo $golfCoursePost->facebook_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->youtube_url)){ echo $golfCoursePost->youtube_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->twitter_url)){ echo $golfCoursePost->twitter_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->instagram_url)){ echo $golfCoursePost->instagram_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instragram.webp" /></a></li>
      </ul>
    </div>
    <?php } ?>

   </div>
 </div>
  
<style type="text/css">
body{ }
.navbar-static-top {
    border-bottom: 2px solid #fff!important;
}
.navbar {
    background-color: #2f2c2c;
    margin-bottom:0px;
}
.sectiondetials{position: relative; left: 27px;top: 3px; font-weight: 500; font-family: Poppins, Helvetica, Arial, sans-serif;}
.countryBox{ text-align:center;}
.countryBox span{ color:#FFFFFF; font-size:41px;}
.countryBox a{ color:#FFFFFF; float:right;}
.portfolio-box li { background: #333; border-right: 1px solid #fff;  border-bottom: 1px solid #fff; position: relative;  -webkit-backface-visibility: hidden;}
.portfolio-box .portfolio-box-in { left: 0; top:90%; z-index: 1; width: 100%;
visibility: visible; min-height: 150px; margin-top: -75px; text-align: center; position: absolute; font-family: "Open Sans", Arial, sans-serif;}
.portfolio-box .portfolio-box-in p, .portfolio-box .portfolio-box-in h5 {color: #fff;
visibility: visible;text-shadow:1px 1px 1px #000;}
.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus, .navbar .navbar-nav > li.th-accent {font-family: Poppins, Helvetica, Arial, sans-serif;font-size: 15px;font-weight: 500;text-transform: uppercase;color: #fff;}
.th-upper-footer {background: #000;color:#fff!important;}
.th-upper-footer h1.widget-title, .th-upper-footer h2.widget-title, .th-upper-footer h3.widget-title, .th-upper-footer h4.widget-title, .th-upper-footer h5.widget-title, .th-upper-footer h6.widget-title, .th-upper-footer a:hover {color: #fff;}
.th-upper-footer p, .th-upper-footer a, .th-upper-footer ul li, .th-upper-footer ol li, .th-upper-footer .soc-widget i {color: #fff;}
.th-lower-footer {padding-top: 0px!important;background: #000;}
.th-lower-footer p, .th-lower-footer a, .th-lower-footer ul li, .th-lower-footer ol li, .th-lower-footer .soc-widget i {color: #fff;}
.headhesive--clone {background-color: #000 !important;}
.headhesive--clone .navbar-nav > li > a {color: #ffffff !important;}
.btn-default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
/**********************************************/
.col-centered{ float: none; margin: 0 auto;}
.carousel-control { width: 8%; width: 0px;}
.carousel-control.left,.carousel-control.right{ margin-right: 40px; margin-left: 32px; background-image: none; opacity: 1;}
.carousel-control > a > span {color: white; font-size: 29px !important;}
.carousel-col { position: relative; min-height: 1px; padding: 5px; float: left;}
.active > div { display:none; }
.active > div:first-child { display:block; }
/*xs*/
@media (max-width: 767px) {
.carousel-inner .active.left { left: -50%; }
.carousel-inner .active.right { left: 50%; }
.carousel-inner .next{ left:  50%; }
.carousel-inner .prev{ left: -50%; }
.carousel-col{ width: 50%; }
.active > div:first-child + div { display:block; }
}
/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
.carousel-inner .active.left { left: -50%; }
.carousel-inner .active.right { left: 50%; }
.carousel-inner .next        { left:  50%; }
.carousel-inner .prev		     { left: -50%; }
.carousel-col                { width: 50%; }
.active > div:first-child + div { display:block; }
}
/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
.carousel-inner .active.left { left: -33%; }
.carousel-inner .active.right { left: 33%; }
.carousel-inner .next{ left:  33%; }
.carousel-inner .prev{ left: -33%; }
.carousel-col{ width: 33%; }
.active > div:first-child + div { display:block; }
.active > div:first-child + div + div { display:block; }
}
/*lg*/
@media (min-width: 1200px) {
.carousel-inner .active.left { left: -25%; }
.carousel-inner .active.right{ left:  25%; }
.carousel-inner .next{ left:  25%; }
.carousel-inner .prev{ left: -25%; }
.carousel-col { width: 25%; }
.active > div:first-child + div { display:block; }
.active > div:first-child + div + div { display:block; }
.active > div:first-child + div + div + div { display:block; }
}
.carousel-col img{ width:348px!important; height:337px!important;;}
</style>
<script type="text/javascript">
jQuery('.carousel[data-type="multi"] .item').each(function() {
	var next = jQuery(this).next();
	if (!next.length) {
		next =jQuery(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo(jQuery(this));
	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));
	}
});
</script>
<?php get_footer(); ?>


<script type="text/javascript">
  
 jQuery(document).ready(function(){
    jQuery('.customer-logos').slick({
        slidesToShow: 3,
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