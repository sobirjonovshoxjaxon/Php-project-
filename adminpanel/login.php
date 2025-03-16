<?php 
    require 'connect.php';

    if(isset($_POST['name']) && $_POST['password']){

        $name = $_POST['name'];
        $password = $_POST['password'];

        $statement = $pdo->prepare("SELECT * FROM users WHERE name = :name AND password = :password");
        $statement->execute([

            'name' => $_POST['name'],
            'password' => $_POST['password'],
        ]);

        $user = $statement->fetch();

        if($user){

            header('location: index.php');
            exit;
        }else{

            header('location: login.php');
            exit;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/admin/css/app.min.css">
  <link rel="stylesheet" href="/admin/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/admin/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/admin/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">

                <form method="POST" action="login.php" class="needs-validation" novalidate="">

                  <div class="form-group">
                    <label for="email">Name</label>
                    <input id="email" type="text" class="form-control" tabindex="1" required autofocus name="name">
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" tabindex="2" required name="password">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>


                </form>
               
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="/admin/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="/admin/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/admin/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>