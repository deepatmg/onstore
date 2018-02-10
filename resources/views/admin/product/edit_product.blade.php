<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>Admin | Edit Products</title>
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
   <link rel="stylesheet" href="{{url('assets/css/bootstrap-fileupload.min.css')}}" />

    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<script src="{{url('ckeditor/ckeditor.js')}}"></script>
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
                
               
                <li><a href="{{url('gallery')}}"><i class="icon-film"></i> Image Gallery </a></li>
                  
                <li><a href="login.html"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

       <!--PAGE CONTENT -->
       <div id="content">
<div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-product" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="icon-save"></i></button>
        <a href="{{url('showprod')}}" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="icon-reply"></i></a></div>
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
        <h3 class="panel-title"><i class="icon-pencil"></i> Edit Product</h3>
      </div>
      <div class="panel-body">
        <form action="{{url('editprod')}}/{{$result->id}}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="tab-content">
                  <div class="form-group required" style="height:auto;">
                  <label class="col-sm-2 control-label" for="input-model">Product Code</label>
                <div class="col-sm-2">
                  <input type="text" name="pcode" value="{{$result->productcode}}" placeholder="Code" id="input-model" class="form-control" />
                    {{$errors->first('pcode')}}

                                  </div>
                    <label class="col-sm-2 control-label" for="input-name1">Product Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="productname" value="{{$result->productname}}" placeholder="Product Name" id="input-name1" class="form-control" />
                      {{$errors->first('productname')}}
                  
                   </div>
                  </div>
                  <div class="form-group" style="height:auto;">
                    <label class="col-sm-2 control-label" for="input-description1">Description</label>
                    <div class="col-sm-10">
                      <textarea name="description" placeholder="Description" id="input-description1" class="form-control summernote">{{$result->description}}</textarea>
                      <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'input-description1' );
            </script>
                    </div>
                  </div>
                  <div class="form-group required" style="height:50px;">
                    <label class="col-sm-2 control-label" for="input-meta-title1">Meta Tag Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="meta_title" value="{{$result->meta_tag_title}}" placeholder="Meta Tag Title" id="input-meta-title1" class="form-control" />
                                          {{$errors->first('meta_title')}}

                                          </div>
                  </div>
                  <div class="form-group" style="height:130px;">
                    <label class="col-sm-2 control-label" for="input-meta-description1">Meta Tag Description</label>
                    <div class="col-sm-10">
                      <textarea name="meta_description" rows="5" placeholder="Meta Tag Description" id="input-meta-description1" class="form-control">{{$result->meta_tag_description}}</textarea>
                    </div>
                  </div>
                  <div class="form-group" style="height:130px;" >
                    <label class="col-sm-2 control-label" for="input-meta-keyword1">Meta Tag Keywords</label>
                    <div class="col-sm-10">
                      <textarea name="meta_keyword" rows="5" placeholder="Meta Tag Keywords" id="input-meta-keyword1" class="form-control">{{$result->meta_keyword}}</textarea>
                    </div>
                  </div>
                  <div class="form-group" style="height:50px;">
                    <label class="col-sm-2 control-label" for="input-tag1"><span data-toggle="tooltip" title="Comma separated">Product Tags</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="product_tag" value="{{$result->product_tag}}" placeholder="Product Tags" id="input-tag1" class="form-control" />
                    </div>
                  </div>
              <div class="form-group" style="height:50px;">
                    <label class="col-sm-2 control-label" for="input-brand"><span data-toggle="tooltip" title="Comma separated">Brand</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="brand" value="{{$result->brand}}" placeholder="Brand" id="input-brand" class="form-control" />
                    </div>
                  </div>
              
              
              
              
             
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-price">Price</label>
                <div class="col-sm-10">
                  <input type="text" name="price" value="{{$result->price}}" placeholder="Price" id="input-price" class="form-control" />
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-quantity">Quantity</label>
                <div class="col-sm-10">
                  <input type="text" name="quantity" value="{{$result->quantity}}" placeholder="Quantity" id="input-quantity" class="form-control" />
                </div>
              </div>
              
              
              
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status">Status</label>
                <div class="col-sm-10">
                  <select name="status" id="input-status" class="form-control">
                                        <option value="{{$result->status}}" selected="selected">@if($result->status==1) Enabled @else Disabled @endif</option>
                    <option value="@if($result->status==1)
                                        0
                                        @else
                                        1
                                        @endif">@if($result->status==0)
                                        Enabled
                                        @else
                                        Disabled
                                        @endif</option>
                                      </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order">Sort Order</label>
                <div class="col-sm-10">
                  <input type="text" name="sort_order" value="{{$result->sortorder}}" placeholder="Sort Order" id="input-sort-order" class="form-control" />
                </div>
              </div>
            
              
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="(Autocomplete)">Categories<i class="icon-question-sign" style="color:blue"></i></span></label>
                <div class="col-sm-10">
                <select name="category" class="form-control" style="top: 35px; left: 15px; display: block; float: none;" id="input-parent">
                    <option value="{{$result->category}}">{{$items1->category}}</option>
                    <option value="0" ><a href="#"> --- None --- </a></option>
                    @foreach($cat as $row)
                                        <option value="{{$row->catid}}"><a href="">{{$row->category}}</a></option>
                    @endforeach
                    
                  </select>
                 </div> 
                  
                </div> 
                <div class="table-responsive">  
                <table id="option-value1" class="table table-striped table-bordered table-hover"> 
                   <thead>  
                     <tr>       
                      <td class="text-left">Size</td>   
                      <td class="text-right">Quantity</td> 
                      <td class="text-right">Price</td>      
                      <td></td>      
                     </tr>     
                   </thead> 
                   <tbody>
                   <?php $option_value_row=0; ?>
                   @foreach($size as $row) 
                      <tr id="option-value-row{{$option_value_row}}">
                        <td class="text-left">
                                <select name="size[0][{{$option_value_row}}][{{$row->id}}][size]" class="form-control">
                                        <option value="{{$row->size}}">@if($row->size==1) Large @elseif($row->size==2) Medium @elseif($row->size==3) Small @elseif($row->size==4) XL @endif</option>
                                        <option value="1">Large</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Small</option>
                                        <option value="4">XL</option>
                                </select> 
                        </td>
                        <td class="text-right"><input type="text" name="size[0][{{$option_value_row}}][{{$row->id}}][quantity]" value="{{$row->sqty}}" placeholder="Quantity" class="form-control" />
                        </td>
    
                        <td class="text-right">
                            <input type="text" name="size[0][{{$option_value_row}}][{{$row->id}}][price]" value="{{$row->sprice}}" placeholder="Price" class="form-control" />
                        </td>
                        <td class="text-left"><button type="button" onclick="$('#option-value-row{{$option_value_row}}').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="icon-minus-sign"></i></button>
                        </td>
                    </tr>
                    <?php $option_value_row++; ?>
                    @endforeach
                     </tbody>
                        <tfoot> 
                        <tr>        
                            <td colspan="3"></td>   
                            <td class="text-left">
                                <button type="button" onclick="addOptionValue(1);" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Option Value"><i class="icon-plus-sign"></i></button>
                            </td>   
                        </tr>  
                             
                          </tfoot>  </table></div>
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Image</td>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                    
                      <td class="text-left" >
                            <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" name="image">
                                <div style="float: left;" class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url($img->image)}}" alt=""></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px; float: left;" ></div>
                              
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </td>
                   
                  </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table id="images" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Additional Images</td>
                      <td class="text-right">Sort Order</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $image_row=0; ?>
                  @foreach($img1 as $row)
                   <tr id="image-row{{$image_row}}">
                         <td class="text-left">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <input type="hidden" name="product_image[{{$image_row}}][{{$row->id}}][image]">
                                    <div style="float: left;" class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{url($row->image)}}" alt="">
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px; float: left;" >
                                    </div>
                            <div>
                                <span class="btn btn-file btn-primary">
                                    <span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="product_image[{{$image_row}}][{{$row->id}}][image]">
                                </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                            </div>
                            <input type="hidden" name="product_image[{{$image_row}}][{{$row->id}}][image]" id="input-image{{$image_row}}" />
                         </td>
                        <td class="text-right"><input type="text" name="product_image[{{$image_row}}][{{$row->id}}][sort_order]" value="{{$row->imageorder}}" placeholder="Sort Order" class="form-control" /></td>
                        <td class="text-left"><button type="button" onclick="$('#image-row{{$image_row}}').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="icon-minus-sign"></i></button></td>
                    </tr>
                    <?php $image_row++; ?>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2"></td>
                      <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="Add Image" class="btn btn-primary"><i class="icon-plus-sign"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
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
 

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{url('assets/plugins/jasny/js/bootstrap-fileupload.js')}}"></script>
         <!-- END PAGE LEVEL SCRIPTS -->

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
     <script type="text/javascript" src="{{url('js/jquery-1.7.min.js')}}"></script>
     <script type="text/javascript">
           
       

