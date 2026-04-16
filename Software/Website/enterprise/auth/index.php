<?php include('api/api.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="card login-card">
        <div class="card-body">
            <div class="text-center mb-4">
                <div class="logo">Admin Login</div>
                <div class="subtitle">Sign in to continue</div>
            </div>

            <form id="loginForm" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-custom">Login</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">© <?php echo date('Y'); ?> Enterprise Project</small>
            </div>
        </div>
    </div>
</body>

</html>