
<?php
$conn = new mysqli('localhost', 'root', '', 'xenonnation');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xenon Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
   
// Delete Start   
$("#example").on("click", ".delete", function(){
       // alert("test");
        var id = $(this).attr("id");
       //alert(id);
       var res = id.split("_");
        var event_id= res[1];
        //alert(event_id);
        $("#hdnfield").val(event_id);
         jQuery('#success').trigger('click');
  });
 $('.yes').on( "click", function(){
    var del_id = $("#hdnfield").val();
    $.ajax({
    type: "POST",
    url: 'del_project.php',
    data : { id : del_id},
    success: function(data){
        var obj = JSON.parse(data);
        var status=obj[0]["status"];
    if(status == 1){
         $("#"+del_id).remove();
     }}
});
    });
// Delete End
$('.edit').on( "click", function() {
//alert("shobhit");
var upd=$(this).attr("id");
alert(upd);
    var a1 = upd.split("_");
    var edit = a1[1];
 //  alert(edit);
$.ajax({
    type: "POST",
    url: 'updtt.php',
     data : { id : edit},
    success: function(data){
       var obj = JSON.parse(data);        
        var p_nam=obj[0]["nam"];
        var p_id=obj[0]["id"];
        var p_andr=obj[0]["andr"];
        var p_ios=obj[0]["ios"];
        var p_web=obj[0]["web"];
        var p_type=obj[0]["type"];
        var p_desc=obj[0]["desc"];
        var p_icon=obj[0]["icon"];
        var p_img=obj[0]["img"];

    $("#idd").val(p_id);
    $("#name").val(p_nam);
    $("#platform").val(p_type);
    $("#androidd").val(p_andr);
    $("#ioss").val(p_ios);
    $("#webb").val(p_web);
    $("#descc").val(p_desc);

 }
  });
});
});
    </script>



    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.php">Basic Form</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
               
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
           
        </div>
<!-- .content -->

<div>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Portfolio Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table display" id="example" style="width:100%">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Android</th>
                                  <th scope="col">iOS</th>
                                  <th scope="col">Web</th>
                                  <th scope="col">Type(s)</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Icon</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Modify</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                        $portf=mysqli_query($conn,"SELECT * FROM portfolio");
                        while ($row=mysqli_fetch_assoc($portf)){

                        ?>
                         <tr id='<?php echo $row['proj_id']?>'>
                              <th scope="row"><?php echo $row['proj_id']?></th>
                              <td><?php echo $row['proj_name']?></td>
                              <td><?php echo $row['android']?></td>
                              <td><?php echo $row['ios']?></td>
                              <td><?php echo $row['web']?></td>
                              <td><?php echo $row['proj_type']?></td>
                              <td><?php echo $row['proj_des']?></td>
                              <td><img src='<?php echo $row['proj_icon']?>' width='100px' height='auto'></td>
                              <td><img src='<?php echo $row['proj_img']?>' width='100px' height='auto'></td>
                              <td><button type="button" data-toggle="modal" data-target="#updt" class='btn btn-info edit' id='edt_<?php echo $row['proj_id']?>' >Edit</button>
                                  <button type="button" data-toggle="modal" class='btn btn-danger delete' id='del_<?php echo $row['proj_id']?>' >Delete</button></td>
                          </tr>

                        <?php
                        }
                        ?>
                        
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>
</div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<!--modal delete start-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dell" style='visibility:hidden;' id='success'>Open Modal</button>

<div id="dell" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ALERT!!</h4>
      </div>
      <div class="modal-body">
        <p>Are you Sure You want to delete ?</p>
        <p>
                        <button class='yes btn btn-warning' data-dismiss="modal">Yes</button>
                        <button class='no btn btn-warning' data-dismiss="modal">No</button>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="hidden" id="hdnfield" value=''>
      </div>
    </div>

  </div>
</div>
<!-- modal delete end-->

<!-- modal update start-->

<div id="updt" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Portfolio Item</h4>
      </div>
      <div class="modal-body">
<div class="card">
                      <div class="card-header"><strong>Edit Portfolio</strong></div>
                      <div class="card-body card-block">
        <form action='update_project.php'  method="POST" enctype="multipart/form-data">

                            <input style='display:none;' id='idd' type="text" name='p_id' placeholder="Enter project name" class="form-control">

                        <div class="form-group"><label class=" form-control-label">Project Name</label><input id='name' type="text" name='p_name' placeholder="Enter project name" class="form-control"></div>
                        <div class="form-group"><label class=" form-control-label">Project Platform(s)</label><input id='platform' type="text" name='p_type' placeholder="Project platforms seprated by (,)" class="form-control"></div>
                        <div class="form-group"><label class=" form-control-label">Android</label><input type="text" id='androidd' name='p_android' placeholder="Link To Playstore" class="form-control"></div>
                            <div class="form-group"><label class=" form-control-label">iOS</label><input type="text" id='ioss' name='p_ios' placeholder="Link to AppleStore" class="form-control"></div>
                            <div class="form-group"><label class=" form-control-label">Website</label><input type="text" id='webb' name='p_web' placeholder="Web Address" class="form-control"></div>
                        <div class="form-group"><label for="country" class=" form-control-label">Description</label><textarea id='descc' rows="4" name='p_desc' placeholder='Detailed Description of the project'class="form-control" cols="50"></textarea>
</div>
                        <div class="form-group"><label class=" form-control-label">Project Icon</label><input type="file"  name='p_image' placeholder="Project Image" class="form-control"></div>
                        <div class="form-group"><label class=" form-control-label">Project Image</label><input type="file"  name='p_icon' placeholder="Project Icon " class="form-control"></div>

                        <br>
                        <center><input style='width:180px;' type="submit" placeholder="Add Project" class="form-control"></center>
</form>
                      </div>
                    </div>
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- modal update end-->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
