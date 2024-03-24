<?php
   // Start the session
   session_start();
   if(!isset($_SESSION['user'])) header('location: login.php');

   $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Bakery shop Management system</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
     <?php include 'partials/app.sidebar.php'; ?>
    </div>
    
    <div class="dashboard_content_container" id="dashboard_content_container">
        <div class="dashboard-topNav">
            <div class="menu_icon"><i class="fa fa-bars" id="toggleBtn"></i></div>
            <a href="database/logout.php" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
        </div>
        <div class="dashboard_content">
            <div class="dashboard_content_main"></div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
