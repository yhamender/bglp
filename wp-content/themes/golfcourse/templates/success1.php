<?php

/*
 * Template Name: Success1
 */		
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);

$myPost = array();
foreach ($raw_post_array as $keyval) {
	$keyval = explode ('=', $keyval);
	if (count($keyval) == 2)
		$myPost[$keyval[0]] = urldecode($keyval[1]);
}
// Read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
	$get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
	if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
		$value = urlencode(stripslashes($value));
	} else {
		$value = urlencode($value);
	}
	$req .= "&$key=$value";
}

/*
 * Post IPN data back to PayPal to validate the IPN data is genuine
 * Without this step anyone can fake IPN data
 */
$paypalURL = "https://www.sandbox.paypal.com";
$ch = curl_init($paypalURL);
if ($ch == FALSE) {
	return FALSE;
}

curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSLVERSION, 6);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

// Set TCP timeout to 30 seconds
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
$res = curl_exec($ch);
/*
 * Inspect IPN validation result and act accordingly
 * Split response headers and payload, a better way for strcmp
 */ 
$tokens = explode("\r\n\r\n", trim($res));
$res = trim(end($tokens));

//print_r($res);
   global $wpdb; 

   $user_id= get_current_user_id(); 
   $six_digit_random_number = mt_rand(100000, 999999);
   $payment_date = date('d/m/y');

   $table_name ="golf_product_order";
   
    $query=$wpdb->get_row("SELECT MAX(id) AS LABELMAX FROM golf_product_order WHERE user_id = '$user_id' AND product_date = '$payment_date'");
    $fetch_buy_product_id = $query->LABELMAX; 

    

   $data1 =  $wpdb->get_results("SELECT * FROM $table_name  WHERE id = '$fetch_buy_product_id'");
   
    $change_status_id = $data1[0]->product_title;

    $final_id = explode(',',$change_status_id);
   
    $gross_payment = array();
    
    foreach ($final_id as $fi) {
       
       global $wpdb;
    $table_name ="golf_product_order";
    $subs = '1';
    $wpdb->query(
    "
    UPDATE $table_name 
    SET status = '$subs'
    WHERE user_id = '$user_id' AND product_id = '$fi' AND product_date = '$payment_date'
    ");


     $table_name ="golf_product_order";
   
     $data2 =  $wpdb->get_results("SELECT * FROM $table_name  WHERE user_id = '$user_id' AND  product_id = '$fi' AND product_date = '$payment_date'");

     $gross_payment[] = $data2[0]->product_price;


    $table_name1 ="golf_product_user_discount";

    $data3 =  $wpdb->get_results("SELECT * FROM $table_name1  WHERE userid = '$user_id' AND  productid = '$fi' AND entry_date = '$payment_date'");

  //echo  $wpdb->last_query;

    if(!empty($data3)){
       
       $balance = get_user_meta($user_id, '_credit', true );
       $total_coin_cut = '1';
       $remaining_coin = $balance - $total_coin_cut;
       update_user_meta($user_id, '_credit', $remaining_coin);

     }



     }

  
     $t= $gross_payment; 
    
    $payment =  array_sum($t);
    


	
		
	$result = $wpdb->insert('golf_payment_product', array(
    'txn_id' => $six_digit_random_number,
	'user_id'=> $user_id, //get_current_user_id()
    'item_name' => $change_status_id,
	'payment_gross' =>$payment,
    'payment_status' => 'sucess',
    'payment_date' => $payment_date
    ));
	
	global $woocommerce;
    $woocommerce->cart->empty_cart();
	
	  ?>


<div class="well-lg">
  <h1>Your Transaction Has Been Successful <br/>
    <span>S.E.A Golf Courses Product</span></h1>
</div>

<style type="text/css">
.well-lg h1{
      background:#001541 !important;
	  padding:20px 20px 20px 20px;
	  width:600px;
	  color:#fff;
	  text-align:center;
	  margin:220px auto;
	  box-shadow:1px 1px 1px 1px #000;
}
span{ 
      font-size:19px;
}
</style>


<script>
 window.setTimeout(function(){

       // Move to a new location or you can do something else
        window.location.href = "<?php  echo site_url('');?>";

    }, 4000);
</script>