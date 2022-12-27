<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <div class="main">
    <div class="item">
      <div class="content">
        <form action="action.php" class="form-horizontal" method="POST">
          <div class="logo"><img src="./images/user1.png"></div>
          <div class="input-group lg">
            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
          </div>
          <div class="input-group lg">
            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
          </div> 
          <div class="input-group lg">
            <span class="input-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
            <input type="text" name="nic" class="form-control" placeholder="National ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'National ID'">
          </div>  
          <div class="input-group lg">
            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
          </div>  
          <div class="input-group lg">
            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
          </div>  
          <div class="form-group in">
          <input type="submit" name="reg" class="btn btn-info btn-block" value="SIGN UP"><br>
          <button type="button" name="back" class="btn btn-danger btn-block" id="back"><a href="index.php">BACK TO LOGIN</a></button>
          <!-- <input type="button"  class="btn btn-info btn-block" value=""> -->
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
