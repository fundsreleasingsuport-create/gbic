<?php
//profile1.php (सभी profiles के लिए concept same है)
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

// Profile से xyzpage पर जाने का flag set
$_SESSION['allow_xyz'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #cccfcaff, #d6f9ffff, #daeee4ff);
    margin: 0;
    padding: 0;
}
/* menubar css */

.top-header{
  background:#004080;
  width: 100%;
  height: 60px;
  box-sizing:border-box;
  background: linear-gradient(to right, #ecfffeff, #a6ffe1ff, #b6f8d7ff);
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


.navbar {
      background-color: #076827ff;
      overflow: hidden;
      display: flex;
      justify-items: center;
      align-items: center;
      justify-content: center;
      align-content: center;
      height: 50px;
      box-sizing:border-box;
    }
    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 8px;
      text-decoration: none;
    }
    .dropdown {
      float: left;
      overflow: hidden;
    }
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 20px;
      background-color: inherit;
      margin: 0;
      cursor: pointer;
    }
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: #054610ff;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #054610ff;
      min-width: 200px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .dropdown-content a:hover {
      background-color: #0a1d0aff;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
/* grid css */

.grid{
  width: 180px;
  height: 50px;
  display:inline-block;
  background:rgb(235, 255, 238);
  margin: 10px 10px;
  padding:2px;
  border-radius:5px;
  box-shadow:0px 2px 8px gray;
  border:1px solid gray;
  box-sizing:border-box;
  line-height:22px;
  color:#656868;

}

center{
  font-weight:bold;
  color:#474747ff;
}
  

/* profile css */

.profile-container{
    max-width: 800px;
    background: #fff;
    margin: 10px auto;
    margin-bottom:40px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    overflow: hidden;
    animation:fadeIn 1s ease-in-out;
    box-sizing:border-box;
}

.profile-header{
    background: #05611cff;
    color: #fff;
    padding: 20px;
    display: flex;
    align-items: center;
}

.profile-header img{
    width: 90px;
    height:90px;
    border-radius: 10px;
    border: 3px solid #fff;
    margin-right: 20px;
}

.profile-header h2{
    margin: 0;
    font-size: 1.5rem;
}

.profile-details{
    padding: 20px;
}

.detail{
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    color:#404242;
}

.detail span {
    font-weight: bold;
    color: #474747ff;
}

.status{
    font-weight: bold;
    padding: 6px 12px;
    border-radius: 5px;
}

.approved{
    background-color: #4caf50;
    color: white;
}

.pending{
    background-color: #ffa500;
    color: white;
}

@keyframes fadeIn{
    from{opacity: 0;
    transform: translate(20px);}
    to{opacity: 1;
    transform: translate(0);}
}

@media only screen and (max-width:600px){
    .detail{flex-direction: column;
    align-items: flex-start;}
}

.pending-amt{
  color:orange;
}


    </style>
</head>
<body>
    
<div class="top-header">
  <img src="gbiclogo.jpg" id="header-logo" alt=""> <img src="gbic.png" id="gbiclogo" alt="">
</div>


<div class="navbar">
  <a href="#">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Accounts ▼</button>
    <div class="dropdown-content">
      <a href="#"> Loan Account</a>
      <a href="#"> Policy Account</a>
      <a href="#">Fixed Deposit</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Payments ▼</button>
    <div class="dropdown-content">
      <a href="#">Pay</a>
        <a href="#">Statement</a>
      <a href="PamntForm.php">Transfer Funds</a>
      <a href="#">Bill Payments</a>
      <a href="#">Recharge</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Cards ▼</button>
    <div class="dropdown-content">
      <a href="#">Insta EMI Card</a>
      <a href="#">Credit Card</a>
      <a href="#">Apply for Card</a>
    </div>
  </div>
  <!-- Logout link अब इसी page को कॉल करेगा ?logout=1 के साथ -->
  <a href="index.php">Logout</a>
</div>

<!-- grids -->
 <center>
<div class="header-account">
  <div class="grid">Total Balance <br> ₹ 10000.00</div>
  <div class="grid pending-amt">Pending Amount <br> ₹ 0.00</div>
  <div class="grid">Stamp Duty <br> ₹ 0.00</div>
  <div class="grid">GST 18% <br> ₹ 0.00</div>
  
</div>
</center>

<!-- Profile -->
<div class="profile-container">
    <div class="profile-header">
        <img src="customerimg.jpg" alt="profile photo">
        <div>
            <h2>Rahul Sharma</h2>
            <p> Account Holder </p>
        </div>
    </div>

<div class="profile-details">

<div class="detail"><span> Father'S Name: </span> Vijay Sharma </div>
<div class="detail"><span> Mobile Number: </span> +91 9988776655 </div>
<div class="detail"><span> Aadhar Number: </span> 1234 5678 9012 </div>
<div class="detail"><span> Pan Number: </span> ABCD123F </div>
<div class="detail"><span> Date Of Birth: </span> 15 Aug 1990 </div>
<div class="detail"><span> Address: </span> House No 123, Shanti Nagar Delhi </div>
<div class="detail"><span> Loan Apply Date: </span> 01 Jan 2025 </div>
<div class="detail"><span> Loan Amount (₹) : </span> ₹ 5,00,000/- </div>
<div class="detail"><span> Your Amount (₹) : </span> ₹ 6766/- </div>
<div class="detail"><span> Bank Name: </span> State Bank Of India </div>
<div class="detail"><span> Branch Name: </span> Karol Bagh </div>
<div class="detail"><span> Account Number: </span> 112233445566 </div>
<div class="detail"><span> IFSC Code: </span> SBIN001234 </div>
<div class="detail"><span> Loan Status: </span> <span class="status approved"> Activated</span> </div>

<!--for future use stocked 
<div class="detail"><span> Statement: </span> <span class="status approved"> Approved</span> </div>
<div class="detail"><span> Statement: </span> Vijay Sharma </div>

<div class="detail"><span> Father'S Name: </span> Vijay Sharma </div>
<div class="detail"><span> Father'S Name: </span> Vijay Sharma </div>
<div class="detail"><span> Father'S Name: </span> Vijay Sharma </div>
<div class="detail"><span> Father'S Name: </span> Vijay Sharma </div>
-->

    </div>
</div>




</body>


</body>
</html>

