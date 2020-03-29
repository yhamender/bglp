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
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email1'];
 $phone = $_POST['phone'];
 $heimatclub = $_POST['heimatclub'];
 $handicap= $_POST['handicap'];
 $amount=$_POST['amount'];
 $username="SEA-".implode('-',str_split(rand(100000000,999999999),3));
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
   'display_name' => $name.' '.$lastname
 );
  $user_id = wp_insert_user( $userdata ) ;
  if( is_wp_error($user_id) ){
  echo $user_id->get_error_message();
  }else{
  update_user_meta($user_id, '_phone', $phone); 
  update_user_meta($user_id, '_heimatclub', $heimatclub); 
  update_user_meta($user_id, '_handicap', $handicap); 
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
        do_action( 'wp_login', $username );
        $resp['status'] = true;
        $resp['message'] ='Successfull! now redirecting...';
        $resp['url'] = site_url('/user-panel');
    }
   $resp=json_encode($resp);
    echo $resp;
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


  

  

  $your_coin = get_user_meta($user_id, '_credit', true ); 
  
  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); 

  $golf_admin_email = get_post_meta($club, 'golf_admin_mail_id', true ); 

  $total_coin_cut= $golf_course_coin * $no_of_player;

  $remaining_coin = $your_coin - $total_coin_cut;

 $result= update_user_meta($user_id, '_credit', $remaining_coin);
  
  $user_info = get_userdata( $user_id );
  
$to=$email;
$from=$email;
$subject="Your Booking Has Been Confirmed".date("d-M-Y h:i:s");
$message.="<p><strong>Your Booking Has Been Confirmed</strong></p>";
$message.="<p><strong>Lastname:</strong> ".$user_info->display_name."</p>";
$message.="<p><strong>Email-Id:</strong> ".$user_info->user_email."</p>";
$message.="<p><strong>Club you want to play:</strong> ".get_the_title($club)."</p>";

$message.="<p><strong>Members Playing:</strong> ".$no_of_player."</p>";


$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$golf_admin_email.'';  
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Confirmation Mail Sended To The User'; 
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

   //echo $wpdb->last_query;
     
    // $my_meta = get_post_meta($club_you_want_to_play, 'golf_course_coin', true ); 

   
    // $remaining_coin = $your_coins - $my_meta;

    
$to=$admin_golf_mail;
$from=$admin_golf_mail;
$subject="New Golfcouse Booking Request for Confirm".date("d-M-Y h:i:s");
$message.="<p><strong>Firstname:</strong> ".$first_name."</p>";
$message.="<p><strong>Lastname:</strong> ".$last_name."</p>";
$message.="<p><strong>Email-Id:</strong> ".$email."</p>";
$message.="<p><strong>Phone:</strong> ".$phone."</p>";
$message.="<p><strong>Club you want to play:</strong> ".get_the_title($club_you_want_to_play)."</p>";
$message.="<p><strong>Date of Booking:</strong> ".$date_of_booking."</p>";
$message.="<p><strong>Members Playing:</strong> ".$book_your_seat."</p>";
$message.="<p><strong>Preferred tee time:</strong> ".$preferred_tee_time."</p>";
$message.="<a href=https://golfcenter.at/confirm/?user_id=".$user_id."&club=".$club_you_want_to_play."&member=".$book_your_seat."&email=".$email."&dateofbooking=".$date_of_booking."&preferredteetime=".$preferred_tee_time."><button style='padding:12px 12px 12px 12px;'>click to confirm:</button></a>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$first_name.' '.$last_name.'<'.$email.'>';  
  if( is_wp_error($result) ){
  echo $result->get_error_message();
  }else{
  // update_user_meta($user_id, '_credit', $remaining_coin);
  wp_mail($to,$subject,$message,$headers,'');
  echo 'Your booking is under process'; 
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

  if(get_post_meta($book_id, 'eight_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'eight_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'eight_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'ninth_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'ninth_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'ninth_sub_course', true ); 
     
  }

  if(get_post_meta($book_id, 'ten_sub_course', true )=='')
  {
     $my_meta1[] = get_post_meta($book_id, 'ten_sub_course', true ); 
    
  }else {
     $my_meta[] = get_post_meta($book_id, 'ten_sub_course', true ); 
     
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
add_action('wp_ajax_fetch_available_seat', 'fetch_available_seat');
add_action('wp_ajax_nopriv_fetch_available_seat', 'fetch_available_seat');
function fetch_available_seat()
{
  global $wpdb;
  $book_id=$_POST['book_id'];

  $current_date= date("d/m/Y");

  $table='golf_daily_booking';



  $total_book = $wpdb->get_results("SELECT SUM(members_playing) AS alias_name FROM $table WHERE (club_you_want_to_play = '".$book_id."' AND date_of_booking = '".$current_date."')");
   
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

function golfcourseBooking_render()
{   
 include(get_template_directory() . '/list-of-club-bookings.php');
}
/******************************************************************************/
/******************************************************************************/



