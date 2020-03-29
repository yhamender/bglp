<?php
/*
 * Template Name: Woocommerce Checkout
*/
?>
<?php get_header(); ?>

<style type="text/css">
  
.table-dark{
  display: none;
}

.logo img
{
  height: 96px!important;
}

.navbar-inverse{
  border-color: #08080800 !important;
}
</style>


<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Versandinformation</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-12 ">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
             

<br/>
<br/>
<br/>
             <div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-12">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
      <form  action="https://www.paypal.com" id="signupForm1" class="form-horizontal" method="post">
       


          <?php 

           $cart_total=array();

           $items = $woocommerce->cart->get_cart(); 

            foreach($items as $item => $values) { 

   $_product =  wc_get_product( $values['data']->get_id()); 
              ?>

       
      <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'flex';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data as $d) {
           
          // echo $d->product_type_name.',';

         }  ?>


            <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'loft';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
         foreach ($data as $d) {
           
          // echo $d->product_type_name.',';

         } ?>


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

               <?php $r = $price  *  $values['quantity']; ?>
               <?php $cart_total[]= $r; ?>

                  
          
             <?php } ?>

    

<?php $t=$cart_total; ?>
<?php $tt = array_sum($t);?>
<?php $amount2 = floatval( preg_replace( '#[^\d.]#', '', $tt ) ); ?>
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="jm@s-e-a.at">
      <input type="hidden" name="currency_code" value="EUR">
      <input type="hidden" name="item_name" value="Product_Payment">
      <input type="hidden" name="item_number" value="1">
      <input type="hidden" name="return" value="<?php the_permalink(get_page_by_path('success1')->ID ); ?>">
      <input type="hidden" name="notify_url" value="<?php the_permalink( get_page_by_path('success1')->ID ); ?>">
      <input type="hidden" name="cancel_return" value="<?php the_permalink( get_page_by_path('cancel-2')->ID ); ?>">
     <input type="hidden" name="amount" value="<?php echo $amount2;?>">
    
      <?php  $items = $woocommerce->cart->get_cart();

     //echo "<pre>"; print_r($items);

        // foreach($items as $item => $values) { 
        //     $_product =  wc_get_product( $values['data']->get_id()); 
        //     echo "<b>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
        //     $price = get_post_meta($values['product_id'] , '_price', true);
        //     echo "  Price: ".$price."<br>";
        //     echo "product_id :".$values['product_id'];
        // }   ?>
        
        
                <fieldset>
                <div class="form-group">
                  <label class="col-md-4 control-label">Vorname<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="firstname" placeholder="First Name" class="form-control input-md required" type="text" value="">
                  <?php  $user_id= get_current_user_id(); ?>
                   <input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
                   
                 <?php  
                 $i=1;
                 foreach($items as $item => $values) { ?>
           <?php $_product =  wc_get_product( $values['data']->get_id()); ?>


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
               }  ?>  

           <input type="hidden" name="count_product[]" value="<?php echo $values['product_id'];?>"/>
           <input type="hidden" name="product_id<?php echo $i;?>" value="<?php echo $values['product_id'];?>"/>
           <input type="hidden" name="final_product_id[]" value="<?php echo $values['product_id'];?>"/>
           <input type="hidden" name="product_title<?php echo $i;?>" value="<?php echo $_product->get_title();?>"/>

           <input type="hidden" name="product_quantity<?php echo $i;?>" value="<?php echo $values['quantity']; ?>"/>
           <input type="hidden" name="product_price<?php echo $i;?>" value="<?php echo $price;?>"/>


           <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'flex';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
         
          if(!empty($data))
          {


          $flex_get=array();
         foreach ($data as $d) {
           
            $flex_get[] = $d->product_type_name;

          }


          $flex_get_final = implode(',',$flex_get);
          } else {

            $flex_get_final ='';
          }

      ?>
          <input type="hidden" name="flex<?php echo $i;?>" value="<?php echo $flex_get_final; ?>">




       <?php  global $wpdb; 
        
        $table_name ="golf_product_addon";

        $product_name =  $_product->get_title(); 

        $product_type = 'loft';

        $product_id = $values['product_id'];

        $user_id = get_current_user_id();

        $entry_date =   date('d/m/y');

        $data1 =  $wpdb->get_results("SELECT * FROM $table_name where product_type = '$product_type' AND product_id = '$product_id' AND product_name = '$product_name' AND userid = '$user_id' AND entry_date='$entry_date'");
           
           if(!empty($data1))
             {

         $loft_get=array();
         foreach ($data1 as $d) {
           
          $loft_get[] = $d->product_type_name;

         }

         $loft_get_final = implode(',',$loft_get);

       }else{

         $loft_get_final = '';

       }

      ?>
          <input type="hidden" name="loft<?php echo $i;?>" value="<?php echo $loft_get_final; ?>">




            <?php $i++; }   ?>



          


                 
              </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nachname<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="lastname" placeholder="Last Name" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Telefonnummer<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="phone" placeholder="Phone Number" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-md-4 control-label">E-Mail <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input type="text" class="form-control required" name="email1" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Strasse <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="Address" placeholder="Address " class="form-control input-md required" type="text" value="">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-md-4 control-label">PLZ/Ort<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="zip" placeholder="Postcode / ZIP " class="form-control input-md required" type="text" value="">
                  </div>
                </div>
        

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

    <tbody>

    <tr class="cart-subtotal">
      <th>Zwischensumme</th>
      <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?php echo array_sum($t);?></span></td>
    </tr>

    
    
    
    
    
    <tr class="order-total">
      <th>Gesamtbetrag</th>
      <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span><?php echo array_sum($t);?></span></strong> </td>
    </tr>

    
  </tbody>

