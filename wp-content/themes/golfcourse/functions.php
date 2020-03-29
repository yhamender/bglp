<?php

function my_theme_menus(){
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
  ));
  add_theme_support('post-thumbnails');
    }
add_action('after_setup_theme','my_theme_menus');
show_admin_bar(false);


/***************Log out user empty cart **********************/

function empty_basket() {
    if( function_exists('WC') ){
        WC()->cart->empty_cart();
    }
}
add_action('wp_logout', 'empty_basket');



/***************ajax cart***********************/

// if( ! function_exists('custom_ajax_add_to_cart_button') && class_exists('WooCommerce') ) {
//     function custom_ajax_add_to_cart_button( $atts ) {
//         // Shortcode attributes
//         $atts = shortcode_atts( array(
//             'id' => '', // Product ID
//             'qty' => '4', // Product quantity
//             'text' => 'lelo', // Text of the button
//             'class' => '', // Additional classes
//             'flex'=> 'felx22',
//             'loft' => 'loft22'
//         ), $atts, 'ajax_add_to_cart' );

//         if( esc_attr( $atts['id'] ) == 0 ) return; // Exit when no Product ID

//         if( get_post_type( esc_attr( $atts['id'] ) ) != 'product' ) return; // Exit if not a Product

//         $product = wc_get_product( esc_attr( $atts['id'] ) );

//         if ( ! $product ) return; // Exit when if not a valid Product

//         $classes = implode( ' ', array_filter( array(
//             'button',
//             'product_type_' . $product->get_type(),
//             $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
//             $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
//         ) ) ).' '.$atts['class'];

//         $add_to_cart_button = sprintf( '<a rel="nofollow" href="%s" %s %s %s class="%s">%s</a>',
//             esc_url( $product->add_to_cart_url() ),
//             'data-quantity="' . esc_attr( $atts['qty'] ) .'"',
//             'data-product_id="' . esc_attr( $atts['id'] ) .'"',
//             'data-product_sku="' . esc_attr( $product->get_sku() ) .'"',
//             esc_attr( isset( $classes ) ? $classes : 'button' ),
//             esc_html( empty( esc_attr( $atts['text'] ) ) ? $product->add_to_cart_text() : esc_attr( $atts['text'] ) )
//         );

//         return $add_to_cart_button;
//     }
//     add_shortcode('ajax_add_to_cart', 'custom_ajax_add_to_cart_button');
// }


/***************In case user is author redirect to golf admin dasboard***********************/


function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if (isset($user->roles) && is_array($user->roles)) {
        //check for subscribers
        if (in_array('author', $user->roles)) {
            // redirect them to another URL, in this case, the homepage 
            $redirect_to =  site_url('golf-admin-dashboard');
        }
    }

    return $redirect_to;
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

/*****************************************************************************************/
/*****************************************************************************************/

/*****Add Extra field in user admin*********************/

function custom_user_profile_fields($user){
    if(is_object($user))
        $company = esc_attr(get_the_author_meta( '_credit', $user->ID ) );
    else
        $company = null;
    ?>
    <h3>Coin Information </h3>
    <table class="form-table">
        <tr>
            <th><label for="company">S.E.A Coins</label></th>
            <td>
                <input type="text" class="regular-text" name="company" value="<?php echo $company; ?>" id="company" /><br />
                <span class="description">Enter the coin in number 5 0r 12 .</span>
            </td>
        </tr>
    </table>
<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );
add_action( "user_new_form", "custom_user_profile_fields" );



function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('manage_options'))
        return false;
 
    # save my custom field
    update_user_meta($user_id, '_credit', $_POST['company']);

    $subs = '1';
    global $wpdb;
    $table_name ="golf_users";

    $wpdb->query(
    "
    UPDATE $table_name 
    SET user_status = $subs
    WHERE ID = $user_id
    ");

   


}
add_action('user_register', 'save_custom_user_profile_fields');
add_action('profile_update', 'save_custom_user_profile_fields');




/*****************************************************************************************/
/*****************************************************************************************/

// Add custom columns to Admin users list
add_action('manage_users_columns', 'add_custom_users_columns', 10, 1 );
function add_custom_users_columns( $columns ) {
    unset($columns['posts']);

    $columns['account_verification'] = __('S.E.A Coins');
    // $columns['account_vatnr'] = __('VAT Nr');
    // $columns['account_companyname'] = __('Company Name');

    return $columns;
}


// fetching the verification status, thanks to LoicTheAztec
add_filter('manage_users_custom_column',  'add_data_to_custom_users_columns', 10, 3);
function add_data_to_custom_users_columns( $value, $column_name, $user_id ) {
    if ( 'account_verification' == $column_name ) {
        if( $credit = get_user_meta( $user_id, '_credit', true )) {
            $value = '<span style="color:green;font-weight:bold;">'.$credit.'</span>';
        } 
    // } elseif( 'account_vatnr' == $column_name ) {
    //     if( $vat_nr = get_user_meta( $user_id, 'account_vatnr', true ) ) {
    //         $value = '<span style="color:green;font-weight:bold;">' . $vat_nr . '</span>';
    //     } else {
    //         $value = '<span class="na" style="color:grey;"><em>N/a</em></span>';
    //     }
    // } elseif( 'account_companyname' == $column_name ) {
    //     if( $company = get_user_meta( $user_id, 'account_companyname', true ) ) {
    //         $value = '<span style="color:green;font-weight:bold;">' . $company . '</span>';
    //     } else {
    //         $value = '<span class="na" style="color:grey;"><em>N/a</em></span>';
    //     }

     }
    return $value;
}




/*****************************************************************************************/
/*****************************************************************************************/
/*This Function Use For Creating Golf Course*/



