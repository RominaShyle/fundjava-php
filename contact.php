<?php


session_start();


 echo "<pre>";
 var_dump($_SERVER['REQUEST_METHOD']);
 echo "</pre>";



//setcookie() -> krijon cookien
$cookie_name = "user";
$cookie_value = "John";


setcookie($cookie_name, $cookie_value, time() + (86400 * 30) , "/" );



echo "<pre>";
var_dump($_SESSION);
echo "</pre>";


if(!isset($_COOKIE[$cookie_name])){
echo "Cookie me emrin $cookie_name nuk eshte vendosur.";

}
else
echo "Cookie me emrin $cookie_name eshte vendosur dhe e ka vleren $_COOKIE[$cookie_name] ";


//deleting a cookie 






$username_err = $email_err = $password_err = '';

function validate($data){

  
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  return $data;

}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  if (empty(validate($_POST['username']))) {
    $username_err = "Ju lutem vendosni username!";

  } 

  
  else 
  if(strlen(validate($_POST['username'])) < 5){
    $username_err = "Username duhet te kete te pakten 5 karaktere!";

  }
  else {
    $username = validate($_POST['username']);
    echo "faleminderit ". $username;
  }



  

  if (empty(validate($_POST['email']))) {
    $email_err = "Ju lutem vendosni emailin!";
  } 

  else if(!filter_var(validate($_POST['email']), FILTER_VALIDATE_EMAIL)){
    $email_err = "Ju lutem vendoseni email-in ne formatin e duhur!";
  }
  else {
    $email = validate($_POST['email']);

  }

  
  if (empty($_POST['password'])) {
    $password_err = "Ju lutem vendosni Password-in!";
  } 
  if(strlen($_POST['password']) < 6){
    $password_err = "password duhet te kete te pakten 6 karaktere!";

  }
  else {
    $password = validate($_POST['password']);

  }
  if($email_err == '' || $email_err == false && $username_err == '' && $password_err == '')
  $_SESSION['logged_in'] = true;
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
 <?php echo "<title>Contact</title>";  ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>


<body>
<?php require_once('includes/navbar.php'); ?>


  <div class="container my-5">
    <h1 class="text-center" style="color: #ced4da">CONTACT US </h1>
    <div class="row">

      <div class="col-md-4">
        <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
          <div class="form-group .is-invalid" >
            <label for="username">Username</label>
            <input type="text" class="form-control <?= empty($username_err) ? '' : 'is-invalid' ?>" name="username" id="username" required value = "<?= isset($_POST['username']) ?  $_POST['username'] : ''?>">
            <small id="error" class="form-text text-muted "><?= $username_err; ?></small>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="email" class="form-control <?= !empty($email_err) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="error" class="form-text text-muted "><?= $email_err; ?></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required type="password" class="form-control <?= !empty($password_err) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" name="password">
          </div>

          <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>



</body>

</html>