<?php
session_start();

// Logout request handle
if (isset($_GET['action']) && $_GET['action'] === "logout") {
    session_destroy();           // सभी session clear
    header("Location: index.php"); // index.php पर redirect
    exit;
}


?>



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




  // Login hone ke baad har secure page par ye script add kar sakte ho: same page reload nhi hoga
    // Agar user back kare to page refresh ho aur session check fail kare.

  //  window.location.href = "index.php";   // पहले login page पर भेजो
  //  window.history.forward();             // back button block
                           // केवल तभी काम करेगा अगर window JS से open हुई थी
</script>
    
</body>

</html>
