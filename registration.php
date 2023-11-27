<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaqueries.css">
    <script>
        function showConfirmation() {
            alert("Registration successful! You can now log in.");
        }
    </script>
    <style>
        /* Custom styles for the registration form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-form {
            background: #fff; /* Background color */
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .registration-form h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: rgb(85, 85, 85); /* Text color */
        }

        .input-container {
            margin-bottom: 1rem;
        }

        .input-container label {
            display: block;
            font-weight: 600;
            text-align: left;
            margin-bottom: 0.25rem;
            color: rgb(85, 85, 85); /* Text color */
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
            background: rgb(85, 85, 85); /* Button background color */
            color: #fff; /* Button text color */
        }

        button.btn.btn-color-2 {
            background: none;
            border: 1px solid rgb(85, 85, 85); /* Button border color */
            color: rgb(85, 85, 85); /* Button text color */
        }

        button.btn.btn-color-1:hover {
            background: #000; /* Button background color on hover */
        }

        button.btn.btn-color-2:hover {
            background: rgb(85, 85, 85); /* Button background color on hover */
            color: #fff; /* Button text color on hover */
        }

        p {
            color: rgb(85, 85, 85); /* Text color */
        }

        a {
            color: rgb(85, 85, 85); /* Link color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2>Portfolio Registration</h2>
            <form method="post" action="register.php" onsubmit="showConfirmation()">
                <div class="input-container">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-container">
                    <button class="btn btn-color-1" type="submit">Register</button>
                </div>
            </form>
            <p><a href="login.php">Already have an account? Login</a></p>
        </div>
    </div>
</body>
</html>

<?php
// Connect to your database (replace with your credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sulaimanp';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $usern = $_POST['username']

    // Insert data into the database
    $query = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname', '$usern' '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        // Registration successful, redirect to login page
        header('Location: login.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

