<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <section id="team">
        <div class="container">
            <h1 style="text-align: center">Welcome Humperdinck</h1>
            <hr>
            <h6 class="section-title mb-5 text-center">Command Center Coming Soon</h6>
        
    </section>
    <a style="margin-right: 50%; margin-left: 50%; padding: 20px;" href="logout.php">Logout</a>
    
</body>
</html>
