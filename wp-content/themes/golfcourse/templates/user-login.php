<?php
/*
 * Template Name: Login
*/
?>

<?php get_header(); ?>

<style type="text/css">
  
.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    display: table;
    content: close-quote;
}

  
</style>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/5.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Jetzt einloggen...</h1>
</div>
<div class="container">
  <div class="row spacer" style="margin-top:20px; margin-bottom:40px">
    <div class="container">
      <div class="col-md-6 col-md-offset-3 page-content">
        <div class="inner-box category-content">
          <h2 class="title-2"><i class="fa fa-user-add"></i> </h2>
          <div class="row">
            <div class="col-sm-12">
              <form role="form" method="post" enctype="multipart/form-data" id="loginForm">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control required" id="username" name="username" placeholder="Ihre Kartennummer z.B. PLATIN19-C067">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control required" id="password" name="password" placeholder="Vor- und Nachname getrennt durch einen Punkt z.B. Max.Mueller">
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block">Login</button>
                <button type="button" class="btn btn-default btn-lg btn-block" onclick="window.location.href='<?php echo site_url('forget-password'); ?>'">Passwort vergessen</button>
                <div style="display:none;" id="login-msg"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="col-md-8 col-md-offset-2">


   <p>
      Um in den Genuss von kostenlosen Golfrunden und zahlreicher weiterer <?php echo utf8_encode('Verg�nstigungenzu'); ?> kommen loggen Sie sich wie folgt als S.E.A.Card Inhaber ein! <br/> <br/>
    <strong>Benutzen Sie beim ersten LOGIN als</strong>  <br/>
- Username Ihre Kartennummer z.B. 'PLATIN19-C067' und als<br/>
- Password Ihren Vor- und Nachnamen getrennt durch einen Punkt z.B. ,Jochen.Mertl'
   </p>

 </div>
   



  </div>
  <!-- /.container -->
</div>
<style type="text/css">

.col-md-8{

 margin-top: 25px;
 font-family: 'Fjalla One', sans-serif!important;
   font-size: 16px;
   line-height: 28px;
   background-color: #edefef;
   border-radius: 5px;
   border-right: 2px solid grey;
   border-bottom: 2px solid grey;
   padding:15px;
   box-shadow:17px 21px 34px -16px grey;
}


body{ background:#fff;}
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
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
</style>
<script>
  (function($){
    $("#loginForm").submit(function(e){
      e.preventDefault();
            var f = 1 ;
      $("#loginForm input.required").each(function(){
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
      var formdata = $(this).serialize()+'&action=loginUser';
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        resp = $.parseJSON(resp);
        console.log(resp);
        if(resp.status === true){

          var userid=resp.user_id;
           
            jQuery.ajax({
                  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                  type:"POST",
                  data:{userid:userid,action:'check_payment_status'},
                  async:'true',
                  datatype:'json',
                  success:function(response) {
                    if(response=='0')
                    {
                      alert('your payment is not success');
                                                    jQuery.ajax({
                                    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                                    type:"POST",
                                    data:{action:'logout_now'},
                                    async:'true',
                                    datatype:'json',
                                    success:function(data) {
                                    
                                      location.reload();
                                     
                                     },
                                  });
                    }else{

                            $("#login-msg").html(resp.message).removeClass('alert alert-danger').addClass('alert alert-success').show(500);

                              location.href = resp.url;
                    }
                  
                   
                   },
           });

          
        }
        else{
          $("#login-msg").html(resp.message).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });  
  })(jQuery);
    </script>
<?php get_footer(); ?>
