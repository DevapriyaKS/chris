<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Destinations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
  <!-- Country Dropdown -->
  <form method="GET">
    <label>Select Country:</label>
    <select name="country" class="form-select w-50 mb-3" onchange="this.form.submit()">
      <option value="">--Choose--</option>
      <option value="france" <?= (isset($_GET['country']) && $_GET['country'] == 'france') ? 'selected' : '' ?>>France</option>
      <option value="japan" <?= (isset($_GET['country']) && $_GET['country'] == 'japan') ? 'selected' : '' ?>>Japan</option>
      <option value="india" <?= (isset($_GET['country']) && $_GET['country'] == 'india') ? 'selected' : '' ?>>India</option>
    </select>
    <button class="btn btn-primary">Show</button>
  </form>

  <!-- Show only if country selected -->
  <?php
    if (!empty($_GET['country'])):
      $country = htmlspecialchars($_GET['country']);

      // Image URLs
      $images = [
        'france' => [
          "https://handluggageonly.co.uk/wp-content/uploads/2018/04/Hand-Luggage-Only-17.jpg",
          "https://i.pinimg.com/originals/c8/b9/64/c8b964268e682e2198a16a6fd2e14f18.jpg"
          
        ],
        'japan' => [
          "https://thestrongtraveller.com/wp-content/uploads/2021/08/what-is-japan-known-for-mt-fuji-hero.jpg",
          "http://media.cntraveler.com/photos/58d2b8cfbf12f06bcf42e607/master/pass/arashiyama-forest-kyoto-japan-GettyImages-528314677.jpg"
        ],
        'india' => [
          "https://imp.news/wp-content/uploads/2020/06/Kerala-Tourism.jpg",
          "https://www.tripsavvy.com/thmb/zyqX35L3rgFRuVrbGioDKoqPezc=/2121x1414/filters:fill(auto,1)/GettyImages-930881934-5ae56fe48023b90036464e72.jpg"
        ]
      ];

      $image1 = $images[$country][0];
      $image2 = $images[$country][1];
  ?>

    <h3 class="mt-4">Destination: <?= ucfirst($country); ?></h3>

    <!-- Bootstrap Carousel with Online Images -->
    <div id="slider" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= $image1 ?>" class="d-block w-100 rounded shadow" style="max-height: 400px; object-fit: cover;" alt="Image 1">
        </div>
        <div class="carousel-item">
          <img src="<?= $image2 ?>" class="d-block w-100 rounded shadow" style="max-height: 400px; object-fit: cover;" alt="Image 2">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <p class="mt-3">Beautiful destination in <?= ucfirst($country); ?> with rich culture and attractions.</p>

    <!-- ✅ Leave your original enquiry form untouched -->
    <form action="submit_enquiry.php" method="POST" class="mt-4">
      <input type="hidden" name="country" value="<?= $country; ?>">
      <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
      <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" required>
      <textarea name="message" class="form-control mb-2" placeholder="Message" required></textarea>
      <button class="btn btn-success">Submit Enquiry</button>
    </form>

  <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>