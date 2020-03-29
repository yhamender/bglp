<?php
/*
 * Template Name: User-Edit-Profile
*/
?>
<?php get_header(); ?>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Benutzerprofil anpassen</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container" style="margin:50px 0px 40px;">
      <div class="row">
        <div class="col-md-12 userdata">
          <div class="col-md-6" style="line-height: 30px; border-right: 1px solid gray">
		    <a class="btn btn-default" href="<?php echo site_url('user-panel'); ?>"><i class="fa fa-chevron-left"></i> Back To User Panel</a>
        <?php 
		     $currentUserId=get_current_user_id();
         $userData=get_userdata($currentUserId); 
         // echo "<pre>";
         // print_r($userData);
		    ?>

        <form action="#" method="post" id="edit_profile">

		    <p><strong>User Name: </strong> <input type="text" name="display_name" value="<?php echo $userData->display_name; ?>"></p>
		    <p><strong>User Email: </strong> <input type="text" name="user_email" value="<?php echo $userData->user_email; ?>"> </p>
		    <p><strong>First Name: </strong> <input type="text" name="first_name" value="<?php echo $userData->first_name; ?>"> </p>
		    <p><strong>Last Name: </strong> <input type="text" name="last_name" value="<?php echo $userData->last_name; ?>"></p>
		    <p><strong>Mobile No: </strong> <input type="text" name="user_mobile" value="<?php echo $userData->_phone; ?>"> </p>
        <p><strong>Heimatclub: </strong> <input type="text" name="_heimatclub" value="<?php echo $userData->_heimatclub; ?>"> </p>  
        <p><strong>Handicap: </strong> <input type="text" name="_handicap" value="<?php echo $userData->_handicap; ?>"> </p>		 
      <input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-left: 116px; margin-top: 20px;">
      <!-- <a class="btn btn-primary" style="margin-left: 116px; margin-top: 20px;" href="<?php //echo site_url('user-profile-edit'."?id=".$currentUserId); ?>">Update</a> -->
       
    </form>
  </div>



<div class="col-md-6" style="line-height: 30px; text-align: justify; margin-top: 50px; ">
     <p>Einmal eingeloggt <?php echo utf8_encode('k�nnen');?> Sie Ihr Profil komplettieren, sehen Ihre virtuelle S.E.A.CARD bzw. die verbleibenden S.E.A.Coins (Credits) auf Ihrer Karte sowie Ihre bislang <?php echo utf8_encode('get�tigten');?> Buchungen und <?php echo utf8_encode('k�nnen');?> sofort Golfrunden reservieren. Weitere Features kommen in den <?php echo utf8_encode('n�chsten');?> Wochen und Monaten hinzu.<br/><br/>For Update Password And UserName Click here :-<p>
     
 </div>

<a href="<?php echo site_url('update_password/?user_id='.$currentUserId);?>"><input type="button" name="submit" value="Update Password And UserName " class="btn btn-primary" style="margin-left: 255px; margin-top: 20px;"></a>





        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">

p{

 margin-left: 100px;
}

input[type=text],[type=password]{
 padding-left: 10px;
   float: right;
   width: 230px;
   margin-right: 120px;
   height: 30px;
   border: 2px solid #a5afb6;
   background-color: #cfd6db;
   border-radius: 10px;
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


jQuery('#edit_profile').submit(function(event){

  

  event.preventDefault();
             var formData = new FormData(jQuery('#edit_profile')[0]);
                formData.append('action','edit_form');
                jQuery.ajax({
                  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                  type:"POST",
                  data:formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(reponse){
                     alert(reponse);
                       location.reload();
                  }
                });
                //alert(formData);
        
    });


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
