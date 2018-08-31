<html>
  <head>
    <meta charset="UTF-8">
    <title>KCG - ADMIN</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="css/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>BPR </b> Kencana Graha</a>
      </div>
      <div class="login-box-body">
        
        <?php if(isset($errMsg)){ ?>
        <div class="alert alert-danger"><?php echo $errMsg; ?></div>
        <?php } ?>
        
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input name="username" type="text" class="form-control" placeholder="Username" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
          </div>
        </form>

      </div>
    </div>

    <script src="plugin/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugin/jQuery/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
  </body>
</html>