<?php
session_start();

// Logout request handle
if (isset($_GET['action']) && $_GET['action'] === "logout") {
    session_destroy();           // सभी session clear
    header("Location: index.php"); // index.php पर redirect
    exit;
}

// xyzpage केवल profile से ही खुले
if (!isset($_SESSION['allow_xyz']) || $_SESSION['allow_xyz'] !== true) {
    header("Location: profile1.php"); // या user का profile page
    exit;
}
// एक बार खुलने के बाद flag हटा दो ताकि back से न खुले
unset($_SESSION['allow_xyz']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script>
    // back button disable
    window.history.forward();
    function noBack(){ window.history.forward(); }
</script>
    <style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: #f1f4f8;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #cccfcaff, #d6f9ffff, #daeee4ff);
}

.top-navbar{
  background:#004080;
  width: 100%;
  height: 60px;
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

.container{
    width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 30px 40px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    box-sizing: border-box;
}

#form-bajajlogo{
margin-top:0px;
  width: 300px;
  height:50px;
  border-radius:2px;
}

h2{
    text-align: center;
    color: #333;
}

label{
    font-weight: bold;
    display: block;
    margin-top: 15px;
    margin-bottom: 5px;
}

input, select{
    width: 100%;
    padding: 10px;
    border: 1px solid #bbb;
    border-radius: 5px;
    font-size: 14px;
}

.btn{
    margin-top: 20px;
    width: 100px;
    padding: 12px;
    background: #0066cc;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover{
    background: #004d99;
}

@media(max-width:500px){
    .container{width: 450px; padding: 25px;}
    .input, select {font-size: 13px; padding: 8px;}
    .btn{padding: 10px; font-size: 15px;}
}

.logout{
   
    font-weight: bold;
    text-decoration: none;
   color: rgb(40, 88, 47);
   text-align: right;
   margin: 0px 0px;
   font-size:20px;
   font-weight: 900;
}

.logout:hover{font-size: 10;}


#form-logo{
margin-top:0px;
  width: 75%;
  height:70px;
  border-radius:2px;
}

.beema{
  font-weight:bold;
  font-size:18px;
  font-style:italic;
}


    </style>
</head>
<body onload="noBack();">
<div class="header">
    <img src="gbiclogo.jpg" id="header-logo" alt=""> <img src="gbic.png" id="gbiclogo" alt=""> <a href="PamntForm.php?action=logout" class="logout"><center>Logout</center></a>
  </div>
<div class="container">
<center>
   <img src="cio-formlogo.png" id="form-logo" alt="logo"> <div class="beema">बीमा लोकपाल परिषद <br> Council for Insurance Ombudsmen</div>
</center>
<h2>Payment Transfer</h2>
<form action="">
<!-- Sender details-->
    <label for="fromAccount"> From Account </label>
    <select name="" id="fromAccount" required>
<option value="">--Select Account--</option>
<option value="1234567890"> Savings - 1234567890 </option>
<option value="9876453210"> Current - 9876453210 </option>
    </select>
<!-- Receiver Details-->
 <label for="beneficiaryName"> Beneficiary Name </label>
 <input type="text" id="beneficiaryName" placeholder="Enter Beneficiary Name" required>

 <label for="beneficiaryAccount"> Beneficiary Account Number </label>
 <input type="text" id="beneficiaryAccount" placeholder="Enter Account Number" required>

 <label for="ifsc"> IFSC Code </label>
 <input type="text" id="ifsc" placeholder="Enter IFSC Code" required>

 <!-- Payment Details-->
 <label for="amount"> Amount (₹) </label>
 <input type="number" id="amount" placeholder="Enter Amount" required>

 <label for="remarks"> Remarks </label>
 <input type="text" id="remarks" placeholder="Optional" required>

<!-- Authentication -->
<label for="transactionPassword"> Transaction Password </label>
 <input type="text" id="transactionPassword" placeholder="Enter Transaction Password" required>

 <!-- Submit -->
  <center>
  <button type="submit" class="btn"> Transfer </button>
</center>

</form>


</div>

<script>
  // Login hone ke baad har secure page par ye script add kar sakte ho: same page reload nhi hoga
    // Agar user back kare to page refresh ho aur session check fail kare.

  //  window.location.href = "index.php";   // पहले login page पर भेजो
  //  window.history.forward();             // back button block
                           // केवल तभी काम करेगा अगर window JS से open हुई थी
</script>
    
</body>
</html>