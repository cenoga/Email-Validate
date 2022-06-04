<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Email Validation in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Email Validation in PHP</h1>
      </div>
          <div class="card-body">
            <form action="" method="post">
              <input type="text" name="email" class="form-control" placeholder="Input Email"><br>
              <input type="submit" name="submit" class="btn btn-primary" value="Check Email">
            </form>
            <?php 
              if(isset($_POST['submit'])){
              $email = $_POST['email'];
              $validate = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(filter_var($validate,FILTER_VALIDATE_EMAIL) === false){
            echo '<h4>Email is not valid</h4>';
            }
            else{
            echo '<h4>Email is valid</h4>';
            }
            }
            ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

