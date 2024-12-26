<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMGCENTRIS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      color: #343a40;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: rgba(255, 255, 255, 0.7);
    }

    .navbar-nav .nav-link:hover {
      background-color: rgba(0, 0, 0, 0.1);
      box-shadow: 0 4px 8px rgba(15, 15, 15, 0.2);
      transition: all 0.3s ease-in-out;
    }

    .navbar-brand img {
      width: 50px;
      margin-right: 10px;
    }

    .navbar-nav .nav-link {
      position: relative;
      padding: 10px 15px;
      border-radius: 5px;
      color: black !important;
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="WhatsApp_Image_2024-12-08_at_21.57.46_32771347-removebg-preview.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="maps.php">Maps</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap and Icons -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>