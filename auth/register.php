<?php
$host = "localhost";
$dbname = "irembo-gov";
$username = "root";      
$password = "";          


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$idNumber = $phoneNumber = "";
$success = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idNumber = $conn->real_escape_string($_POST["idNumber"]);
    $phoneNumber = $conn->real_escape_string($_POST["phoneNumber"]);

    
    if (!empty($idNumber) && !empty($phoneNumber)) {
        $sql = "INSERT INTO users (id_number, phone_number) VALUES ('$idNumber', '$phoneNumber')";
        if ($conn->query($sql) === TRUE) {
            $success = true;
        } else {
            $error = "Error: " . $conn->error;
        }
    } else {
        $error = "All fields are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Account Setup - IremboGov</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .register-container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      display: flex;
      overflow: hidden;
    }
    .register-left {
      background: linear-gradient(180deg, #0080dc 60%, #0072ff 100%);
      color: #fff;
      flex: 1 1 0;
      padding: 48px 36px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .register-left h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 16px;
    }
    .register-left p {
      font-size: 1.1rem;
      margin-bottom: 32px;
    }
    .stepper {
      margin-top: 24px;
    }
    .step {
      display: flex;
      align-items: center;
      margin-bottom: 18px;
    }
    .step-circle {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #fff;
      color: #0080dc;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 12px;
      font-size: 1.1rem;
      border: 2px solid #fff;
    }
    .step.active .step-circle {
      background: #4fc3f7;
      color: #fff;
      border: 2px solid #fff;
    }
    .step:not(.active) .step-circle {
      background: #e3f2fd;
      color: #0080dc;
      border: 2px solid #e3f2fd;
    }
    .step-title {
      font-weight: 500;
      font-size: 1rem;
      color: #fff;
      opacity: 0.9;
    }
    .register-right {
      flex: 1 1 0;
      padding: 48px 36px;
      background: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .register-right h2 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 24px;
      color: #222;
    }
    .form-control:focus {
      border-color: #0080dc;
      box-shadow: 0 0 0 0.2rem rgba(0,128,220,.15);
    }
    .btn-register {
      background: #4fc3f7;
      color: #fff;
      font-weight: 600;
      border: none;
      width: 100%;
      margin-top: 12px;
    }
    .btn-register:hover {
      background: #0080dc;
      color: #fff;
    }
    .diaspora-btn {
      background: #f1f7fa;
      color: #0080dc;
      border: none;
      width: 100%;
      margin-top: 24px;
      font-weight: 500;
    }
    .diaspora-btn:hover {
      background: #e3f2fd;
      color: #0072ff;
    }
    @media (max-width: 900px) {
      .register-container {
        flex-direction: column;
      }
      .register-left, .register-right {
        padding: 32px 18px;
      }
    }
  </style>
</head>
<body>
 
  <div class="announcement-bar text-center py-2" style="background:#ffd73b; color:#222;">
    <i class="bi bi-bell-fill"></i>
    <strong>New!</strong> The fiscal year 2025/2026 has started. Pay for your family’s mutuelle coverage 
    <a href="#" style="color:#0072ff; font-weight:bold;">here</a>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background:#0080dc;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#" style="font-size:1.7rem;">irembo<span style="color:#fff;">Gov</span></a>
      <div class="ms-auto d-flex align-items-center">
        <a href="login.php" class="nav-link text-white me-3"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
        <button class="btn btn-outline-light me-3"><i class="bi bi-search"></i> Find Applications</button>
        <div class="dropdown">
          <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            English
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kinyarwanda</a></li>
            <li><a class="dropdown-item" href="#">French</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="register-container">
    <div class="register-left">
      <h1>New Account<br>Setup</h1>
      <p>Follow this registration process to help us create your account</p>
      <div class="stepper">
        <div class="step active">
          <div class="step-circle">1</div>
          <div class="step-title">Submit required information</div>
        </div>
        <div class="step">
          <div class="step-circle">2</div>
          <div class="step-title">Account Verification</div>
        </div>
        <div class="step">
          <div class="step-circle">3</div>
          <div class="step-title">Set your password</div>
        </div>
      </div>
    </div>
    <div class="register-right">
      <h2>New Account Setup</h2>
      <?php if ($success): ?>
        <div class="alert alert-success">Registration successful!</div>
      <?php elseif ($error): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php endif; ?>
      <form method="post" action="register_process.php">
        <div class="mb-3">
          <label for="idNumber" class="form-label">ID Number<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="Enter national ID number" required value="<?php echo htmlspecialchars($idNumber); ?>">
        </div>
        <div class="mb-3">
          <label for="phoneNumber" class="form-label">Phone Number (Rwanda)<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required value="<?php echo htmlspecialchars($phoneNumber); ?>">
        </div>
        <button type="submit" class="btn btn-register">Register</button>
      </form>
      <small class="d-block mt-3 text-muted">
        By registering, you accept the new <a href="#" class="text-decoration-underline">Terms of use</a> including <a href="#" class="text-decoration-underline">Privacy Policy</a> of IremboGov.
      </small>
      <div class="mt-3">
        <span>Already Have An Account? <a href="login.php" class="text-decoration-underline">Login</a></span>
      </div>
      <button class="diaspora-btn btn mt-3">Sign up as a citizen living in diaspora</button>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>