<?php
    include("../../config/database.php");
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    $connection = $mysqli->prepare("SELECT * FROM accounts WHERE username = ? and password = ?");
    $connection->bind_param("ss",$username,$password);
    $connection->execute();

    $results = $connection->get_result();

    if($results->num_rows === 0){
        echo "Akun tidak ditemukan!";
        header("Location: ./modules/auth/login.php");
    }

    session_start();
    $connection->close();
    $mysqli->close();
    header("Location: ../../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Masuk</button>
        </form>
    </div>
</body>
</html>