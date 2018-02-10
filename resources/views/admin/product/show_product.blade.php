<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Advance Forms</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{url('assets/plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/theme.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/MoneAdmin.css')}}" />
    <link rel="stylesheet" href="{{url('assets/plugins/Font-Awesome/css/font-awesome.css')}}" />
    <!--END GLOBAL STYLES --> 

    <!-- PAGE LEVEL STYLES -->
    
 <link href="{{url('assets/jquery-ui.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{url('assets/plugins/uniform/themes/default/css/uniform.default.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/chosen/chosen.min.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/colorpicker/css/colorpicker.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/tagsinput/jquery.tagsinput.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/daterangepicker/daterangepicker-bs3.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/datepicker/css/datepicker.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/timepicker/css/bootstrap-timepicker.min.css')}}" />
<link rel="stylesheet" href="{{url('assets/plugins/switch/static/stylesheets/bootstrap-switch.css')}}" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')}}"></script>
    <![endif]-->

</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

       <!-- MAIN WRAPPER -->
    <div id="wrap">


          <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="{{url('admin')}}" class="navbar-brand">
                    <img src="{{url('assets/img/logo.png')}}" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                        <br />
                                        <span class="label label-primary">Important</span> 

                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Raphel Jonson</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-success"> Moderate </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Chi Ley Suk</strong>
                                        <span class="pull-right text-muted">
                                            <em>26 Jan 2014</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                         <br />
                                        <span class="label label-danger"> Low </span> 
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Profile </strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Pending Tasks </strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Work Completed </strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> Summary </strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{url('assets/img/user.gif')}}" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel ">
                    <a href="{{url('admin')}}" >
                        <i class="icon-table"></i> Dashboard
       
                       
                    </a>                   
                </li>


                
<li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#categoryr-nav">
                        <i class="icon-table"></i> Category
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="categoryr-nav">
                        <li><a href="{{url('addcat')}}"><i class="icon-angle-right"></i> Add Category </a></li>
                        <li><a href="{{url('showcat')}}"><i class="icon-angle-right"></i> Show Category </a></li>

                    </ul>
                </li>
                
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#productr-nav">
                        <i class="icon-table"></i> Products
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="productr-nav">
                        <li><a href="{{url('addproduct')}}"><i class="icon-angle-right"></i> Add Products </a></li>
                        <li><a href="{{url('showprod')}}"><i class="icon-angle-right"></i> Show Products </a></li>

                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#advtr-nav">
                        <i class="icon-table"></i> Advertisement
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="advtr-nav">
                        <li><a href="{{url('addadvt')}}"><i class="icon-angle-right"></i> Add Advertisement </a></li>
                        <li><a href="{{url('showadvt')}}"><i class="icon-angle-right"></i> Show Advertisement </a></li>

                    </ul>
                </li>

                <li><a href="{{url('gallery')}}"><i class="icon-film"></i> Image Gallery </a></li>
                  
                <li><a href="login.html"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

       <!--PAGE CONTENT -->
        <div id="content">
           <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right"><a href="{{url('addprod')}}" data-toggle="tooltip" title="Add New" class="btn btn-primary"><i class="icon-plus"></i></a>
        <button type="submit" form="form-product" formaction="" data-toggle="tooltip" title="Copy" class="btn btn-default"><i class="icon-copy"></i></button>
        <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-product').submit() : false;"><i class="icon-trash"></i></button>
      </div>
      <h1>Products</h1>
      <ul class="breadcrumb">
                <li><a href="{{url('admin')}}">Home</a></li>
                <li><a href="{{url('showprod')}}">Products</a></li>
              </ul>
    </div>
  </div>
  <div class="container-fluid">
            <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="icon-list"></i> Product List</h3>
      </div>
      <div class="panel-body">
        <div class="well">
          <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                <label class="control-label" for="input-model">Product Code</label>
                <input type="text" name="filter_model" value="" placeholder="Product Code" id="input-model" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-name">Product Name</label>
                <input type="text" name="filter_name" value="" placeholder="Product Name" id="input-name" class="form-control" />
              </div>
              
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-price">Price</label>
                <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-quantity">Quantity</label>
                <input type="text" name="filter_quantity" value="" placeholder="Quantity" id="input-quantity" class="form-control" />
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-status">Status</label>
                <select name="filter_status" id="input-status" class="form-control">
                  <option value="*"></option>
                                    <option value="1">Enabled</option>
                                                      <option value="0">Disabled</option>
                                  </select>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-image">Image</label>
                <select name="filter_image" id="input-image" class="form-control">
                  <option value="*"></option>
                                    <option value="1">Enabled</option>
                                                      <option value="0">Disabled</option>
                                  </select>
              </div>
              <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="icon-filter"></i> Filter</button>
            </div>
          </div>
        </div>
        <form action="{{url('deleteprod')}}" method="POST" enctype="multipart/form-data" id="form-product">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-center">Image</td>
                  <td class="text-left">                    <a href="" class="asc">Product Name</a>
                    </td>
                  <td class="text-left">                    <a href="">Product Code</a>
                    </td>
                  <td class="text-right">                    <a href="">Price</a>
                    </td>
                  <td class="text-right">                    <a href="">Quantity</a>
                    </td>
                  <td class="text-left">                    <a href="">Status</a>
                    </td>
                  <td class="text-right">Action</td>
                </tr>
              </thead>
              <tbody>
              @foreach($result as $row)
                <tr>
                  <td class="text-center">                    <input type="checkbox" name="selected[]" value="{{$row->id}}" />
                    </td>
                  <td class="text-center">                    <img src="{{url($row->image)}}" alt="Apple Cinema 30&quot;" class="img-thumbnail" />
                    </td>
                  <td class="text-left">{{$row->productname}}</td>
                  <td class="text-left">{{$row->productcode}}</td>
                  <td class="text-right">        
                    <div class="text-danger">{{$row->price}}</div>
                    </td>
                  <td class="text-right">                    <span class="label label-success">{{$row->quantity}}</span>
                    </td>
                  <td class="text-left">@if($row->status==1) Enabled @else Disabled @endif</td>
                  <td class="text-right"><a href="{{url('editprod')}}/{{$row->id}}" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="icon-pencil"></i></a></td>
                </tr>
                 @endforeach             
               
                              
                        
                       
                                              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"></div>
          <div class="col-sm-6 text-right">Showing 1 to 19 of 19 (1 Pages)</div>
        </div>
      </div>
    </div>

           </div>         
                    
                                



       



                    

                
       <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="{{url('assets/plugins/jquery-2.0.3.min.js')}}"></script>
     <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPT-->
 <script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
 <script src="{{url('assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{url('assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script src="{{url('assets/plugins/chosen/chosen.jquery.min.js')}}"></script>
<script src="{{url('assets/plugins/colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{url('assets/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
<script src="{{url('assets/plugins/validVal/js/jquery.validVal.min.js')}}"></script>
<script src="{{url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{url('assets/plugins/datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('assets/plugins/timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{url('assets/plugins/switch/static/js/bootstrap-switch.min.js')}}"></script>
<script src="{{url('assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js')}}"></script>
<script src="{{url('assets/plugins/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{url('assets/plugins/jasny/js/bootstrap-inputmask.js')}}"></script>
       <script src="{{url('assets/js/formsInit.js')}}"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->
     
</body>
     <!-- END BODY -->
</html>
s