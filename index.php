<?php
session_start();

// dummy users => profile page mapping
$users = [
    "user1:pass1" => "profile1.php",
    "user2:pass2" => "profile2.php",
    "user3:pass3" => "profile3.php",
    "user4:pass4" => "profile4.php",
    "user5:pass5" => "profile5.php",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username + Password combine
    $combined = $username . ":" . $password;

    // switch–case for redirect
    switch ($combined) {
        case "user1:pass1":
            $_SESSION['loggedin'] = true;
            header("Location:profile1.php");
            exit;
        case "user2:pass2":
            $_SESSION['loggedin'] = true;
            header("Location:profile2.php");
            exit;
        case "user3:pass3":
            $_SESSION['loggedin'] = true;
            header("Location:profile3.php");
            exit;
        case "user4:pass4":
            $_SESSION['loggedin'] = true;
            header("Location:profile4.php");
            exit;
        case "user5:pass5":
            $_SESSION['loggedin'] = true;
            header("Location:profile5.php");
            exit;
        default:
            $error = "Invalid username or password!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | GBIC 1 </title>
  <style>
    body {
      margin: 0;
      min-height: 100vh;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #cccfcaff, #d6f9ffff, #daeee4ff); /* Bajaj-like calm background */
      
    }

    .login-container{
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top:40px;
      margin-bottom:30px;
    }

    .header{
  width: 100%;
  height: 60px;
  background: linear-gradient(to right, #ecfffeff, rgb(48, 131, 41), rgb(25, 104, 38));
  box-sizing:border-box;
}

#header-logo{
  width: 80px;
  height:50px;
  margin:4px 0px 10px 10px;
}
  #gbiclogo{
    margin:4px 0px 10px 0px;
    width: 80px;
    height: 50px;
  }


.home{
  margin-left:50px; color:white;
  text-decoration:none;
  font-weight:bold;
  position:absolute;
  margin-top:25px;
}

.home:hover{
  background:#003060;
  font-size:14px;
}

#form-logo{
margin-top:0px;
  width: 90%;
  height:80px;
  border-radius:2px;
}

.beema{
  font-weight:bold;
  font-size:18px;
  font-style:italic;
}
    .login-card {
      background: #ffffff;
      padding: 20px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 340px;
      text-align: center;
    }
    .login-card h2 {
      margin-bottom: 24px;
      color: #003366; /* Deep blue similar to brand */
      font-size: 24px;
    }
    .login-card input {
      width: 100%;
      padding: 10px;
      margin: 12px 0;
      border: 1px solid #cccccc;
      border-radius: 8px;
      font-size: 15px;
    }
    .login-card button {
      width: 100px;
      padding: 12px;
      background: #0059b3; /* Accent blue */
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 12px;
    }
    .login-card button:hover {
      background: #004080; /* Darker hover shade */
    }
    .login-card .alt-option {
      margin-top: 16px;
      font-size: 14px;
      color: #555555;
    }
    .login-card .alt-option a {
      color: #0059b3;
      text-decoration: none;
    }
label{
    font-weight: bold;
    display: block;
    margin: 0px 170px 0px 0px;
}



  </style>
</head>
<body>

  <div class="header">
    <img src="gbiclogo.jpg" id="header-logo" alt=""> <img src="gbic.png" id="gbiclogo" alt="">
  </div>
  <div class="login-container">

  <div class="login-card">
    <img src="cio-formlogo.png" id="form-logo" alt="logo"> <div class="beema">बीमा लोकपाल परिषद <br> Council for Insurance Ombudsmen</div>
    <h2>Sign In</h2>
    <form method="post">
        <label for="mobile"> Enter Mobile Number </label>
      <input type="text" name="username" placeholder="Registered Mobile Number" required>

      <label for="mobile"> Enter Adhar Number </label>
      <input type="text" name="password" placeholder="Enter Adhar Number" required>
      
      <button type="submit">Login</button>
    </form>
    <div class="alt-option">
      Not a user? <a href="#">Sign Up</a>
    </div>
  </div>
  </div>
</body>
</html>
