<?php

/*
 * Template Name: cancel booking
 */		
?>

<?php $user_id = $_GET['user_id']; ?>

<?php $email = $_GET['email']; ?>

<?php $club =  $_GET['club']; ?>

<?php $booking_id =  $_GET['booking_id']; ?>

<?php 

  global $wpdb;

  
   $selected_data_refund= "*";

  $selecte_table_refund = "golf_daily_booking"; 

  $refund_get = $wpdb->get_results("SELECT $selected_data_refund FROM $selecte_table_refund WHERE id=$booking_id");
 
 if($refund_get[0]->refund_status=='1')
 { ?>

       <div class="well-lg">
   
  <?php $club = $refund_get[0]->club_you_want_to_play; ?>
  <?php $member_playing = $refund_get[0]->members_playing; ?>

 <?php  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); ?>

 <?php  $Refund_price = $golf_course_coin * $member_playing ; ?>

 <?php  $user_info = get_userdata($user_id); ?>

  <h1> You Already Refund The Booking Amount To <?php echo $user_info->display_name; ?> <br/>
   <span>S.E.A Golf Courses</span> <br/>
   <span> User_Name = <?php echo $user_info->display_name; ?> </span> <br/>
   <span> Refund_Price = <?php echo $Refund_price; ?> </span> <br/>
  </h1>
</div>

 <?php } else { ?>


<?php

  $selected_data= "*";

  $selecte_table = "golf_daily_booking"; 

  $staus_get = $wpdb->get_results("SELECT $selected_data FROM $selecte_table WHERE id=$booking_id"); ?>

 <?php if($staus_get[0]->status =='1') { ?>
  
 <div class="well-lg">
   
  <?php $club = $staus_get[0]->club_you_want_to_play; ?>
  <?php $member_playing = $staus_get[0]->members_playing; ?>

 <?php  $golf_course_coin = get_post_meta($club, 'golf_course_coin', true ); ?>

 <?php  $Refund_price = $golf_course_coin * $member_playing ; ?>

 <?php  $user_info = get_userdata($user_id); ?>

   <h1> Refund The Booking Amount <br/>
   <span>S.E.A Golf Courses</span> <br/>
   <span> User_Name = <?php echo $user_info->display_name; ?> </span> <br/>
   <span> Refund_Price = <?php echo $Refund_price; ?> </span> <br/>
  </h1>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

  jQuery(window).on('load', function() {

 
     user_id= <?php echo $user_id ?>;
     Refund_price = <?php  echo $Refund_price ?>;
     email= "<?php  echo $email ?>";
     club = <?php  echo $club ?>;
     booking_id = <?php  echo $booking_id ?>;
    

     jQuery.ajax({
     url:"<?php  echo admin_url("admin-ajax.php"); ?>",
     type:"POST",
     data:{user_id:user_id,Refund_price:Refund_price,email:email,booking_id:booking_id,club:club,action:'refund_price'},
     async:'true',
     datatype:'json',
     success:function(respose) {
      alert(respose);
      window.location.href = "<?php echo site_url('');?>";
     
       },         
   });
  
  });
    


  </script> 

   
 <?php } else { ?>

  <div class="well-lg">
   <h1>You Cancel The Booking <br/>
    <span>S.E.A Golf Courses</span> <br/>
   <!--  <span>Confirmation Mail Sended To The User</span> -->
  </h1>
  </div>


<!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

  jQuery(window).on('load', function() {

 
     user_id= <?php  echo $user_id ?>;
     
     club= <?php echo $club ?>;

     email= "<?php  echo $email ?>";

     booking_id = <?php  echo $booking_id ?>;

     jQuery.ajax({
     url:"<?php  echo admin_url("admin-ajax.php"); ?>",
     type:"POST",
     data:{user_id:user_id,club:club,email:email,action:'fetch_cancel'},
     async:'true',
     datatype:'json',
     success:function(respose) {
      alert(respose);
      window.location.href = "<?php echo site_url('');?>";
     
       },         
   });
  
  });
    


  </script> 

   

<?php } ?>

<?php } ?>




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



