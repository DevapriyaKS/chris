<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $country = $_POST['country'];

  $stmt = $conn->prepare("INSERT INTO enquiries (name, email, message, country) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $message, $country);

  if ($stmt->execute()) {
    echo "✅ Enquiry submitted successfully!";
  } else {
    echo "❌ Error: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
?>