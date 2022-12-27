<?php 
include "action.php";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  </head>
  <body>
  <div class="main">

    <div class="item">
      <div class="content">
        <?php 
          if (isset($_GET["update"])) {
            $id = $_GET["id"] ?? null;
            $where = array("userID" => $id);
            $row = $obj->select_record("users",$where);
            ?>
              <form action="action.php" class="form-horizontal" method="POST">
                <div class="logo"><img src="./images/user1.png"></div>
                <div class="input-group lg">
                  <input type="hidden" name="id" value="<?php echo $row["userID"]; ?>" class="form-control">
                </div>
                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="text" name="username" value="<?php echo $row["username"]; ?>" class="form-control" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                </div>

                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="email" name="email" value="<?php echo $row["email"]; ?>" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                </div>

                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                  <input type="text" name="nic" class="form-control" value="<?php echo $row["Nationalid"]; ?>" placeholder="National ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'National ID'">
                </div>

                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <input type="text" name="password" value="<?php echo $row["password"]; ?>" class="form-control" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>  
       
                <div class="form-group in">
                <input type="submit" name="edit" class="btn btn-info btn-block" value="Update">
                </div>
              </form>

            <?php
          }
          else
          {
            ?>
              <form action="" class="form-horizontal">
                <div class="logo"><img src="./images/user1.png"></div>
                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="text" name="username" class="form-control" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                </div>

                <div class="input-group lg">
                  <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>  
       
                <div class="form-group in">
                <input type="submit" name="reg" class="btn btn-info btn-block" value="LOGIN"><br>
                <button type="button" name="signup" class="btn btn-success btn-block" id="back"><a href="register.php">SIGN UP</a></button>
                </div>
              </form>
            <?php
          }
         ?>
        
      </div>
     </div>
  </div>
  <div style="background-color: white;">
    <table class="table table-striped" style="text-align: center;">
          <thead>
            <tr>
              <th style="text-align: center;">UserID</th>
              <th style="text-align: center;">Username</th>
              <th style="text-align: center;">Email</th>
              <th style="text-align: center;">NIC</th>
              <th style="text-align: center;">Password</th>
              <th style="text-align: center;">Edit</th>
              <th style="text-align: center;">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $myrow = $obj->fetch_record("users");
              foreach ($myrow as $row) 
              {
                ?>
                  <tr>
                    <td><?php echo $row["userID"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["Nationalid"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><a href="index.php?update=1&id=<?php echo $row["userID"]; ?>" class="btn btn-info">Edit</a></td>
                    <td><a href="action.php?delete=1&id=<?php echo $row["userID"]; ?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                <?php
              }
            ?>
          </tbody>
        </table>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
