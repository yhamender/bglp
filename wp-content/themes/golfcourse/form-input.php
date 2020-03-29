<div id="content">
  <h1 class="bg-white content-heading border-bottom">User Requests...</h1>
  <div class="innerAll spacing-x2">

    <div class="container">
   
    <div class="row">
      <div class="col-sm-12">
        <div class="form infor" style="margin: 10px; padding:10px; text-align: center;"> 
        <button type="button" class="btn btn-primary" id="form_first" style="padding: 10px;">Aktionen</button>       
          <button type="button" class="btn btn-primary" id="form_1" style="padding: 10px; margin-left: 10px">Mitgliedschaften</button>
          <button type="button" class="btn btn-primary" id="form_2" style="padding: 10px; margin-left: 10px">Versicherung</button>
          <button type="button" class="btn btn-primary" id="form_3" style="padding: 10px; margin-left: 10px">Greenfee Specials</button>
          <button type="button" class="btn btn-primary" id="form_4" style="padding: 10px; margin-left: 10px">Golfreisen</button>
        </div>
    
    <!-- form 1 data  begin       -->
<?php global $wpdb; ?>
 

<div class="aktionen">
  <button type="button" class="btn btn-primary" style="background-color: #049a04; margin-top: 50px">User's Request to Aktionen</button>
  <table class="table table-hover">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">S.E.A.platinCARD</th>
      <th scope="col">Straße</th>
      <th scope="col">Hausnummer</th>
      <th scope="col">Ort</th>
      <th scope="col">PLZ</th>
      <th scope="col">Telefon</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Geb. Datum</th>
      <th scope="col">Name</th>
      <th scope="col">Golfclub</th>
      <th scope="col">HCP</th>
      <th scope="col">Straße</th>
      <th scope="col">Hausnummer</th>
      <th scope="col">Ort</th>
      <th scope="col">PLZ</th>
      <th scope="col">Telefon</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Geb. Datum</th>
      <th scope="col">Datum</th>
      <th scope="col">Unterschrift</th>     
    </tr>
  </thead>
  <tbody>

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputvalue` FROM `form_inputs` Where `formname`='aktionen_1'");
            
$aktionen_1 = json_decode(json_encode($aktionen_1), true);
      

$singleArray = array();
    foreach ($aktionen_1 as $key => $value) {
      $singleArray[$key] = $value['inputvalue'];
    }
     
    $singleArray = array_chunk($singleArray,21); ?>

    <tr class="table-active">  
    <?php $i=1; foreach($singleArray as $row) {
      echo('<tr>');
      echo('<td>' . $i++ . '</td>');
      foreach($row as $cell) {
        echo('<td>' . $cell . '</td>');
      }
      echo('</tr>');
    } ?>
        </tr>

  </tbody>
</table>
<!-- form 1 data    end     -->

 
</div>

 

<!-- form 3 data  begin       -->

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputkey` FROM `form_inputs` Where `formname`='golfDetailThird' Limit 10");
// echo "<pre>";
// print_r($aktionen_1);
 

  ?>

 <div id="form_1_data" style="display: none"> 
  <button type="button" class="btn btn-primary" style="background-color: #049a04; margin-top: 50px">User's Request to Mitgliedschaften</button>
  <table class="table table-hover">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <?php foreach($aktionen_1 as $aktionen){ 
        if($aktionen->inputkey=='fname'){$aktionen->inputkey = 'First Name';} 
        if($aktionen->inputkey=='lname'){$aktionen->inputkey = 'Last Name';}
        ?>
      <th scope="col"><?php echo ucfirst($aktionen->inputkey); ?></th>
    <?php } ?>    
    </tr>
  </thead>
  <tbody>

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputvalue` FROM `form_inputs` Where `formname`='golfDetailThird'");
  // echo "<pre>";
// print_r($aktionen_1);
            
$aktionen_1 = json_decode(json_encode($aktionen_1), true);
    
$singleArray = array();
    foreach ($aktionen_1 as $key => $value) {
      $singleArray[$key] = $value['inputvalue'];
    }
     
    $singleArray = array_chunk($singleArray,10); ?>
    
    <tr class="table-active">  
    <?php $i=1; foreach($singleArray as $row) {
      echo('<tr>');
      echo('<td>' . $i++ . '</td>');
      foreach($row as $cell) {
        echo('<td>' . $cell . '</td>');
      }
      echo('</tr>');
    } ?>
        </tr>

  </tbody>
</table>
</div>

<!-- form 3 data    end     -->

<!-- form 4 data  begin       -->

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputkey` FROM `form_inputs` Where `formname`='versicherung' Limit 2");
// echo "<pre>";
// print_r($aktionen_1);
 

  ?>

 <div id="form_2_data" style="display: none">
   <button type="button" class="btn btn-primary" style="background-color: #049a04; margin-top: 50px">User's Request to Versicherung</button>
  <table class="table table-hover">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <?php foreach($aktionen_1 as $aktionen){ ?>
      <th scope="col"><?php echo ucfirst($aktionen->inputkey); ?></th>
    <?php } ?>    
    </tr>
  </thead>
  <tbody>

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputvalue` FROM `form_inputs` Where `formname`='versicherung'");
  // echo "<pre>";
// print_r($aktionen_1);
            
$aktionen_1 = json_decode(json_encode($aktionen_1), true);
    
$singleArray = array();
    foreach ($aktionen_1 as $key => $value) {
      $singleArray[$key] = $value['inputvalue'];
    }
     
    $singleArray = array_chunk($singleArray,2); ?>
    
    <tr class="table-active">  
    <?php $i=1; foreach($singleArray as $row) {
      echo('<tr>');
      echo('<td>' . $i++ . '</td>');
      foreach($row as $cell) {
        echo('<td>' . $cell . '</td>');
      }
      echo('</tr>');
    } ?>
        </tr>

  </tbody>
</table>
</div>

<!-- form 4 data    end     -->

<!-- form 5 data  begin       -->

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputkey` FROM `form_inputs` Where `formname`='golfGreen' Limit 3");
// echo "<pre>";
// print_r($aktionen_1);
 

  ?>

 <div id="form_3_data" style="display: none">
  <button type="button" class="btn btn-primary" style="background-color: #049a04; margin-top: 50px">User's Request to Greenfee Specials</button>
  <table class="table table-hover">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <?php foreach($aktionen_1 as $aktionen){ ?>
      <th scope="col"><?php echo ucfirst($aktionen->inputkey); ?></th>
    <?php } ?>    
    </tr>
  </thead>
  <tbody>

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputvalue` FROM `form_inputs` Where `formname`='golfGreen'");
  // echo "<pre>";
// print_r($aktionen_1);
            
$aktionen_1 = json_decode(json_encode($aktionen_1), true);
    
$singleArray = array();
    foreach ($aktionen_1 as $key => $value) {
      $singleArray[$key] = $value['inputvalue'];
    }
     
    $singleArray = array_chunk($singleArray,3); ?>
    
    <tr class="table-active">  
    <?php $i=1; foreach($singleArray as $row) {
      echo('<tr>');
      echo('<td>' . $i++ . '</td>');
      foreach($row as $cell) {
        echo('<td>' . $cell . '</td>');
      }
      echo('</tr>');
    } ?>
        </tr>

  </tbody>
</table>
</div>

<!-- form 5 data    end     -->

<!-- form 6 data  begin       -->

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputkey` FROM `form_inputs` Where `formname`='golfreisen' Limit 10");
// echo "<pre>";
// print_r($aktionen_1);
 

  ?>

 <div id="form_4_data" style="display: none">
  <button type="button" class="btn btn-primary" style="background-color: #049a04; margin-top: 50px">User's Request to Golfreisen</button>
  <table class="table table-hover">
  <thead>
    <tr style="background-color:black; color: white">
      <th scope="col">No</th>
      <?php foreach($aktionen_1 as $aktionen){ ?>
      <th scope="col"><?php echo ucfirst($aktionen->inputkey); ?></th>
    <?php } ?>    
    </tr>
  </thead>
  <tbody>

  <?php $aktionen_1 = $wpdb->get_results("SELECT `inputvalue` FROM `form_inputs` Where `formname`='golfreisen'");
  // echo "<pre>";
