<?php
  // Get image data from request body
  $imageData = file_get_contents("php://input");

  // Generate unique filename
  $filename = uniqid() . ".png";

  // Save file to photos folder
  file_put_contents("photos/" . $filename, base64_decode(substr($imageData, 22)));

  // Send response
  http_response_code(200);
?>
