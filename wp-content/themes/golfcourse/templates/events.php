<?php
/*
 * Template Name: events
 * 
 */
?>

<?php get_header(); ?>

<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Greenfee Specials</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container" style="margin:20px 0px 120px;">
      <div class="row">
      <div class="col-md-10 col-md-offset-1">  
            <h2>Ich möchte Informationen zu den Greenfee Special der kommenden Wochen. Bitte senden Sie mir Informationen per E-Mail informieren Sie mich telefonisch.</h2>  <br/> 
            </div>
            
        <div class="container-fluid">
        <div class="container">
            <div class="formBox">
                <form>
                       

                       

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inputBox ">
                                    <div class="inputText">S.E.A.Card Nummer:</div>
                                    <input type="text" name="" class="input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inputBox ">
                                    <div class="inputText">Tel:</div>
                                    <input type="text" name="" class="input">
                                </div>
                            </div>

                           

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <div class="inputText">E-Mail:</div>
                                    <input type="text" name="" class="input">
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" name="" class="button" value="SENDEN">
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
    line-height: 50px;
    transition: .5s;
    opacity: .5;
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