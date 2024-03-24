<?php
session_start(); // Start the session

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('database/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM users WHERE Email= :username AND password = :password';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Do something on successful login, e.g., redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error_message'] = 'Please make sure that username and password are correct.';
        $error_message = $_SESSION['error_message'];
    }
}
?>

<!-- Rest of your HTML code remains unchanged -->

<!DOCTYPE html>
<html>
<head>
    <title>BMS Login - Bakery shop management system</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>
        body {
            position: relative;
            background-image: url('bakery-hero.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            font-family: arial;
            /* Specify height for the body */
            height: 100vh;
            margin: 0; /* Remove default margin */
        }

        #error_Message {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #ff0000;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: <?= !empty($error_message) ? 'block' : 'none' ?>; /* Display based on error presence */
        }
    </style>
</head>
<body id="LoginBody">
    <div class="container">
        <div id="error_Message">
            <strong>ERROR:</strong>
            <p><?= $error_message ?></p>
        </div>
        <div class="LoginHeader">
            <h1>BMS</h1>
            <p>Bakery Management System</p>
        </div>
        <div class="LoginBody">
            <form action="login.php" method="POST" onsubmit="moveErrorOnTop()">
                <div class="LoginInputsContainer">
                    <label for="username">Username</label>
                    <input id="username" placeholder="Username" name="username" type="text" />
                </div>
                <div class="LoginInputsContainer">
                    <label for="password">Password</label>
                    <input id="password" placeholder="Password" name="password" type="password" />
                </div>
                <div class="loginButtonContainer">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function moveErrorOnTop() {
            var errorMessageDiv = document.getElementById('error_Message');
            errorMessageDiv.style.display = 'block';
        }
    </script>
</body>
</html>
