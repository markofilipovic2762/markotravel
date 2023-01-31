<?php
session_start();

// Connect to the MySQL database
$conn = mysqli_connect('sql108.epizy.com','epiz_33268878','aO2ry6oWIk','epiz_33268878_markotravel');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    //$password = password_hash($password, PASSWORD_DEFAULT);

    //$password = password_hash($password, PASSWORD_DEFAULT);
    
    // Prepare and execute the MySQL query to check if the username already exists
    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();
    
    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // Display an error message
        echo "Username already exists";
    } else {
        // Prepare and execute the MySQL query to insert the new user
        $query = $conn->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
        $query->bind_param("sss", $name, $username, $password);
        $query->execute();
        
        // Start a session and store the user's information
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect the user to the homepage
        header("Location: pocetna.php");
        exit();
    }
}
?>