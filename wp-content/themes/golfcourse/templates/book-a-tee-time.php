<?php
/*
 * Template Name: Book-A-Tee-Time
*/
?>
<?php get_header(); ?>

<script defer type="text/javascript"  src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.min.js"></script>
<link async rel="stylesheet" type="text/css"  href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/themes/black-tie/jquery-ui.css">

<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.2.1/moment.min.js"></script>

<!-- <script type="text/javascript">

 $(document).ready(function(){
 
   localStorage.refresh=localStorage.refresh!=null ? localStorage.refresh : 0;
   localStorage.setItem("refresh", parseInt(localStorage.refresh)+1);
   if(localStorage.refresh>1){
      localStorage.refresh=0;
      alert('Website verlassen? \n Ihre Änderungen werden eventuell nicht gespeichert!');
}
});
  
</script> -->


<style type="text/css">

/*Loader 1- Spinning */


.sk-fading-circle {
 margin: -1vw 0 0 10vw; 
  width: 70px;
  height: 70px;
  position: relative;
}

.sk-fading-circle .sk-circle {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.sk-fading-circle .sk-circle:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #333;
  border-radius: 100%;
  -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
          animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
}
.sk-fading-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg);
}
.sk-fading-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg);
}
.sk-fading-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
}
.sk-fading-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg);
}
.sk-fading-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg);
}
.sk-fading-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
.sk-fading-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg);
}
.sk-fading-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg);
}
.sk-fading-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
}
.sk-fading-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg); 
}
.sk-fading-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg); 
}
.sk-fading-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s; 
}
.sk-fading-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s; 
}
.sk-fading-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s; 
}
.sk-fading-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s; 
}
.sk-fading-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s; 
}
.sk-fading-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s; 
}
.sk-fading-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s; 
}
.sk-fading-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s;
}
.sk-fading-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s;
}
.sk-fading-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s;
}
.sk-fading-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s;
}

@-webkit-keyframes sk-circleFadeDelay {
  0%, 39%, 100% { opacity: 0; }
  40% { opacity: 1; }
}

@keyframes sk-circleFadeDelay {
  0%, 39%, 100% { opacity: 0; }
  40% { opacity: 1; } 
}





m{
      font-weight: 600;
}

.dot4_av {
  height: 15px;
  width: 15px;
  background-color: #548235;
  border-radius: 50%;
  display: inline-block;
}

.dot3_av {
  height: 15px;
  width: 15px;
  background-color: #a9ce91;
  border-radius: 50%;
  display: inline-block;
}

.dot2_av {
  height: 15px;
  width: 15px;
  background-color: #c6deb5;
  border-radius: 50%;
  display: inline-block;
}

.dot1_av {
  height: 15px;
  width: 15px;
  background-color: #e2efda;
  border-radius: 50%;
  display: inline-block;
}



.dot2 {
  height: 15px;
  width: 15px;
  background-color: #c30;
  border-radius: 50%;
  display: inline-block;
}


.dot3 {
  height: 15px;
  width: 15px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}


