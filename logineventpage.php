<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/loginevent.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>
<style>
    body {
      background-image: url('images/m22.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-blend-mode: darken; 
      background-size: 100% 100%;
        backdrop-filter: blur(1 px); 
    }
    </style> 
<body>
  <div class="login-form">
    <form action="validatelogin.php" method="post">
    <h1 class="login">Login</h1>
    <label>Username</label>
      <input type="text" name='username' placeholder="Enter Username here" required>
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter password here" required>
      <br>
      <input type="submit" value="Submit">
      <p class="para-2">Not have an account? <a href="register.php">Sign Up Here</a>
  </p>
  </form>
    </div>
</body>

</html>