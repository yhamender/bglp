<?php
/*
 * Template Name: golf_admin_dasboard
*/
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Golf Admin Dashboard</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo get_template_directory_uri();?>/assets/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo get_template_directory_uri();?>/assets/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo get_template_directory_uri();?>/assets/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo get_template_directory_uri();?>/assets/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri();?>/assets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo get_template_directory_uri();?>/assets/assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Golf Admin Dasboard
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                    
                <li class="active">
                    <a href="<?php echo site_url('golf-admin-dashboard');?>">
                        <i class="pe-7s-note2"></i>
                        <p>Booking</p>
                    </a>
                </li>
               
                
                
                
            </ul>
      </div>
    </div>

    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a> 
                </div> -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                  <p class="hidden-lg hidden-md">
                    5 Notifications
                    <b class="caret"></b>
                  </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> -->
                        <!-- <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                    Dropdown
                    <b class="caret"></b>
                  </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->

            <?php 
                 $currentUserId=get_current_user_id();
                 $userData=get_userdata($currentUserId);
                 ?>


                        <li>
                       <a href="<?php echo wp_logout_url(site_url()); ?>">
                                <p>Log out(<?php echo $userData->first_name; ?> <?php echo $userData->last_name; ?>)</p>
                            </a>
                        </li>
            <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Golf Booking</h4>
                          <p class="category">Here Admin Can Manage Booking </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                              <div style="overflow-x: scroll;">
                    <table class="table table-bordered table-striped" id="example1">
                                    <thead> 
                                        <th>Sr No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Club</th>
                                        <th>Sub Courses</th>
                                        <th>Booking Date</th>
                                        <th>Total Player</th>
                                        <th>Players</th>
                                        <th>Tee Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                        

                                    </thead>
                                    <tbody>

                       <?php
              $sr_no=0;
              global $wpdb;

              if($currentUserId=='317')
              {
                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='154' ORDER BY id DESC");
              }else if($currentUserId=='316'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='161' ORDER BY id DESC");
              }else if($currentUserId=='315'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='164' ORDER BY id DESC");
              }else if($currentUserId=='314'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='173' ORDER BY id DESC");
              }else if($currentUserId=='313'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='186' ORDER BY id DESC");
              }else if($currentUserId=='325'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='394' ORDER BY id DESC");
              }else if($currentUserId=='972'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='749' ORDER BY id DESC");
              }else if($currentUserId=='973'){

                $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking WHERE club_you_want_to_play='721' ORDER BY id DESC");
              }

              else{

                $allgolfbookings=array();

              }

              //echo $wpdb->last_query; exit;

              ?>

              <?php  
              foreach($allgolfbookings as $allgolfbookings){
              ?>


                                        <tr>
                       <td><?php echo ++$sr_no; ?></td>
                       <td><?php echo $allgolfbookings->first_name; ?> <?php echo $allgolfbookings->last_name; ?></td>
                       
                       <td><?php echo $allgolfbookings->email; ?></td>
                       <td><?php echo $allgolfbookings->phone; ?></td>
                       <td>
                      <?php echo get_the_title( $allgolfbookings->club_you_want_to_play ); ?>
                       </td>
                       <?php if($allgolfbookings->sub_clud_course=='Select Sub Courses'){ ?>
                        <td><?php echo "No Sub Course"; ?></td><?php } else{ ?>
                       <td><?php echo $allgolfbookings->sub_clud_course; ?></td>
                     <?php } ?>
                        <td><?php echo $allgolfbookings->date_of_booking; ?></td>
                        <td><?php echo $allgolfbookings->members_playing; ?></td>
                        <td><?php echo $allgolfbookings->name_of_booking_person; ?></td>
                        <td><?php echo $allgolfbookings->preferred_tee_time; ?></td>
                        <td><?php if($allgolfbookings->refund_status=='1'){ ?>
          
          <span class="label label-danger">Cancel</span>

      <?php } else { ?>
              
                  
               <?php if($allgolfbookings->status=='1'){?>
               
               <span class="label label-warning">Approve</span>
                
               <?php } else { ?>  

              <span class="label label-info">Pending</span>
                <?php } } ?>  </td>

        <td>   
            <button class="btn btn-primary" onclick="get_confirm(<?php echo $allgolfbookings->id; ?>,<?php echo $allgolfbookings->user_id; ?>)" style="padding: 10px 6px 3px 6px; margin: 0px 0px 3px 0px;">Confirm</button>

            <button class="btn btn-warning" onclick="get_cancel(<?php echo $allgolfbookings->id; ?>,<?php echo $allgolfbookings->user_id; ?>)" style="padding: 10px 6px 3px 13px; margin: 0px 0px 3px 0px;">Cancel</button>
        </td>
              

               


                                        </tr>

                                        <?php }  ?>
                                        
                                    </tbody>
                                </table>
                         </div>
                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <!-- <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p> -->
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="<?php echo get_template_directory_uri();?>/assets/assets/js/demo.js"></script>


</html>


<script type="text/javascript">
    
   function get_confirm($id,$userid)
    {

        // alert($id);
        // alert($userid);
    
    var time=prompt('Geben Sie Ihre Abschlagzeit ein');
    if(time==null){return false}
     

                    user_id = $userid;

                    id = $id;

                   jQuery.ajax({
                   url:"<?php  echo admin_url("admin-ajax.php"); ?>",
                   type:"POST",                    
                    data:{user_id:user_id,id:id,time:time,action:'fetch_confirm_admin'},
                   async:'true',
                    datatype:'json',
                    success:function(respose) {
                     alert(respose);
                     location.reload();
               //window.location.href = "<?php //echo site_url('');?>";
                   
                    },         
                 });
    }


</script>


<script type="text/javascript">
    
    function get_cancel($id,$userid)
    {

                    user_id = $userid;

                    id = $id;

         jQuery.ajax({
     url:"<?php  echo admin_url("admin-ajax.php"); ?>",
     type:"POST",
     data:{user_id:user_id,id:id,action:'refund_price_admin'},
     async:'true',
     datatype:'json',
     success:function(respose) {
      alert(respose);
         location.reload();
     
       },         
   });
        
    }


</script>