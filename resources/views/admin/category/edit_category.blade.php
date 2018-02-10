<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>Admin | Edit Category</title>
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
    
 <link href="{{url('assets/css/jquery-ui.css')}}" rel="stylesheet" />
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
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
                    <img src="assets/img/logo.png" alt="" /></a>
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
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
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
                  
                <li><a href="{{url('login')}}"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

       <!--PAGE CONTENT -->
       <div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-category" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="icon-save"></i></button>
        <a href="{{url('showcat')}}" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="icon-reply"></i></a></div>
      <h1>Categories</h1>
      <ul class="breadcrumb">
                <li><a href="{{url('admin')}}">Home</a></li>
                <li><a href="{{url('showcat')}}">Categories</a></li>
              </ul>
    </div>
  </div>

<div class="container-fluid">
        <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="icon-pencil"></i> Edit Category</h3>
      </div>
      <div class="panel-body">
        <form action="{{url('editcat')}}/{{$res->id}}" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">
         <input type="hidden" name="_token" value="{{csrf_token()}}"> 
          <div class="tab-content">
                        
              
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-name1">Category Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" value="{{$res->title}}" placeholder="Category Name" id="input-name1" class="form-control" />
                      
                                          </div>
                  </div>
                  
                  
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-parent">Parent</label>
                <div class="col-sm-10">
                  <select name="path" class="form-control" style="top: 35px; left: 15px; display: block;" id="input-parent">
                    <option value="{{$cat->catid}}"><a href="#">{{$cat->category}}</a></option>
                    @foreach($cats as $row)
                                        <option value="{{$row->catid}}"><a href="">{{$row->category}}</a></option>
                    @endforeach
                    
                  </select>
                                  </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
                <div class="col-sm-10">
                  <input type="text" name="sort_order" value="{{$res->sortorder}}" placeholder="Sort Order" id="input-sort-order" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status">Status</label>
                <div class="col-sm-10">
                  <select name="status" id="input-status" class="form-control">
                                        <option value="{{$res->status}}" selected="selected">@if($res->status==1)
                                        Enabled
                                        @else
                                        Disabled
                                        @endif</option>
                    <option value="@if($res->status==1)
                                        0
                                        @else
                                        1
                                        @endif">@if($res->status==0)
                                        Enabled
                                        @else
                                        Disabled
                                        @endif</option>
                                      </select>
                </div>
              </div>
            </div>
          </div>
        </form>
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