// print_r($aktionen_1);
            
$aktionen_1 = json_decode(json_encode($aktionen_1), true);
    
$singleArray = array();
    foreach ($aktionen_1 as $key => $value) {
      $singleArray[$key] = $value['inputvalue'];
    }
     
    $singleArray = array_chunk($singleArray,10); ?>
    
    <tr class="table-active">  
    <?php $i=1; foreach($singleArray as $row) {
      echo('<tr>');
      echo('<td>' . $i++ . '</td>');
      foreach($row as $cell) {
        echo('<td>' . $cell . '</td>');
      }
      echo('</tr>');
    } ?>
        </tr>

  </tbody>
</table>
</div>
<!-- form 6 data    end     -->
             
    </div>
  </div>
</div>
      
  </div>
</div>
<script type="text/javascript">
   jQuery('#frmBrand').submit(function(e){
  e.preventDefault();
  var formData = new FormData(jQuery('#frmBrand')[0]);
  formData.append('action','create_brand');
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
   });
</script>
<style type="text/css">
table, th, td {
  border: 1px solid grey;
  text-align: center !important;
}
</style>
<style type="text/css">
 body{background:#f1f1f1!important; }
</style>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery-2.2.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.tableTools.js" type="text/javascript"></script>
 

<script type="text/javascript">
  $(function(){
    $("#form_1").click(function(){     
      $(".aktionen").hide();
      $("#form_1_data").show();
      $("#form_2_data").hide();
      $("#form_3_data").hide();
      $("#form_4_data").hide();

    });
     $("#form_2").click(function(){     
      $(".aktionen").hide();
      $("#form_1_data").hide();
      $("#form_2_data").show();
      $("#form_3_data").hide();
      $("#form_4_data").hide();
    });
     $("#form_3").click(function(){     
      $(".aktionen").hide();
      $("#form_1_data").hide();
      $("#form_2_data").hide();
      $("#form_3_data").show();
      $("#form_4_data").hide();
    });
     $("#form_first").click(function(){     
      $(".aktionen").show();
      $("#form_1_data").hide();
      $("#form_2_data").hide();
      $("#form_3_data").hide();
      $("#form_4_data").hide();
    });
     $("#form_4").click(function(){     
      $(".aktionen").hide();
      $("#form_1_data").hide();
      $("#form_2_data").hide();
      $("#form_3_data").hide();
      $("#form_4_data").show();
    });
  });

</script>
