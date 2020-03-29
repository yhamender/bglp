<?php
/*
 * Template Name: Choose
*/
?>
<?php get_header(); ?>


<?php $user_id= $_GET['user_id'];  


     

 if(!isset($user_id)){ ?>

    <script> window.location.href = "<?php echo site_url('');?>"; </script>
<?php  } ?>


 ?>


<style>

body {
    background: #fff;
    overflow-x: hidden;
}

.panel
{
    text-align: center;
}
.panel:hover { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35); }
.panel-body
{
    padding: 0px;
    text-align: center;
}

.the-price
{
    background-color: rgba(220,220,220,.17);
    box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
    padding: 20px;
    margin: 0;
}

.the-price h1
{
    line-height: 1em;
    padding: 0;
    margin: 0;
}

.subscript
{
    font-size: 25px;
}

/* CSS-only ribbon styles    */
.cnrflash
{
    /*Position correctly within container*/
    position: absolute;
    top: -9px;
    right: 4px;
    z-index: 1; /*Set overflow to hidden, to mask inner square*/
    overflow: hidden; /*Set size and add subtle rounding        to soften edges*/
    width: 100px;
    height: 100px;
    border-radius: 3px 5px 3px 0;
}
.cnrflash-inner
{
    /*Set position, make larger then            container and rotate 45 degrees*/
    position: absolute;
    bottom: 0;
    right: 0;
    width: 145px;
    height: 145px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -o-transform: rotate(45deg); /* Opera */
    -moz-transform: rotate(45deg); /* Firefox */
    -webkit-transform: rotate(45deg); /* Safari and Chrome */
    -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
    -ms-transform-origin: 100% 100%;  /* IE 9 */
    -o-transform-origin: 100% 100%; /* Opera */
    -moz-transform-origin: 100% 100%; /* Firefox */
    background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.1) 50%), linear-gradient(0deg, transparent 0%, rgba(1,1,1,.2) 50%);
    background-size: 4px,auto, auto,auto;
    background-color: #aa0101;
    box-shadow: 0 3px 3px 0 rgba(1,1,1,.5), 0 1px 0 0 rgba(1,1,1,.5), inset 0 -1px 8px 0 rgba(255,255,255,.3), inset 0 -1px 0 0 rgba(255,255,255,.2);
}
.cnrflash-inner:before, .cnrflash-inner:after
{
    /*Use the border triangle trick to make                 it look like the ribbon wraps round it's                container*/
    content: " ";
    display: block;
    position: absolute;
    bottom: -16px;
    width: 0;
    height: 0;
    border: 8px solid #800000;
}
.cnrflash-inner:before
{
    left: 1px;
    border-bottom-color: transparent;
    border-right-color: transparent;
}
.cnrflash-inner:after
{
    right: 0;
    border-bottom-color: transparent;
    border-left-color: transparent;
}
.cnrflash-label
{
    /*Make the label look nice*/
    position: absolute;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    padding-bottom: 5px;
    color: #fff;
    text-shadow: 0 1px 1px rgba(1,1,1,.8);
    font-size: 0.95em;
    font-weight: bold;
    text-align: center;
}


</style>


<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">

 <?php $user_id= $_GET['user_id'];  ?>
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Ihre S.E.A.CARDs im Vergleich – Immer mehr für Sie drin</h1>
</div>

<!------ Include the above in your HEAD tag ---------->
<br/><br/><br/>
<div class="container">
    <div class="row">
