<?php
session_start();

// Connect to the MySQL database
$conn = mysqli_connect('sql108.epizy.com','epiz_33268878','aO2ry6oWIk','epiz_33268878_markotravel');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for security
    //$password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the MySQL query
    $query = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $query->bind_param("ss", $username, $password);
    $query->execute();
    $result = $query->get_result();

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Start a session and store the user's information
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        // Redirect the user to the homepage
        header("Location: pocetna.php");
        exit();
    } else {
        // Display an error message
        echo "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <title>Log in</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form action="signup.php" method="post" class="register-form">
                <input type="text" placeholder="Puno ime" name="name" id="name" />
                <input type="text" placeholder="username" name="username" id="username" />
                <input type="password" placeholder="lozinka" name="password" id="password" />

                <button type="submit" name="submit" value="Register">Register</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form action="login.php" method="post" class="login-form">
                <input type="text" placeholder="username" name="username" id="username" />
                <input type="password" placeholder="password" name="password" id="password"/>
                <button type="submit" name="submit" value="Login">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
    
</body>

</html>
<!-- <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="submit" value="Login">
</form> -->