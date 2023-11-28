<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mediaqueries.css">
    <style>
        /* Custom styles for the login form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background: #fff; /* Background color */
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-form h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: rgb(85, 85, 85); /* Updated text color */
        }

        .input-container {
            margin-bottom: 1rem;
        }

        .input-container label {
            display: block;
            font-weight: 600;
            text-align: left;
            margin-bottom: 0.25rem;
            color: rgb(85, 85, 85); /* Updated text color */
        }

        .input-container input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc; /* Input border color */
            border-radius: 0.5rem;
            outline: none;
            font-size: 1rem;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Adjust the gap between buttons */
        }

        button.btn {
            flex: 1; /* Make the buttons expand to fill the container */
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
        }

        button.btn.btn-color-1 {
            background: rgb(85, 85, 85); /* Updated button background color */
            color: #fff; /* Button text color */
        }

        button.btn.btn-color-2 {
            background: none;
            border: 1px solid rgb(85, 85, 85); /* Updated button border color */
            color: rgb(85, 85, 85); /* Updated button text color */
        }

        button.btn.btn-color-1:hover {
            background: #000; /* Button background color on hover */
        }

        button.btn.btn-color-2:hover {
            background: rgb(85, 85, 85); /* Updated button background color on hover */
            color: #fff; /* Button text color on hover */
        }

        p {
            color: rgb(85, 85, 85); /* Updated text color for the "Forgot your password?" link */
        }

        a {
            color: rgb(85, 85, 85); /* Updated link color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Login</title>
</head>
<body>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="post" action="index.php">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-container">
                    <button class="btn btn-color-1" type="submit" name="login">Login</button>
                </div>
            </form>
            <p><a href="#">Forgot your password?</a></p>
        </div>
    </div>
</body>
</body>
</html>

<?php
// Database connection parameters
$servername = "localhost"; // Replace with your database server name or IP address
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "sulaimanp"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Get entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];



    // Example SELECT query
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);


    $users = array(
        'Kcpersonalacc' => 'admin',
        'Alfraskhan' => 'admin',
        'Appled' => 'admin',
        'Kcpersonalacc_Portfolio' => 'portfolio',
        'Alfraskhan_Portfolio' => 'portfolio',
        'Appled_Portfolio' => 'portfolio'
    );


    // Validate credentials
    if (array_key_exists($username, $users) && $users[$username] == $password) {
        // Redirect to the user's unique dashboard
        switch ($username) {
            case 'Kcpersonalacc':
                header('Location: cms.php');
                break;
            case 'Alfraskhan':
                header('Location: cms3.php');
                break;
            case 'Appled':
                header('Location: cms2.php');
                break;
            case 'Kcpersonalacc_Portfolio':
                header('Location: khadaffe/index.php');
                break;
            case 'Alfraskhan_Portfolio':
                header('Location: ../alfraskhan/index.php');
                break;
            case 'Appled_Portfolio':
                header('Location: ../apple/index.php');
                break;
            default:
                echo 'Invalid user';
        }
        exit();
    } else {
        echo 'Invalid username or password';
    }
}

?>



