<?php
// Simple variables you can tweak later
$title = "My First PHP CI/CD Demo";
date_default_timezone_set('UTC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>

    <!-- Tiny bit of style (Bootstrap CDN) -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
</head>
<body class="bg-light">
    <!-- Simple top bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand"><?= htmlspecialchars($title) ?></span>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 mb-4">🚀 CI/CD Pipeline Demo</h1>
                <p class="lead">
                    If you’re seeing this page on your server, your automatic deployment worked!<br>
                    Edit <code>index.php</code>, push to Git, and watch the pipeline redeploy.
                </p>
                <hr class="my-4">
                <p class="text-muted">
                    Page generated on <?= date('Y‑m‑d H:i:s') ?> UTC
                </p>
            </div>
        </div>
    </main>
</body>
</html>
