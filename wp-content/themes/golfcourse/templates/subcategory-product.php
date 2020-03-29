<?php
/*
 * Template Name: Sub-Category Product
*/
?>

<style type="text/css">

   p,h1,h2,h3,h4,h5,li,a{
    font-family: fantasy;
    font-weight: 400;
  }

  #slideshow{
    display: none !important;
  }

  .product-grid2 .add-to-cart{

    background-color: #40409cfc!important;
  }

  .add_to_cart_button{
    color: #fff;

  }

  a:hover{
        color: none !important;
  }

/********************* Shopping Demo-2 **********************/

a:hover{
  text-decoration: none !important;
}
.demo{padding:45px 0}
.product-grid2{font-family:'Open Sans',sans-serif;position:relative}
.product-grid2 .product-image2{overflow:hidden;position:relative;     border: 1px solid;}
.product-grid2 .product-image2 a{display:block}
.product-grid2 .product-image2 img{width:100%;height:auto}
.product-image2 .pic-1{opacity:1;transition:all .5s}
.product-grid2:hover .product-image2 .pic-1{opacity:0}
.product-image2 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0;transition:all .5s}
.product-grid2:hover .product-image2 .pic-2{opacity:1}
.product-grid2 .social{padding:0;margin:0;position:absolute;bottom:50px;right:25px;z-index:1}
.product-grid2 .social li{margin:0 0 10px;display:block;transform:translateX(100px);transition:all .5s}
.product-grid2:hover .social li{transform:translateX(0)}
.product-grid2:hover .social li:nth-child(2){transition-delay:.15s}
.product-grid2:hover .social li:nth-child(3){transition-delay:.25s}
.product-grid2 .social li a{color:#505050;background-color:#fff;font-size:17px;line-height:45px;text-align:center;height:45px;width:45px;border-radius:50%;display:block;transition:all .3s ease 0s}
.product-grid2 .social li a:hover{color:#fff;background-color:#3498db;box-shadow:0 0 10px rgba(0,0,0,.5)}
.product-grid2 .social li a:after,.product-grid2 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:22px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid2 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid2 .social li a:hover:after,.product-grid2 .social li a:hover:before{opacity:1}
.product-grid2 .add-to-cart{color:#fff;background-color:#404040;font-size:15px;text-align:center;width:100%;padding:10px 0;display:block;position:absolute;left:0;bottom:-100%;transition:all .3s}
.product-grid2 .add-to-cart:hover{text-decoration:none}
.product-grid2:hover .add-to-cart{bottom:0}
.product-grid2 .product-new-label{background-color:#3498db;color:#fff;font-size:17px;padding:5px 10px;position:absolute;right:0;top:0;transition:all .3s}
.product-grid2:hover .product-new-label{opacity:0}
.product-grid2 .product-content{padding:20px 10px;text-align:center}
.product-grid2 .title{font-size:17px;margin:0 0 7px}
.product-grid2 .title a{color:#303030}
.product-grid2 .title a:hover{color:#3498db}
.product-grid2 .price{color:#303030;font-size:15px}
@media screen and (max-width:990px){.product-grid2{margin-bottom:30px}
}





  
li:hover {

  box-shadow: rgb(68, 68, 68) 1px 3px 6px;
}


.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{

      width: 21.05% !important;
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

<?php $category_id = $_GET['category']; ?>

<?php if( $term = get_term_by( 'id', $category_id, 'product_cat' ) ){
    
    $name_category = $term->name;
} ?>


<?php $sub_category_id = $_GET['subcategory']; ?>

<?php if( $term = get_term_by( 'id', $sub_category_id, 'product_cat' ) ){
    
    $name_subcategory = $term->name;


} ?>

<div class="container" style="width: 100%;">
   <div class="row spacer">
    <div class="container" style="width: 100%;">
      <div class="col-md-12 page-content">
        <div class="inner-box category-content"> 
          <div class="row">
            <!-- <?php //echo do_shortcode("[products]"); ?>  -->
<!-- 'product_cat' => 'shoes' -->

   <div class="col-md-12">

    <div class="col-md-2" style="border: 2px solid; height: auto;" >
 
      <br/>
     <p style="font-size: 20px;">Select Category</p>
      <select class="form-control" id='issue_no' name="cat" style="font-family: fantasy; font-size: 14px;">

        <option> Select Category</option>

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





    
  <?php $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $category_id,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);?>



  <?php

 //echo "<pre>"; print_r($subcats[0]->term_id);
 
  if(empty($subcats)){

  } else {



   ?>

<div class="first">

    <br/>

      <p style="font-size: 17px;">Select Sub-Category    <span class="glyphicon glyphicon-menu-down"></span>  </p>
<?php
    echo '<ul class="wooc_sclist">';
      foreach ($subcats as $sc) {
        $category_id = $_GET['category'];
         $subcategory_id = $_GET['subcategory'];
        $link = get_term_link( $sc->slug, $sc->taxonomy );
          echo '<li><a href="'.site_url('subcategory-product/?category='.$category_id.'&subcategory='.$sc->term_id).'" style="font-size:16px;">'.$sc->name.'</a></li>';

         if($subcategory_id==$sc->term_id) { ?>
          <a href="<?php echo site_url('category-product/?category='.$category_id);?>" style='float:right; color: #000;'> <span class='glyphicon glyphicon-remove' style="margin-top: -18px;"></span> </a>
        <?php   } 

      }
    echo '</ul>';

?>
  

   </div>

 <?php } ?>

   <div class="second" style="display: none;">
     
      <br/>

      <p style="font-size: 17px;">Select Sub-Category    <span class="glyphicon glyphicon-menu-up"></span>  </p>  

   </div>
   


   <br/>  <br/>






    </div>

    <div class="col-md-10">
    <?php
        $args = array( 'post_type' => 'product',  'product_cat' => $name_subcategory , 'posts_per_page' => '100', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );

        if($loop->post_count == '0'){

        //echo "<pre>"; print_r($loop);
     
        echo ' <div class="alert alert-info">
                
                <span class="glyphicon glyphicon-info-sign"></span> <strong>No Product Message</strong>
                <hr class="message-inner-separator">
                <p style="font-size:16px;">
                    Sorry  No Produt Available in This Sub Category. Please choose other sub category for Buy the product.</p>
            </div>'; 

        }


        $i=1;
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            

         <div class="col-md-4">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="<?php echo site_url('product-desrciption/?') ?>id=<?php echo $loop->post->ID;?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        
                        <?php  $golfcourseImages=$dynamic_featured_image->get_featured_images($loop->post->ID); ?>
                         

                        <?php if (has_post_thumbnail( $loop->post->ID )) 
                            
                            if(isset($golfcourseImages[1]['full'])){

                               echo '<img class="pic-1" src="'.$golfcourseImages[0]['full'].'"  style="margin-top: 12px; width: 238px; height: 235px; margin-left: 30px;"><img class="pic-2" src="'.$golfcourseImages[1]['full'].'"  style="margin-top: 12px; width: 238px; height: 235px; margin-left: 52px;">';

                            }else {

                              echo '<img class="pic-1" src="'.$golfcourseImages[0]['full'].'"  style="margin-top: 12px; width: 238px; height: 235px;">';
                            }

                         


                           else echo ' <img class="pic-1" src="'.woocommerce_placeholder_img_src().'" alt="Placeholder"/>  '; ?>

                              
                    </a>
                    
                    <button class="add-to-cart btn btn-primary"  style="margin-bottom: 40px;
                    background-color: #000 !important;
       padding: 12px 20px 12px 15px;
    width: 130px;
        margin-left: 97px; "><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></button>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="<?php echo site_url('product-desrciption/?') ?>id=<?php echo $loop->post->ID;?>" style="color:#000;"><?php the_title(); ?></a></h3>
                    <span style="color: #999;
    font-size: 15px;
    font-weight: 400;
    
    margin-left: 7px;
    display: inline-block;"><?php echo $product->get_price_html(); ?></span> 
                </div>
            </div>
        </div>
       

    
                
    <?php $i++; endwhile; ?>
    <?php wp_reset_query(); ?>

 </div>
</div><!--/.products-->



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



<script type="text/javascript">
  
  $(document).ready(function () {
            $('#issue_no').on('change', function () {
                var category_id = $(this).val();

                window.location.assign('category-product/?category='+category_id);
            });
        });

</script>


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

