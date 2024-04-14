<?php include 'includes/connection.php';?>
<?php include 'navbar.php' ;?>

<br><br><br><br><br><br>
<?php
session_start();
if (isset($_POST['login'])) {
  $username  = $_POST['user'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $name = $row['name'];
    $email = $row['email'];
    $role= $row['role'];
    $course = $row['course'];
    if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;
      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      header('location: dashboard/');
    }
    else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
  }
}
else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";
    }
}
?>


<style>
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-image:url(assets/images/main-slider-03.jpg) ;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
  height: 100%;
  overflow: hidden
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-card {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 400px;
  width: 100%;
}

.login-card h1 {
  text-align: center;
}

.login-card input[type="text"],
.login-card input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-card input[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-card input[type="submit"]:hover {
  background-color: #0056b3;
}

.login-help {
  margin-top: 15px;
  text-align: center;
}

.login-help a {
  text-decoration: none;
  color: #007bff;
}

.login-help a:hover {
  text-decoration: underline;
}

</style>
<div class="container">
  <div class="login-card">
    <h1>Log-in</h1><br>
    <form method="POST" class="login-form">
      <input type="text" name="user" placeholder="Username" required="">
      <input type="password" name="pass" placeholder="Password" required="">
      <input type="submit" name="login" class="login login-submit" value="Login">
    </form>  
    <div class="login-help">
      <a href="signup.php">Register</a> • <a href="recoverpassword.php">Forgot Password</a>
    </div>
  </div>
</div>



  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

  
</body>
</html>