function customCreateGolfCourse() {
    $args = array(
        'label' => 'GolfCourse',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'golfcourse-reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array(
            'title',
            'editor',
            'page-attributes',)
        );
    register_post_type( 'golfcourse-reviews', $args );
}
add_action( 'init', 'customCreateGolfCourse' );
/*****************************************************************************************/
/*****************************************************************************************/
function add_golfcourse_meta_boxes() {
  add_meta_box("cafe_contact_meta", "Please Enter Course Information & Facilities", "add_contact_details_golfcourse_meta_box", "golfcourse-reviews", "normal", "low");
}
function add_contact_details_golfcourse_meta_box()
{
  global $post;
  $custom = get_post_custom($post->ID );
  ?>
<style>
.width99 {width:99%;}
</style>
<p>
  <label>Golf Course Name:</label>
  <br />
  <input type="text" name="golfcourse_name" class="width99" value="<?= @$custom["golfcourse_name"][0] ?>">
</p>
<p>
  <label>Location:</label>
  <br />
  <input type="text" name="location" class="width99" value="<?= @$custom["location"][0] ?>">
</p>
<p>
  <label>Golf Course Holes:</label>
  <br />
  <input type="text" name="golf_course_hole" class="width99" value="<?= @$custom["golf_course_hole"][0] ?>">
</p>
<p>
  <label>Golf Course Par:</label>
  <br />
  <input type="text" name="golf_course_par" class="width99" value="<?= @$custom["golf_course_par"][0] ?>">
</p>
<p>
  <label>Golf Course Length:</label>
  <br />
  <input type="text" name="golf_course_length" class="width99" value="<?= @$custom["golf_course_length"][0] ?>">
</p>
<p>
  <label>Golf Course Designer:</label>
  <br />
  <input type="text" name="golf_course_designer" class="width99" value="<?= @$custom["golf_course_designer"][0] ?>">
</p>
<p>
  <label>Golf Course Coin:</label>
  <br />
  <input type="text" name="golf_course_coin" class="width99" value="<?= @$custom["golf_course_coin"][0] ?>">
</p>
<p>
  <label>Max Player Per Day:</label>
  <br />
  <input type="text" name="max_player_per_day" class="width99" value="<?= @$custom["max_player_per_day"][0] ?>">
</p>
<p>
  <label>Golf Admin Mail ID:</label>
  <br />
  <input type="text" name="golf_admin_mail_id" class="width99" value="<?= @$custom["golf_admin_mail_id"][0] ?>">
</p>
<p>
  <label>Golf Course Website Url:</label>
  <br />
  <input type="text" name="golf_website_url" class="width99" value="<?= @$custom["golf_website_url"][0] ?>">
</p>
<p>
  <label>
  <input type="checkbox" name="golf_academy" class="width99" value="1" <?php if($custom["golf_academy"][0]==1){ echo "checked"; } ?>>Golf Academy &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_rental" class="width99" value="1" <?php if($custom["golf_rental"][0]==1){ echo "checked"; } ?>>Club Rental &nbsp; </label>
  <label>
  <input type="checkbox" name="golf_driving_range" class="width99" value="1" <?php if($custom["golf_driving_range"][0]==1){ echo "checked"; } ?>>Driving Range &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_carts" class="width99" value="1" <?php if($custom["golf_carts"][0]==1){ echo "checked"; } ?>>Golf Carts &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_dining" class="width99" value="1" <?php if($custom["golf_dining"][0]==1){ echo "checked"; } ?>>Dining &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_accommodation" class="width99" value="1" <?php if($custom["golf_accommodation"][0]==1){ echo "checked"; } ?>>Accommodation &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_pga_instructor" class="width99" value="1" <?php if($custom["golf_pga_instructor"][0]==1){ echo "checked"; } ?>>PGA Instructor &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_pro_shop" class="width99" value="1" <?php if($custom["golf_pro_shop"][0]==1){ echo "checked"; } ?>>Pro Shop &nbsp;</label>
</p>
<p>
  <label>Facebook Url:</label>
  <br />
  <input type="text" name="facebook_url" class="width99" value="<?= @$custom["facebook_url"][0] ?>">
</p>
<p>
  <label>Youtube Url:</label>
  <br />
  <input type="text" name="youtube_url" class="width99" value="<?= @$custom["youtube_url"][0] ?>">
</p>
<p>
  <label>Twitter Url:</label>
  <br />
  <input type="text" name="twitter_url" class="width99" value="<?= @$custom["twitter_url"][0] ?>">
</p>
<p>
  <label>Instagram Url:</label>
  <br />
  <input type="text" name="instagram_url" class="width99" value="<?= @$custom["instagram_url"][0] ?>">
</p>
<?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_golfcourse_custom_fields(){
  global $post;
  if($post)
  {
  update_post_meta($post->ID, "golfcourse_name", @$_POST["golfcourse_name"]);
  update_post_meta($post->ID, "location", @$_POST["location"]);
  update_post_meta($post->ID, "golf_course_hole", @$_POST["golf_course_hole"]);
  update_post_meta($post->ID, "golf_course_par", @$_POST["golf_course_par"]);
  update_post_meta($post->ID, "golf_course_length", @$_POST["golf_course_length"]);
  update_post_meta($post->ID, "golf_course_designer", @$_POST["golf_course_designer"]);
  update_post_meta($post->ID, "max_player_per_day", @$_POST["max_player_per_day"]);
  update_post_meta($post->ID, "golf_admin_mail_id", @$_POST["golf_admin_mail_id"]);
  update_post_meta($post->ID, "golf_course_coin", @$_POST["golf_course_coin"]);
  update_post_meta($post->ID, "golf_website_url", @$_POST["golf_website_url"]);
  /**Golfcourse Facilities**/
  update_post_meta($post->ID, "golf_academy", @$_POST["golf_academy"]);
  update_post_meta($post->ID, "golf_rental", @$_POST["golf_rental"]);
  update_post_meta($post->ID, "golf_driving_range", @$_POST["golf_driving_range"]);
  update_post_meta($post->ID, "golf_carts", @$_POST["golf_carts"]);
  update_post_meta($post->ID, "golf_dining", @$_POST["golf_dining"]);
  update_post_meta($post->ID, "golf_accommodation", @$_POST["golf_accommodation"]);
  update_post_meta($post->ID, "golf_pga_instructor", @$_POST["golf_pga_instructor"]);
  update_post_meta($post->ID, "golf_pro_shop", @$_POST["golf_pro_shop"]);
  /**Golfcourse Social Media Links**/
  update_post_meta($post->ID, "facebook_url", @$_POST["facebook_url"]);
  update_post_meta($post->ID, "youtube_url", @$_POST[   "youtube_url"]);
  update_post_meta($post->ID, "twitter_url", @$_POST["twitter_url"]);
  update_post_meta($post->ID, "instagram_url", @$_POST["instagram_url"]);
  }
}
add_action( 'admin_init', 'add_golfcourse_meta_boxes' );
add_action( 'save_post', 'save_golfcourse_custom_fields' );
add_post_type_support('golfcourse-reviews', 'thumbnail');









/*****************************************************************************************/
/*****************************************Register User******************************/
/*****************************************************************************************/
add_action('wp_ajax_registerUser', 'registerUser');
add_action('wp_ajax_nopriv_registerUser', 'registerUser');
function registerUser(){

 //echo 'hiii'; die;

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email1'];
 $phone = $_POST['phone'];
 $street = $_POST['street'];
 $city= $_POST['city'];
 $zipcode= $_POST['zipcode'];
 $amount=$_POST['amount'];
 $username="PLA-".implode('-',str_split(rand(100000000,999999999),3));
 $password = $firstname.".".$lastname;
 $to='jochen.mertl@s-e-a.at';
 $from='jochen.mertl@s-e-a.at';
 $subject="New Registartion Has Been Successfully Done In SEA Golf Course Website".date("d-M-Y h:i:s");
$message.="<p><strong>Firstname:</strong> ".$firstname."</p>";
$message.="<p><strong>Lastname:</strong> ".$lastname."</p>";
$message.="<p><strong>Email-Id:</strong> ".$email1."</p>";
$message.="<p><strong>Phone:</strong> ".$phone."</p>";
$message.="<p><strong>Card Type:</strong> ".$amount."</p>";
$message.="<p><strong>Username:</strong> ".$username."</p>";
$message.="<p><strong>Password:</strong> ".$password."</p>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$firstname.' '.$lastname.'<'.$email.'>';
 if(strcmp($amount,"199")==0){
   $credit=12;
 }elseif(strcmp($amount,"99")==0){
   $credit=5;
 }
 //$password = $firstname.".".$lastname;
 $userdata = array(
   'user_login'    =>  $username,
   'first_name' =>  $firstname,
   'last_name' =>  $lastname,
   'user_email' =>  $email,
   'user_pass'   =>  $password,
   'display_name' => $firstname.' '.$lastname
 );
  $user_id = wp_insert_user( $userdata ) ;
  if( is_wp_error($user_id) ){
  echo $user_id->get_error_message();
  }else{
  update_user_meta($user_id, '_phone', $phone); 
  update_user_meta($user_id, '_street', $street); 
  update_user_meta($user_id, '_city', $city); 
  update_user_meta($user_id, '_zipcode', $zipcode); 
  update_user_meta($user_id, '_cardtype', $amount); 
  update_user_meta($user_id, '_credit', $credit); 
  wp_mail($to,$subject,$message,$headers,'');
   echo $user_id .','. 'true';  
 } 
die;
}





/*****************************************************************************************/
/*****************************************oRder******************************/
/*****************************************************************************************/
add_action('wp_ajax_get_product_order', 'get_product_order');
add_action('wp_ajax_nopriv_get_product_order', 'get_product_order');
function get_product_order(){

  // $items = $woocommerce->cart->get_cart();

    global $wpdb;

    $count_product = $_POST['count_product'];
   
     $i=1;
     foreach($count_product as $item => $values) { 
      $product_id = $_POST['product_id'.$i];
      $product_title = $_POST['product_title'.$i];
      $product_quantity = $_POST['product_quantity'.$i];
      $product_price = $_POST['product_price'.$i];
      $flex = $_POST['flex'.$i];
      $loft = $_POST['loft'.$i];
      $user_id = $_POST['user_id'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $email = $_POST['email1'];
      $Address = $_POST['Address'];
      $zip = $_POST['zip'];

      
       $wpdb->insert("golf_product_order",array(
    'product_id'    =>  $product_id,
    'product_title' =>  $product_title,
    'product_quantity' => $product_quantity,
    'product_price' =>  $product_price,
    'flex'=> $flex,
    'loft'=> $loft,
    'user_id'   =>  $user_id,
    'firstname' =>  $firstname,
    'lastname' =>  $lastname,
    'phone' =>  $phone,
    'email' =>  $email,
    'Address' =>  $Address,
    'zip' =>  $zip,
    'product_date'=>date('d/m/y')
 ));

      
  
    $i++; }

  $final_product_id = $_POST['final_product_id'];
   
  $final_order = implode(',',$final_product_id);
       $user_id = $_POST['user_id'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $phone = $_POST['phone'];
       $email = $_POST['email1'];
       $Address = $_POST['Address'];
       $zip = $_POST['zip'];
  


   $wpdb->insert("golf_product_order",array(
    'product_id'    =>  $firstname,
    'product_title' =>  $final_order,
    'product_quantity' => $final_order,
    'product_price' =>  $final_order,
    'user_id'   =>  $user_id,
    'firstname' =>  $firstname,
    'lastname' =>  $lastname,
    'phone' =>  $phone,
    'email' =>  $email,
    'Address' =>  $Address,
    'zip' =>  $zip,
    'product_date'=>date('d/m/y')
 ));


 die();


}



/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_loginUser', 'loginUser');
add_action('wp_ajax_nopriv_loginUser', 'loginUser');
function loginUser(){
   
  extract($_POST); 
    $resp['status'] = false;
  $creds['user_login'] = $username;
  $creds['user_password'] = $password;
  $creds['remember'] = 0;
  $user = wp_signon( $creds, false );
  if ( is_wp_error($user) ){
    $resp['message'] = $user->get_error_message();
    }
    else{
        $userID = $user->ID;
        wp_set_current_user( $userID, $user_login );
        wp_set_auth_cookie( $userID, true, false );
        //do_action( 'wp_login', $username );
        $resp['status'] = true;
        $resp['message'] ='Successfull! now redirecting...';
        $resp['url'] = site_url('/user-panel');
        $resp['user_id'] = $userID;
    }
   $resp=json_encode($resp);
    echo $resp;
    die;
}




/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_check_payment_status', 'check_payment_status');
add_action('wp_ajax_nopriv_check_payment_status', 'check_payment_status');
function check_payment_status()
{
  global $wpdb;
  $userid=$_POST['userid'];
  
  $table='golf_users';
  $selected_data='user_status';
  $payment_status = $wpdb->get_results("SELECT $selected_data FROM $table WHERE (ID = '".$userid."')");

    echo $payment_status[0]->user_status;
  
  
  die();
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_cancel', 'fetch_cancel');
add_action('wp_ajax_nopriv_fetch_cancel', 'fetch_cancel');
function fetch_cancel()
{
  global $wpdb;
   
   $club=$_POST['club'];
   $user_id=$_POST['user_id'];

   $email=$_POST['email'];

   $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

   $user_info = get_userdata($user_id);

   $to=$email;
   $from=$golf_admin_email;
$subject="Buchung stornieren".date("d-M-Y h:i:s");
$message.="<p><strong>Buchung stornieren</strong></p>";
$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong> ".get_the_title($club)."</p>";



$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$golf_admin_email.'';  
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Stornierungsmail an den Benutzer gesendet'; 
  } 
  die;
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_refund_price', 'refund_price');
add_action('wp_ajax_nopriv_refund_price', 'refund_price');
function refund_price()
{
   global $wpdb;
   
   $user_id=$_POST['user_id'];
   
   $email=$_POST['email'];

   $club=$_POST['club'];

   $booking_id=$_POST['booking_id'];

   $Refund_price=$_POST['Refund_price'];

   $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

   $user_coin = get_user_meta($user_id, '_credit', true ); 

   $total_coin_after_refund = $user_coin + $Refund_price;

   $result= update_user_meta($user_id, '_credit', $total_coin_after_refund);

   $user_info = get_userdata($user_id);
    
    
    $subs = '1';
    global $wpdb;
    $table_name ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name 
    SET refund_status = $subs
    WHERE id = $booking_id
    ");
    

    $subs_status = '0';
    global $wpdb;
    $table_name_status ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name_status 
    SET status = $subs_status
    WHERE id = $booking_id
    ");
    
    $club_first_name='S.E.A.';
    $club_last_name='Clubs.';
    $cc_email='office@s-e-a.at'; 
   $to=$email;
   $from='jochen.mertl@s-e-a.at';
 $subject="
Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt".date("d-M-Y h:i:s");
$message.="<p><strong>
Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt</strong></p>";
$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong> ".get_the_title($club)."</p>";
$message.="<p><strong>Refund Price:</strong> ".$Refund_price."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$golf_admin_email.'>';
$headers[] = 'cc: '.$cc_email; 
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Die Buchung wurde storniert und der Benutzerkonto wurde mit dem Betrag für die Benutzerrückerstattung versehen'; 
  } 
  die;
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_confirm', 'fetch_confirm');
add_action('wp_ajax_nopriv_fetch_confirm', 'fetch_confirm');
function fetch_confirm()
{
  global $wpdb;
  $user_id=$_POST['user_id'];
  $club=$_POST['club'];

  
  $no_of_player=$_POST['no_of_player'];
  $email=$_POST['email'];
  $nameofplayer=$_POST['nameofplayer'];
  $booking_id=$_POST['booking_id'];
  $prefer_time=$_POST['prefer_time'];


  



    $selected_data_check = "status";

   $selecte_table_check = "golf_daily_booking"; 


    $check_aleredy_book = $wpdb->get_results("SELECT $selected_data_check FROM $selecte_table_check WHERE id=$booking_id");

   $roo= $check_aleredy_book[0]->status;

    if($roo=='1')
    {
      echo 'You Already Confirm This';
      die;
    }
   

   $your_coin = get_user_meta($user_id, '_credit', true ); 
  
  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

  $total_coin_cut= $golf_course_coin * $no_of_player;

  if($total_coin_cut > $your_coin){
     
     echo 'Current Coin of User is Less to Book This Tee Time';
      die;

  }


    $subs = '1';
    global $wpdb;
    $table_name ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name 
    SET status = $subs
    WHERE id = $booking_id
    ");
    
    
    $subs_refund = '0';
    global $wpdb;
    $table_name_refund ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name_refund 
    SET refund_status = $subs_refund
    WHERE id = $booking_id
    ");
    
      $update_prefer_time= "'".$prefer_time."'";
    global $wpdb;
    $table_name_prefer_update ="golf_daily_booking";
    
    $wpdb->query(
    "
    UPDATE $table_name_prefer_update 
    SET preferred_tee_time = $update_prefer_time
    WHERE id = $booking_id
    ");

   $selected_data= "user_id";

 $selecte_table = "golf_daily_booking"; 

 $userid = $wpdb->get_results("SELECT $selected_data FROM $selecte_table WHERE id=$booking_id");


  
 $user =  $userid[0]->user_id ; 

 //echo $user; die;



  $your_coin = get_user_meta($user_id, '_credit', true ); 
  
  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

  $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

  $total_coin_cut= $golf_course_coin * $no_of_player;

  $remaining_coin = $your_coin - $total_coin_cut;

 $result= update_user_meta($user_id, '_credit', $remaining_coin);
  
  $user_info = get_userdata($user_id);


$first_name="S.E.A.Card";
$last_name="";  
$to=$email;
$from=$golf_admin_email;
$subject="Ihre Buchung wurde bestätigt".date("d-M-Y h:i:s");
$message.="<p><strong>Ihre Buchung wurde bestätigt</strong></p>";
$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong> ".get_the_title($club)."</p>";
$message.="<p><strong>Mitglieder spielen:</strong> ".$no_of_player."</p>";
$message.="<p><strong>Bevorzugte Abschlagzeit:</strong> ".$prefer_time."</p>";
if($nameofplayer!=''){
  $message.="<p><strong>Name des Spielers:</strong> ".$nameofplayer."</p>";
}


$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$first_name.' '.$last_name.'<'.$golf_admin_email.'>'; 

  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Bestätigungsmail an den Benutzer gesendet'; 
  } 
  die;
}


/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_club_confirm_booking', 'club_confirm_booking');
add_action('wp_ajax_nopriv_club_confirm_booking', 'club_confirm_booking');
function club_confirm_booking(){
    global $wpdb;
  extract($_POST);
  
  $r=implode(',', $name_of_booking_person);

  $result = $wpdb->insert('golf_daily_booking', array(
    'user_id' => $user_id,
    'first_name'=>$first_name,
    'last_name'=>$last_name,
    'email' => $email,
    'phone' => $phone, 
    'club_you_want_to_play' =>$club_you_want_to_play,
    'sub_clud_course' =>$sub_golf_couse,
    'date_of_booking' => $date_of_booking,
    'members_playing' => $book_your_seat,
    'name_of_booking_person' => $r,
    'preferred_tee_time' => $preferred_tee_time,
  ));

    if($result){     
     $lastid = $wpdb->insert_id;
          
   //echo $wpdb->last_query;
     
    // $my_meta = get_post_meta($club_you_want_to_play, 'golf_course_coin', true ); 

   
    // $remaining_coin = $your_coins - $my_meta;
$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='office@s-e-a.at';   
$to=$admin_golf_mail;
$from='jochen.mertl@s-e-a.at';
$subject="Neue Golfcourse-Buchungsanfrage zur Bestätigung".date("d-M-Y h:i:s");
$message.="<p><strong>Vorname:</strong> ".$first_name."</p>";
$message.="<p><strong>Nachname:</strong> ".$last_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$email."</p>";
$message.="<p><strong>Telefon:</strong> ".$phone."</p>";
$message.="<p><strong>Club will spielen:</strong> ".get_the_title($club_you_want_to_play)."</p>";
$message.="<p><strong>Datum der Buchung:</strong> ".$date_of_booking."</p>";
$message.="<p><strong>Mitglieder spielen:</strong> ".$book_your_seat."</p>";
if(!empty($r))
{
  $message.="<p><strong>Name des spielenden Mitglieds:</strong> ".$r."</p>";
}
$message.="<p><strong>Bevorzugte Abschlagszeit:</strong> ".$preferred_tee_time."</p>";
$message.="<a href=https://golfcenter.at/confirm/?user_id=".$user_id."&club=".$club_you_want_to_play."&member=".$book_your_seat."&email=".$email."&nameofplayer=".urlencode($r)."&booking_id=".$lastid."&dateofbooking=".$date_of_booking."&preferredteetime=".$preferred_tee_time."><button style='padding:12px 12px 12px 12px;'>click to confirm:</button></a> <a href=https://golfcenter.at/cancel_booking/?user_id=".$user_id."&email=".$email."&club=".$club_you_want_to_play."&booking_id=".$lastid."> <button style='padding:12px 12px 12px 12px;'> Cancel Booking </button></a>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$admin_golf_mail.'>';
$headers[] = 'cc: '.$cc_email; 
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  // update_user_meta($user_id, '_credit', $remaining_coin);

   wp_mail($to,$subject,$message,$headers,'');

  $to1=$_POST['email'];
  $from='jochen.mertl@s-e-a.at';
  $subject1="Ihre Buchungsanfrage".date("d-M-Y h:i:s");
  $message1.="<p>Lieber Herr ".$first_name.$last_name."</p>";
  $message1.="<p>wir möchten uns recht herzlich für Ihr Vertrauen und Ihre Buchungsanfrage bei Golfcenter.at bedanken. </p>";
  $message1.="<br/>";
  $message1.="<p><strong>Vorname:</strong> ".$first_name."</p>";
  $message1.="<p><strong>Nachname:</strong> ".$last_name."</p>";
  $message1.="<p><strong>E-Mail-ID:</strong> ".$email."</p>";
  $message1.="<p><strong>Telefon:</strong> ".$phone."</p>";
  $message1.="<p><strong>Club will spielen:</strong> ".get_the_title($club_you_want_to_play)."</p>";
  $message1.="<p><strong>Datum der Buchung:</strong> ".$date_of_booking."</p>";
  $message1.="<p><strong>Mitglieder spielen:</strong> ".$book_your_seat."</p>";
  if(!empty($r))
  {
    $message1.="<p><strong>Name des spielenden Mitglieds:</strong> ".$r."</p>";
  }
  $message1.="<p><strong>Bevorzugte Abschlagszeit:</strong> ".$preferred_tee_time."</p>";
  
  $message1.="<br/>";

  $message1.="<p>Ihre Buchungsanfrage ist derzeit in Arbeit. Sobald diese Bestätigt wird erhalten Sie eine Buchungsbestätigung per E-Mail. Ihren Buchungsstatus können Sie auch jederzeit online in Ihrem User-Dashboard auf golfcenter.at einsehen.

     https://golfcenter.at/user-panel/</p>";

   $message1.="<p>Wir wünschen Ihnen ein Schönes Spiel mit Ihrer S.E.A.CARD </p>"; 

  $headers = array('Content-Type: text/html; charset=UTF-8');
  $headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$admin_golf_mail.'>';

  wp_mail($to1,$subject1,$message1,$headers,'');

 
 
  echo 'Ihre Buchung wird gerade bearbeitet. Bestätigungsmail an Ihre Mail-ID gesendet'; 
  } 

}
  die;
}
/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_logout_now', 'logout_now');
add_action('wp_ajax_nopriv_logout_now', 'logout_now');
function logout_now(){
  wp_logout();  
  die();
}
/******************************************************************************/
/******************************************************************************/
add_action( 'admin_menu', 'golfcourseBooking' );
function golfcourseBooking()
{
  add_menu_page(
        'GolfClub Bookings',     
        'GolfClub Bookings',    
        'manage_options',   
        'Location',    
        'golfcourseBooking_render', 
        'dashicons-location-alt',
    25
        );
}



add_action( 'admin_menu', 'golfcourseCoupan' );
function golfcourseCoupan()
{
  add_menu_page(
        'GolfClub Coupan',     
        'GolfClub Coupan',    
        'manage_options', 
        'Location1',    
        'golfcourseCoupan_render', 
        'dashicons-admin-generic',
    25
        );
}


add_action( 'admin_menu', 'productorder' );
function productorder()
{
  add_menu_page(
        'Product Order',     
        'Product Order',    
        'manage_options',   
        'Location2',    
        'productorder_render', 
        'dashicons-media-interactive',
    25
        );
}

add_action( 'admin_menu', 'userrequests' );
function userrequests()
{
  add_menu_page(
        'User Requests',     
        'User Requests',    
        'manage_options',   
        'Location3',    
        'userrequests_render', 
        'dashicons-groups',
    25
        );
}


/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_book_id', 'fetch_book_id');
add_action('wp_ajax_nopriv_fetch_book_id', 'fetch_book_id');
function fetch_book_id()
{
  global $wpdb;
  $book_id=$_POST['book_id'];
  
  $my_meta = get_post_meta($book_id, 'golf_course_coin', true ); 

  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}




/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_sub_courses', 'fetch_sub_courses');
add_action('wp_ajax_nopriv_fetch_sub_courses', 'fetch_sub_courses');
function fetch_sub_courses()
{
   global $wpdb;

  $book_id=$_POST['book_id'];

  $my_meta=array();
  $my_meta1=array();

   if(get_post_meta($book_id, 'first_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'first_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'first_sub_course', true ); 
     
  }

   if(get_post_meta($book_id, 'second_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'second_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'second_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'third_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'third_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'third_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'fourth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'fourth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'fourth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'fifth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'fifth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'fifth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'sixth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'sixth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'sixth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'seventh_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'seventh_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'seventh_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'eighth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'eighth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'eighth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'ninth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'ninth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'ninth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'tenth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'tenth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'tenth_sub_course', true ); 
     
  }

  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_maximum_clubplayer', 'fetch_maximum_clubplayer');
add_action('wp_ajax_nopriv_fetch_maximum_clubplayer', 'fetch_maximum_clubplayer');
function fetch_maximum_clubplayer()
{
  global $wpdb;
  $book_id=$_POST['book_id'];
  
  $my_meta = get_post_meta($book_id, 'max_player_per_day', true ); 

  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_check_exist_email', 'check_exist_email');
add_action('wp_ajax_nopriv_check_exist_email', 'check_exist_email');
function check_exist_email()
{
  global $wpdb;
  $email=$_POST['email'];
  
  $table='golf_users';
  $exist_email = $wpdb->get_results("SELECT * FROM $table WHERE (user_email = '".$email."')");

  if(empty($exist_email ))
  {
       echo 'failed';

  }else{

        echo 'sucess';
  }
  
  
  
  die();
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_date', 'fetch_date');
add_action('wp_ajax_nopriv_fetch_date', 'fetch_date');
function fetch_date()
{
  global $wpdb;
  $book_id=$_POST['book_id'];

  $my_date=array();
  
  $my_meta = get_post_meta($book_id, 'date_of_golf', true ); 

  foreach ($my_meta as $my) {

   $my_date[] =  date("j-n-Y", strtotime($my)); 
    

  }

  
   //print_r($my_meta); die;
  
  if( is_wp_error($my_date) ){
  echo $my_date->get_error_message();
  }
  else{
   echo json_encode($my_date);
  }
  die();
}




/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_email_id', 'fetch_email_id');
add_action('wp_ajax_nopriv_fetch_email_id', 'fetch_email_id');
function fetch_email_id()
{
  global $wpdb;
  $book_id=$_POST['book_id'];
  
  $my_meta = get_post_meta($book_id, 'golf_admin_mail_id', true ); 

  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_convert_user_gold', 'convert_user_gold');
add_action('wp_ajax_nopriv_convert_user_gold', 'convert_user_gold');
function convert_user_gold()
{

   $id = $_POST['userid'];
  global $wpdb;
  
  // $table='golf_users';

  //  $total_book = $wpdb->get_results("SELECT max(ID) AS alias_id FROM $table");

   $user_id=$id;

   $credit='5';

   $cardtype='99';

   $my_meta = update_user_meta($user_id, '_credit', $credit); 

   $my_meta1 = update_user_meta($user_id, '_cardtype', $cardtype); 

   //echo $total_book1; die;
  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}


/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_convert_user_platinium', 'convert_user_platinium');
add_action('wp_ajax_nopriv_convert_user_platinium', 'convert_user_platinium');
function convert_user_platinium()
{

  $id = $_POST['userid'];
  
  global $wpdb;
  
  // $table='golf_users';

  //  $total_book = $wpdb->get_results("SELECT max(ID) AS alias_id FROM $table");

   $user_id=$id;

   $credit='12';
    $cardtype='199';

   $my_meta = update_user_meta($user_id, '_credit', $credit); 

   $my_meta1 = update_user_meta($user_id, '_cardtype', $cardtype); 

   //echo $total_book1; die;
  
  if( is_wp_error($my_meta) ){
  echo $my_meta->get_error_message();
  }
  else{
   echo json_encode($my_meta);
  }
  die();
}




/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_available_seat', 'fetch_available_seat');
add_action('wp_ajax_nopriv_fetch_available_seat', 'fetch_available_seat');
function fetch_available_seat()
{
  global $wpdb;
  $book_id=$_POST['book_id'];

  $date= $_POST['date'];
  
  $num='1';

  $table='golf_daily_booking';



  $total_book = $wpdb->get_results("SELECT SUM(members_playing) AS alias_name FROM $table WHERE (club_you_want_to_play = '".$book_id."' AND date_of_booking = '".$date."'AND status = '".$num."')");

  
   
  $total_book1=$total_book[0]->alias_name; 

  $my_meta1 = get_post_meta($book_id, 'max_player_per_day', true ); 



  if(empty($total_book))
  {
    $my_meta = $my_meta1 - 0;
  }else{
    $my_meta = $my_meta1 - $total_book1;
  }

  
  if( is_wp_error($my_meta) ){
   echo $my_meta->get_error_message();
   }
   else{
    echo json_encode($my_meta);
   }
  die();
}


/******************************************************************************/
/******************************************************************************/

// user edit profile

add_action('wp_ajax_edit_form', 'edit_form');
add_action('wp_ajax_nopriv_edit_form', 'edit_form');
function edit_form(){ 

 $display_name = $_POST['display_name'];
 $user_email   = $_POST['user_email'];
 $first_name   = $_POST['first_name'];
 $last_name    = $_POST['last_name'];
 $user_mobile  = $_POST['user_mobile'];
 $_heimatclub  = $_POST['_heimatclub'];
 $_handicap  = $_POST['_handicap'];
 
$user_id=get_current_user_id();
 
 $userdata = array(
   'ID'          => $user_id,
   'display_name'=> $display_name,
   'user_email'  => $user_email,
   'first_name'  => $first_name,
   'last_name'   => $last_name,   
 );

   $user_id = wp_update_user($userdata);
  
  if( is_wp_error($user_id) ){
  echo $user_id->get_error_message();
  }else{
   update_user_meta($user_id, '_phone', $user_mobile);
   update_user_meta($user_id, '_heimatclub', $_heimatclub);
   update_user_meta($user_id, '_handicap', $_handicap);  
  echo 'Benutzeraktualisierung erfolgreich';  
 } 

 die();

 }



// update password

add_action('wp_ajax_update_password', 'update_password');
add_action('wp_ajax_nopriv_update_password', 'update_password');
function update_password(){ 

  global $wpdb;

 $fpassword = $_POST['fpassword'];
 $userid = $_POST['userid'];
 $username = $_POST['username'];

 
 
 wp_set_password( $fpassword, $userid ) ;

 $wpdb->update($wpdb->users, array('user_login' => $username), array('ID' => $userid));

 $userData=get_userdata($userid);
               
 $first_name=$userData->first_name;

 $last_name = $userData->last_name;

 $email = $userData->user_email;


$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='office@s-e-a.at';   
$to=$email;
$from='jochen.mertl@s-e-a.at';
$subject="Neuer Benutzername und Passwort".date("d-M-Y h:i:s");
$message.="<p><strong>Vorname:</strong> ".$first_name."</p>";
$message.="<p><strong>Nachname:</strong> ".$last_name."</p>";

$message.="<p><strong>New Username:</strong> ".$username."</p>";
$message.="<p><strong>New Passwort:</strong> ".$fpassword."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$email.'>';
$headers[] = 'cc: '.$cc_email; 
  
   wp_mail($to,$subject,$message,$headers,'');
 
  if( is_wp_error($userid) ){
  echo $userid->get_error_message();
  }else{
   
  echo 'Ihr Benutzername und Ihr Passwort wurden erfolgreich aktualisiert';  
 } 

 die();

 }



// golf form data send in mail by jeetu


add_action('wp_ajax_versicherung', 'versicherung');
add_action('wp_ajax_nopriv_versicherung', 'versicherung');
function versicherung(){ 

  global $wpdb;

  array_pop($_POST);   

  $result = $_POST;   
  
  foreach ($result as $key => $value) {  
           $insert = array(
          'inputkey' => $key,
          'inputvalue' => $value,
          'formname'=> 'versicherung'
         );

         $wpdb->insert('form_inputs', $insert);
  }

$name   = $_POST['name'];
$email  = $_POST['email']; 

$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com';   
$to='jm@s-e-a.at';
$from='jm@s-e-a.at';
$subject="Versicherung ".date("d-M-Y h:i:s");
$message.="<p><strong>Name: </strong> ".$name."</p>";
$message.="<p><strong>Email: </strong> ".$email."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$from.'>';
$headers[] = 'cc: '.$cc_email; 
 
if($name){
    wp_mail($to,$subject,$message,$headers,'');
  echo 'Thank you for contacting us...';  
  }else{
   
  echo 'Error...! some input fields may be missing! Try again...';  
 } 

 die();

 }


 // ....................aktionen_1..................

add_action('wp_ajax_aktionen_1', 'aktionen_1');
add_action('wp_ajax_nopriv_aktionen_1', 'aktionen_1');
function aktionen_1(){
 
    global $wpdb;

    array_pop($_POST);
    $result = $_POST;

    foreach ($result as $key => $value) {
      $insert = array(
        'inputkey'    =>  $key,
        'inputvalue'  =>  $value,
        'formname'    =>  'aktionen_1'
      );

      $wpdb->insert('form_inputs', $insert);
    }


$name       = $_POST['input_1'];
$email      = $_POST['input_8'];
$card       = $_POST['input_2'];
$state      = $_POST['input_3'];
$hausnummer = $_POST['input_4'];
$ort        = $_POST['input_5'];
$hcp        = $_POST['input_12'];
$telephone  = $_POST['input_7'];
$gdate      = $_POST['input_9'];

$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com';   
$to='jm@s-e-a.at';
$from='jm@s-e-a.at';
$subject="Aktionen ".date("d-M-Y h:i:s");
$message.="<p><strong>Name: </strong> ".$name."</p>";
$message.="<p><strong>Email: </strong> ".$email."</p>";
$message.="<p><strong>Kartennummer der beretis abonnierten: </strong> ".$card."</p>";
$message.="<p><strong>Straße: </strong> ".$state."</p>";
$message.="<p><strong>Hausnummer: </strong> ".$hausnummer."</p>";
$message.="<p><strong>Ort: </strong> ".$ort."</p>";
$message.="<p><strong>Hcp: </strong> ".$hcp."</p>";
$message.="<p><strong>Telephone: </strong> ".$telephone."</p>";
$message.="<p><strong>Geb. Datum: </strong> ".$gdate."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$from.'>';
$headers[] = 'cc: '.$cc_email; 
  
    
  if($name){
    wp_mail($to,$subject,$message,$headers,'');
  echo 'Thank you for contacting us...';  
  }else{
   
  echo 'Error...! some input fields may be missing! Try again...';  
 } 

 die();

 }

 


// ....................golfDetailThird..................

add_action('wp_ajax_golfDetailThird', 'golfDetailThird');
add_action('wp_ajax_nopriv_golfDetailThird', 'golfDetailThird');
function golfDetailThird(){ 

    global $wpdb;

    array_pop($_POST);
    $result = $_POST;

    foreach ($result as $key => $value) {
      $insert = array(
        'inputkey'    =>  $key,
        'inputvalue'  =>  $value,
        'formname'    =>  'golfDetailThird'
      );

      $wpdb->insert('form_inputs', $insert);
    }

$fname        = $_POST['fname'];
$lname        = $_POST['lname'];
$state        = $_POST['state'];
$plz          = $_POST['plz'];
$ort          = $_POST['ort'];
$geburtsdatum = $_POST['geburtsdatum'];
$beruf        = $_POST['beruf'];
$telphone     = $_POST['telphone'];
$email        = $_POST['email'];
$geworben     = $_POST['geworben'];


$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com';   
$to='jm@s-e-a.at';
$from='jm@s-e-a.at';
$subject="Mitgliedschaften ".date("d-M-Y h:i:s");
$message.="<p><strong>Nachname: </strong> ".$fname."</p>";
$message.="<p><strong>Vorname: </strong> ".$lname."</p>";
$message.="<p><strong>Straße: </strong> ".$state."</p>";
$message.="<p><strong>PLZ: </strong> ".$plz."</p>";
$message.="<p><strong>Ort: </strong> ".$ort."</p>";
$message.="<p><strong>Geburtsdatum: </strong> ".$geburtsdatum."</p>";
$message.="<p><strong>Beruf: </strong> ".$beruf."</p>";
$message.="<p><strong>Telephone: </strong> ".$telphone."</p>";
$message.="<p><strong>E-Mail: </strong> ".$email."</p>";
$message.="<p><strong>Referenzen/geworben von: </strong> ".$geworben."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$from.'>';
$headers[] = 'cc: '.$cc_email;  
  
 
  if($fname){
    wp_mail($to,$subject,$message,$headers,'');
  echo 'Thank you for contacting us...';  
  }else{
   
  echo 'Error...! some input fields may be missing! Try again...';  
 } 

 die();

 }



// ....................golfgreen..................

add_action('wp_ajax_golfGreen', 'golfGreen');
add_action('wp_ajax_nopriv_golfGreen', 'golfGreen');
function golfGreen(){ 

  global $wpdb;

    array_pop($_POST);
    $result = $_POST;

    foreach ($result as $key => $value) {
      $insert = array(
        'inputkey'    =>  $key,
        'inputvalue'  =>  $value,
        'formname'    =>  'golfGreen'
      );

      $wpdb->insert('form_inputs', $insert);
    }

$card     = $_POST['card'];
$email    = $_POST['email'];
$telphone = $_POST['telphone'];


$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com';   
$to='jm@s-e-a.at';
$from='jm@s-e-a.at';
$subject="Greenfee Specials ".date("d-M-Y h:i:s");
$message.="<p><strong>S.E.A.Card Nummer: </strong> ".$card."</p>";
$message.="<p><strong>E-Mail: </strong> ".$email."</p>";
$message.="<p><strong>Telephone: </strong> ".$telphone."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$from.'>';
$headers[] = 'cc: '.$cc_email; 
  
   if($card){
    wp_mail($to,$subject,$message,$headers,'');
  echo 'Thank you for contacting us...';  
  }else{
   
  echo 'Error...! some input fields may be missing! Try again...';  
 } 

 die();

 }




 // ....................golfreisen..................

add_action('wp_ajax_golfreisen', 'golfreisen');
add_action('wp_ajax_nopriv_golfreisen', 'golfreisen');
function golfreisen(){ 

  global $wpdb;  

    array_pop($_POST);
    $result = $_POST;

    foreach ($result as $key => $value) {
      $insert = array(
        'inputkey'    =>  $key,
        'inputvalue'  =>  $value,
        'formname'    =>  'golfreisen'
      );

      $wpdb->insert('form_inputs', $insert);
    }
 
$name_lt_reisepass = $_POST['name_lt_reisepass'];
$email = $_POST['email'];
$state = $_POST['state'];
$geburtsdatum = $_POST['geburtsdatum'];
$plz = $_POST['plz'];
$heimatclub = $_POST['heimatclub'];
$telefonnummer = $_POST['telefonnummer'];
$handicap = $_POST['handicap'];
$unternehmen = $_POST['unternehmen'];
$zimmer = $_POST['zimmer'];



$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com';   
$to='jm@s-e-a.at';
$from='jm@s-e-a.at';
$subject="Golfreisen ".date("d-M-Y h:i:s");
$message.="<p><strong>Name lt. Reisepass:</strong> ".$name_lt_reisepass."</p>";
$message.="<p><strong>Email:</strong> ".$email."</p>";
$message.="<p><strong>Straße, Nr:</strong> ".$state."</p>";
$message.="<p><strong>Geburtsdatum Reisepassnummer gültig bis:</strong> ".$geburtsdatum."</p>";
$message.="<p><strong>PLZ, Ort:</strong> ".$plz."</p>";
$message.="<p><strong>Heimatclub:</strong> ".$heimatclub."</p>";
$message.="<p><strong>Telefonnummer:</strong> ".$telefonnummer."</p>";
$message.="<p><strong>Handicap:</strong> ".$handicap."</p>";
$message.="<p><strong>Unternehmen:</strong> ".$unternehmen."</p>";
$message.="<p><strong>Ich teile mein Zimmer mit:</strong> ".$zimmer."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$from.'>';
$headers[] = 'cc: '.$cc_email; 
  
   if($email){
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Thank you for contacting us...';  
  }else{
   
  echo 'Error...! some input fields may be missing! Try again...';  
 } 

 die();

 }





// golf form data ended by jeetu



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_check_exist_username1', 'check_exist_username1');
add_action('wp_ajax_nopriv_check_exist_username1', 'check_exist_username1');
function check_exist_username1()
{
   global $wpdb;
   $username=$_POST['username'];

  // echo $username; die;
   $table='golf_users';
    $exist_email = $wpdb->get_results("SELECT * FROM $table WHERE (user_login = '".$username."' OR user_email ='".$username."')");

  //echo $wpdb->last_query; die();

   if(empty($exist_email ))
   {
        echo 'failed';

   }else{

         echo 'sucess';
   }
  
  
  
   die();
}


/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_update_username', 'update_username');
add_action('wp_ajax_nopriv_update_username', 'update_username');
function update_username()
{
   global $wpdb;
   $username=$_POST['username'];

    $user1 = get_user_by('login',$username);

    if($user1){
      $user_id = $user1->ID; 
    }else {
          
          $user2 = get_user_by('email',$username);
    
          $user_id = $user2->ID; 

    }
      
    

       echo $user_id;
   
   
   
   die();
}





function golfcourseBooking_render()
{   
 include(get_template_directory() . '/list-of-club-bookings.php');
}

function golfcourseCoupan_render()
{   
 include(get_template_directory() . '/golf_coupan.php');
}


function productorder_render()
{   
 include(get_template_directory() . '/product_order.php');
}

function userrequests_render()
{   
 include(get_template_directory() . '/form-input.php');
}

/******************************************************************************/
/******************************************************************************/

/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_fetch_confirm_admin', 'fetch_confirm_admin');
add_action('wp_ajax_nopriv_fetch_confirm_admin', 'fetch_confirm_admin');
function fetch_confirm_admin()
{
  global $wpdb;
  

  $user_id = $_POST['user_id'];
  $id = $_POST['id'];
  $time = $_POST['time'];

  


  $selected_data_check_full = "*";

  $selecte_table_check_full = "golf_daily_booking"; 


  $check_aleredy_book_full = $wpdb->get_results("SELECT $selected_data_check_full FROM $selecte_table_check_full WHERE id=$id");

  $club=$check_aleredy_book_full[0]->club_you_want_to_play;
  $no_of_player=$check_aleredy_book_full[0]->members_playing;
  $email=$check_aleredy_book_full[0]->email;
  $nameofplayer=$check_aleredy_book_full[0]->name_of_booking_person;
  $booking_id=$_POST['id']  ;
  $prefer_time=$check_aleredy_book_full[0]->preferred_tee_time;



  
  


    $selected_data_check = "status";

   $selecte_table_check = "golf_daily_booking"; 


    $check_aleredy_book = $wpdb->get_results("SELECT $selected_data_check FROM $selecte_table_check WHERE id=$booking_id");

   $roo= $check_aleredy_book[0]->status;

    if($roo=='1')
    {
      echo 'You Already Confirm This';
      die;
    }
   

   $your_coin = get_user_meta($user_id, '_credit', true ); 
  
  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

  $total_coin_cut= $golf_course_coin * $no_of_player;

  if($total_coin_cut > $your_coin){
     
     echo 'Current Coin of User is Less to Book This Tee Time';
      die;

  }


    $subs = '1';
    global $wpdb;
    $table_name ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name 
    SET status = $subs
    WHERE id = $booking_id
    ");
    
    
    $subs_refund = '0';
    global $wpdb;
    $table_name_refund ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name_refund 
    SET refund_status = $subs_refund
    WHERE id = $booking_id
    ");
    
      $update_prefer_time= "'".$time."'";
    global $wpdb;
    $table_name_prefer_update ="golf_daily_booking";
    
    $wpdb->query(
    "
    UPDATE $table_name_prefer_update 
    SET preferred_tee_time = $update_prefer_time
    WHERE id = $booking_id
    ");

   $selected_data= "user_id";

 $selecte_table = "golf_daily_booking"; 

 $userid = $wpdb->get_results("SELECT $selected_data FROM $selecte_table WHERE id=$booking_id");


  
 $user =  $userid[0]->user_id ; 

 //echo $user; die;



  $your_coin = get_user_meta($user_id, '_credit', true ); 
  
  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

  $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

  $total_coin_cut= $golf_course_coin * $no_of_player;

  $remaining_coin = $your_coin - $total_coin_cut;

 $result= update_user_meta($user_id, '_credit', $remaining_coin);
  
  $user_info = get_userdata($user_id);


$first_name="S.E.A.Card";
$last_name="";  
$to=$email;
$from='jochen.mertl@s-e-a.at';
$subject="Ihre Buchung wurde bestätigt".date("d-M-Y h:i:s");
$message.="<p><strong>Ihre Buchung wurde bestätigt</strong></p>";
$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong> ".get_the_title($club)."</p>";
$message.="<p><strong>Mitglieder spielen:</strong> ".$no_of_player."</p>";
$message.="<p><strong>Bevorzugte Abschlagzeit:</strong> ".$time."</p>";
if($nameofplayer!=''){
  $message.="<p><strong>Name des Spielers:</strong> ".$nameofplayer."</p>";
}


$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$first_name.' '.$last_name.'<'.$golf_admin_email.'>'; 

  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Bestätigungsmail an den Benutzer gesendet'; 
  } 
  die;
}



/*****************************************************************************************/
/*****************************************************************************************/
/*****************************************************************************************/
add_action('wp_ajax_refund_price_admin', 'refund_price_admin');
add_action('wp_ajax_nopriv_refund_price_admin', 'refund_price_admin');
function refund_price_admin()
{
   

   global $wpdb;
  

  $user_id = $_POST['user_id'];
  $id = $_POST['id'];

  


  $selected_data_check_full = "*";

  $selecte_table_check_full = "golf_daily_booking"; 


  $check_aleredy_book_full = $wpdb->get_results("SELECT $selected_data_check_full FROM $selecte_table_check_full WHERE id=$id");



  $roo1= $check_aleredy_book_full[0]->status;

  if($roo1==0)
  {
    echo 'Please confirm it than you can cancel';
      die;
  }


  $roo= $check_aleredy_book_full[0]->refund_status;

    if($roo=='1')
    {
      echo 'You Already Refund The Amount';
      die;
    }




  $club=$check_aleredy_book_full[0]->club_you_want_to_play;
  $no_of_player=$check_aleredy_book_full[0]->members_playing;
  $email=$check_aleredy_book_full[0]->email;
  $nameofplayer=$check_aleredy_book_full[0]->name_of_booking_person;
  $booking_id=$_POST['id']  ;
  $prefer_time=$check_aleredy_book_full[0]->preferred_tee_time;

   
   $member_playing = $check_aleredy_book_full[0]->members_playing; 

   $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

   $Refund_price = $golf_course_coin * $member_playing ; 



   $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

   $user_coin = get_user_meta($user_id, '_credit', true ); 



   $total_coin_after_refund = $user_coin + $Refund_price;

   $result= update_user_meta($user_id, '_credit', $total_coin_after_refund);

   // echo $user_id;

   // echo $result;

   // echo $club;

   // echo $booking_id;
   // echo $nameofplayer;
   // echo $member_playing;
   // echo $golf_course_coin;
   // echo $Refund_price;
   // echo $total_coin_after_refund;

   // die();


   $user_info = get_userdata($user_id);
    
    
    $subs = '1';
    global $wpdb;
    $table_name ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name 
    SET refund_status = $subs
    WHERE id = $booking_id
    ");
    

    $subs_status = '0';
    global $wpdb;
    $table_name_status ="golf_daily_booking";

    $wpdb->query(
    "
    UPDATE $table_name_status 
    SET status = $subs_status
    WHERE id = $booking_id
    ");
    
     $club_first_name='S.E.A.';
    $club_last_name='Clubs.';
    $cc_email='office@s-e-a.at'; 
 $to=$email;
 $from='jochen.mertl@s-e-a.at';
 $subject="Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt".date("d-M-Y h:i:s");
$message.="<p><strong>Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt</strong></p>";
$message.="<p><strong>Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt</strong></p>";

$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong>".get_the_title($club)."</p>";
$message.="<p><strong>Refund Price:</strong> ".$Refund_price."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$golf_admin_email.'>';
$headers[] = 'cc: '.$cc_email; 
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Die Buchung wurde storniert und der Benutzerkonto wurde mit dem Betrag für die Benutzerrückerstattung versehen'; 
  } 
  die;
}




/*****************************************************************************************/
/*****************************************Register Coupan******************************/
/*****************************************************************************************/
add_action('wp_ajax_registerCoupan', 'registerCoupan');
add_action('wp_ajax_nopriv_registerCoupan', 'registerCoupan');
function registerCoupan(){

 //echo 'error hai'; 

 $coupan_name = $_POST['coupan_name'];
 $coupan_price = $_POST['price'];
 $card_name = $_POST['card'];
  
 $userdata = array(
   'coupan_name'  =>  $coupan_name,
   'price'        =>  $coupan_price,
   'action'        =>  $card_name,    
 );
global $wpdb;
$tablename = 'golf_coupan';
$wpdb->insert( $tablename, $userdata);
 
 die;
   
 } 
 



 
     /************************Delete Coupan******************************/

add_action('wp_ajax_deleteCoupan', 'deleteCoupan');
add_action('wp_ajax_nopriv_deleteCoupan', 'deleteCoupan');
function deleteCoupan(){
$id = $_POST['id'];
  
global $wpdb;

 global $wpdb;
    $table_name ="golf_coupan";

    $wpdb->query(
    "
    DELETE  FROM $table_name 
     WHERE id = '$id'");

echo 'Delete Successfully';
 
 die;
   
 } 


/************************Update Coupan******************************/

add_action('wp_ajax_hello', 'hello');
add_action('wp_ajax_nopriv_hello', 'hello');
function hello(){


   $id = "'".$_POST['plan_id']."'";
  
   $coupan_name = "'".$_POST['coupan_name']."'";
   $price = "'".$_POST['price']."'";
   $card = "'".$_POST['card']."'";
 
   
 
    global $wpdb;


    $table_name ="golf_coupan";

      
    

    $wpdb->query(
    "
    UPDATE $table_name 
    SET coupan_name = $coupan_name, price=$price, action = $card
    WHERE id = $id
    ");

    echo 'true';
   
    
 die;

 } 
 
/************************Edit Coupan******************************/

add_action('wp_ajax_editCoupan', 'editCoupan');
add_action('wp_ajax_nopriv_editCoupan', 'editCoupan');
function editCoupan(){



 
  $id = $_POST['id'];
  
 
    global $wpdb;


    $table_name ="golf_coupan";    

  $data =  $wpdb->get_results("SELECT * FROM $table_name WHERE id=$id");


  echo json_encode($data); die;

 } 

/************************Exist Coupan******************************/

 add_action('wp_ajax_check_coupon_exist', 'check_coupon_exist');
add_action('wp_ajax_nopriv_check_coupon_exist', 'check_coupon_exist');
function check_coupon_exist(){

  $id = "'".$_POST['code_coupon']."'";
      
    global $wpdb;
    $table_name ="golf_coupan";    

 $data =  $wpdb->get_results("SELECT * FROM $table_name where coupan_name = $id");

  $resp=json_encode($data);
     echo $resp;
  

  die;
     

  }


  /*****************************************************************************************/ 
  // flex or loft value added in db
add_action('wp_ajax_product_addon', 'product_addon');
add_action('wp_ajax_nopriv_product_addon', 'product_addon');
function product_addon()
{
    $product_type_name = $_POST['product_type_name'];
    $product_type = $_POST['product_type'];
    $product_type_name1 = $_POST['product_type_name1'];
    $product_type1 = $_POST['product_type1'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $user_id = $_POST['user_id'];
    $entry_date= date('d/m/y');

     global $wpdb;
 
  $wpdb->insert("golf_product_addon",array(
    'product_type_name'=>  $product_type_name,
    'product_type'=>  $product_type,
    'product_id'=> $product_id,
    'product_name'=>  $product_name,
    'userid'=>  $user_id,
    'entry_date'=>  $entry_date
 ));


  $wpdb->insert("golf_product_addon",array(
    'product_type_name'=>  $product_type_name1,
    'product_type'=>  $product_type1,
    'product_id'=> $product_id,
    'product_name'=>  $product_name,
    'userid'=>  $user_id,
    'entry_date'=>  $entry_date
 ));

  //echo  $wpdb->last_query;


echo 'Product Added';

    die();
}


// without flex or loft value added in db
add_action('wp_ajax_product_addon1', 'product_addon1');
add_action('wp_ajax_nopriv_product_addon1', 'product_addon1');
function product_addon1()
{
    $product_type_name = $_POST['product_type_name2'];
    $product_type = $_POST['product_type2'];
    $product_type_name1 = $_POST['product_type_name3'];
    $product_type1 = $_POST['product_type3'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $user_id = $_POST['user_id'];
    $entry_date= date('d/m/y');

     global $wpdb;
 
  $wpdb->insert("golf_product_addon",array(
    'product_type_name'=>  $product_type_name,
    'product_type'=>  $product_type,
    'product_id'=> $product_id,
    'product_name'=>  $product_name,
    'userid'=>  $user_id,
    'entry_date'=>  $entry_date
 ));


  $wpdb->insert("golf_product_addon",array(
    'product_type_name'=>  $product_type_name1,
    'product_type'=>  $product_type1,
    'product_id'=> $product_id,
    'product_name'=>  $product_name,
    'userid'=>  $user_id,
    'entry_date'=>  $entry_date
 ));

  //echo  $wpdb->last_query;


echo 'Product Added';

    die();
}


  /**************************delete cart product***************************************************************/

 add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
    add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');
function remove_item_from_cart() {
    $cart = WC()->instance()->cart;
    $id = $_POST['product_id'];
    $cart_id = $cart->generate_cart_id($id);
    $cart_item_id = $cart->find_product_in_cart($cart_id);

    if($cart_item_id){
       $cart->set_quantity($cart_item_id, 0);
       return true;
    } 
    return false;
    }

/****************************insert dicount user*************************************************************/
add_action('wp_ajax_product_user_discount', 'product_user_discount');
add_action('wp_ajax_nopriv_product_user_discount', 'product_user_discount');
function product_user_discount()
{
     global $wpdb; 
        
        $table_name ="golf_product_user_discount";
        $product_id = $_POST['product_id'];
        $user_id = $_POST['user_id'];
        $entry_date= date('d/m/y');

        $data1 =  $wpdb->get_results("SELECT * FROM $table_name  WHERE userid = '$user_id' AND  productid = '$product_id' AND entry_date = '$entry_date'");

        if(empty($data1)){
              $wpdb->insert("golf_product_user_discount",array(
              'productid'=> $product_id,
              'userid'=>  $user_id,
              'entry_date'=>  $entry_date
           ));
        }

          echo 'sucess';
          die();

       
 }


/****************************delete dicount user*************************************************************/

        add_action('wp_ajax_product_user_discount_delete', 'product_user_discount_delete');
add_action('wp_ajax_nopriv_product_user_discount_delete', 'product_user_discount_delete');
function product_user_discount_delete()
{
    
     
     global $wpdb; 
        
        $table_name ="golf_product_user_discount";
        $product_id = $_POST['product_id'];
        $user_id = $_POST['user_id'];
        $entry_date= date('d/m/y');

          $table_name ="golf_product_user_discount";

                $wpdb->query(
                "DELETE  FROM $table_name 
                 WHERE userid = '$user_id' AND  productid = '$product_id' AND entry_date = '$entry_date' ");

                 echo 'sucess';
          die();

}

       




