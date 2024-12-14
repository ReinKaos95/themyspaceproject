<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p class="error"><?php echo htmlspecialchars($_GET['msg'] ?? ''); ?></p>
    <a href="index.php">Volver al login</a>
</body>
</html>