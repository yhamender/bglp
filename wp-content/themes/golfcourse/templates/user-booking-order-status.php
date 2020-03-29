<?php
/*
 * Template Name: User-Booking-Order-Status
*/
?>
<?php get_header(); ?>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">User Booking Order Status</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container" style="margin:50px 0px 40px;">
      <div class="row">
        <div class="col-md-12 userdata">
		    <a class="btn btn-default" href="<?php echo site_url('user-panel'); ?>"><i class="fa fa-chevron-left"></i> Back To User Panel</a>
         <?php 
		     $currentUserId=get_current_user_id();
         

      global $wpdb;
      $users = $wpdb->get_results("SELECT * FROM `golf_daily_booking` WHERE `user_id`='$currentUserId' ORDER BY id DESC");
      // echo "<pre>";
      // print_r($users);




		    ?>



  <table>
  <thead>
    <tr style="background-color: #000; color: #fff;">    
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Club You Want to Play</th>
      <th scope="col">Sub Club Course</th>
      <th scope="col">Date of Booking</th>
      <th scope="col">Members Playing</th>
      <th scope="col">Name of Booking Person</th>
      <th scope="col">Preferred Tee Time</th>
      <th scope="col">Approved/Not Approved</th>
     
    </tr>
  </thead>  
  <?php 
  
  foreach ($users as $user) {

   ?>
  <tr>

    <?php 

  $club=get_the_title($user->club_you_want_to_play); 

?>    
    <td><?php echo $user->first_name; ?></td>
    <td><?php echo $user->last_name; ?></td>
    <td><?php echo $user->email; ?></td>
    <td><?php echo $user->phone; ?></td>
    <td><?php echo $club; ?></td>
    <td><?php echo $user->sub_clud_course; ?></td>
    <td><?php echo $user->date_of_booking; ?></td>
    <td><?php echo $user->members_playing; ?></td>
    <td><?php echo $user->name_of_booking_person; ?></td>
    <td><?php echo $user->preferred_tee_time; ?></td>
    <td><?php if($user->refund_status=='1'){ ?>
          
          <span class="label label-danger">Cancel</span>

      <?php } else { ?>
              
                  
               <?php if($user->status=='1'){?>
               
               <span class="label label-warning">Approve</span>
                
               <?php } else { ?>  

              <span class="label label-info">Pending</span>
                <?php } } ?> </td>
    


  </tr>
  
<?php  } ?>

</table> 
		
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding: 50px

}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;

}

tr:nth-child(even) {
  background-color: #dddddd;
}

.userdata p{font-family:'Fjalla One', sans-serif!important; font-size:16px;}
.userdata p strong{font-family:'Fjalla One', sans-serif!important; font-size:16px; padding-right:12px; color:#696b35;}
.bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
    background-color:#716e32!important;
	font-family: 'Fjalla One', sans-serif!important;
}
.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
}
.small-box {
    color: #f9f9f9;
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
}
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

</style>
<script type="text/javascript">
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
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        if(resp=='true'){
          $("#contact-msg").html('<strong>Thank you!</strong> Your registration has been submitted now.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);
          $("#signupForm")[0].reset();
        }
        else{
          $("#contact-msg").html('<strong>ERROR</strong> '+resp).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });
  })(jQuery);
    </script>
<?php get_footer(); ?>
