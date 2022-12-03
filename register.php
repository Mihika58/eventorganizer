<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up | By Code Info</title>
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
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form action="validatesignup.php" method="post">
      <label>Name</label>
      <input type="text" name="name" placeholder="" required>
      <label>Username</label>
      <input type="text" name="username" placeholder="" required>
      <label>Email</label>
      <input type="email" name="email" placeholder="" required>
      <label>Password</label>
      <input type="password" name="password" placeholder="" required>
      <label>Confirm Password</label>
      <input type="password" name="confirmpass" placeholder="" required>
      <br>
      <br>
      <input type="submit" value="Signup">
    </form>
    <p>
      By clicking the Sign Up button,you agree to our <br>
      <a href="#">Terms and Condition</a> &nbsp; and &#160; &emsp; <a href="#">Policy Privacy</a>
    </p>
    <p class="para-2">
    Already have an account? <a href="logineventpage.php">Login here</a>
  </p>
  </div>
  
</body>

</html>