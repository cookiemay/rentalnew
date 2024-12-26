<?php
include 'navbaruser.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maps</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      color: #343a40;
      font-family: Arial, sans-serif;
    }

    .form-container {
      width: 100%;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
    }

    .map-container {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-container">
      <h2 class="text-center">Lokasi Rental Mobil Kami</h2>
      <p class="text-center">Kami berada di Jalan Raya Beji No 47 Karangsalam Kidul RT 5 RW 2, Kecamatan Kedungbanteng, Banyumas. Lihat lokasi kami di peta di bawah ini.</p>

      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.123456789!2d109.234567!3d-7.5123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1234567890%3A0x123456789abcdef!2sJalan%20Raya%20Beji%20No%2047%2C%20Karangsalam%20Kidul%2C%20Kecamatan%20Kedungbanteng%2C%20Banyumas!5e0!3m2!1sen!2sid!4v1234567890"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>