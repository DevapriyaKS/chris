<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
  body {
    background: url('https://img.freepik.com/premium-photo/glass-morphism-background_660067-1541.jpg') no-repeat center center fixed;
    background-size: cover;
  }
</style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
  <h2>Contact Us</h2>
  <form action="submit_enquiry.php" method="POST" class="w-75">
    <input type="hidden" name="country" value="Contact Form">
    <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" required>
    <textarea name="message" class="form-control mb-2" placeholder="Message" required></textarea>
    <button class="btn btn-primary">Send</button>
  </form>
</div>
</body>
</html>