</table>


  
</div>
</div>
            </div>
                
               
                <div class="form-group">
                  <div class="col-md-5 col-md-offset-4">
                    <div style="clear:both"></div>
                    <button class="btn btn-default btn-lg btn-block" type="submit">Jetzt sicher mit PayPal© bezahlen</button>
                  </div>
                </div>
                <div style="display:none;" id="contact-msg"></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>

              


             <!--  <?php //echo do_shortcode("[woocommerce_checkout]"); ?> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<style type="text/css">
.woocommerce-info{display: none;}
.payment_method_paypal{display: none;}
.woocommerce-terms-and-conditions-wrapper{display: none;}
.woocommerce-checkout-review-order-table{width:560px;}
.woocommerce-billing-fields__field-wrapper{display: none;}
.alt {display: none;}
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
.btn-default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:70px; margin-left: 130px;margin-top: -64px}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}



</style>
<!-- <script type="text/javascript">
  (function($){
    $("#signupForm").submit(function(e){
      e.preventDefault();
            var f = 1 ;
      $("#signupForm input.required").each(function(){
        var va = $(this).val();
        if( va == '' || typeof(va) == 'undefined' || va == null ){
          f = 0;
          if( $(this).next('label.error').length == 0 ){
            var lbl = '<label class="error alert-danger">This field is required</label>';
            $(this).after(lbl);
          }
        }
      });
     if( f == 1 ){   
      var formdata = $(this).serialize()+'&action=registerUser';
      $.post( '<?php //echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        if(resp=='true'){
          $("#contact-msg").html('<strong>Thank you!</strong> Your registration has been submitted now.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);
          $("#signupForm")[0].reset();
        }
        else{
          $("#contact-msg").html('<strong>ERROR</strong> Please Check Your Email-Id & Password'+resp).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });
  })(jQuery);
    </script> -->
<?php get_footer(); ?>

<script>

jQuery("input[type='text']").addClass('form-control');
jQuery("input[type='tel']").addClass('form-control');
jQuery("input[type='email']").addClass('form-control');
jQuery("select[name='billing_country']").addClass('form-control');
jQuery("select[name='billing_state']").addClass('form-control');
jQuery(".woocommerce-additional-fields").css('display','none');
jQuery("#order_review table").addClass('table-bordered');



</script>

<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.validate.js"></script>

<script>

jQuery(document).ready(function(){
  jQuery("#signupForm1").validate({
 
         rules: {
             firstname: {
                 required: true,
             },
             phone: {
                 required: true,
                  number: true
             },
            
             lastname: {
                 required: true,
               },
               
             email1: {
                 required: true,
                 email:true,
             },
             Address: {
                 required: true,
             },
             zip: {
                 required: true,
             }             
             
         }
});
});

jQuery('#signupForm1').submit(function(){
        
       // e.preventDefault();
        $r=jQuery('#signupForm1').valid();
        if($r == true)
        {
                var formData = new FormData(jQuery('#signupForm1')[0]);
                formData.append('action','get_product_order');
                jQuery.ajax({
                  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                  type:"POST",
                  data:formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(reponse){
                     alert('Redirect to Payment Page');
                       //location.reload();
                  }
                });
        }
        
        
    });
    


  </script>