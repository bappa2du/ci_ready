


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Default::Template</title>
    <base href="<?= base_url(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="assets/web/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="assets/web/css/custom.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    

    <div class="container">
    <br><br>

      
     

    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <form class="form-horizontal" method="post" action="auth/login">
      <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title text-center">Authentication</div>
      </div>
        <div class="panel-body">
          <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-info">Login</button>
      </div>
    </div>
        </div>
      </div>
  </form>
      </div>
    </div>
      

     

      

  

      

      
     

     


    </div>


    <script src="assets/web/js/jquery.min.js"></script>
    <script src="assets/web/js/bootstrap.min.js"></script>
    <script src="assets/web/js/custom.js"></script>
  </body>
</html>
