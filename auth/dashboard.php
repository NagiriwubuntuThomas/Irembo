<?php
session_start();

$user = isset($_SESSION['username']) ? $_SESSION['username'] : 'Nagiriwubuntu Thomas-dev';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IremboGov Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background: #f8f9fa; }
    .dashboard-header {
      background: linear-gradient(90deg, #0080dc 60%, #0072ff 100%);
      color: #fff;
      padding: 32px 0 24px 0;
      border-radius: 0 0 18px 18px;
      margin-bottom: 32px;
    }
    .dashboard-header h2 {
      font-weight: bold;
      font-size: 2.1rem;
    }
    .dashboard-card {
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.05);
      margin-bottom: 24px;
    }
    .dashboard-card .card-title {
      color: #0080dc;
      font-weight: 600;
    }
    .quick-link {
      display: inline-block;
      margin: 0 12px 12px 0;
      padding: 10px 18px;
      background: #e3f2fd;
      color: #0080dc;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background 0.2s;
    }
    .quick-link:hover {
      background: #b3e0ff;
      color: #0056b3;
      text-decoration: underline;
    }
    .logout-btn {
      float: right;
      margin-top: -10px;
    }
    @media (max-width: 768px) {
      .dashboard-header h2 { font-size: 1.3rem; }
      .logout-btn { float: none; display: block; margin: 10px auto 0 auto; }
    }
  </style>
</head>
<body>
  <div class="dashboard-header text-center">
    <h2>Welcome, <?php echo htmlspecialchars($user); ?>!</h2>
    <p>Your IremboGov dashboard</p>
  </div>
  <div class="container-fluid pt-3">
    <div class="d-flex justify-content-end">
      <a href="../logout/logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- Quick Links -->
      <div class="col-md-4">
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-lightning-charge"></i> Quick Actions</h5>
            <a href="#" class="quick-link"><i class="bi bi-plus-circle"></i> Apply for Service</a>
            <a href="#" class="quick-link"><i class="bi bi-list-check"></i> My Applications</a>
            <a href="#" class="quick-link"><i class="bi bi-person"></i> Profile</a>
          </div>
        </div>
      </div>
      <!-- Recent Activity -->
      <div class="col-md-8">
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-clock-history"></i> Recent Activity</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">No recent applications. <a href="#">Start a new one</a>.</li>
              <!-- Add more activity items here -->
            </ul>
          </div>
        </div>
        <!-- Notifications -->
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-bell"></i> Notifications</h5>
            <div>No new notifications.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer-irembo mt-5">
    <div class="container py-3 text-center">
      <span style="color:#0080dc;font-weight:bold;">irembo<span style="color:#222;">Gov</span></span>
      <span class="ms-2 text-muted">&copy; <?php echo date('Y'); ?> IremboGov. All rights reserved.</span>
    </div>
  </footer>
</body>
</html>