var option_value_row = {{$option_value_row}};

function addOptionValue(option_row) {
       html  = '<tr id="option-value-row' + option_value_row + '">';
    html += '  <td class="text-left"><select name="size[' + option_row + '][' + option_value_row + '][size]" class="form-control">';
    html += $('#option-values' + option_row).html();
    html += '<option value=1>Large</option><option value=2>Medium</option><option value=3>Small</option><option value=4>XL</option></select> </select></td>';
    html += '  <td class="text-right"><input type="text" name="size[' + option_row + '][' + option_value_row + '][quantity]" value="" placeholder="Quantity" class="form-control" /></td>';
    
    html += '  <td class="text-right">';
   
    html += '  <input type="text" name="size[' + option_row + '][' + option_value_row + '][price]" value="" placeholder="Price" class="form-control" /></td>';
   
    html += '  <td class="text-left"><button type="button" onclick="$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="icon-minus-sign"></i></button></td>';
    html += '</tr>';

    $('#option-value' + option_row + ' tbody').append(html);

    option_value_row++;
}

var image_row = {{$image_row}};

function addImage() {
    html  = '<tr id="image-row' + image_row + '">';
    html += '  <td class="text-left"><div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" name="product_images[' + image_row + '][image]"><div style="float: left;" class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('assets/img/demoUpload.jpg')}}" alt=""></div><div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px; float: left;" ></div><div><span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="product_images[' + image_row + '][image]"></span><a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a></div></div><input type="hidden" name="product_images[' + image_row + '][image]" id="input-image' + image_row + '" /></td>';
    html += '  <td class="text-right"><input type="text" name="product_images[' + image_row + '][sort_order]" placeholder="Sort Order" class="form-control" /></td>';
    html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="icon-minus-sign"></i></button></td>';
    html += '</tr>';

    $('#images tbody').append(html);

    image_row++;
}
 </script>

</body>
     <!-- END BODY -->
</html>
