
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Admin | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="{{url('assets/plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}" />
    <link rel="stylesheet" href="{{url('assets/plugins/magic/magic.css')}}" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<script type="text/javascript">
  $(document).ready(function(){
    $('#submit').click(function(e){
      e.preventDefault();
      var form=$(this).parents("form:first");
      var dataString=form.serialize();
      $.ajax({
        url:"{{url('ajax/index')}}",
        type:"POST";
        data:dataString,
        success:function(data){
          //alert("inserted successfully");
          $('#text').html(data);
          $('#password').val('');
          $('#comfirm_password').val('');
        }
      });
    });
  });
</script>
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="{{url('assets/img/logo.png')}}" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="{{url('login')}}" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter new password
                </p>
               
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Comfirm Password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" id="submit" type="submit">Reset Password</button>
            </form>
        </div>
        <div id="text"></div>
        
    </div>
    


</div>

    <!--END PAGE CONTENT -->     
        
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="{{url('assets/plugins/jquery-2.0.3.min.js')}}"></script>
      <script src="{{url('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
   <script src="{{url('assets/js/login.js')}}"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
