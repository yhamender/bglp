<?php
/*
 * Template Name: Versicherung
 * 
 */
?>

<?php get_header(); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Versicherung</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container" style="margin:20px 0px 120px;">
      <div class="row">
      <div class="col-md-10 col-md-offset-1">  
            <h2>Ein ganzes Jahr beruhigt golfen um nur 36€ und eine kostenlose Runde im Diamond Country Club obendrauf - KEIN HAKEN</h2>  <br/> 
            <h4>Diebstahl, Brand, Schlägerbruch oder "Hole in one“, egal, ob im Heimatclub oder anderswo: <br/>Es gibt keinen Mulligan! </h4>  <br/>
            <h4>Wer auf die Versicherung der Kreditkarte oder auf die des Clubs hofft, hofft auch heute noch auf eine Runde unter Par.<br/> <br/>
                Daher: Jetzt eine Golfversicherung abschließen und entspannt bis Ende 2020 aufteen.
            </h4><br/><br/>
            <h4>Versichern beruhigt - vor, auf & nach der Runde und ist ein „must have“!</h4><br/><br/>
            <h4>Die Xl- Golfversicherung im Wert von 36 Euro bietet WELTWEIT folgenden Schutz:</h4><br/><br/>
            <h4><font color="blue">Die</font> <font color="red"> Golfversicherung XL</font> <font color="blue">bietet weltweit folgenden Schutz:</font></h4>
            <h4></h4>



           <p style="font-size: 18px;"> <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Transportunfälle bis 3.000 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Schäden durch Leitungswasser bis 3.000 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Brand, Blitzschlag, Explosion bis 3.000 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Höhere Gewalt bis 3.000 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b;"></i> &nbsp<span>Raub, Einbruch & Diebstahl bis 3.000 €</span><br/>
            <br/></p>


          
            <h3>⇒ mitversichertes Equipment: </h3>
            <hr/>
            <br/> 
        

        <p style="font-size: 18px;"> <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Navi, Entfernungsmesser, Golfuhr, etc. bis 300 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>E-Trolley bis 1.500 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Kosten für benötigte Leihschläger infolge Gepäcksverlust oder –verspätung bis 500 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b"></i> &nbsp<span>Schlägerbruch bei Reparatur bis 300 €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b;"></i> &nbsp<span>Haftpflicht-Schäden bis 1 Mio. €</span><br/>
            <i class="fa fa-circle" aria-hidden="true" style="color: #1caf0b;"></i> &nbsp<span>Hole-In-One Einladungen bei einem offiziellen Turnier bis 500 €</span><br/>
            <br/></p>


            <h4>Die Golfversicherung läuft automatisch am Ende der Saison 2020 aus, d.h. sie wird nicht automatisch verlängert.</h4><br/>
            <h4>Sie entscheiden sich für eine Golfversicherung XL und bekommen von uns einen Greenfee-Gutschein für den Diamond Country Club, Österreichs einzige European Tour Destination im Wert von rund 120 Euro gültig von Mo- So bis Ende 2020 als Willkommensgruß.</h4><br/>
            <h3><strong>Ich möchte eine Golfversicherung XL abschließen und eine kostenlose Golfrunde im Diamond Country Club genießen. Bitte senden Sie mir detaillierte Unterlagen und ein Antragsformular.</strong></h3><br/>
            </div>
            
        <div class="container-fluid">
        <div class="container">
            <div class="formBox">
                <form id="golfDetail" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inputBox " >
                                    <div class="inputText">Name:</div>
                                </div>
                                 <div class="inputBox ">                                    
                                    <input type="text" name="name" id="name" class="input" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <div class="inputText">E-Mail:</div>                            
                                </div>
                                <div class="inputBox">                                    
                                    <input type="text" name="email" id="email" class="input" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="captcha" style="text-align: center; margin-bottom:10px;margin-left: -50px; font-size:20px" > 
                                  <p id="question"></p><input id="ans" type="text" required="true">
                                  <div id="message">Please verify.</div>
                                  <div id="success">Validation complete :</div>
                                  <div id="fail">Validation failed :</div>
                                </div> 
                             </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" name="" class="button" value="Send Message">
                            </div>
                        </div>
                </form>

               

            </div>
        </div>
    </div>


            
           
      </div>
    </div>
  </div>
</div>
<style type="text/css">

#success, #fail{
  display: none;

}

#message, #success, #fail{
  margin-top: 10px;
  margin-bottom: 10px;
}

p{
  display: inline;
  margin-right: 5px;
}

@media screen and (max-width: 760px){

.row{
  margin-right: 0px !important;
  margin-left: 0px !important;
}
.formBox{
    padding: 0px !important;
}

.col-md-10{

    padding: 0px !important;
    margin-left: 20px !important;
}

.container{
    padding: 0px !important;
    margin:0px!important;
}

}


.fa-circle{
font-size: 15px;
color: #1caf0b;
}


.formBox{
    margin-top: 90px;
    padding: 50px;
}
.formBox  h1{
    margin: 0;
    padding: 0;
    text-align: center;
    margin-bottom: 50px;
    text-transform: uppercase;
    font-size: 48px;
}
.inputBox{
    position: relative;
    box-sizing: border-box;
    margin-bottom: 50px;
}
.inputBox .inputText{
    position: absolute;
    font-size: 24px;
    /*line-height: 50px;*/
    transition: .5s;
    padding: 10px;
    background-color: #03a9f4;
     
}
input[type=text]{
    background-color:#e8e5e5 !important; padding: 10px;
}
.inputBox .input{
    position: relative;
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 24px;
    border-bottom: 1px solid rgba(0,0,0,.5);

}
.focus .inputText{
    transform: translateY(-30px);
    font-size: 18px;
    opacity: 1;
    color: #00bcd4;    

}
textarea{
    height: 100px !important;
}
.button{
    width: 100%;
    height: 50px;
    border: none;
    outline: none;
    background: #03A9F4;
    color: #fff;
}

.error{
    color: red;
}

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
.btn-default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
</style>

<?php get_footer(); ?>

<script type="text/javascript">
    
$(document).ready(function(){
  $("#golfDetail").validate({
 
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true,                 
             },
             
         }
});
});

</script>

<script type="text/javascript">

     

    jQuery('#golfDetail').submit(function(e){
        
        e.preventDefault();
        $r=jQuery('#golfDetail').valid();
        if($r == true)
        {
                var formData = new FormData(jQuery('#golfDetail')[0]);
                formData.append('action','versicherung');
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
        }
        
        
    });

</script>

<script type="text/javascript">
  
$(document).ready(function(){

  $('button[type=submit]').attr('disabled','disabled');

  var randomNum1;
  var randomNum2;
  var maxNum = 20;
  var total;

  randomNum1 = Math.ceil(Math.random()*maxNum);
  randomNum2 = Math.ceil(Math.random()*maxNum);
  total =randomNum1 + randomNum2;

  $( "#question" ).prepend( randomNum1 + " + " + randomNum2 + " = " );
 
  $( "#ans" ).keyup(function() {

    var input = $(this).val();
    var slideSpeed = 200;

    $('#message').hide();

    if (input == total) {

      $('button[type=submit]').removeAttr('disabled');
      $('#success').slideDown(slideSpeed);
      $('#fail').slideUp(slideSpeed);

    }
    else {
      $('button[type=submit]').attr('disabled','disabled');
      $('#fail').slideDown(slideSpeed);
      $('#success').slideUp(slideSpeed);
    }
  });
 });

</script>