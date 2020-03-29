

  <div class="col-md-6 col-md-offset-3" style="margin-top: 50px; background-color: white; padding:30px; border:2px solid #d8d2d2; border-radius: 20px">
  <form  action="#" id="coupanForm" class="form-horizontal" method="post">


  <div class="form-group">
    <label for="exampleInputName">Coupan Name</label>
    <input type="text" class="form-control" name="coupan_name" id="name" aria-describedby="emailHelp" placeholder="Enter Coupan Name" required="">     
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Coupan Price</label>
    <input type="number" class="form-control" name="price" id="price" placeholder="Coupan Price" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Select Card Type</label>
  <select name="card" class="form-control" id="card">
  <option value="Gold Card">Gold Card</option>
  <option value="Platinium Card">Platinium Card</option>  
</select>
</div> 
   
  <button type="submit" class="btn btn-primary" style="margin-left: 45%">Submit</button>
</form>
<div style="display:none;" id="contact-msg"></div>
</div>
 
<div id="content">
  
  <div class="innerAll spacing-x2">
     <div class="col-md-12">
      <h1 class="bg-white content-heading border-bottom" style="margin-top: 50px">Coupans Details</h1>
      <table class="table table-bordered table-striped" id="example1">
        <div style="display:none;" id="delete-msg"></div>
        <thead>
          <tr align="center">
            <th scope="col" id="Sr No" class="manage-column" width="50px">Sr No.</th>
            <th scope="col" id="First Name" class="manage-column">Name</th>
            <th scope="col" id="Last Name" class="manage-column" width="100px">Price</th>
            <th scope="col" id="Last Name" class="manage-column" width="100px">Card Type</th>
            <th scope="col" id="Last Name" class="manage-column" width="100px">Actions</th>           
             
        </thead>
        <tbody id="the-list">
          <?php
			  $sr_no=0;
              global $wpdb;
              $coupans = $wpdb->get_results("SELECT * FROM golf_coupan");

              foreach($coupans as $coupan):

              ?>
             <tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized" align="center">
            <td class="manage-column"><?php echo ++$sr_no; ?></td>
            <td class="tags column-tags manage-column"><?php echo $coupan->coupan_name; ?></td>
            <td class="tags column-tags manage-column"><?php echo $coupan->price; ?></td>
             <td class="tags column-tags manage-column"><?php echo $coupan->action; ?></td>
             <td class="tags column-tags manage-column"> <a onclick="delete_coupan(<?php echo $coupan->id; ?>)"  name="delete" id="delete" class="btn btn-danger">Delete</a>
              <a onclick="edit_coupan(<?php echo $coupan->id; ?>)"  id="mymodal122" data-toggle="modal" data-target="#myModal12e" class="btn btn-primary" >Edit</a>
             </td>
            </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
 <!-- Edit Modal -->
<div class="modal fade" id="myModal12e" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:30px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edid Coupan</h4>
      </div>
     <form  action="#" id="editForm" class="form-horizontal" method="post" >
      <div class="modal-body">
       <div class="form-group">
    <label for="exampleInputName">Coupan Name</label>
    <input type="text" class="form-control" name="coupan_name" id="coupanId" aria-describedby="emailHelp" placeholder="Enter Coupan Name" required="" value="">     
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Coupan Price</label>
    <input type="number" class="form-control" name="price" id="coupanPrie" placeholder="Coupan Price" required="" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Select Card Type</label>
  <select name="card" class="form-control" id="coupancard" value="">
  <option value="Gold Card">Gold Card</option>
  <option value="Platinium Card">Platinium Card</option>  
</select>
</div> 
 
    <input type="hidden"  name="plan_id" id="plan_id" value="">

    <br/>
    
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
        <button type="submit" id="competitor" class="btn btn-primary" style="margin: 0px 0px 0px 240px;">Submit</button>
      </div>
   </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  (function($){   

    $("#coupanForm").submit(function(event){
        event.preventDefault(); 
      var formdata = $(this).serialize()+'&action=registerCoupan';
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        // alert(formdata);
        if(formdata){
            //alert();
          $("#contact-msg").html('<strong>Thank you!</strong>Coupon Successfully Added.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);

          location.reload();
 
          
          

        }
       
      });
     
    });
  })(jQuery);
    
    </script>





<script type="text/javascript">
  (function($){   

    $("#editForm").submit(function(event){
        event.preventDefault(); 
      var formdata = $(this).serialize()+'&action=hello';
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
         //alert(resp);
        if(formdata){
            //alert();
          $("#contact-msg").html('<strong>Thank you!</strong>Coupon Successfully Added.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);

          location.reload();
 
          
          

        }
       
      });
     
    });
  })(jQuery);
    
    </script>


  
<script type="text/javascript">    

function delete_coupan($id)
 {
   
   var id = $id;  
   
  $.ajax({
      url:'<?php echo admin_url("admin-ajax.php"); ?>',
      type:"POST",
      data:{"id":id,action:'deleteCoupan'},
      success:function(resp){
         alert(resp);

         location.reload();
        
         
     }
    });

 }

    </script>

    <script type="text/javascript">    

function edit_coupan($id)
 {
    
   var id = $id; 
   

  $.ajax({
      url:'<?php echo admin_url("admin-ajax.php"); ?>',
      type:"POST",
      dataType:'json',
      data:{"id":id,action:'editCoupan'},
      async: false,
      success:function(data){
        console.log(data[0]);

        $('#coupanId').val(data[0]['coupan_name']);
        $('#coupanPrie').val(data[0]['price']);
        $('#coupancard').val(data[0]['action']);
        $('#plan_id').val(data[0].id);
      //var records=JSON.parse(data);
//      location.reload();
        
         
     }
    });

 }

    </script>
 

<style type="text/css">

.dropdown-menu {
  min-width: 110px !important;
}
dd, li {
    margin-bottom: 0px !important;
}

#card{
  width: 100%;
  height: 50px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;

}

input[type=text] {
  width: 100%;
  height: 50px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=number] {
  width: 100%;
  height: 50px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

.manage-column{
      text-align:center!important;
}
.img-circle {
    border-radius:50%!important;
}
.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
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
 $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
