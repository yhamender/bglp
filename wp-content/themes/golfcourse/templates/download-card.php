<?php 
 /** Template Name: Download-Card*/
require_once ABSPATH ."wp-content/themes/golfcourse/dompdf/dompdf_config.inc.php";
$currentUserId=get_current_user_id();
$userData=get_userdata($currentUserId);
$user_id =  $userData->ID;
$link=ABSPATH."theme/golfcourse/assets/css/bootstrap.min.css";
$imglink=ABSPATH."wp-content/themes/golfcourse/assets/img/S.E.A.platinCARD_2019_druck1.jpg";
$imglink2=ABSPATH."wp-content/themes/golfcourse/assets/img/gold_card_user.png";

$payment=get_user_meta( $user_id, '_cardtype', true );

if($payment=='99')  {

  $html =
  '<html><body>'.
  '<div class="container">'.
  '<div class="row spacer">'.
  '<div class="container" style="margin:50px 80px 40px;">'.
  '<div class="row">'.
  '<div class="col-md-12 userdata">'.
  '<img src="'.$imglink2.'" style="margin-bottom:-245px; margin-right:-150px;">'.
  '<span style="font-size:19px; margin-right:-100px;">'.$userData->user_login.'</span>'.

  '</div>'.
   
  '<div class="col-md-12 userdata" style="height:80px; ">'.
  '<span style="font-size:60px;"></span>'.
   '</div>'.

   '<div class="col-md-12 userdata" style="height:65px; ">'.
  '<span style="font-size:60px;"></span>'.
   '</div>'.

   '<div class="col-md-12 userdata">'.
  '<center><span style="font-size:70px;">'.$userData->display_name.'</span></center>'.
   '</div>'.

  '</div>'.
  '</div>'.
  '</div>'.
  '</div>'.
  '</body></html>';



  } else {

$html =
  '<html><body>'.
  '<div class="container">'.
  '<div class="row spacer">'.
  '<div class="container" style="margin:50px 80px 40px;">'.
  '<div class="row">'.
  '<div class="col-md-12 userdata">'.
  '<img src="'.$imglink.'" style="margin-bottom:-245px; margin-right:-150px;">'.
  '<span style="font-size:19px; margin-right:-100px;">'.$userData->user_login.'</span>'.

  '</div>'.
   
  '<div class="col-md-12 userdata" style="height:80px; ">'.
  '<span style="font-size:60px;"></span>'.
   '</div>'.

   '<div class="col-md-12 userdata" style="height:80px; ">'.
  '<span style="font-size:60px;"></span>'.
   '</div>'.

   '<div class="col-md-12 userdata">'.
  '<center><span style="font-size:70px;">'.$userData->display_name.'</span></center>'.
   '</div>'.

  '</div>'.
  '</div>'.
  '</div>'.
  '</div>'.
  '</body></html>';

}

$dompdf = new DOMPDF();
// $link=ABSPATH."theme/golfcourse/assets/css/bootstrap.min.css";
// $imglink=ABSPATH."wp-content/themes/golfcourse/assets/img/S.E.A.platinCARD_2019_druck1.jpg";
// $html.='<link href="'.$link.'" rel="stylesheet" type="text/css" />';
// $html.='<div class="container">';
// $html.='<div class="row spacer">';
// $html.='<div class="container" style="margin:50px 80px 40px;">';
// $html.='<div class="row">';
// $html.='<div class="col-md-12 userdata">';
// $html.='<img src="'.$imglink.'" style="margin-bottom:-88px;">';
// //$html.='<br/>';
// $html.="<span style='font-size:62px;  font-family: 'Fjalla One', sans-serif!important;'>".$userData->user_login."</span></div><div class='text-center'></div></div></div></div></div></div>";
$dompdf->load_html($html);
$dompdf->set_paper('A4');
$dompdf->render();
$dompdf->stream("card.pdf",array("Attachment" => false));
?>
