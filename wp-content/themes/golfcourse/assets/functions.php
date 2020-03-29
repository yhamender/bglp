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
add_action('init', 'customCreateGolfCourse');
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
  <br/>
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
 $to='erhamender@gmail.com';
 $from=$_POST['email1'];
 $subject="New Registartion Has Been Successfully Done In SEA Golf Course Website".date("d-M-Y h:i:s");
$message.="<p><strong>Firstname:</strong> ".$firstname."</p>";
$message.="<p><strong>Lastname:</strong> ".$lastname."</p>";
$message.="<p><strong>Email-Id:</strong> ".$email1."</p>";
$message.="<p><strong>Phone:</strong> ".$phone."</p>";
$message.="<p><strong>Card Type:</strong> ".$amount."</p>";
$message.="<p><strong>Username:</strong> ".$username."</p>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$firstname.' '.$lastname.'<'.$email.'>';
 if(strcmp($amount,"199")==0){
   $credit=12;
 }elseif(strcmp($amount,"99")==0){
   $credit=5;
 }
 $password = $_POST['password'];
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
  echo 'true';  
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
      
      //echo $product_quantity; die();

      $product_price = $_POST['product_price'.$i];
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
    'user_id'   =>  $user_id,
    'firstname' =>  $firstname,
    'lastname' =>  $lastname,
    'phone' =>  $phone,
    'email' =>  $email,
    'Address' =>  $Address,
    'zip' =>  $zip
 ));

      // echo $wpdb->last_query;
  
    $i++; }

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
    

 $to=$email;
 $from=$golf_admin_email;
 $subject="
Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt".date("d-M-Y h:i:s");
$message.="<p><strong>
Ihre Buchung wurde storniert und Ihr Erstattungsbetrag wurde Ihrem Konto hinzugefügt</strong></p>";
$message.="<p><strong>Name:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>E-Mail-ID:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club, den du spielen möchtest:</strong> ".get_the_title($club)."</p>";
$message.="<p><strong>Refund Price:</strong> ".$Refund_price."</p>";

$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$golf_admin_email.'';  
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
add_action('wp_ajax_booking_club', 'booking_club');
add_action('wp_ajax_nopriv_booking_club', 'booking_club');
function booking_club(){
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

     $lastid = $wpdb->insert_id;
          
   //echo $wpdb->last_query;
     
    // $my_meta = get_post_meta($club_you_want_to_play, 'golf_course_coin', true ); 

   
    // $remaining_coin = $your_coins - $my_meta;
$club_first_name='S.E.A.';
$club_last_name='Clubs.';
$cc_email='erhamender@gmail.com,office@s-e-a.at,roar12371@gmail.com';   
$to=$admin_golf_mail;
$from='jochen.mertl@s-e-a.at';
$subject="Neue Golfcouse-Buchungsanfrage zur Bestätigung".date("d-M-Y h:i:s");
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
$message.="<a href=https://golfcenter.at/confirm/?user_id=".$user_id."&club=".$club_you_want_to_play."&member=".$book_your_seat."&email=".$email."&nameofplayer=".$r."&booking_id=".$lastid."&dateofbooking=".$date_of_booking."&preferredteetime=".$preferred_tee_time."><button style='padding:12px 12px 12px 12px;'>click to confirm:</button></a> <a href=https://golfcenter.at/cancel_booking/?user_id=".$user_id."&email=".$email."&club=".$club_you_want_to_play."&booking_id=".$lastid."> <button style='padding:12px 12px 12px 12px;'> Cancel Booking </button></a>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$club_first_name.' '.$club_last_name.'<'.$admin_golf_mail.'>';
$headers[] = 'cc: '.$cc_email; 
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  // update_user_meta($user_id, '_credit', $remaining_coin);

   wp_mail($to,$subject,$message,$headers,'');

  $to1=$_POST['email'];
  $from=$admin_golf_mail;
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
  global $wpdb;
  
  $table='golf_users';

   $total_book = $wpdb->get_results("SELECT max(ID) AS alias_id FROM $table");

   $user_id=$total_book[0]->alias_id;

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
  global $wpdb;
  
  $table='golf_users';

   $total_book = $wpdb->get_results("SELECT max(ID) AS alias_id FROM $table");

   $user_id=$total_book[0]->alias_id;

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
$cc_email='erhamender@gmail.com,office@s-e-a.at,roar12371@gmail.com';   
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

  


  $selected_data_check_full = "*";

  $selecte_table_check_full = "golf_daily_booking"; 


  $check_aleredy_book_full = $wpdb->get_results("SELECT $selected_data_check_full FROM $selecte_table_check_full WHERE id=$id");

  $club=$check_aleredy_book_full[0]->club_you_want_to_play;
  $no_of_player=$check_aleredy_book_full[0]->members_playing;
  $email=$check_aleredy_book_full[0]->email;
  $nameofplayer=$check_aleredy_book_full[0]->name_of_booking_person;
  $booking_id=$_POST['id']  ;
  $prefer_time=$check_aleredy_book_full[0]->preferred_tee_time;



  // echo $club;
  // echo $no_of_player;
  // echo $email;
  // echo $nameofplayer;
  // echo $booking_id;
  // echo $prefer_time;
  
  // die();


    $selected_data_check = "status";

   $selecte_table_check = "golf_daily_booking"; 


    $check_aleredy_book = $wpdb->get_results("SELECT $selected_data_check FROM $selecte_table_check WHERE id=$booking_id");

   $roo= $check_aleredy_book[0]->status;

    if($roo=='1')
    {
      echo 'You Already Confirm This';
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
$from='jochen.mertl@s-e-a.at';
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


   echo $club;

   echo $booking_id;
   echo $nameofplayer;
   echo $member_playing;
   echo $golf_course_coin;
   echo $Refund_price;
   echo $total_coin_after_refund;

   die();


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
$headers[] = 'From:'.$golf_admin_email.'';  
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Die Buchung wurde storniert und der Benutzerkonto wurde mit dem Betrag für die Benutzerrückerstattung versehen'; 
  } 
  die;
}




