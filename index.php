<?php

  if(isset($_POST['reg_submit'])){

    $name = $_POST['name'];
    $mobil = $_POST['mobil'];
    $email = $_POST['email'];
    $dep = $_POST['dep'];
    $gender = $_POST['gender'];
    $about = $_POST['about'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $chack = isset($_POST['chack']);

    if(empty($name)){
      $error = 'Name is Required!';
    }
    else if(empty($mobil)){
      $error = 'Mobile Number is Required!';
    }
    else if(!is_numeric($mobil)){
      $error = 'Mobile Number Must Be Number!';
    }
    else if(strlen($mobil) != 11){
      $error = 'Mobile Number Must Be 11 Digite!';
    }
    else if(empty($email)){
      $error = 'Email is Required!';
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error = 'Invalid Email Format!';
    }
    else if(empty($password)){
      $error = 'Password is Requriend !';
    }
    else if(empty($conf_password)){
      $error = 'Conform Password is Requriend !';
    }
    else if($password != $conf_password){
      $error = 'Password & Confrom Password is Requriend !';
    }
    else if(empty($chack)){
      $error = "Please Read & Accept Our Terms And Condition !";
    }
    
    else{
      unset($_POST);
      $success = 'All Validation is Deon..';

      echo 'Name: '.$name.'<br>';
      echo 'Mobile Number: '.$mobil.'<br>';
      echo 'Email Address: '.$email.'<br>';
      echo 'Department: '.$dep.'<br>';
      echo 'Gender: '.$gender.'<br>';
      echo 'About: '.$about.'<br>';
      echo 'Birthday: '.$birthday.'<br>';
      echo 'Password: '.$password.'<br>';
      echo 'conf_Password: '.$conf_password.'<br>';
      echo 'chack: '.$chack.'<br>';
    }

  }

  function if_value($name){
    if(isset($_POST[$name])){
      echo $_POST[$name];
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form - Vismo_Dev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="form_area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-body">
                <h2 class="text-center border-bottom pb-2">Registration Form</h2>

                <?php if(isset($error)) : ?>
                <div class="alert alert-danger">
                  <?php echo $error; ?>
                </div>
                <?php endif; ?>

                <?php if(isset($success)) : ?>
                <div class="alert alert-success">
                  <?php echo $success; ?>
                </div>
                <?php endif; ?>

                <form action="" method="POST">

                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo if_value('name'); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="mobil" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobil" name="mobil" value="<?php echo if_value('mobil'); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo if_value('email'); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="dep" class="form-label">Department</label>
                    <select class="form-select" id="dep" name="dep">

                      <?php if(isset($_POST['dep'])) : ?>
                        <option selected value='<?php echo $_POST['dep']; ?>'><?php echo $_POST['dep']; ?></option>
                      <?php endif; ?>

                      <option value="Cmt">Cmt</option>
                      <option value="Cvl">Cvl</option>
                      <option value="Mtc">Mtc</option>
                      <option value="FOD">FOD</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="gender" class='form-label'>Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value='mail' name="gender" id="male" checked>
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value='female' name="gender" id="female">
                      <label class="form-check-label" for="female">Female</label>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="about">About</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="about" style="height: 100px" name="about"><?php if_value('about'); ?></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo if_value('birthday'); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo if_value('password'); ?>">
                  </div>

                  <div class="mb-3">
                    <label for="conf_password" class="form-label">Confrom Password</label>
                    <input type="password" class="form-control" id="conf_password" name="conf_password" value="<?php echo if_value('conf_password'); ?>">
                  </div>

                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="trems" value="1" name="chack">
                    <label class="form-check-label" for="trems">Check me out</label>
                  </div>

                  <button type="submit" name="reg_submit" class="btn btn-primary">Submit</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
