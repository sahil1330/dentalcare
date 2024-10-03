<?php
include 'db/config.php';
$title = $_GET['service'];
$sql = "SELECT * FROM services WHERE service_title = '$title'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$title = $row['service_title'];
$desc = $row['service_desc'];
$thumbnail = $row['service_thumbnail'];
$service_before = $row['service_before_image'];
$service_after = $row['service_after_image'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Before/After (beer slider)</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="beer-slider beer-slider-wlabels" data-beer-label="before" id="slider1">
      <img src="<?php echo $service_before; ?>" alt="before" />
        <div class="beer-reveal" data-beer-label="after">
        <img src="<?php echo $service_after; ?>" alt="After" />
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
