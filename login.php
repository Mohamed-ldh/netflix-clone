<?php
if (isset($_POST['login'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform form validation
    if (empty($email) || empty($password)) {
        // Handle validation error (e.g., display an error message)
        echo "Please enter your email and password";
    } else {
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "teatro";

        $conn = new mysqli($servername, $username, $dbpassword, $dbname);

        // Check the database connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the hashed password and name from the database
        $query1 = "SELECT name, password FROM users WHERE email = '$email'";
        $result = $conn->query($query1);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Verify the hashed password
            if (password_verify($password, $hashedPassword)) {
                // User credentials are valid
                session_start();
                $_SESSION['name'] = $row['name'];
                header("location: Accueil.php");
                exit();
            } else {
                // User credentials are invalid
                $error_message = "Invalid email or password";
            }
        } else {
            // User not found
            $error_message = "User not found";
        }

        // Close the database connection
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="x-icon" href="Assets/teatro_logo.png" id="icon">
    <link rel="stylesheet" href="signup_login\style.css">
    <title>Login - IL TEATRO</title>
</head>
<body>
    <img src="signup-login_background.jpg" alt="" id="background" width="1880" height="1100">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><img src="Assets\facebook.png" width="20" height="20" alt=""></a>
				<a href="#" class="social"><img src="Assets\google.png" width="15" height="15" alt=""></a>
				<a href="#" class="social"><img src="Assets\linkedin.png" width="20" height="20" alt=""></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Login</h1>
			<div class="social-container">
				<a href="#" class="social"><img src="Assets\facebook.png" width="20" height="20" alt=""></a>
				<a href="#" class="social"><img src="Assets\google.png" width="15" height="15" alt=""></a>
				<a href="#" class="social"><img src="Assets\linkedin.png" width="20" height="20" alt=""></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="login">Login</button>
            <?php if (!empty($error_message)) { ?>
                <p class="error-message" style="position: absolute; top:85%"><?php echo $error_message; ?></p>
            <?php } ?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

    <script src="signup_login\test.js"></script>
</body>
</html>