<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
require_once "business.php";

$host = $_SESSION['server'];
$database = $_SESSION['database'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];

$rowA = null;
$rowC = null;
$names = [];

try {
    $business = new Business($host, $database, $username, $password);

    if ($username === "IN453A") {
        $rowA = $business->getRowCountA();
        $rowC = $business->getRowCountC();
        $names = $business->getFullNames();
    }
    elseif ($username === "IN453B") {
        $names = $business->getFullNames();
    }
    elseif ($username === "IN453C") {
        $rowC = $business->getRowCountC();
    }
}catch (Exception $e) {
    die("Login Failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IN453 Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>

        <?php if ($rowA !== null): ?>
            <p><strong>Rows in IN453A:</strong> <?php echo $rowA; ?></p>
        <?php endif; ?>
        
        <?php if ($rowC !== null): ?>
            <p><strong>Rows in IN453C:</strong> <?php echo $rowC; ?></p>
        <?php endif; ?>

        <?php if (!empty($names)): ?>
            <h2>Full Names in IN453B:</h2>
            <ul>
                <?php foreach ($names as $name): ?>
                    <li><?php echo htmlspecialchars($name); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </body>
</html>