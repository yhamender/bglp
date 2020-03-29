<?php
/*
 * Template Name: Product Desrciption
*/
?>



<style type="text/css">

 
{box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
  margin-left: 80px;
}








.wc-tabs-wrapper{

  display: none;
}

 p{
  font-size: 18px;
      margin: 16px 0px 10px !important;
          color: #a46497;
 }


  .add_to_cart_button{
    color: #fff;
  }

  a:hover{
        color: #fff !important;
  }

   
   .woocommerce div.product div.images img{

    display: block;
    width: 60% !important;
    height: 50% !important;
    box-shadow: none;
   }

   .woocommerce-product-gallery{

    opacity: 1!important;
   }
   

   .reviews_tab{
    display: none !important;
   }
    
    #tab-reviews{
      display: none !important;
    }

    .related{
      display: none !important;
    }
     

     .posted_in{
      display: none !important;
     }
  
li:hover {

  box-shadow: rgb(68, 68, 68) 1px 3px 6px;
}


.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{

      width: 21.05% !important;
}
 

.woocommerce-product-gallery{
  display: none;
}


.onsale{
  display: none;
}

</style>

<?php get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css" rel="stylesheet" type="text/css" />
<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Exklusiver Pramienshop</h1>
</div>


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


<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>

<div class="col-md-12">
  <div class="col-md-7">
    <div class="col-md-6"> 
     <div class="img-zoom-container">
      <img id="myimage" src="<?php  echo $image[0]; ?>"  style="margin-top: 12px; width: 550px; height: 320px;">
     <!--  <div id="myresult" class="img-zoom-result"> </div>  -->
     </div>
     </div>

     <div class="col-md-1" id="hello"> 
     
      <div class="img-zoom-container">
      <!-- <img id="myimage" src="<?php // echo $image[0]; ?>" width="360" height="330" style="margin-top: 12px;"> -->
      <div id="myresult" class="img-zoom-result"> </div> 
     </div>
     </div>

    <!-- <img src="<?php  //echo $image[0]; ?>" data-id="<?php //echo $loop->post->ID; ?>" style="margin-left: 42px; margin-top: 25px; width: 85%;
    height: 50%;"> -->
  
    

  </div>

<!-- <?php //the_title();  ?> -->
<div class="col-md-5">
 <?php the_content();  ?>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata();  ?>
<?php else:  ?>
<p><?php _e( 'No Product' );  ?></p>
<?php endif; ?>

<div class="container">
   <div class="row spacer">
    <div class="container">
      <div class="col-md-12 page-content">
        <div class="inner-box category-content"> 
          <div class="row">
        <?php echo do_shortcode('[product_page id='.$product_id.']'); ?>
           </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- /.container -->

  <br><br>
</div>
<style type="text/css">
.page-content{ margin-top:50px;}
body{ background:#fff;}
.title-2 {
    border-bottom: 1px solid #e6e6e6;
    font-size: 18px;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.form-control {
    background-color: #fff;
    background-image: none;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 12px;
    height: 43px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.sectiondetials{position: relative; left: 27px;top: 3px; font-weight: 500; font-family: Poppins, Helvetica, Arial, sans-serif;}
.countryBox{ text-align:center;}
.countryBox span{ color:#FFFFFF; font-size:41px;}
.countryBox a{ color:#FFFFFF; float:right;}
.portfolio-box li { background: #333; border:7px solid #fff!important; position: relative;  -webkit-backface-visibility: hidden;}
.portfolio-box .portfolio-box-in { left: 0; top:90%; z-index: 1; width: 100%;
visibility: visible; min-height: 150px; margin-top: -75px; text-align: center; position: absolute; font-family: "Open Sans", Arial, sans-serif;}
.portfolio-box .portfolio-box-in p, .portfolio-box .portfolio-box-in h5 {color: #fff;
visibility: visible;text-shadow:1px 1px 1px #000;}
.navbar {background-color: #000; margin-bottom: 0;}
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
</style>
<?php get_footer(); ?>


 <script type="text/javascript">
  $(document).ready(function(){
  
  $('.product_type_simple').click(function(event){

 
   window.location.href = '<?php echo site_url('shop-now');?>'; 
   //event.preventDefault(); 
       
  });

  });

</script> 




<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / 100;
  cy = result.offsetHeight / 100;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>


<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>




<script>
  $(document).ready(function(){
    $('#hello').css("display", "none");
$(".img-zoom-container").hover(function(){
    $('#hello').css("display", "");
    $('#hello').css("display", "block");
    }, function(){
    $('#hello').css("display", "none");
  });

});

</script>