.ui-datepicker td.ui-state-disabled>span{background:#c30;}
.ui-datepicker td.ui-state-disabled{opacity:100;}
.css-class-to-highlight a{
       background: red !important;
       color: #000 !important;
       opacity:100;
   }

 .css_four a{
  background: #548235 !important;
  color: #000 !important;
  opacity:100;
 } 

 .css_three a{
  background: #a9ce91 !important;
  color: #000 !important;
  opacity:100;
 }  

 .css_two a{
  background: #c6deb5 !important;
  color: #000 !important;
  opacity:100;
 }  

 .css_one a{
  background: #e2efda !important;
  color: #000 !important;
  opacity:100;
 } 

.day.yellow {
  background-color: yellow;
  color: black;
}
  
.datepicker{
  background-color: #fff;
}

</style>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">BOOK A TEE TIME...</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 page-content">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
              <form id="bookATeeTimeForm" class="form-horizontal" method="post">
                <?php 
                 $currentUserId=get_current_user_id();
                 $userData=get_userdata($currentUserId);
                ?>
                <?php if($userData->_credit==0 && !empty($currentUserId)){ ?>
                <p class="alert alert-default"><i class="fa fa-info-circle fa-2x"></i> Die Gutschrift für die Mitgliedskarte ist jetzt abgeschlossen. Kein Guthaben auf Ihrer Karte</p>
                <?php } ?>
                <input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>" />
                <input type="hidden" name="credit" value="<?php $credit=$userData->_credit;
         if($credit>0){ echo $credit-1;}else{ echo "0";}
         ?>" />

                   <?php $user_id = get_current_user_id(); ?>

                   <?php  $balance = get_user_meta($user_id, '_credit', true );   ?>

          
                 <center> <label class="label label-default" style="font-size:20px;">S.E.A.Coins =  <?php echo $balance; ?></label> </center>
               
                <fieldset>

                <div style="border-bottom:1px solid #ccc; margin-bottom:12px;">
                  <label class="label label-default"> User Personal Information</label>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Vorname <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="first_name" id="first_name" placeholder="First Name" class="form-control input-md" type="text" value="<?php echo $userData->first_name; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nachname <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="last_name" id="last_name" placeholder="Last Name" class="form-control input-md" type="text" value="<?php echo $userData->last_name; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-md-4 control-label">e-mail adresse für Buchungsbestätigung<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Telefon <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="phone" id="phone" placeholder="Telefonnummer" class="form-control input-md" type="text" value="<?php echo $userData->_phone; ?>" readonly>
                  </div>
                </div>
                <div style="border-bottom:1px solid #ccc; margin-bottom:12px;">
                  <label class="label label-default">User Booking Information</label>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Golfclub den Sie spielen möchtest <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="club_you_want_to_play" id="club_you_want_to_play" class="form-control input-md required">
                      <option value="">Club, den du spielen möchtest</option>
                      <?php 
             $args=array(
             "post_type" =>"golfcourse-reviews",
             "numberposts"=>1000,
             "orderby"=>"date",
             "order"=>"DESC");
             $golfCoursePost=get_posts($args);
             $i=1;
             foreach($golfCoursePost as $golfCoursePost){
                  ?>
           <?php  $my_meta = get_post_meta($golfCoursePost->ID, 'golf_course_coin', true ); ?>
           <?php  $my_meta1 = get_post_meta($golfCoursePost->ID, 'max_player_per_day', true ); ?>

                      <option value="<?php echo $golfCoursePost->ID; ?>" <?php if($i % 2 == 0){ ?>  style="color: #fff; background-color: #a9d18d;"<?php } else { ?> style="color: #fff; background-color: #c5e0b2;" <?php } ?>><?php echo $golfCoursePost->post_title; ?></option>
                      <?php  $i++; } ?>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label">Platz den Sie spielen möchten<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                  <select name="sub_golf_couse" id="sub_golf_couse" class="form-control input-md required">
                    
                  </select>
                </div>
                </div>
               <div style="text-align:center;  margin-bottom: 10px; margin-right: -157px;">
                 <span class="dot4_av"> </span> <m> 4 Available </m>
                 <span class="dot3_av"> </span> <m> 3 Available </m>
                  <span class="dot2_av"> </span> <m> 2 Available </m>
                   <span class="dot1_av"> </span> <m> 1 Available </m>
                  <span class="dot2"></span> <m> Not Available </m>
                  <span class="dot3"></span> <m> Booked </m>
               </div>
                <div class="form-group">

                  <label class="col-md-4 control-label">Verfügbares Datum <sup class="text-danger"><strong>*</strong></sup></label>



                   <div class="col-sm-6">
                      <div class="input-group date">
                         <input type="text" name="date_of_booking" class="form-control" id="js-date" autocomplete="off" style="background:transparent;">
                         <div class="sk-fading-circle" id="loader-1" style="display: none;">
                          <div class="sk-circle1 sk-circle"></div>
                          <div class="sk-circle2 sk-circle"></div>
                          <div class="sk-circle3 sk-circle"></div>
                          <div class="sk-circle4 sk-circle"></div>
                          <div class="sk-circle5 sk-circle"></div>
                          <div class="sk-circle6 sk-circle"></div>
                          <div class="sk-circle7 sk-circle"></div>
                          <div class="sk-circle8 sk-circle"></div>
                          <div class="sk-circle9 sk-circle"></div>
                          <div class="sk-circle10 sk-circle"></div>
                          <div class="sk-circle11 sk-circle"></div>
                          <div class="sk-circle12 sk-circle"></div>
                        </div>
                          <!-- <input  name="date_of_booking" type="text" class="form-control" id="data-date" autocomplete="off"> -->
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>
                  </div>
                
                
                </div>


                 <div class="form-group">
                  <label class="col-md-4 control-label"> Benötigte S.E.A.Coins<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="club_price" id="club_price" placeholder="Clubpreis" class="form-control input-md required" type="text" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label"> Derzeit verbleibende S.E.A.Coins<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="your_coins" id="your_coins" placeholder="your_coins" class="form-control input-md required" type="text" value="<?php echo $balance; ?>" readonly>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-md-4 control-label">Verfügbare Greenfees<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="club_maximum_player" id="club_maximum_player" placeholder="Club maximaler Spieler" class="form-control input-md required" type="text" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label"> Greenfees pro Tag<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="available_seat" id="available_seat" placeholder="Verfügbarer Sitzplatz" class="form-control input-md" type="text" readonly required="">
                  </div>
                </div>

                <div class="form-group alert_book">
                  
                </div>

               <input type="hidden" name='admin_golf_mail' id='admin_golf_mail' value="+json_subcategory+" class='form-control input-md'>

                

                <div class="form-group">
                  <label class="col-md-4 control-label">Spielerzahl an diesem Tag<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="book_your_seat" id="book_your_seat" placeholder="Zahl der Golfer welche über diese S.E.A.CARD buchen
" class="form-control input-md required" type="text" autocomplete="off">
                  </div>
                </div>

                 <div class="form-group hello">
                  
                </div>

               

               
                
                <!-- <div class="form-group">
                  <label class="col-md-4 control-label">No. of Members Playing <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="members_playing" id="members_playing" class="form-control input-md required">
                      <option value="">No. of Members Playing</option>
                      <option value="1" data-index="0">1</option>
                      <option value="2" data-index="1">2</option>
                      <option value="3" data-index="2">3</option>
                      <option value="4" data-index="3">4</option>
                    </select>
                  </div>
                </div> -->
               <!--  <div class="form-group">
                  <label class="col-md-4 control-label">No. of Guests Playing <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="guests_playing" id="guests_playing" class="form-control input-md required">
                      <option value="">No. of Guests Playing</option>
                      <option value="0" data-index="0">1</option>
                      <option value="1" data-index="1">2</option>
                      <option value="2" data-index="2">3</option>
                      <option value="3" data-index="3">4</option>
                    </select>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-md-4 control-label">Bevorzugte Abschlagzeit<sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select class="form-control" name="preferred_tee_time" id="preferred_tee_time">
                      <option value="" data-index="0">Abschlagzeit auswählen</option>
                      <option value="vor 08:00" data-index="0">vor 08:00</option>
                      <option value="08:00-09:00" data-index="1">08:00-09:00</option>
                      <option value="9:00-10:00" data-index="2">09:00-10:00</option>
                      <option value="10:00-11:00" data-index="3">10:00-11:00</option>
                      <option value="11:00-12:00" data-index="4">11:00-12:00</option>
                      <option value="12:00-13:00" data-index="5">12:00-13:00</option>
                      <option value="13:00-14:00" data-index="6">13:00-14:00</option>
                      <option value="14:00-15:00" data-index="7">14:00-15:00</option>
                      <option value="15:00-16:00" data-index="8">15:00-16:00</option>     
                      <option value="nach 16:00" data-index="9">nach 16:00</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">

                  <?php $user_id = get_current_user_id(); ?>

                   <?php  $balance = get_user_meta($user_id, '_credit', true );  ?>

                  <div class="col-md-8 col-md-offset-2">
                    <div style="clear:both"></div>
                    

                    <?php if($balance > 0 &&  (is_user_logged_in())) { ?>
                  <button class="btn btn-default btn-lg btn-block" type="submit"  >BOOK A TEE TIME</button>
                  

                 <?php } else { ?> 
                  
                <button class="btn btn-default btn-lg btn-block" type="button"  id="pls" >BOOK A TEE TIME</button>

                  <?php } ?>

                  <?php if (!(is_user_logged_in())){ ?>
                    <h2 style="font-family: 'Fjalla One', sans-serif; text-align:center; cursor:pointer;" onclick="window.location.href='<?php echo site_url('login'); ?>'">Please Login For Book A Tee Time</h2>
                  <?php } ?>
                 
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
.btn-default:default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
.alert-default{ background:#ccc; font-family: 'Fjalla One', sans-serif;}
</style>

<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.validate.js"></script>
<script>

jQuery(document).ready(function(){
  jQuery("#bookATeeTimeForm").validate({
 
         rules: {
             club_you_want_to_play: {
                 required: true,
             },
             date_of_booking: {
                 required: true,
                  
             },
             club_price: {
                 required: true,
               },
              email: {
                 required: true,
                 email:true,
               },
               
             date_of_booking: {
                 required: true,
                
             },
             members_playing: {
                 required: true,
             },
             guests_playing: {
                 required: true,
             },
             preferred_tee_time: {
                 required: true,
             }

             
         }
});
});

jQuery('#bookATeeTimeForm').submit(function(e){
        
        e.preventDefault();
        $r=jQuery('#bookATeeTimeForm').valid();
        if($r == true)
        {
                var formData = new FormData(jQuery('#bookATeeTimeForm')[0]);
                formData.append('action','club_confirm_booking');
                jQuery.ajax({
                  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                  type:"POST",
                  data:formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(reponse){
                     alert(reponse);
                       window.location.href = "https://golfcenter.at/user-panel/";
                  }
                });
        }
        
        
    });

</script>



<?php get_footer(); ?>

<script>
 
 jQuery(document).ready(function(){

 jQuery('#pls').click(function(){

  alert('Bitte loggen Sie sich für Book-A-Tee-Time ein');

 });


 });

  </script>


  <script type="text/javascript">

    jQuery('#club_you_want_to_play').on('click', function() {

       if(jQuery('#club_price').val()!='')
          {
              location.reload();
          }
    
    });

 jQuery('#club_you_want_to_play').on('change', function() {

   
     

    book_id= this.value ;
  
    jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,action:'fetch_sub_courses'},
    async:'true',
    datatype:'json',
    success:function(data) {
     
    var json_subcategory1 = JSON.parse(data);

     
                  jQuery('#sub_golf_couse').empty();
                   if(json_subcategory1==''){
                  jQuery('#sub_golf_couse').append("<option>No Sub Courses</option>");
                  }
                   for(i=0;i<json_subcategory1.length; i++)
                   {
                  jQuery('#sub_golf_couse').append("<option>" + json_subcategory1[i]+ "</option>");
                   }
                 
    
     },         
  });



   jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,action:'fetch_date'},
    async:'true',
    datatype:'json',
    success:function(data) {

  var json_subcategory45 = JSON.parse(data);

    
 var hello= [];

     
      $.each(json_subcategory45, function(index, value){

          hello.push(value);
  //alert(index + ' ' + value);
});
     // alert(hello);

          var fullybooked = [];
          var booked_four = [];
          var booked_three = [];
          var booked_two = [];
          var booked_one = [];

var ajaxTime= 5000;


      $.each(hello, function(index, value){

              var userDate= value;

              var date = moment(userDate, "D-M-YYYY").format("DD/MM/YYYY");
              var book_id = parseFloat(jQuery('#club_you_want_to_play').val());

              jQuery.ajax({
                      url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                      type:"POST",
                      data:{book_id:book_id,date:date,action:'fetch_available_seat'},
                      async:'true',
                      datatype:'json',
                      success:function(data) {

                        

                         var json_subcategory901 = JSON.parse(data);
                         
                           

                            if(json_subcategory901=='0')
                              {
                               
                                 fullybooked.push(value);
                                

                              } else if (json_subcategory901=='4'){

                                 booked_four.push(value);

                              } else if (json_subcategory901=='3'){

                                 booked_three.push(value);

                              } else if (json_subcategory901=='2'){

                                 booked_two.push(value);

                              } else if (json_subcategory901=='1'){

                                 booked_one.push(value);

                              } else{

                              }
                            }
                          }).done(function () {
                            $('input[name="date_of_booking"]').css("display", "none");
                          var  totalTime = new Date().getTime()-ajaxTime;
                             $('#loader-1').fadeIn('slow', function(){
                                       $('#loader-1').delay(ajaxTime).fadeOut();
                        // $("input[name=date_of_booking]").css('display', 'none');
                        
                                    });
$('input[name="date_of_booking"]').css("display", "inline-block");
                            
                        });



         //alert(index + ' ' + value);

       });



      function unavailable(date) {
                                  dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();


                                  if ($.inArray(dmy, fullybooked) > -1) {
                                   return [true, "css-class-to-highlight", "booked"];
                                  }else if ($.inArray(dmy, booked_four) > -1) {
                                      return [true, "css_four","Four Available"];
                                  } else if ($.inArray(dmy, booked_three) > -1) {
                                      return [true, "css_three","Three Available"];
                                  }else if ($.inArray(dmy, booked_two) > -1) {
                                      return [true, "css_two","Two Available"];
                                  }else if ($.inArray(dmy, booked_one) > -1) {
                                      return [true, "css_one","One Available"];
                                  }else if ($.inArray(dmy, hello) > -1) {
                                      return [true, "","Available"];
                                  }else {
                                       return [false, "","UnAvailable"];
                                  }
                                  
                                
                              }



                              $(function() {
                                      $("#js-date").datepicker({
                                          minDate: new Date(),
                                          maxDate: new Date(new Date().setMonth(new Date().getMonth() + 12)),
                                          dateFormat: 'dd/mm/yy',
                                          beforeShowDay: unavailable
                                      });

                                  });
    
}
     });


   

   

   jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,action:'fetch_book_id'},
    async:'true',
    datatype:'json',
    success:function(data) {
    var json_subcategory = JSON.parse(data);
     jQuery('#club_price').val(json_subcategory);
     
     var clubprice = parseFloat(jQuery('#club_price').val());

     var your_coins= parseFloat(jQuery('#your_coins').val());

      if(clubprice > your_coins)
        {
            alert('Ihre Münzen sind niedrig für dieses Buch');            
            jQuery('#club_price').val('');

             
        }


     },
  });


  jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,action:'fetch_maximum_clubplayer'},
    async:'true',
    datatype:'json',
    success:function(data) {
    var json_subcategory = JSON.parse(data);
     jQuery('#club_maximum_player').val(json_subcategory);
     
     },
  });


  



   jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,action:'fetch_email_id'},
    async:'true',
    datatype:'json',
    success:function(data) {

      var json_subcategory = JSON.parse(data);
     jQuery('#admin_golf_mail').val(json_subcategory);

      
     
     
     },
  });

 
});


 

  </script>


  <script type="text/javascript">
    
  jQuery("#book_your_seat").keyup(function(){
    var booking_seat=parseFloat(jQuery("#book_your_seat").val());
    var available_seat=parseFloat(jQuery("#available_seat").val());

       if(booking_seat > available_seat)
        {
           $(".hello").empty();
            alert('Ihr Buchungsplatz ist größer als der verfügbare Platz');
            jQuery('#book_your_seat').val('');
        }

        if(booking_seat == 0)
        {
           $(".hello").empty();
            alert('Ihr Buchungsplatz kann nicht Null sein');
            jQuery('#book_your_seat').val('');
        }
        


         if(booking_seat <= available_seat){

          $(".hello").empty();



           var book= jQuery('#book_your_seat').val();
            
            var j = 1;
            var i;
            for (i = 0; i < book; i++) { 

           $(".hello").append("<label class='col-md-4 control-label'> Name "+j+".  <sup class='text-danger'><strong>*</strong></sup></label><div class='col-md-6'> <input name='name_of_booking_person[]' id='name_of_booking_person' placeholder='Vor und Nachname des "+j+". Golfers' class='form-control input-md required' type='text'> </div> <br/><br/>");

     
        j++; }

             
                        club_price = parseFloat(jQuery('#club_price').val());

                   booking_seat_after_match_with_your_coin = parseFloat(club_price * booking_seat);
                          
                          
                          your_coins = parseFloat(jQuery('#your_coins').val());


                          if(booking_seat_after_match_with_your_coin > your_coins)
                          {
                               alert('Ihre Münze ist knapp fürs Buch' + booking_seat + 'seat');
                               jQuery('#book_your_seat').val('');
                               $(".hello").empty();
                          }
                         
        

       }

        
 
  });

  </script>


  <script type="text/javascript">

    jQuery('#js-date').on('change', function() {

     var date= this.value;

    //alert(date);

    var book_id = parseFloat(jQuery('#club_you_want_to_play').val());

   $(".alert_book").empty();

       jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{book_id:book_id,date:date,action:'fetch_available_seat'},
    async:'true',
    datatype:'json',
    success:function(data) {
     
         var json_subcategory = JSON.parse(data);
      jQuery('#available_seat').val(json_subcategory);

      var give_alert=parseFloat(jQuery('#available_seat').val());

      if(give_alert==0)
      {
        jQuery(".alert_book").append("<label class='col-md-4 control-label' style='color:red;  '>&nbsp;<sup class='text-danger'><strong></strong></sup></label><div class='col-md-8'> <label class='col-md-8 control-label' style='color:red; padding-top: 0px; margin-left: -30px; '> Sorry This Date is Fully Booked  </label></div>");
      }
     
     },
  });

      
     
    });


  </script>


 