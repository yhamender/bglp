<?php

/*
 * Template Name: confirm
 */   
?>

<style type="text/css">
  
.error{
  color:red;
  font-size: 16px;
}

</style>

<?php $user_id           = $_GET['user_id']; ?>
<?php $club              =  $_GET['club']; ?>
<?php $no_of_player      = $_GET['member']; ?>
<?php $email             = $_GET['email']; ?>
<?php $nameofplayer      = $_GET['nameofplayer']; ?>
<?php $booking_id        = $_GET['booking_id']; ?>
<?php $preferredteetime  = $_GET['preferredteetime']; ?>





<div class="well-lg">
  <form name="confirm" id="confirm">
    
    

   <h1>Um die Buchung zu bestätigen tragen Sie bitte die Abschlagzeit ein welche Sie dem Gast zuteilen Bitte verwenden Sie dazu das folgende <br/>
    <span> $preferredteetime = <?php echo $preferredteetime; ?></span> <br/>

    <input type="text" name="prefer_time" id="prefer_time" placeholder="hh:mm"><br/>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
    <input type="hidden" name="club" id="club" value="<?php echo $club; ?>">
    <input type="hidden" name="no_of_player" id="no_of_player" value="<?php echo $no_of_player; ?>">
      <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
    <input type="hidden" name="nameofplayer" id="nameofplayer" value="<?php echo $nameofplayer; ?>">
    <input type="hidden" name="booking_id" id="booking_id" value="<?php echo $booking_id; ?>">
    <span>S.E.A Golf Courses</span> <br/>
    <button type="submit" name="submit" style="padding: 5px 8px 5px 10px;
    background: aqua;">Senden/Submit</button> 
    <!-- <span>Confirmation Mail Sended To The User</span> -->
  </h1>


</form>
</div>

<style type="text/css">
.well-lg h1{
      background:#001541 !important;
    padding:20px 20px 20px 20px;
    width:600px;
    color:#fff;
    text-align:center;
    margin:220px auto;
    box-shadow:1px 1px 1px 1px #000;
}
span{ 
      font-size:19px;
}
</style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.validate.js"></script>
<script>

jQuery(document).ready(function(){
  jQuery("#confirm").validate({
 
         rules: {
             prefer_time: {
                 required: true,
                 
             }
             
 }
});
});

jQuery('#confirm').submit(function(e){
        
        e.preventDefault();
        $r=jQuery('#confirm').valid();
         if($r == true)
         {
               

              var formData = new FormData(jQuery('#confirm')[0]);
                formData.append('action','fetch_confirm');
                jQuery.ajax({
                  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                  type:"POST",
                  data:formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(reponse){
                     alert(reponse);
                      window.location.href = "<?php echo site_url('');?>";
                  }
                });
                



                   // user_id= <?php //echo $user_id ?>;

                   // nameofplayer = "<?php //echo $nameofplayer ?>";
                   
                   // club= <?php //echo $club ?>;

                   // no_of_player= <?php //echo $no_of_player ?>;

                   // email= "<?php //echo $email ?>";
                   
                   // booking_id = <?php// echo $booking_id ?>;

                 //   jQuery.ajax({
                 //   url:"<?php  //echo admin_url("admin-ajax.php"); ?>",
                 //   type:"POST",
                 //   data:{user_id:user_id,club:club,email:email,no_of_player:no_of_player,nameofplayer:nameofplayer,booking_id:booking_id,action:'fetch_confirm'},
                 //   async:'true',
                 //   datatype:'json',
                 //   success:function(respose) {
                 //    alert(respose);
                 //      //window.location.href = "<?php //echo site_url('');?>";
                   
                 //     },         
                 // });
  
        }
        
        
    });

</script>




<!-- <script>

   jQuery(window).on('load', function() {

 
  });
    


  </script> -->

   <!-- <script>
 // window.setTimeout(function(){

  //       // Move to a new location or you can do something else
  //       window.location.href = "<?php //echo site_url('');?>";

  //   }, 2000);
</script> -->