<div class="col-xs-12 col-md-1">
</div>

  <form  action="https://www.paypal.com" id="gold" class="form-horizontal" method="post">
   
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="jm@s-e-a.at">
      <input type="hidden" name="currency_code" value="EUR">
      <input type="hidden" name="item_name"  class="item_name" id="item_name" value="S.E.A.gold CARD">
   <input type="hidden" name="item_number" value="<?php echo $user_id; ?>">
      <input type="hidden" name="return" value="<?php the_permalink(get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="notify_url" value="<?php the_permalink( get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="cancel_return" value="<?php the_permalink( get_page_by_path('cancel-2')->ID ); ?>">
       <input type="hidden" name="amount" class="sitebg" value="99.00">


        <div class="col-xs-12 col-md-5">
            <div class="panel panel-primary" style="height:617px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Gold Card</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/gold_card.png" style="height:100px; width: 150px;">
                    </div>
                    <table class="table">
                        <tr>
                            <td >
                               5 Credits für bis zu 5 kostenlose Golfrunden
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                               5 Credits für bis zu 5 Vergünstigungen  
                            </td>
                        </tr>
                        <tr>
                            <td>
                              Teilneahmemöglichkeit an S.E.A.Card Reisen
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                S.E.A.CARD Inhaber 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mitgliedschaften in Partnerclubs zu Top-Konditionen
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 82px"></td>
                        </tr>
                        <tr>
                            <td>

                             <p> Enter Coupon Code If You have any?</p>

                              <input type="text" name="coupon" id="coupon" value="" class="form-control" >
                                 
                            </td>
                        </tr> 
                    </table>
                </div>
                
                <div class="panel-footer"  >
                   
                    <button type="submit" id="gold_button" class="btn btn-primary">Choose</button>
                    </div>
            </div>
        </div>

    </form>

  
   <form  action="https://www.paypal.com" id="platinium" class="form-horizontal" method="post">
 
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="jm@s-e-a.at">
      <input type="hidden" name="currency_code" value="EUR">
      <input type="hidden" name="item_name"  class="item_name" id="item_name" value="S.E.A.platinCARD">
        <input type="hidden" name="item_number" value="<?php echo $user_id; ?>">
      <input type="hidden" name="return" value="<?php the_permalink(get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="notify_url" value="<?php the_permalink( get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="cancel_return" value="<?php the_permalink( get_page_by_path('cancel-2')->ID ); ?>">
       <input type="hidden" class="sitebg1" name="amount" value="199.00">

        <div class="col-xs-12 col-md-5" style="margin-top: -13px;">
            <div class="panel panel-success">
                <div class="cnrflash">
                    <div class="cnrflash-inner">
                        <span class="cnrflash-label">MOST
                            <br>
                            POPULAR</span>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Platin Card</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/platinium_card.png" style="height:100px; width: 150px;">
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                               12 Credits für bis zu 12 Runden Golf
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                               12 Credits für bis zu 12 Vergünstigungen
                            </td>
                        </tr>
                        <tr>
                            <td>
                               10% Nachlass auf Ihre Buchung von S.E.A.Card Golfreisen
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Mitgliedschaften in Partnerclubs zu Top-Konditionen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1 Dutzend Taylor Made Burner Golfbälle oder 1 Vegas Golf 10-Chip Game oder 1 PELT Original GRATIS 
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Startplätze bei exklusiven Golfevents wie der Business Golf League
                            </td>
                        </tr>
                        <tr class="active">
                        <td>

                             <p> Enter Coupon Code If You have any?</p>

                              <input type="text" name="coupon" id="coupon1" value="" class="form-control">
                                 
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="panel-footer">
                    <button type="submit" id="platinum_button" class="btn btn-primary">Choose</button>
                    </div>
            </div>
        </div>

    </form>
       
    </div>
</div>






<?php get_footer(); ?>


<script type="text/javascript">
    
 jQuery('#gold_button').click(function(e){

    e.preventDefault();

   var code_coupon = jQuery('#coupon').val();
   
   
 
   if(code_coupon!=''){

    
                    jQuery.ajax({
                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                    data:{code_coupon:code_coupon,action:'check_coupon_exist'},
                    async:'true',
                    datatype:'json',
                    success:function(data) {


                        var record = JSON.parse(data);
                        //var action = record[0].action;
                       // alert(action);
                        if(record.length == 0)
                        {
                            alert('Please Enter a Valid Code');
                        }

                         else if(record[0].action!='Gold Card'){
                                alert('This coupan is not valid');
                            }

                        else{
                          
                            var total =   jQuery('.sitebg').val();
                            var deductprice = record[0].price;
                            var final = total - deductprice;
                          
                           jQuery('input.sitebg').val(final);

                           // alert('Redirecting to the Payment Page');

                           var userid = <?php echo $user_id ?>;
                                   jQuery.ajax({
                            url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                            type:"POST",
                            data:{userid:userid,action:'convert_user_gold'},
                            async:'true',
                            datatype:'json',
                            success:function(resp) {

                             alert('Redirecting to the Payment Page');
                             $('#gold').submit();
                           
                             },
                          });



                            // $('#gold').submit();

                        }

                      
                   
                     },
                  });



   }else{

            var userid = <?php echo $user_id ?>;
            jQuery.ajax({
                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                    data:{userid:userid,action:'convert_user_gold'},
                    async:'true',
                    datatype:'json',
                    success:function(resp) {

                     alert('Redirecting to the Payment Page');
                     $('#gold').submit();
                   
                     },
                  });

   }

 

 });



</script>



<script type="text/javascript">
    
 jQuery('#platinum_button').click(function(e){

    e.preventDefault();

   var code_coupon = jQuery('#coupon1').val();
   
 
   if(code_coupon!=''){

    
                    jQuery.ajax({
                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                    data:{code_coupon:code_coupon,action:'check_coupon_exist'},
                    async:'true',
                    datatype:'json',
                    success:function(data) {


                        var record = JSON.parse(data);
                        //var action = record[0].action;
                       // alert(action);
                        if(record.length == 0)
                        {
                            alert('Please Enter a Valid Code');
                        }

                         else if(record[0].action!='Platinium Card'){
                                alert('This coupan is not valid');
                            }

                        else{
                          
                            var total =   jQuery('.sitebg1').val();
                            var deductprice = record[0].price;
                            var final = total - deductprice;
                          
                           jQuery('input.sitebg1').val(final);

                           // alert('Redirecting to the Payment Page');
                    var userid = <?php echo $user_id ?>;

                            jQuery.ajax({
                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                    data:{userid:userid,action:'convert_user_platinium'},
                    async:'true',
                    datatype:'json',
                    success:function(resp) {

                     alert('Redirecting to the Payment Page');
                     $('#platinium').submit();
                   
                     },
                  });






                            // $('#platinium').submit();

                        }

                      
                   
                     },
                  });



   }else{

  
           var userid = <?php echo $user_id ?>;
  

 
            jQuery.ajax({
                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                    data:{userid:userid,action:'convert_user_platinium'},
                    async:'true',
                    datatype:'json',
                    success:function(resp) {
                      
                     alert('Redirecting to the Payment Page');

                     $('#platinium').submit();
                   
                     },
                  });

   }

 

 });



</script>












<!-- <script type="text/javascript">
    
 jQuery('#platinium').submit(function(e){

    //e.preventDefault();
alert();
    jQuery.ajax({
    url:"<?php  //echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{action:'convert_user_platinium'},
    async:'true',
    datatype:'json',
    success:function(resp) {

     alert('Redirecting to the Payment Page');
   
       
      

     },
  });

    

 });



</script>
  -->