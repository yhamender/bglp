<?php
/*
 * Template Name: Woocommerce Cart
*/
?>
<?php get_header(); ?>

<style type="text/css">

.woocommerce-message{
  display: none;
}

.cart-collaterals{
  display: none;
}

.table-dark{
  display: none;
}


.navbar-inverse{
  border-color: #08080800 !important;
}

 .logo img {

height: 96px;

 }

 .navbar-nav {
    top: 15px;
}

</style>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Einkaufswagen</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 page-content">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
 <?php echo do_shortcode("[woocommerce_cart]"); ?> 
      <center>        
     <table class="table table-dark1 table-hover table-bordered table-striped" cellspacing="0">
    <thead>
      <tr>
        
        <th class="product-thumbnail">&nbsp;</th>
        <th class="product-thumbnail">&nbsp;</th>
        <th class="product-price">Produkt</th>
        <th class="product-price">Flex</th>
         <th class="product-price">Loft</th>
        <th class="product-price">Preis</th>
        <th class="product-quantity">Menge</th>
        <th class="product-subtotal">Gesamt</th>
      </tr>
    </thead>
    <tbody>


          <?php 

           $cart_total=array();

           $items = $woocommerce->cart->get_cart(); 

            foreach($items as $item => $values) { 

     $_product =  wc_get_product( $values['data']->get_id()); 
              ?>

        <tr class="woocommerce-cart-form__cart-item cart_item">
          
         
 <td class="product-thumbnail1"> <a  onclick="removecart_success(<?php echo $values['product_id']; ?>)">x</a> </td>


         <td class="product-thumbnail1"> 
         
          <?php  
          $product_id =   $values['product_id'];

          $golfcourseImages=$dynamic_featured_image->get_featured_images($values['product_id']); ?>

          <?php if (has_post_thumbnail( $product_id )) { ?>

      <img src="<?php echo $golfcourseImages[0]['full'] ; ?>">

   <?php } ?>
           </td>

         <td class="product-price" data-title="Product">  <?php echo $_product->get_title(); ?> </td>

       <td class="product-price" data-title="Product">  

      

      <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'flex';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data as $d) {
           
           echo $d->product_type_name.',';

         }


         $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'jeetu1';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data2 =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data2 as $d) {
           
           echo $d->product_type_name.',';

         }
       


      ?>




     </td>

           <td class="product-price" data-title="Product">  

            

            <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'loft';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data as $d) {
           
           echo $d->product_type_name.',';

         }


         $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'jeetu2';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data3 =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data3 as $d) {
           
           echo $d->product_type_name.',';

         }
         

      ?>




            </td>
         
         <td class="product-price" data-title="Price">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>
             <?php 

             global $wpdb; 
        
                $table_name ="golf_product_user_discount";

                 $user_id = get_current_user_id();
                 $product_id = $values['product_id'];
                 $entry_date =   date('d/m/y');

               $data1 =  $wpdb->get_results("SELECT * FROM $table_name  WHERE userid = '$user_id' AND  productid = '$product_id' AND entry_date = '$entry_date'");

               if(empty($data1)){
                
                $price = get_post_meta($values['product_id'] , '_regular_price', true);

               } else{

                $price = get_post_meta($values['product_id'] , '_sale_price', true);
               }

               ?>


              <?php echo '€'.$price; ?></span>   </td>

          <td class="product-quantity" data-title="Quantity">
           <?php echo $values['quantity']; ?>
          </td> 

          <td class="product-subtotal" data-title="Total">
               <?php $r = $price  *  $values['quantity']; ?>
               <?php echo '€'.$r;?>

               <?php $cart_total[]= $r; ?>

                 </td>   
          
             <?php } ?>

    </tr>
  </tbody></table>

</center>

<?php $t=$cart_total; ?>


<div class="cart-collaterals1">
  <div class="cart_totals ">

  
  <h2>Rechnungsbetrag</h2>

  <table cellspacing="0" class="shop_table shop_table_responsive table-bordered">

    <tbody><tr class="cart-subtotal">
      <th>Zwischensumme</th>
      <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?php echo array_sum($t);?></span></td>
    </tr>

    
    
    
    
    
    <tr class="order-total">
      <th>Gesamtbetrag</th>
      <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?php echo array_sum($t);?></span></strong> </td>
    </tr>

    
  </tbody></table>

  <div class="wc-proceed-to-checkout">
    
<a href="" class="checkout-button button alt wc-forward btn-primary" style="padding: 10px">
  Weiter zur Versandinformation</a>
  </div>

  
</div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
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


<script type="text/javascript">
  
function removecart_success($id){

  

   jQuery.ajax({
        type: "POST",
        url: '<?php  echo admin_url("admin-ajax.php"); ?>',
        data: {action : 'remove_item_from_cart','product_id' : $id},
        success: function (res) {
            if (res) {
                alert('Removed Successfully');
                location.reload();
            }
        }
    });
}


</script>

<?php get_footer(); ?>


