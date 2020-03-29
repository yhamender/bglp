<?php
/*
 * Template Name: event-list
*/
?>
<?php get_header(); ?>

<script defer type="text/javascript"  src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.min.js"></script>
<link async rel="stylesheet" type="text/css"  href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/themes/black-tie/jquery-ui.css">

<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.2.1/moment.min.js"></script>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

 


<style type="text/css">



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
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Event List...</h1>
</div>
<div class="container">
   
          <div class="row">
            <div class="col-sm-12">
            
        <?php $events = $wpdb->get_results("SELECT * FROM `golf_em_events` ORDER BY post_id DESC");
            // echo "<pre>";
            // print_r($users);
             ?>

  <table class="table table-hover" style="margin-top: 50px">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Start</th>
      <th scope="col">Event End</th>
      <th scope="col">Event Timezone</th>
      <th scope="col">Event Spaces</th>
      <!-- <th scope="col">Even Content</th> -->
      <th scope="col">Event Start Time</th>
      <th scope="col">Event End Time</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($events as $event) { ?>
    <tr class="table-active">
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $event->event_name; ?></td>
      <td><?php echo $event->event_start; ?></td>
      <td><?php echo $event->event_end; ?></td>
      <td><?php echo $event->event_timezone; ?></td>
      <td><?php echo $event->event_spaces; ?></td>
     <!--  <td><?php echo $event->post_content; ?></td> -->
      <td><?php echo $event->event_start_time; ?></td>
      <td><?php echo $event->event_end_time; ?></td>    
       
    </tr>
<?php } ?>
  </tbody>
</table> 
             
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
 