<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>
<body>
<nav>
    <a href="">Dashboard</a>
    <?= $_SESSION = "" ?  "<a href='./modules/auth/logout.php'>Logout</a>" : "<a href='./modules/auth/login.php'>Login</a>"  ?>

</nav>