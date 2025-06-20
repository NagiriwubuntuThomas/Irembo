<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "irembo-gov"; 

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['id'] ?? null;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $user_id) {
    $pass1 = $_POST["password"];
    $pass2 = $_POST["confirm_password"];
    if ($pass1 !== $pass2) {
        $message = "<div class='alert alert-danger'>Passwords do not match.</div>";
    } else {
        $hashed = password_hash($pass1, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password='$hashed' WHERE id=$user_id";
        if ($conn->query($sql) === TRUE) {
            $message = "<div class='alert alert-success'>Password set successfully! You can now <a href='login.php'>login</a>.</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Password - IremboGov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .set-password-container {
            max-width: 500px;
            margin: 60px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            overflow: hidden;
        }
        .set-password-header {
            background: linear-gradient(180deg, #0080dc 60%, #0072ff 100%);
            color: #fff;
            padding: 32px 24px 18px 24px;
            text-align: center;
        }
        .set-password-header h2 {
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 8px;
        }
        .set-password-body {
            padding: 32px 24px 24px 24px;
        }
        .btn-set-password {
            background: #4fc3f7;
            color: #fff;
            font-weight: 600;
            border: none;
            width: 100%;
        }
        .btn-set-password:hover {
            background: #0080dc;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="set-password-container">
    <div class="set-password-header">
        <h2>Set Your Password</h2>
        <p>Create a strong password for your account</p>
    </div>
    <div class="set-password-body">
        <?php echo $message; ?>
        <?php if (!$message || strpos($message, 'Error') !== false): ?>
        <form method="post">
          
            <div class="mb-3">
                <label for="password" class="form-label">Create Password</label>
                <input type="password" name="password" id="password" class="form-control" required minlength="6">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required minlength="6">
            </div>
            <button type="submit" class="btn btn-set-password">Set Password</button>
        </form>
        <?php endif; ?>
    </div>
</div>
<script>
document.querySelector("form").addEventListener("submit", function(e) {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirm_password").value;
    var alertBox = document.getElementById("password-alert");
    if (pass1 !== pass2) {
        e.preventDefault();
        if (!alertBox) {
            alertBox = document.createElement("div");
            alertBox.className = "alert alert-danger";
            alertBox.id = "password-alert";
            alertBox.innerText = "Passwords do not match.";
            this.prepend(alertBox);
        } else {
            alertBox.innerText = "Passwords do not match.";
            alertBox.style.display = "block";
        }
    } else if (alertBox) {
        alertBox.style.display = "none";
    }
});
</script>
</body>
</html>