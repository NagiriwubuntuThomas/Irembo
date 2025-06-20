<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "irembo-gov"; 

    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $login = $conn->real_escape_string($_POST["login"]);
    $pass = $_POST["password"];

    
    $sql = "SELECT * FROM users WHERE phone_number='$login' OR email='$login'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["id_number"] = $row["id_number"];
            $_SESSION["username"] = $row["name"]; 
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Account not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - IremboGov</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .login-modal {
            max-width: 400px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.09);
            padding: 32px 28px 24px 28px;
            position: relative;
        }
        .login-modal .close {
            position: absolute;
            right: 18px;
            top: 18px;
            font-size: 1.5rem;
            color: #222;
            opacity: 0.7;
            border: none;
            background: none;
        }
        .login-modal .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .login-modal .brand img {
            height: 36px;
            margin-right: 8px;
        }
        .login-modal h2 {
            font-size: 1.6rem;
            font-weight: bold;
            color: #234;
            margin-bottom: 18px;
            text-align: left;
        }
        .input-group-text {
            background: #f1f7fa;
            border-right: none;
        }
        .form-control {
            background: #f1f7fa;
            border-left: none;
        }
        .form-control:focus {
            border-color: #0080dc;
            box-shadow: 0 0 0 0.2rem rgba(0,128,220,.10);
        }
        .btn-login {
            background: #006be6;
            color: #fff;
            font-weight: 600;
            border: none;
            width: 100%;
            margin-top: 18px;
            border-radius: 6px;
            font-size: 1.1rem;
            padding: 10px 0;
        }
        .btn-login:hover {
            background: #0056b3;
        }
        .login-modal a {
            color: #006be6;
            text-decoration: none;
        }
        .login-modal a:hover {
            text-decoration: underline;
        }
        .login-modal .form-text {
            font-size: 0.95rem;
        }
        .login-modal .footer-link {
            text-align: center;
            margin-top: 18px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<div class="login-modal">
    <button class="close" onclick="window.history.back();">&times;</button>
    <div class="brand mb-2">
       
        <span style="font-size:1.5rem;font-weight:bold;color:#0080dc;">irembo<span style="color:#222;">Gov</span></span>
    </div>
    <h2><i class="bi bi-person"></i> Login</h2>
    <?php if ($error): ?>
        <div class="alert alert-danger py-2"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" autocomplete="off">
        <div class="mb-3">
            <label for="login" class="form-label">Phone number or email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" id="login" name="login" required placeholder="e.g. 0780000000 or email@example.com">
            </div>
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                <span class="input-group-text" style="cursor:pointer;" onclick="togglePassword()">
                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                </span>
            </div>
        </div>
        <div class="mb-2">
            <a href="#" class="form-text">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-login">Login</button>
    </form>
    <div class="form-text mt-3">
        By logging-in, you accept the new <a href="#">Terms of use</a> including <a href="#">Privacy Policy</a> of IremboGov.
    </div>
    <div class="footer-link">
        Don't have an account? <a href="register.php">Create one</a>
    </div>
</div>
<script>
function togglePassword() {
    var pwd = document.getElementById("password");
    var icon = document.getElementById("toggleIcon");
    if (pwd.type === "password") {
        pwd.type = "text";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    } else {
        pwd.type = "password";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    }
}
</script>
</body>
</html>