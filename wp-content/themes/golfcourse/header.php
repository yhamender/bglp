<!DOCTYPE>
<html <?php language_attributes();?>>
<head>
<title>S.E.A Golf Courses</title>
<meta charset="UTF-8">
<META HTTP-EQUIV=Content-Language CONTENT=de>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>


<?php if(is_user_logged_in()){ ?>


  <style type="text/css">

#menu-item-592{
   display: none;
  }


 @media screen and (max-width: 760px){

  .btncourse:nth-child(1){ position:absolute; font-size:9px; left: 113px!important; top:5px!important;}
  .btncourse:nth-child(2){ position: absolute; font-size:9px; left: 146px!important; top:5px!important;}
  .btncourse:nth-child(3){ position: absolute; font-size:9px; left: 79px!important; top:5px!important;}


  .navbar-nav
{
        top: -25px !important;
        background-color: #000;
}

.navbar-toggle{
  margin-top: 4px!important;
}

  
}  





  </style>

 


 
 
 

<?php } else { ?>

<style type="text/css">



@media screen and (max-width: 760px){

  .btncourse:nth-child(2){ position:relative; left: 0px!important; top:5px!important;}
  .btncourse:nth-child(1){top:5px!important;}
  #show{margin-top: 4px !important;}
  #hide{margin-top: 4px !important;}

  .navbar-nav
{
        top: -25px !important;
        background-color: #000;
}

}
  
  

</style>

<?php } ?>


<style type="text/css">


  .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    display: table;
    content: close-quote;
}
  
#slideshow {
  margin: 80px auto;
  position: relative;
  width: 240px;
  height: 240px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}

</style>

<style>

.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus, .navbar .navbar-nav > li.th-accent
{
      font-size: 16px !important;
}

.nav>li>a
{
      padding: 12px 12px;
}





.navbar-nav
{
        top: 33px;
        
}

.sub-menu{
  z-index: 100000000000;
}

.navbar-toggle{

 float: left !important;

 margin-right: 0px!important;
}

</style>


</head>
<body <?php body_class('pace-done'); ?>>
<div class="header navbar-fixed-top">
  <div class="container">
    <div class="col-md-2"> <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-2.png" style="margin-top:0px;" /></a> </div>
    <div class="col-md-10"> 
     
  <?php if(is_user_logged_in()){ ?>
          
   <?php 
                 $currentUserId=get_current_user_id();
                 $userData=get_userdata($currentUserId);
                 ?>


   <a href="<?php echo wp_logout_url(site_url()); ?>" class="btncourse" style="margin-left:118px;">Logout(<?php echo $userData->first_name; ?> <?php echo $userData->last_name; ?>)</a>
  <?php } ?>
   <!-- <a href="#" class="btncourse" style="left:-222px;">Stay Connected</a>   -->
<?php if(is_user_logged_in()){ ?>
  <a href="<?php echo site_url('book-a-tee-time'); ?>" class=" btncourse" style="color:#c1aa6a;">GOLFRUNDE BUCHEN</a>
<?php } else { ?>

<a href="#" class=" btncourse book" style="color:#c1aa6a;">GOLFRUNDE BUCHEN</a>

<?php } ?>
  <a href="<?php echo site_url('cart'); ?>" class=" btncourse" style="color:#c1aa6a;"> Cart Total: <?php echo WC()->cart->get_cart_contents_count(); ?></a>

     <nav class="navbar navbar-inverse" id="top-menu" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
         <div class="container-fluid" >
         <div class="navbar-header" >



            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> -->

              
              <button type="button" id="show" class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" style="margin-top: -4px;"> <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

                </button>


                <button type="button" id="hide" class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" style="margin-top: -4px; display: none;"> <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

                </button>



            <a class="navbar-brand" href="#"></a> 

          </div>


          <div class="collapse navbar-collapse" id="check" style="display: none; width: 100%;">
        <?php 
         $args=array(
        'theme_location'=>'primary',  
        'container' => 'ul',
        'menu_class' => 'nav navbar-nav',
         );
         wp_nav_menu( $args); 

            ?>

          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

<script type="text/javascript">
  
jQuery(document).ready(function(){

  jQuery('#show').click(function(){

    jQuery('#check').show();
    jQuery('#show').hide();
    jQuery('#hide').show();

  });

  jQuery('#hide').click(function(){

     jQuery('#check').hide();
     jQuery('#hide').hide();
    jQuery('#show').show();
  });


});

jQuery('#menu-item-592').click(function(){

  alert('den Shop zuzugreifen');

 

});

</script>


<script type="text/javascript">
  
jQuery('.book').click(function(){

 alert('Bitte loggen Sie sich ein um auf');

});

</script>



<script type="text/javascript">
  
  $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>


<script type="text/javascript">

if (screen.height < 900) { 

document.write('<link href="UrLowRes.css" type="text/css" rel="stylesheet"/>');

} 

</script>