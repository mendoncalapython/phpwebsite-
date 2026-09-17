<?php
$title = "My PHP Website";
$name = "Alan";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1><?php echo $title; ?></h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<main>
    <h2>Welcome, <?php echo $name; ?>!</h2>

    <p>
        This is a simple website built using PHP and HTML.
    </p>

    <button onclick="alert('Hello from PHP website!')">
        Click Me
    </button>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
</footer>

</body>
</html>
