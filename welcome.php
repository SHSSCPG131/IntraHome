<?php
// Initialize the session
session_start();
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome <?php $_SESSION['username']?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars(strtoupper($_SESSION['username'])); ?></b>. Welcome to our site.</h1>
    </div>
    <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Room 1</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="Room1_control.php" class="btn btn-primary">GO</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Room 2</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="Room2_control.php" class="btn btn-primary">GO</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Room 1</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="Room1_control.php" class="btn btn-primary">GO</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Room 2</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="Room2_control.php" class="btn btn-primary">GO</a>
                    </div>
                  </div>
                </div>
              </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>