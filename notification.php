<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Notification Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .notification-item {
      display: flex;
      align-items: center;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 10px;
      background-color: #f8f9fa;
    }
    .notification-item:hover {
      background-color: #e9ecef;
    }
    .notification-icon {
      font-size: 2rem;
      margin-right: 15px;
    }
    .notification-content {
      flex: 1;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Admin Notifications</h1>
    <div class="list-group">
      <div class="notification-item">
        <div class="notification-icon text-primary">
          <i class="bi bi-bell"></i> <!-- Bell Icon from Bootstrap Icons -->
        </div>
        <div class="notification-content">
          <h5>New User Registered</h5>
          <p>John Doe has successfully registered on the platform.</p>
        </div>
      </div>

      <div class="notification-item">
        <div class="notification-icon text-success">
          <i class="bi bi-check-circle"></i> <!-- Check Icon -->
        </div>
        <div class="notification-content">
          <h5>Order Completed</h5>
          <p>Order #12345 has been successfully completed and shipped.</p>
        </div>
      </div>

      <div class="notification-item">
        <div class="notification-icon text-warning">
          <i class="bi bi-exclamation-circle"></i> <!-- Exclamation Icon -->
        </div>
        <div class="notification-content">
          <h5>Security Alert</h5>
          <p>Unusual login attempt detected from a different location.</p>
        </div>
      </div>

      <div class="notification-item">
        <div class="notification-icon text-danger">
          <i class="bi bi-x-circle"></i> <!-- Cross Icon -->
        </div>
        <div class="notification-content">
          <h5>System Error</h5>
          <p>There was an issue with the payment gateway. Please check.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Icons -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
