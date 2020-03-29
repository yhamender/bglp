<?php
/*
 * Template Name: Forget-Password
*/
?>
<?php get_header(); ?>
<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/5.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Passwort <?php echo utf8_encode('vergessen...'); ?></h1>
</div>
<div class="container">
  <div class="row spacer" style="margin-top:5px; margin-bottom:30px">
    <div class="container">
      <div class="col-md-6 col-md-offset-3 page-content">
        <div class="inner-box category-content">
          <h2 class="title-2"><i class="fa fa-user-add"></i> </h2>
          <div class="row">
            <div class="col-sm-12">
              <form role="form" method="post" enctype="multipart/form-data" id="forgetpasswordForm">
                <div class="form-group">
                  <label for="exampleInputEmail1">Geben Sie bitte Ihren Usernamen oder E-Mail Adresse ein
</label>
                  <input type="text" class="form-control required" id="username" name="username" placeholder="Usernamen oder E-Mail Adresse">
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block">Neues Passwort anfordern</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<style type="text/css">

.error{
  color:red;
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



<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.validate.js"></script>
<script>

jQuery(document).ready(function(){
  jQuery("#forgetpasswordForm").validate({
 
         rules: {
             username: {
                 required: true,
             }
             
             
         }
});
});

jQuery('#forgetpasswordForm').submit(function(e){
        
        e.preventDefault();
        $r=jQuery('#forgetpasswordForm').valid();
        if($r == true)
        {
               
          var username=jQuery("#username").val();

          if(username=='admin')
          {
            
            alert('Please add valid Username or Email');
            die();

          }

          if(username=='roar12371@gmail.com')
          {
            
            alert('Please add valid Username or Email');
            die();

          }

           

    
    jQuery.ajax({
    url:"<?php  echo admin_url("admin-ajax.php"); ?>",
    type:"POST",
    data:{username:username,action:'check_exist_username1'},
    async:'true',
    datatype:'json',
    success:function(response) {

      

      if(response=='failed')
      {

       jQuery("#username").val('');

       alert('Dieser Benutzername ist nicht vorhanden');
       
      }else{

        
                  jQuery.ajax({
              url:"<?php  echo admin_url("admin-ajax.php"); ?>",
              type:"POST",
              data:{username:username,action:'update_username'},
              async:'true',
              datatype:'json',
              success:function(response) {

                window.location.assign('update_password/?user_id='+response);

                  // window.location.href =  site_url('update_password/?user_id='+response);

                //alert(response);
     
               },
            });


 

      }

    
     
     },
  });


















                // var formData = new FormData(jQuery('#forgetpasswordForm')[0]);
                // formData.append('action','booking_club');
                // jQuery.ajax({
                //   url:"<?php  //echo admin_url("admin-ajax.php"); ?>",
                //   type:"POST",
                //   data:formData,
                //   cache: false,
                //   contentType: false,
                //   processData: false,
                //   success:function(reponse){
                //      alert(reponse);
                //        location.reload();
                //   }
                // });
        }
        
        
    });

</script>



<!-- <script>
  (function($){
    $("#forgetpasswordForm").submit(function(e){
      e.preventDefault();
            var f = 1 ;
      $("#forgetpasswordForm input.required").each(function(){
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
      $.post( '<?php // echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        resp = $.parseJSON(resp);
        console.log(resp);
        if(resp.status === true){
          $("#login-msg").html(resp.message).removeClass('alert alert-danger').addClass('alert alert-success').show(500);
          location.href = resp.url;
        }
        else{
          $("#login-msg").html(resp.message).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });  
  })(jQuery);
    </script> -->
<?php get_footer(); ?>
