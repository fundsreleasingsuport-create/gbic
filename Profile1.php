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


</div>




</body>


</body>
</html>


