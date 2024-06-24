<!DOCTYPE html>
<html>
<head>
  <title>Responsive Card</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .card {
      position: relative;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s;
      background-color: #f1f1f1;
      margin-bottom: 20px;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-logo {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 30px;
      color: #4CAF50;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      margin-top: 0;
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .card-content p {
      margin-bottom: 0;
      font-size: 16px;
      color: #666;
    }

    .card-footer {
      text-align: center;
      padding: 10px 0;
      background-color: #f9f9f9;
    }

    .card-footer a {
      display: inline-block;
      padding: 5px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .card-footer a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 offset-md-3">
        <div class="card">
          <i class="fas fa-leaf card-logo"></i>
          <div class="card-content">
            <h3>Crop Details</h3>
          </div>
          <div class="card-footer">
            <a href="another-page.html">ADD CROP</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
