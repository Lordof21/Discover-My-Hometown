<?php
session_start();
include("../login/connect.php");

if (isset($_POST['adminLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM admins WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['admin_email'] = $email;
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Incorrect Email or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}
</style>
<body>
    <form class="sss" method="post" action="admin_login.php">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="adminLogin" value="Login">
    </form>
</body>
</html>